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
                        Contact Management<small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">edit</small>
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">Contact</li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">Edit Contact</a>
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
                    <!-- <h3 class="block-title">Dynamic Table <small>Export Buttons</small></h3> -->
                </div>
                <div class="block-content block-content-full">




                    <section class="content">


                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->



                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Edit Contact Details</h3>
                                    </div><!-- /.box-header -->
                                    <!-- form start -->

                                    {!! Form::open(['url' => 'admin/editContact','files'=>'true']) !!}

                                    <div class="box-body">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('Landline', null, ['class' => 'control-label' , 'for' => 'Phone']) }}

                                                    {{Form::tel('phone',$data->phone,['class'=>'form-control' , 'id' => 'Phone'] )}}


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

                                                    {{Form::tel('email',$data->email,['class'=>'form-control' , 'id' => 'email'] )}}


                                                </div>
                                            </div>


                                        </div>


                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('Facebook', null, ['class' => 'control-label' , 'for' => 'facebook']) }}

                                                    {{Form::text('facebook',$data->facebook,['class'=>'form-control' , 'id' => 'facebook'] )}}


                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('Instagram', null, ['class' => 'control-label' , 'for' => 'instagram']) }}

                                                    {{Form::text('instagram',$data->instagram,['class'=>'form-control' , 'id' => 'instagram'] )}}


                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('Google+', null, ['class' => 'control-label' , 'for' => 'google']) }}

                                                    {{Form::text('google',$data->google,['class'=>'form-control' , 'id' => 'google'] )}}


                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('Linkedin', null, ['class' => 'control-label' , 'for' => 'linkedin']) }}

                                                    {{Form::text('linkedin',$data->linkedin,['class'=>'form-control' , 'id' => 'linkedin'] )}}


                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('Twitter', null, ['class' => 'control-label' , 'for' => 'twitter']) }}

                                                    {{Form::text('twitter',$data->twitter,['class'=>'form-control' , 'id' => 'twitter'] )}}


                                                </div>
                                            </div>

                                        </div>



                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    {{ Form::label('Address', null, ['class' => 'control-label' , 'for'=>'address']) }}

                                                    {{Form::textarea('address',$data->address,['class'=>'form-control', 'id'=>'address' ] )}}
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('Logo', null, ['class' => 'control-label']) }}

                                                    {{ Form::file('logo', ['class'=>'form-control']) }}
                                                    {{ Form::image(asset('uploads/logo/'.$data->logo),null, ['class'=>'form-control']) }}
                                                    {{ Form::hidden('old_logo',$data->logo, ['class'=>'form-control']) }}

                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        {{ Form::submit('Submit', ['class'=>'btn btn-primary','name'=>'submit']) }}
                                        {{ Form::reset('Reset', ['class'=>'btn btn-info']) }}
                                        {{ Form::hidden('id',$data->id, ['class'=>'form-control']) }}
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

<script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    CKEDITOR.replace('description');
</script>