<?php

namespace App\Http\Livewire\Admin;

use App\Models\Profession;
use Livewire\Component;

class ProfessionPage extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $updateMode = false;
    public $title,$profession_id;

    public function render()
    {
        $professions = Profession::orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.admin.profession-page',compact('professions'));
    }

    public function store()
    {
        $validated = $this->validate([
            'title' => 'required',
        ]);
        Profession::create([
            'title' => $validated['title'],
            'user_id' => auth()->user()->id,
        ]);
        session()->flash('message', 'Profession Created Successfully.');
        $this->resetInputFields();
        $this->emit('churchStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $profession = Profession::where('id', $id)->first();
        $this->profession_id = $id;
        $this->title = $profession->title;

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
        ]);
        if ($this->profession_id) {
            $proffession = Profession::find($this->profession_id);
            $proffession->update([
                'title' => $this->title,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Proffession Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if ($id) {
            Profession::where('id', $id)->delete();
            session()->flash('message', 'Proffession Deleted Successfully.');
        }
    }

    private function resetInputFields()
    {
        $this->title = '';

    }
}
