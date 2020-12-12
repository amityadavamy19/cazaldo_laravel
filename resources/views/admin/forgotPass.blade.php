
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
                                                Please provide your account’s email and we will send you your password.
                                            </h2>
                                            
                                            @if (session()->has('invalid'))
                                                <div class="row">
                                                    <div class="alert alert-danger alert-dismissable text-right">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        {!! session()->get('invalid') !!}
                                                    </div>
                                                </div>
                                                @endif

                                                @if (session()->has('notsend'))
                                                <div class="row">
                                                    <div class="alert alert-danger alert-dismissable text-right">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        {!! session()->get('notsend') !!}
                                                    </div>
                                                </div>
                                                @endif
                                                @if (session()->has('unable'))
                                                <div class="row">
                                                    <div class="alert alert-danger alert-dismissable text-right">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        {!! session()->get('unable') !!}
                                                    </div>
                                                </div>
                                                @endif
                                                @if (session()->has('send'))
                                                <div class="row">
                                                    <div class="alert alert-success alert-dismissable text-right">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                
                                                        {!! session()->get('send') !!}

                                
                                                    </div>
                                                </div>
                                                @endif

                                                @if($msg ?? '')
                                                <div class="row">
                                                    <div class="alert alert-danger alert-dismissable text-right">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        {{$msg}}

                                                    </div>
                                                </div>
                                                @endif
                                    </div>
                                        <!-- END Header -->

                                        <!-- Reminder Form -->
                                        <form class="js-validation-signin" action="{{ route('resetPass') }}" method="POST">
                                        {{@csrf_field()}}
                                            <div class="form-group py-3">
                                            <input type="text" class="form-control form-control-lg form-control-alt" id="name" name="email" placeholder="Username/email">
                                            @error('email')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                        </div>
                                            <div class="form-group row justify-content-center">
                                                <div class="col-md-6 col-xl-5">
                                                    <button type="submit" class="btn btn-block btn-primary">
                                                        <i class="fa fa-fw fa-envelope mr-1"></i> Send Mail
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END Reminder Form -->

                                        <div class="text-center">
                                            <a class="font-size-sm font-w500" href="{{route('admin/login')}}">Login?</a>
                                        </div>
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