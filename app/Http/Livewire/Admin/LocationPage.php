<?php

namespace App\Http\Livewire\Admin;

use App\Models\Location;
use Livewire\Component;

class LocationPage extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $updateMode = false;
    public $name, $state,$location_id;

    public function render()
    {
        $locations = Location::orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.admin.location-page',compact('locations'));
    }

    public function store()
    {
        $validated = $this->validate([
            'name' => 'required',
            'state' => 'required',
        ]);
        Location::create([
            'name' => $validated['name'],
            'state' => $validated['state'],
            'user_id' => auth()->user()->id,
        ]);
        session()->flash('message', 'Location Created Successfully.');
        $this->resetInputFields();
        $this->emit('churchStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $location = Location::where('id', $id)->first();
        $this->location_id = $id;
        $this->name = $location->name;
        $this->state = $location->state;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'state' => 'required',
        ]);
        if ($this->location_id) {
            $location = Location::find($this->location_id);
            $location->update([
                'name' => $this->name,
                'state' => $this->state,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Location Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if ($id) {
            Location::where('id', $id)->delete();
            session()->flash('message', 'Location Deleted Successfully.');
        }
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->state = '';
    }

}
