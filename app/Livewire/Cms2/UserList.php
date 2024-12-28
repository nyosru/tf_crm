<?php

namespace App\Livewire\Cms2;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.cms2.user-list',['users'=>$users]);
    }
}
