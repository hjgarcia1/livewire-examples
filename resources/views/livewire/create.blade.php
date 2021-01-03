<form>
    <div class="mb-3">
        <input type="text"
               class="w-full px-5 py-3 border border-gray-400 rounded outline-none focus:shadow-outline"
               id="title" placeholder="Enter Title"
               wire:model="title">
        @error('title')
      <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <textarea
            class="w-full h-40 px-5 py-3 border border-gray-400 rounded outline-none focus:shadow-outline"
            id="body" wire:model="body"
            placeholder="Enter Body"></textarea>
        @error('body')
        <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <button wire:click.prevent="store()"
            class="flex px-6 py-3 text-white bg-indigo-500 rounded hover:bg-indigo-600 hover:text-white focus:outline-none focus:shadow-outline focus:border-indigo-300">
        Save
    </button>
</form>
