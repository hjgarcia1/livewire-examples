<div class="my-5">

    <form action="" class="flex justify-between items-center" wire:submit.prevent="search">
        <input type="text" class="w-full px-5 py-3 border border-gray-400 rounded outline-none focus:shadow-outline" placeholder="Search..." wire:model.defer="query">
        <button class="block h-12 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 focus:outline-none">Search</button>
    </form>

    <table class="shadow-lg bg-white my-5 w-full">
        <thead>
            <tr>
                <th class="bg-blue-100 border text-left px-8 py-4">No.</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Name</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td class="border px-8 py-4">{{ $user->id }}</td>
                <td class="border px-8 py-4">{{ $user->name }}</td>
                <td class="border px-8 py-4">{{ $user->email }}</td>
            </tr>
            @empty
            <tr>
                <td class="border px-8 py-4" colspan="4">No users Found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $users_tpl->links() }}
</div>
