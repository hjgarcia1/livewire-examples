<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserSearch extends Component
{
    use WithPagination;

    public $query = '';
    public $page = 1;
    public $users;

    protected $queryString = [
        'query' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->query . '%')->paginate(12);
        $this->users = \collect($users->items());

        return view('livewire.users', ['users_tpl' => $users]);
    }

    public function search()
    {
        $this->page = 1;

        $users = User::where('name', 'LIKE', '%' . $this->query . '%')->paginate(12);

        $this->users = \collect($users->items());
    }

    public function mount()
    {
        $this->fill(request()->only('query', 'page'));
    }
}
