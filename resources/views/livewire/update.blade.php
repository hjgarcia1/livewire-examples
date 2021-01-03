<form>
    <input type="hidden" wire:model="post_id">
    <div class="mb-3">
        <input
            class="w-full px-5 py-3 border border-gray-400 rounded outline-none focus:shadow-outline"
            type="text" placeholder="Enter Title" wire:model="title" id="title"/>
        @error('title')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <textarea
                  class="w-full h-40 px-5 py-3 border border-gray-400 rounded outline-none focus:shadow-outline"
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
