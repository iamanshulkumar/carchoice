<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CompanyProfile;
use App\Models\FormAttribute;
use App\Models\Lead;
use App\Models\Master;
use App\Models\Remark;
use App\Models\SubMaster;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Store extends Controller
{
    public function updatecompanyprofile(Request $req, $id)
    {
        try {
            $companyprofiledata = $req->validate([
                'companyname' => 'required',
                'companylogo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'email' => 'required|email|max:255',
                'phonenumber' => 'required|max:20',
                'citystateprovince' => 'required|max:255',
                'postalcode' => 'required|max:100',
                'fburl' => 'url|max:255',
                'igurl' => 'url|max:255',
                'yturl' => 'url|max:255',
                'twurl' => 'url|max:255',
                'linkurl' => 'url|max:255',
                'address' => 'required|max:255',
            ]);

            // Retrieve the existing CompanyProfile record by $id
            $companyProfile = CompanyProfile::findOrFail($id);
            // dd($companyProfile);
            $companyProfile->companyname = $companyprofiledata['companyname'];
            $companyProfile->email = $companyprofiledata['email'];
            $companyProfile->phonenumber = $companyprofiledata['phonenumber'];
            $companyProfile->citystateprovince = $companyprofiledata['citystateprovince'];
            $companyProfile->postalcode = $companyprofiledata['postalcode'];
            $companyProfile->fburl = $companyprofiledata['fburl'];
            $companyProfile->igurl = $companyprofiledata['igurl'];
            $companyProfile->yturl = $companyprofiledata['yturl'];
            $companyProfile->twurl = $companyprofiledata['twurl'];
            $companyProfile->linkurl = $companyprofiledata['linkurl'];
            $companyProfile->address = $companyprofiledata['address'];
            if ($req->hasFile('companylogo')) {
                $companyProfile->companylogo = $req->file('companylogo')->store('logos', 'public');
            }
            $companyProfile->save();

            return back()->with('success', 'Profile Updated successfully.');

        } catch (Exception $e) {
            return back()->with('error', 'Failed to update profile. ' . $e->getMessage());
        }
    }

    public function storemaster(Request $req)
    {
        try {
            $masterdata = $req->validate([
                'label' => 'required',
                'value' => 'required',
            ]);
            Master::create($masterdata);
            return back()->with('success', 'Master Added..!!!!');

        } catch (Exception $e) {
            //return redirect()->route('master')->with('error', $e->getMessage());
            return redirect()->route('master')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deletemaster($id)
    {
        $data = Master::find($id);
        $data->delete();
        return back()->with('success', "Deleted.>!!!");
    }

    public function storesubmaster(Request $req)
    {
        try {
            $submasterdata = $req->validate([
                'label' => 'required',
                'value' => 'required',
                'type' => 'required',
            ]);

            if ($req->hasFile('iconimage')) {
                $req->validate([
                    'iconimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $req->file('iconimage');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);
                $submasterdata['iconimage'] = $filename;
            }
            // dd($submasterdata);
            Master::create($submasterdata);
            Log::info('Inserted Successfully: ', ['user' => $submasterdata]);
            return back()->with('success', 'Sub-Master Added..!!!!');

        } catch (Exception $e) {
            return redirect()->route('submaster')->with('error', $e->getMessage());
            //return redirect()->route('submaster')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function getsubmasterajax($selectedCat)
    {
        $data = Master::where('type', '=', $selectedCat)->get();
        return response()->json($data);

    }

    public function insertblog(Request $req)
    {
        try {
            $blogdata = $req->validate([
                'categorytype' => 'required',
                'blogtitle' => 'required',
                'blogpost' => 'required',
            ]);

            $blogdata = new Blog();
            $blogdata->categorytype = $req->categorytype;
            $blogdata->blogtitle = $req->blogtitle;
            $blogdata->blogpost = $req->blogpost;
            $blogdata->description = $req->description;
            $blogdata->vurl = $req->vurl;

            if ($req->hasFile('blogimg')) {
                $req->validate([
                    'blogimg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $req->file('blogimg');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);
                $blogdata['blogimg'] = $filename;
            }
            // dd($blogdata);
            $blogdata->save();
            Log::info('Blod Inserted Successfully: ', ['user' => $blogdata]);
            return back()->with('success', 'Blog Added..!!!!');

        } catch (Exception $e) {
            //return redirect()->route('addblog')->with('error', $e->getMessage());
            return redirect()->route('addblog')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deleteblog($id)
    {
        $data = Blog::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function updateblog(Request $req)
    {

        try {
            $blogdata = $req->validate([
                'categorytype' => 'required',
                'blogtitle' => 'required',
                'blogpost' => 'required',
            ]);

            $blogdatanew = Blog::findOrFail($req->blogid);
            $blogdatanew->categorytype = $req->categorytype;
            $blogdatanew->blogtitle = $req->blogtitle;
            $blogdatanew->description = $req->description;
            $blogdatanew->blogpost = $req->blogpost;
            $blogdatanew->vurl = $req->vurl;

            if ($req->hasFile('blogimg')) {
                $req->validate([
                    'blogimg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $req->file('blogimg');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);
                $blogdatanew['blogimg'] = $filename;
            }
            $blogdatanew->save();

            return back()->with('success', 'Blog Updated successfully.');

        } catch (Exception $e) {
            return back()->with('error', 'Failed to update profile. ' . $e->getMessage());
        }
    }

    public function updateblogstatus(Request $request)
    {
        $blog = Blog::find($request->id);
        if ($blog) {
            $blog->status = $request->status;
            $blog->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

    public function filteroldcar($selectedtype)
    {
        $master = Master::where('type', $selectedtype)->get();
        return response()->json(['master' => $master]);
    }

    public function insertformattributes(Request $rq)
    {
        try {
            $data = $rq->validate([
                'cartype' => 'required',
                'formlabels' => 'required',
                'value' => 'required',
                'inputtype' => 'required',
            ]);

            FormAttribute::create([
                'cartype' => $rq->cartype,
                'formlabels' => $rq->formlabels,
                'value' => $rq->value,
                'inputtype' => $rq->inputtype,
            ]);
            Log::info('Form Attributes Inserted Successfully: ', ['user' => $data]);
            return back()->with('success', 'Attributes Added..!!!!');

        } catch (Exception $e) {
            //return redirect()->route('formattributes')->with('error', $e->getMessage());
            return redirect()->route('formattributes')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deleteattribute($id)
    {
        $data = FormAttribute::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function getattributesajax($selectedcartype, $selectedformlabel)
    {
        Log::info("Selected Car Type: $selectedcartype, Selected Form Label: $selectedformlabel");
        $data = FormAttribute::whereRaw('cartype = ? AND formlabels = ?', [$selectedcartype, $selectedformlabel])->get();
        return response()->json(['data' => $data]);
    }

    public function updateattributes(Request $request)
    {
        try {
            $attributes = FormAttribute::where('id', $request->attributeid)->update([
                'value' => $request->value,
                'inputtype' => $request->inputtype,
            ]);
            Log::info('Attributes Updated Successfully: ', ['attributes' => $attributes]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function insertlead(Request $request)
    {
        try {
            $data = $request->validate([
                'fullname' => 'required',
                'mobile' => 'required',
                'email' => 'required|email',
                'city' => 'required',
                'state' => 'required',
                'vehicle' => 'required',
            ]);
            $nonRequiredFields = [
                'remarks' => $request->input('remarks'),
            ];
            $input = array_merge($data, $nonRequiredFields); //merging two arrays
            $leads = Lead::create($input);
            Log::info('Lead Inserted Successfully: ', ['lead' => $leads]);
            return back()->with('success', 'Lead Added..!!!!');

        } catch (Exception $e) {
            return redirect()->route('leadmanagement')->with('error', $e->getMessage());
            //return redirect()->route('leadmanagement')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deletelead($id)
    {
        $data = Lead::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function updatelead(Request $request)
    {
        try {
            $leads = Lead::where('id', $request->leadid)->update([
                'fullname' => $request->fullname,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'city' => $request->city,
                'state' => $request->state,
                'vehicle' => $request->vehicle,
                'remarks' => $request->remarks,
            ]);
            Log::info('Lead Updated Successfully: ', ['attributes' => $leads]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            //return back()->with('error', $e->getMessage());
            return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function insertremarks(Request $request)
    {
        try {
            $data = $request->validate([
                'remarktext' => 'required',
            ]);

            Remark::create([
                'leadid' => $request->input('leadid'),
                'remarktext' => $request->input('remarktext'),
            ]);
            Log::info('Remark Inserted Successfully: ', ['user' => $data]);

            $jsondata = Remark::where('leadid', $request->leadid)->get();
            // dd($jsondata);
            return response()->json($jsondata);

        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function getremarks($id)
    {
        $jsondata = Remark::where('leadid', $id)->get();
        // dd($jsondata);
        return response()->json($jsondata);
    }

    public function updateleadstatus(Request $req)
    {
        $leadstatus = Lead::find($req->record_id);
        if ($leadstatus) {
            $leadstatus->leadstatus = $req->status;
            $leadstatus->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

    public function datefilterleads(Request $req)
    {

        $datefrom = $req->input('datefrom');
        $dateto = $req->input('dateto');
        try {
            $datefrom = \DateTime::createFromFormat('d M, Y', $datefrom)->format('Y-m-d');
            $dateto = \DateTime::createFromFormat('d M, Y', $dateto)->format('Y-m-d');
        } catch (Exception $e) {
            return response()->json(['error' => 'Invalid date format. Please ensure dates are in "d M, Y" format.'], 400);
        }
        $leaddata = Lead::whereDate('created_at', '>=', $datefrom)
            ->whereDate('created_at', '<=', $dateto)
            ->orderBy('created_at', 'desc')
            ->get();
        return response()->json($leaddata);
    }
}
