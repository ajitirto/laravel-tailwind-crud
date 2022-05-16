<?php

namespace App\Http\Livewire\Live;

use App\Models\Live;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.live.index', ['lives' => Live::latest()->paginate(5)]);
    }
}
