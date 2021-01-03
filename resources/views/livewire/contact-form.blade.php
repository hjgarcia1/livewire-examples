<div>
    @include('partials.alerts')
    <section class="relative min-w-screen animation-fade animation-delay">
        <div class="container h-full max-w-5xl mx-auto overflow-hidden rounded">
            <div class="h-full sm:flex">
                <div class="flex items-center justify-center w-full my-6">
                    <form wire:submit.prevent="submit" action="/contact" method="POST" class="w-full">
                        @csrf

                        <div class="py-3">
                            <input wire:model="name" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" type="text" placeholder="Name" name="name" value="{{ old('name') }}" />
                            @error('name')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <input wire:model="email" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" type="text" placeholder="Email Address" name="email" value="{{ old('email') }}" />
                            @error('email')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="py-3">
                            <textarea wire:model="comment" row="4" class="w-full h-40 px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" name="comment" placeholder="Your message here...">{{ old('comment') }}</textarea>
                            @error('comment')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <button class="flex px-6 py-3 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 hover:text-white focus:outline-none focus:shadow-outline focus:border-indigo-300" type="submit">
                                <span class="self-center float-left text-base font-medium">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
