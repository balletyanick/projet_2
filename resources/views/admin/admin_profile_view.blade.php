@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Mon Profile </h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                            <li class="breadcrumb-item active">Read Email</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <!-- Left sidebar -->
                <div class="email-leftbar card">

                    <div class="d-flex mb-2">

                        <img class="me-3 rounded-circle avatar-sm" src="{{ (!empty($adminData->profile_image))?
                        url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}" alt="image">

                        <div class="flex-1">
                            <h5 class="font-size-14 my-1"> {{ $adminData->username }} </h5>
                            <small class="text-muted">{{ $adminData->email }}  </small>
                        </div>
                    </div>


                    <div class="mail-list mt-2">

                        <a href="#">Utilisateur:  <span style="font-size: 13px;" class="ms-1"> {{ $adminData->username }} </span> </a>
                        <a href="#"></i>Nom:  <span style="font-size: 13px;" class="ms-1"> {{ $adminData->name }} </span> </a>
                        <a href="#"></i> E-mail: <span style="font-size: 13px;" class="ms-1"> {{ $adminData->email }} </span> </a>


                    </div>
                        <a  class="btn btn-info btn-block waves-effect waves-light mt-4"
                            href="{{ route('admin.edit_profile') }}" style="color: white;"> Editer Profile </a>
                </div>
                <!-- End Left sidebar -->

                <!-- Right Sidebar -->
                <div class="email-rightbar mb-3">

                    <div class="card">
                        <div class="btn-toolbar p-3 pt-4" role="toolbar">

                            <h5> Mon profile </h5>

                        </div>

                        <div class="card-body">

                        </div>

                    </div>
                </div>
                <!-- card -->

            </div>
            <!-- end Col-9 -->

        </div>
        <!-- end row -->


    </div>
</div>

@endsection
