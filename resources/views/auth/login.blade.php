@extends('admin.layouts.headtag')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه رود</title>
</head>

<body dir="rtl" class="font-peyda">

    <section class="bg-gray-50 dark:bg-gray-900 ">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 ">

            <div
                class=" w-full bg-white shadow dark:border dark:border-amber-100 border-solid border-1 rounded-3xl  md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 ">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        به اکانت خود وارد شوید
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="phone_number"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                شماره موبایل</label>
                            <input id="phone_number" type="text"
                                class="bg-amber-300 border border-amber-300 text-gray-900 sm:text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') is-invalid @enderror"
                                name="phone_number" value="{{ old('phone_number') }}" autofocus>
                            @error('phone_number')
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div>

                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">پسوورد</label>

                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="form-control @error('password') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-amber-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-amber-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">من را به یاد داشته
                                        باش</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="text-sm font-medium text-amber-200 hover:underline dark:text-primary-500">فراموشی
                                    پسوورد</a>
                            @endif
                        </div>

                        <div class="flex justify-center">
                            <button type="submit"
                                class=" p-2 mb-2 overflow-hidden  text-gray-900 rounded-lg group bg-gradient-to-br from-amber-400 to-amber-100 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-black dark:hover:text-white-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800 hover:shadow-2xl hover:shadow-amber-200 transition-all">
                                ورود
                            </button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>







{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
