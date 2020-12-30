<form>
    <input type="hidden" wire:model="post_id">
    <div class="mb-3">
        <label for="title">Title:</label>
        <input
            class="w-full px-3 py-2 mb-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline"
            type="text" placeholder="Enter Title" wire:model="title" id="title"/>
        @error('title')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="body">Body:</label>
        <textarea
                  class="w-full h-20 px-3 mb-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline"
                  id="body" wire:model="body"
                  placeholder="Enter Body"></textarea>

        @error('body')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="update()"
            class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 focus:outline-none">
        Update
    </button>

    <button wire:click.prevent="cancel()"
            class="h-10 px-5 m-2 text-gray-100 transition-colors duration-150 bg-gray-700 rounded-lg focus:shadow-outline hover:bg-gray-800 focus:outline-none">
        Cancel
    </button>
</form>
