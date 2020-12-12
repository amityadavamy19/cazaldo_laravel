
 @include('admin/header')
 <div id="page-container">

<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="hero-static d-flex align-items-center">
        <div class="w-100">
            <!-- Sign In Section -->
            <div class="bg-white">
                <div class="content content-full">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                            <!-- Header -->
                            <div class="text-center">
                                <p class="mb-2">
                                <a href="{{ url()->full()}}" title="logo"><img src="{{ asset('assets/images/caz_logo.png') }}" alt="logo"></a>
                                </p>
                                <h1 class="h4 mb-1">
                                    Sign In
                                </h1>
                                <h2 class="h6 font-w400 text-muted mb-3">
                                    Cazaldo Admin Panel
                                </h2>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            
                         
                           @if(session()->has('message'))
                           <span style="color:red;">{{ session()->get('message')}}*</span>
                           @endif

                           @if(session()->has('error'))
                           <span style="color:red;">{{ session()->get('error')}}*</span>
                           @endif
                            
                           @if(session()->has('success'))
                           <span style="color:green;">{{ session()->get('success')}}*</span>
                           @endif

                            <form class="js-validation-signin" action="/admin/LoginMe" method="POST">
                            @csrf
                                <div class="py-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg form-control-alt" id="name" name="email" placeholder="Username/email">
                                        @error('email')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" autocomplete="false" class="form-control form-control-lg form-control-alt" id="password" name="password" placeholder="Password">
                                        @error('password')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="d-md-flex align-items-md-center justify-content-md-between">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember">
                                                <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
                                            </div>
                                            <div class="py-2">
                                                <a class="font-size-sm font-w500" href="{{route('forgotPassword')}}">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center mb-0">
                                    <div class="col-md-6 col-xl-5">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Sign In Section -->
            </div>

 </div>
</main>
                        @include('admin/footer')