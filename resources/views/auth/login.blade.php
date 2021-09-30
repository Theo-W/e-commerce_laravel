@extends('layout.app')

@section('content')
    <div class="flex justify-center mt-12 ">
        <div class="bg-white w-5/12 rounded-xl p-12">
            <div class="flex justify-center text-4xl text-blue-700">
                {{ __('Login') }}
            </div>

            <div class="flex w-full justify-center mt-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-col">
                        <label for="email"
                               class="text-sm text-gray-600 dark:text-gray-400">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email"
                               class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 @error('email') border-red-500 @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="text-red-500 text-xs italic" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                        @enderror
                    </div>

                    <div class="flex flex-col mt-3">
                        <label for="password"
                               class="text-md text-gray-600 dark:text-gray-400">{{ __('Password') }}</label>
                        <input id="password" type="password"
                               class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 @error('password') border-red-500 @enderror"
                               name="password" required
                               autocomplete="current-password">

                        @error('password')
                        <span class="text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="text-sm text-gray-600 dark:text-gray-400" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                                class="bg-blue-500 text-white hover:bg-blue-700 transition ease-in-out duration-500 rounded-md shadow-md block px-4 py-2 mt-3">
                            {{ __('login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
