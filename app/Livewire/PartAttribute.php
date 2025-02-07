<?php

namespace App\Livewire;
use Illuminate\Http\Request;

use Livewire\Component;
use App\Models\Part;
use App\Models\Car;
use App\Models\Insurance;
use App\Models\Supplier;
use App\Models\Status;
use App\Models\Location;

class PartAttribute extends Component
{
    public function store(Request $request){
        $data = $request->validate([
            'names.*' => 'required'
        ]);

       foreach ($data['names'] as $name) { // Retrieve location_id for this part
            $created = insurance::create([
                'name' => $name,
            ]);

            if (!$created) {
                // Log or handle the error
                return redirect()->back()->with('error', 'Failed to save data.');
            }
        }

        // session(['test' => 'testttt']);

        // return Redirect::route('part.create');
    }

    public $name;
    public function storeData()
    {
        // Validate data if needed
        $this->validate([
            'name' => 'required'
        ]);

        // Store the data
        Insurance::create([
            'name' => $this->name,
        ]);

        // Optionally, you can show a success message
        session()->flash('message', 'Data stored successfully.');
    }



    public $count = 0;
    public $section;
    public $carsLive;
    public $suppliersLive;
    public $insurancesLive;
    public $statusesLive;
    public $locationsLive;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function create(){
        return view('parts.create');
    }

    public function mount(){
        $this->carsLive = Car::orderBy('name')->get();
        $this->suppliersLive = Supplier::orderBy('name')->get();
        $this->insurancesLive = Insurance::orderBy('name')->get();
        $this->statusesLive = Status::orderBy('name')->get();
        $this->locationsLive = Location::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.part.part-attribute');
    }
}
