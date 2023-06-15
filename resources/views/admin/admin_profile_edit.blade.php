@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"> Editer mon profile </h4>

                    <!--div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"> Accueil </a></li>
                            <li class="breadcrumb-item active">Forms Elements</li>
                        </ol>
                    </div-->

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('store.profile') }}" enctype="multipart/form-data" method="post">

                            @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Nom </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" placeholder="Nom" id="example-text-input" value="{{ $editData->name }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Email </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email" placeholder="Email" id="example-text-input" value="{{ $editData->email }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Username </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="username" placeholder="Username" id="example-text-input" value="{{ $editData->username }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Profile Image </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="profile_image"  id="image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                <div class="col-sm-10">

                                    <img class="me-3 rounded avatar-xl" src="{{ (!empty($editData->profile_image))?
                                    url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" id="showImage">

                                </div>
                            </div>

                            <input type="submit" class="btn btn-info wave-effect wave-light" value=" Enregistrment">

                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>

<script type="text/javascript">

    $(document).ready(function(){

        $('#image').change(function(e){

            var reader = new FileReader();

            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }

            reader.readAsDataURL(e.target.files[0]);

        });
    });

</script>


@endsection


