<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/app-light.css') }}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/app-dark.css') }}" id="darkTheme">
    <style>
        /* Add a white border to the form */
        .form-border {
            border: 2px solid white;
            padding: 20px; /* Add padding to create space between the border and form elements */
        }
    </style>
</head>
<body class="dark">
    <div class="wrapper vh-100">
        <div class="container">
            <div class="row align-items-center justify-content-center h-100">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/index.html">
                        <!-- ... (rest of your SVG content) ... -->
                    </a>
                    <h1 class="h6 mb-3">Sign in</h1>

                    <div class="form-group">
                        <label for="email" class="sr-only">Email address</label>
                        <input type="email" id="email" class="form-control form-control-lg" name="email" :value="old('email')" placeholder="Email address" required autofocus>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <label for="password" :value="__('Password')" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" required autocomplete="current-password" class="form-control form-control-lg" placeholder="Password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="remember" value="remember-me"> Stay logged in
                        </label>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
                    <p class="mt-5 mb-3 text-muted">© 2020</p>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="ml-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
