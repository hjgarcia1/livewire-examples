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
    public $searching = false;

    protected $queryString = [
        'query' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function render()
    {
        if($this->query) {
            $this->searching = true;
        }

        $users = User::where('name', 'LIKE', '%' . $this->query . '%')->paginate(12);
        $this->users = \collect($users->items());

        return view('livewire.users', ['users_tpl' => $users]);
    }

    public function search()
    {
        $this->searching = true;

        $this->page = 1;

        $users = User::where('name', 'LIKE', '%' . $this->query . '%')->paginate(12);

        $this->users = \collect($users->items());
    }

    public function clear()
    {
        $this->searching = false;
        $this->query = '';

        $this->page = 1;

        $users = User::where('name', 'LIKE', '%' . $this->query . '%')->paginate(12);
        $this->users = \collect($users->items());
    }

    public function mount()
    {
        $this->fill(request()->only('query', 'page'));
    }
}
