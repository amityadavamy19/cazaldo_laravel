@include('admin/header')
 <div id="page-container">

<!-- Main Container -->
<main id="main-container">

       <!-- Page Content -->
       <div class="hero-static d-flex align-items-center">
                    <div class="w-100">
                        <!-- Reminder Section -->
                        <div class="bg-white">
                            <div class="content content-full">
                                <div class="row justify-content-center">
                                    <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                        <!-- Header -->
                                        <div class="text-center">
                                            <p class="mb-2">
                                                <i class="fa fa-2x fa-circle-notch text-primary"></i>
                                            </p>
                                            <h1 class="h4 mb-1">
                                                Password Reset
                                            </h1>
                                            <h2 class="h6 font-w400 text-muted mb-3">
                                                Please enter your password.
                                            </h2>
                                           
                                               
                                    </div>
                                        <!-- END Header -->

                                        <!-- Reminder Form -->
                                        <form class="js-validation-signin" action="{{ route('createPasswordUser') }}" method="POST">
                                        {{@csrf_field()}}
                                            <div class="form-group py-3">
                                            <input type="text" class="form-control form-control-lg form-control-alt"  value="{{ $data->email }}" name="email" readonly required />
                                            <input type="hidden" name="activation_code"  value="{{ $data->activation_code }}" required />
                                            
                                        </div>
                                        <div class="form-group py-3">
                                          <input type="password" class="form-control" placeholder="Password" name="password" required />
                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                            @error('password')
                                            <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group py-3">
                                             <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required />
                                              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                @error('password_confirmation')
                                                <span style="color:red;">{{$message}}</span>
                                                @enderror
                                        </div>
                                            <div class="form-group row justify-content-center">
                                                <div class="col-md-6 col-xl-5">
                                                <input type="submit" class="btn btn-block btn-primary" value="Submit" />
                                                    
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END Reminder Form -->

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Reminder Section -->

                     
                    </div>
                </div>
        <!-- END Page Content -->
</main> 
@include('admin/footer')