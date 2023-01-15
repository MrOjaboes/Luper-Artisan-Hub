<?php

namespace App\Http\Livewire\Admin;

use App\Models\Profile;
use Livewire\Component;

class ArtisanPage extends Component
{
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $artisans = Profile::where('status',0)->orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.admin.artisan-page',compact('artisans'));
    }

}
