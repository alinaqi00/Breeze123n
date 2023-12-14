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
</head>
<body class="dark">
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form class="col-lg-6 col-md-8 col-10 mx-auto" action="{{ route('register') }}" method="post">
                @csrf
                <div class="mx-auto text-center my-4">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ asset('admin-assets') }}/index.html">
                        <!-- ... (your SVG content) ... -->
                    </a>
                    <h2 class="my-3">Register</h2>
                </div>

                <!-- Name -->
                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <input id="name" name="name" :value="old('name')" type="name" class="form-control" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" name="email" :value="old('email')" type="email" class="form-control" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" name="password" type="password" class="form-control" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="form-group">
                    <label for="phone_number">{{ __('Phone Number') }}</label>
                    <input id="phone_number" name="phone_number" :value="old('phone_number')" type="tel" class="form-control" required autocomplete="tel" />
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                </div>

                <!-- Role (Radio Buttons) -->
                <div class="mt-4">
                    <x-input-label :value="__('Role')" />
                    <div class="mt-2">
                        <label for="user" class="inline-block mr-4">
                            <input type="radio" id="user" name="role" value="user" required>
                            User
                        </label>
                        <label for="vendor" class="inline-block mr-4">
                            <input type="radio" id="vendor" name="role" value="vendor" required>
                            Vendor
                        </label>
                        <label for="admin" class="inline-block">
                            <input type="radio" id="admin" name="role" value="admin" required>
                            Admin
                        </label>
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    <!-- ... (your script tags and remaining code) ... -->
</body>
</html>
