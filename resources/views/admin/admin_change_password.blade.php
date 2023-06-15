@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"> Modification du mot de passe  </h4>

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
                    <div class="card-body p-4">


                        @if(count($errors))
                            @foreach ($errors->all() as $error )
                                <p class="alert alert-danger alert-dismissible fade show"> {{ $error }} </p>
                            @endforeach


                        @endif 

                        <form action="{{ route('update.password') }}"  method="post">

                            @csrf 

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Mot de passe actuel </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="oldpassword" placeholder="" id="oldpassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Nouveau Mot de passe </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="newpassword" placeholder="" id="newpassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Confirmation du Nouveau mot de pase  </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="confirm_password" placeholder="" id="confirm_password">
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info wave-effect wave-light" value="Modification du mot de passe">

                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
      
    </div>
</div>

@endsection


