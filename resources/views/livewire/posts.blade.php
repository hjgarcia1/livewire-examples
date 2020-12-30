<div class="my-5">
    @if (session()->has('message'))
        <div class="px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
            {{ session('message') }}
        </div>
    @endif

    @if ($updatedMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif

    <table class="shadow-lg bg-white my-5">
        <thead>
        <tr>
            <th class="bg-blue-100 border text-left px-8 py-4">No.</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Title</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Body</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($posts as $post)
            <tr>
                <td class="border px-8 py-4">{{  $post->id }}</td>
                <td class="border px-8 py-4">{{  $post->title }}</td>
                <td class="border px-8 py-4">{{  $post->body }}</td>
                <td class="border px-8 py-4">
                    <button wire:click="edit({{ $post->id }})" class="bg-blue-300 px-4 py-2 rounded mx-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                        </svg>
                    </button>
                    <button wire:click="delete({{ $post->id }})" class="bg-red-300 px-4 py-2 rounded mx-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </td>
            </tr>
        @empty
            <tr>
                <td class="border px-8 py-4" colspan="4">No Posts Found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
