@include('admin/header')
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">


    <!-- Sidebar -->

    @include('admin/includes/leftMenu')
    <!-- END Sidebar -->

    <!-- Header -->
    @include('admin/includes/sideOverlay')
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Profile Management<small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">edit</small>
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">Profile</li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">Edit Profile</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

         

<!-- Page Content -->
<div class="content">
   <!-- Dynamic Table with Export Buttons -->
   <div class="block block-rounded">
      <div class="block-header">
      </div>
      <div class="block-content block-content-full">
         <section class="content">
            <div class="row">
               <!-- left column -->
               <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                     <div class="box-header">
                        <h3 class="box-title">Edit Profile Details</h3>
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     {!! Form::open(['url' => route('editProfile'),'id' => 'editProfile']) !!}
                     <div class="box-body">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 {{ Form::label('Full Name', null, ['class' => 'control-label' , 'for' => 'fname']) }}
                                 {{Form::text('fname',$data->name,['class'=>'form-control' , 'id' => 'fname'] )}}
                                 {{ Form::hidden('userId',$data->id, ['class'=>'form-control', 'id' => 'userId']) }}
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 {{ Form::label('Mobile', null, ['class' => 'control-label' , 'for' => 'mobile']) }}
                                 {{Form::tel('mobile',$data->mobile,['class'=>'form-control' , 'id' => 'mobile'] )}}
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 {{ Form::label('Email', null, ['class' => 'control-label' , 'for' => 'email']) }}
                                 {{Form::email('email',$data->email,['class'=>'form-control' , 'id' => 'email'] )}}
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.box-body -->
                     <div class="box-footer">
                        {{ Form::submit('Submit', ['class'=>'btn btn-primary','name'=>'submit']) }}
                        
                     </div>
                     {!! Form::close() !!}
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   <!-- END Dynamic Table with Export Buttons -->
</div>
<!-- END Page Content -->







        <!-- Page Content -->
        <div class="content">



            <!-- Dynamic Table with Export Buttons -->
            <div class="block block-rounded">
                <div class="block-header">
                    <!-- <h3 class="block-title">Dynamic Table <small>Export Buttons</small></h3> -->
                </div>
                <div class="block-content block-content-full">




                    <section class="content">


                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                @if (session()->has('error'))
                                    <div class="row">
                                        <div class="alert alert-danger alert-dismissable text-right">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                            {!! session()->get('error') !!}

                                        </div>
                                    </div>danger
                                    @endif


                                    @if (session()->has('success'))
                                    <div class="row">
                                        <div class="alert alert-danger alert-dismissable text-right">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                            {!! session()->get('success') !!}

                                        </div>
                                    </div>
                                    @endif


                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Change Password</h3>
                                    </div><!-- /.box-header -->
                                    <!-- form start -->

                                    {!! Form::open(['url' => route('newPassword')]) !!}

                                    <div class="box-body">
                                        <div class="row">

                                            <div class="col-md-6 col-md-offset-1">
                                                <div class="form-group">
                                                    {{ Form::label('Old Password*', null, ['class' => 'control-label' , 'for' => 'inputOldPassword']) }}

                                                    {{Form::password('oldPassword',['class'=>'form-control' , 'id' => 'inputOldPassword'] )}}

                                                    @error('oldPassword')
                                                    <span style="color:red;">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                          
                                        </div>


                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('New Password*', null, ['class' => 'control-label' , 'for' => 'inputPassword']) }}

                                                    {{Form::password('newPassword',['class'=>'form-control' , 'id' => 'inputPassword'] )}}
                                                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer;position: relative;top: -30px;left: 350px;"></i>
                                                    @error('newPassword')
                                                    <span style="color:red;">{{$message}}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('Confirm New Password*', null, ['class' => 'control-label' , 'for' => 'confirmPassword']) }}

                                                    {{Form::password('newPassword_confirmation',['class'=>'form-control' , 'id' => 'confirmPassword'] )}}

                                                    @error('newPassword_confirmation')
                                                    <span style="color:red;">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                          
                                        </div>

                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        {{ Form::submit('Submit', ['class'=>'btn btn-primary','name'=>'submit']) }}
                                        {{ Form::reset('Reset', ['class'=>'btn btn-info']) }}
                                       
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            <!-- END Dynamic Table with Export Buttons -->
        </div>
        <!-- END Page Content -->



 
    </main>
    <!-- END Main Container -->



    <!-- Apps Modal -->
    <!-- Opens from the modal toggle button in the header -->
    <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Apps</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <!-- CRM -->
                                <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-speedometer fa-2x text-primary"></i>
                                        <p class="font-w600 font-size-sm mt-2 mb-3">
                                            CRM
                                        </p>
                                    </div>
                                </a>
                                <!-- END CRM -->
                            </div>
                            <div class="col-6">
                                <!-- Products -->
                                <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-rocket fa-2x text-primary"></i>
                                        <p class="font-w600 font-size-sm mt-2 mb-3">
                                            Products
                                        </p>
                                    </div>
                                </a>
                                <!-- END Products -->
                            </div>
                            <div class="col-6">
                                <!-- Sales -->
                                <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-plane fa-2x text-primary"></i>
                                        <p class="font-w600 font-size-sm mt-2 mb-3">
                                            Sales
                                        </p>
                                    </div>
                                </a>
                                <!-- END Sales -->
                            </div>
                            <div class="col-6">
                                <!-- Payments -->
                                <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-wallet fa-2x text-primary"></i>
                                        <p class="font-w600 font-size-sm mt-2 mb-3">
                                            Payments
                                        </p>
                                    </div>
                                </a>
                                <!-- END Payments -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Apps Modal -->
</div>
<!-- END Page Container -->

@include('admin/footer')
<style>
    
.error{
    
    color:red;
    }
</style>
<script>

        var editProfileForm = $("#editProfile");
        var linkUrl = "{{ route('checkemail')}}";

        var validator = editProfileForm.validate({

            rules: {
                fname: {
                    required: true
                },
                mobile: {
                    required: true,
                    digits: true
                },
                email: {
                    required: true,
                    email: true,
                    remote: {
                        url: "{{ route('checkemail') }}",
                        type: "post",
                        data: {
                            userId: function() {
                                return $("#userId").val();
                            },
                            _token: "{{ csrf_token() }}",
                        }
                    }
                },
            },
            messages: {
                fname: {
                    required: "This field is required"
                },
                mobile: {
                    required: "This field is required",
                    digits: "Please enter numbers only"
                },
                email: {
                    required: "This field is required",
                    email: "Please enter valid email address",
                    remote: "Email already taken!"
                },
            }
        });


        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#inputPassword');



        togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
        });
</script>