<?php

namespace App\Http\Livewire;

use App\Models\Place;
use Livewire\Component;

class Search extends Component
{
    public $searchInput = '';
    public $results = [];
    public $end = true;

    public function clear()
    {
       $this->reset('results');
       $this->reset('searchInput');
    }

    public function goto($id)
    {
        $this->searchInput = Place::find($id)->address;
        $this->end = !$this->end;
    }
    public function hydrateSearchinput(){
        $this->end =true;

    }
    public function render()
    {
        $this->results = [];
        $this->results = Place::where('address', 'LIKE', '%' . $this->searchInput . '%')->get(['id','address']);
        return view('livewire.search', [
            'results' => $this->results
        ]);

    }
}