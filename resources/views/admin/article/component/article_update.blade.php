<div>
    <h3 class="text-gray-700 text-3xl font-medium">Modifier mon Article</h3>

    <div class="flex justify-center mt-10">
        <form class="w-3/4" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="titre" class="text-md text-gray-600 dark:text-gray-400">{{ __('Name') }}</label>
                <input type="text"
                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 @error('titre') border-red-500 @enderror"
                       id="titre" wire:model="article.titre">
                @error('titre')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label for="price" class="text-md text-gray-600 dark:text-gray-400">{{ __('price') }}</label>
                <input type="text"
                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 @error('price') border-red-500 @enderror"
                       id="price" wire:model="article.price">
                @error('price')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <div>
                    @foreach((array) $images as $image)
                        <img src="{{ url('/storage/public/' . $image->name ) }}"
                             style="height:120px; width:200px" alt="{{ $image->name }}" multiple/>
                    @endforeach
                </div>
                <label for="image" class="text-md text-gray-600 dark:text-gray-400">{{ __('Image') }}</label>
                <input type="file"
                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 @error('image') border-red-500 @enderror"
                       id="image" wire:model="article.image" multiple="multiple">
                @error('image')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mt-3 relative inline-block w-full text-gray-700">
                <label class="text-gray-700 select-none font-medium text-xl mb-2"
                       for="category_id">{{ __('Catégorie') }}</label>
                <select wire:model="article.category_id" id="category_id"
                        class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 @error('category_id') border-red-500 @enderror ">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mt-3 relative inline-block w-full text-gray-700">
                <label class="text-gray-700 select-none font-medium text-xl mb-2"
                       for="status_id">{{ __('Status') }}</label>
                <select wire:model="article.status_id" id="status_id"
                        class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 @error('status_id') border-red-500 @enderror"
                        value="{{ old('status_id') }}">
                    @foreach($status as $statu)
                        <option value="{{ $statu->id }}">
                            {{ $statu->name }}
                        </option>
                    @endforeach
                </select>
                @error('status_id')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mt-3">
                <label class="text-gray-700 select-none font-medium text-xl mb-2"
                       for="description">{{ __('Description') }}</label>
                <textarea
                    class="w-full px-3 py-2 h-40 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500  @error('image') border-red-500 @enderror"
                    id="description" wire:model="article.description"></textarea>
                @error('description')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <button wire:click="save"
                        class="bg-blue-800 text-white hover:bg-blue-700 transition ease-in-out duration-500 rounded-md shadow-md block px-4 py-2 mt-3">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
