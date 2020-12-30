<form>
    <div class="mb-3">
        <label for="title" class="font-bold mb-2 block">Title:</label>
        <input type="text"
               class="w-full px-3 py-2 mb-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline"
               id="title" placeholder="Enter Title"
               wire:model="title">
        @error('title')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="body" class="font-bold mb-2 block">Body:</label>
        <textarea
            class="w-full h-20 px-3 mb-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline"
            id="body" wire:model="body"
            placeholder="Enter Body"></textarea>
        @error('body')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()"
            class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800 focus:outline-none">
        Save
    </button>
</form>
