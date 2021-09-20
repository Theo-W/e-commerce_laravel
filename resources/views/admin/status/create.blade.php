@extends('admin.layout.app')

@section('content')
    <h3 class="text-gray-700 text-3xl font-medium">Crée un Status</h3>

    <div class="flex justify-center mt-10">
        <form action="{{ route('admin.status.create.store') }}" method="POST" class="w-3/4">
            @csrf
            <div>
                <label for="name" class="text-md text-gray-600 dark:text-gray-400">{{ __('Status') }}</label>
                <input type="text"
                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 @error('name') border-red-500 @enderror"
                       id="name" name="name">
                @error('name')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label for="color" class="text-md text-gray-600 dark:text-gray-400">{{ __('Color') }}</label>
                <input type="text"
                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 @error('color') border-red-500 @enderror"
                       id="color" name="color">
                @error('color')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label for="background" class="text-md text-gray-600 dark:text-gray-400">{{ __('Background') }}</label>
                <input type="text"
                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 @error('background') border-red-500 @enderror"
                       id="background" name="background">
                @error('background')
                <span class="text-red-500 text-xs" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <button type="submit"
                        class="bg-blue-800 text-white hover:bg-blue-700 transition ease-in-out duration-500 rounded-md shadow-md block px-4 py-2 mt-3">
                    Crée
                </button>
            </div>
        </form>
    </div>
@endsection
