<?php

namespace App\View\Components;

use App\Models\VehicleImage;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\CompareVehicle;
use App\Models\AddVariant;
class CompareCars extends Component
{
    public $variantlist, $compare,$new, $array;
    public function __construct()
    {
        $compare = CompareVehicle::get();
        $new = [];
        foreach ($compare as $index => $data) {
            $ids = json_decode($data->vehicles);

            // Fetch details for the vehicles based on IDs
            $newarray = AddVariant::whereIn('id', $ids)
                ->select('id', 'carname', 'carmodalname','brandname', 'price')
                ->get();

            // Fetch images for the vehicles based on carname from newarray
            $images = VehicleImage::whereIn('vehicle', $newarray->pluck('carname'))
                ->where('type', 'Outer view')
                ->get();

            // Merge images into newarray based on index
            foreach ($newarray->take(2) as $key => $vehicle) {
                $vehicle->addimage = $images->where('vehicle', $vehicle->carname)->first()->addimage ?? null;

            }

            $new[] = ['id' => $data->id, 'vehicles' =>$newarray->take(2)];

        }

        $this->array = $new;
    }
    public function render(): View|Closure|string
    {
        return view('components.compare-cars');
    }
}
