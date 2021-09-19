@extends('admin.layout.app')

@section('content')
    <h3 class="text-gray-700 text-3xl font-medium">Modification une categorie</h3>

    <div class="flex justify-center mt-10">
        <form action="{{ route('admin.category.edit.update', ['id' => $category->id ]) }}" method="POST" class="w-3/4">
            @csrf
            <div>
                <label for="name" class="text-md text-gray-600 dark:text-gray-400">{{ __('Category_name') }}</label>
                <input type="text"
                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 @error('name') border-red-500 @enderror"
                       id="name" name="name" value="{{ $category->name }}">
                @error('name')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <button type="submit"
                        class="bg-blue-800 text-white hover:bg-blue-700 transition ease-in-out duration-500 rounded-md shadow-md block px-4 py-2 mt-3">
                    Modifier
                </button>
            </div>
        </form>
    </div>
@endsection
