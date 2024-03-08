<x-guest-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edumilestone</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('admin/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{ url('admin/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ url('admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('admin/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ url('admin/images/favicon.png')}}" />
    </head>

    <body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                    <!-- <img src="{{ url('admin')}}/images/logo.svg" alt="logo"> -->
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="pt-3" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control form-control-lg block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="EmailId" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="form-group mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="form-control form-control-lg block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-3">
                        <x-primary-button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn ms-3">
                            {{ __('SIGN IN') }}
                        </x-primary-button>
                    </div>

                    <div class="my-2 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <label class="form-check-label text-muted">
                                <input type="checkbox" class="form-check-input">
                                Keep me signed in
                            </label>
                        </div>
                        <a href="#" class="auth-link text-black">Forgot password?</a>
                    </div>
                    <div class="mb-2">
                        <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                            <i class="ti-facebook mr-2"></i>Connect using facebook
                        </button>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                        Don't have an account? <a href="{{url('register')}}" class="text-primary">Create</a>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ url('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('admin/js/off-canvas.js')}}"></script>
    <script src="{{ url('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{ url('admin/js/template.js')}}"></script>
    <script src="{{ url('admin/js/settings.js')}}"></script>
    <script src="{{ url('admin/js/todolist.js')}}"></script>
    <!-- endinject -->


    </body>

    </html>
</x-guest-layout>
