@extends('layout.app')

@section('content')
    <div class="flex justify-center mt-12 ">
        <div class="bg-gray-200 w-5/12 rounded p-12">
            <div class="flex justify-center text-4xl text-blue-700">
                {{ __('Register') }}
            </div>

            <div class="flex justify-center mt-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-col">
                        <label for="name" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Name') }}</label>
                        <input id="name" type="text"
                               class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="flex flex-col mt-3">
                        <label for="email"
                               class="text-sm text-gray-600 dark:text-gray-400">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email"
                                   class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                   name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>

                    <div class="flex flex-col mt-3">
                        <label for="password"
                               class="text-sm text-gray-600 dark:text-gray-400">{{ __('Password') }}</label>

                            <input id="password" type="password"
                                   class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                   name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>

                    <div class="flex flex-col mt-3">
                        <label for="password-confirm"
                               class="text-sm text-gray-600 dark:text-gray-400">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password"
                                   class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                   name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex justify-end">
                            <button type="submit" class="bg-blue-500 text-white hover:bg-blue-700 transition ease-in-out duration-500 rounded-md shadow-md block px-4 py-2 mt-3">
                                {{ __('Register') }}
                            </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
