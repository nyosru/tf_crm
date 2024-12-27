<?php

namespace App\Livewire\Cms2;

use App\Models\Client;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Clients extends Component
{
    use WithPagination,WithoutUrlPagination;

    protected $items;
    public $currentPage = 1;

    public function mount()
    {
        $this->getITems();
    }

    public function getITems(){
        $this->items = Client::
//            with('client')
//            ->whereHas('client', function ($query) {
//                $query->where(function ($q) {
//                    $q->where('name_i', 'like', '%' . $this->searchTerm . '%')
//                        ->orWhere('name_f', 'like', '%' . $this->searchTerm . '%')
//                        ->orWhere('name_o', 'like', '%' . $this->searchTerm . '%');
//                });
//            })
//            ->
        orderByDesc('id')
            ->paginate(10);
    }
    public function setPage($url)
    {
////        dd($url);
        if( is_numeric($url)) {
            $this->currentPage = $url;
        }
//        else {
//            $this->currentPage = explode('page=', $url)[1];
//        }
//
        Paginator::currentPageResolver(function () {
            return $this->currentPage;
        });
//        $this->resetPage();
        $this->getITems();
    }

    public function render()
    {
        return view('livewire.cms2.clients')
            ->with(['items' => $this->items]);
    }
}
