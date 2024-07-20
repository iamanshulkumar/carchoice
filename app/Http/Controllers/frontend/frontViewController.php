<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AddFeature;
use App\Models\AddSpecification;
use App\Models\AddVariant;
use App\Models\AdPost;
use App\Models\DisplaySetting;
use App\Models\Master;
use App\Models\CarList;
use App\Models\Pincode;
use App\Models\PostOffices;
use App\Models\SliderImage;
use App\Models\VehicleImage;
use Illuminate\Support\Facades\Log;
use App\View\Components\AllBrands;
use Illuminate\Http\Request;
use App\Models\Blog;
use Auth;
use DB;

class frontViewController extends Controller
{
    public function home()
    {
        $imagesdata = SliderImage::first();
        $adposts = AdPost::orderBy('created_at', 'desc')->get();
        $carlists = Carlist::get();
        $bodytype = Master::where('type','=','Body Type')->get();


        $trending = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Trending')->get();

        $popular = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Popular')->get();

        $upcoming = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Upcoming')->get();

        $offer = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.type', '=', 'Offers On Popular Cars')->get();

        $topcarindia = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.type', '=', 'Top Cars In India')->get();


        //Matching Variants from Carname field...
        $variantdata = AddVariant::get();
        $trendingCarNames = $trending->pluck('carname');
        $trendingPopularNames = $popular->pluck('carname');
        $trendingUpcomingNames = $upcoming->pluck('carname');
        $offer = $offer->pluck('carname');
        $topcarsinindia = $topcarindia->pluck('carname');

        $matches = $variantdata->whereIn('carname', $trendingCarNames);
        $matches = $matches->map(function ($item) use ($trending) {
            $trendingItem = $trending->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        $matchespopular = $variantdata->whereIn('carname', $trendingPopularNames);
        $matchespopular = $matchespopular->map(function ($item) use ($popular) {
            $trendingItem = $popular->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });


        $matchesupcoming = $variantdata->whereIn('carname', $trendingUpcomingNames);
        $matchesupcoming = $matchesupcoming->map(function ($item) use ($upcoming) {
            $trendingItem = $upcoming->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });



        $matchesoffer = $variantdata->whereIn('carname', $offer);
        $matchesoffer = $matchesoffer->map(function ($item) use ($offer) {
            $trendingItem = $offer->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });


        $matchestopcarsindia = $variantdata->whereIn('carname', $topcarsinindia);
        $matchestopcarsindia = $matchestopcarsindia->map(function ($item) use ($topcarindia) {
            $trendingItem = $topcarindia->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        return view('frontend.home', compact('imagesdata','bodytype','carlists','adposts', 'matches', 'matchespopular', 'matchesupcoming', 'matchesoffer', 'matchestopcarsindia'));
    }
    public function carlistingdetails($id)
    {
        $cardetails = AddVariant::where('id',$id)->first();

        $images = VehicleImage::where('vehicle',$cardetails->carname)->get();
        $spces = AddSpecification::where('vehicleid',$id)->get();
        $features = AddFeature::where('vehicleid',$id)->get();

        $cardetails->images= json_decode($images);
        $cardetails->specificaitons= json_decode($spces);
        $cardetails->features= json_decode($features);

        return view('frontend.carLayouts.carlistingdetails',compact('cardetails'));
    }
    public function carlisting()
    {
        return view('frontend.carlisting');
    }
    public function reviews()
    {
        return view('frontend.reviews');
    }
    public function reviewsdetails()
    {
        return view('frontend.reviewsdetails');
    }
    public function compare()
    {
        return view('frontend.compare');
    }
    public function compareresult()
    {
        $new = session('new', []);
        Log::info('Session data in compareresult:', ['new' => $new]); // printing data into laravel's log.......
        // dd($new);
        return view('frontend.compareresult',compact('new'));
    }
    public function loginuser()
    {
        return view('frontend.loginuser');
    }
    public function registration()
    {
        return view('frontend.registration');
    }
    public function postyourad()
    {
        return view('frontend.postyourad');
    }
    public function userprofile()
    {
        if (Auth::guard('registeruser')->check()) {
            $user = Auth::guard('registeruser')->user();
            $addpostcount = AdPost::count();
            $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
            return view('frontend.dashboard.userprofile', compact('user', 'statedata', 'addpostcount'));
        } else {
            return view('frontend.loginuser');
        }
    }
    public function userarchive()
    {
        return view('frontend.dashboard.userarchive');
    }
    public function useractiveads()
    {
        if (Auth::guard('registeruser')->check()) {
            $user = Auth::guard('registeruser')->user();
            $addpostcount = AdPost::count();
            $adposts = AdPost::orderBy('created_at', 'desc')->get();
            return view('frontend.dashboard.useractiveads', compact('user', 'adposts', 'addpostcount'));
        } else {
            return view('frontend.loginuser');
        }
    }
    public function userfavourites()
    {
        return view('frontend.dashboard.userfavourites');
    }
    public function usermessages()
    {
        return view('frontend.dashboard.usermessages');
    }
    public function userdeactive()
    {
        return view('frontend.dashboard.userdeactive');
    }
    public function pricing()
    {
        return view('frontend.pricing');
    }
    public function blogs()
    {
        $blogdata = Blog::orderBy('created_at', 'desc')->where('categorytype', '=', 'Car News')->paginate(2);
        return view('frontend.blogs', compact('blogdata'));
    }
    public function blogdetails()
    {
        return view('frontend.blogdetails');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function error404()
    {
        return view('frontend.error404');
    }
    public function contactus()
    {
        return view('frontend.contactus');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function newcars()
    {
        $trending = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Trending')->get();

        $popular = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Popular')->get();

        $upcoming = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Upcoming')->get();

        $offer = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.type', '=', 'Offers On Popular Cars')->get();

        $topcarindia = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.type', '=', 'Top Cars In India')->get();


        //Matching Variants from Carname field...
        $variantdata = AddVariant::get();
        $trendingCarNames = $trending->pluck('carname');
        $trendingPopularNames = $popular->pluck('carname');
        $trendingUpcomingNames = $upcoming->pluck('carname');
        $offer = $offer->pluck('carname');
        $topcarsinindia = $topcarindia->pluck('carname');

        $matches = $variantdata->whereIn('carname', $trendingCarNames);
        $matches = $matches->map(function ($item) use ($trending) {
            $trendingItem = $trending->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        $matchespopular = $variantdata->whereIn('carname', $trendingPopularNames);
        $matchespopular = $matchespopular->map(function ($item) use ($popular) {
            $trendingItem = $popular->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });


        $matchesupcoming = $variantdata->whereIn('carname', $trendingUpcomingNames);
        $matchesupcoming = $matchesupcoming->map(function ($item) use ($upcoming) {
            $trendingItem = $upcoming->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });



        $matchesoffer = $variantdata->whereIn('carname', $offer);
        $matchesoffer = $matchesoffer->map(function ($item) use ($offer) {
            $trendingItem = $offer->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });


        $matchestopcarsindia = $variantdata->whereIn('carname', $topcarsinindia);
        $matchestopcarsindia = $matchestopcarsindia->map(function ($item) use ($topcarindia) {
            $trendingItem = $topcarindia->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });
        return view('frontend.newCarsLayouts.newcars', compact('matches', 'matchespopular', 'matchesupcoming', 'matchesoffer', 'matchestopcarsindia'));
    }
    public function upcomingcar()
    {
        $upcoming = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Upcoming')->get();

        $variantdata = AddVariant::get();
        $trendingUpcomingNames = $upcoming->pluck('carname');
        $matchesupcoming = $variantdata->whereIn('carname', $trendingUpcomingNames);


        $matchesupcoming = $matchesupcoming->map(function ($item) use ($upcoming) {
            $trendingItem = $upcoming->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        $brands = Master::where('type', 'Brand')->get();
        return view('frontend.newCarsLayouts.upcomingcar', compact('matchesupcoming', 'brands'));
    }
    public function newcarlaunches()
    {
        return view('frontend.newCarsLayouts.newcarlaunches');
    }
    public function electriccar()
    {
        return view('frontend.newCarsLayouts.electriccar');
    }
    public function usedcar()
    {
        return view('frontend.usedCarsLayouts.usedcar');
    }
    public function usedcarbylocation()
    {
        return view('frontend.usedCarsLayouts.usedcarbylocation');
    }
    public function carloan()
    {
        $brands = Master::where('type', 'brand')->get();
        $pincodedata = Pincode::select('State', 'City', 'District', DB::raw('GROUP_CONCAT(DISTINCT PostOfficeName) as PostOfficeNames'), DB::raw('COUNT(*) as count'))
        ->groupBy('State', 'City', 'District')
        ->get();
        // dd($pincodedata[0]);
        $vehiclesByBrand = [];

        foreach ($brands as $brand) {
            $vehicles = Master::join('car_lists', 'masters.value', '=', 'car_lists.brandname')
                ->select('car_lists.carname', 'car_lists.brandname')
                ->where('car_lists.brandname', $brand->value) // Correct filtering
                ->distinct()
                ->get();
            $vehiclesByBrand[] = [
                'brandname' => $brand->value,
                'brand_image' => $brand->iconimage,
                'vehicles' => $vehicles,
            ];
        }
        //dd($vehiclesByBrand);
        return view('frontend.newCarsLayouts.carloan', compact('vehiclesByBrand','pincodedata'));
    }
    public function findcar()
    {
        $variants = session('variants', []);
        return view('frontend.findcar', compact('variants'));
    }
    public function carviewimages()
    {
        return view('frontend.carLayouts.carviewimages');
    }
    public function carimages()
    {
        return view('frontend.carLayouts.carimages');
    }
    public function finddealer()
    {
        return view('frontend.dealerlayouts.finddealer');
    }
    public function dealerprofile()
    {
        return view('frontend.dealerlayouts.dealerprofile');
    }
    public function dealershowroom()
    {
        return view('frontend.newCarsLayouts.dealershowroom');
    }
    public function dealerbylocation()
    {
        return view('frontend.newCarsLayouts.dealerbylocation');
    }

    public function addadshow()
    {
        if (Auth::guard('registeruser')->check()) {
            $color = Master::where('type', '=', 'Color')->get();
            $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
            $carlistdata = CarList::get();
            return view('frontend.dashboard.addadshow', compact('statedata', 'carlistdata', 'color'));
        } else {
            return view('frontend.loginuser');
        }
    }

    public function editadshow($id)
    {
        if (Auth::guard('registeruser')->check()) {
            $adshowdata = AdPost::find($id);
            $brandname = Master::where('type', '=', 'Brand')->get();
            $color = Master::where('type', '=', 'Color')->get();
            $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
            $variantdata = AddVariant::get();
            return view('frontend.dashboard.editadshow', compact('adshowdata', 'statedata', 'brandname', 'color'));
        } else {
            return view('frontend.loginuser');
        }
    }
}
