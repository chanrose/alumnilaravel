@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div {{--class="card-header text-white bg-dark"--}}>
                        <div class="img-fluid max-width: 20% m-4">
                            <img src="https://raw.githubusercontent.com/chanrose/alumnilaravel/main/public/media/AIUCenter.png" class="rounded mx-auto d-block" alt="..." width="260" >
                            <hr/>
                            <p class="text-center">{{ __('View Alumni #') }} {{$alumni->AID}}</p>
                        </div>
                    </div>

                    <div class="card-body">


                        <form>
                            <div class="card-subtitle text-muted mb-2">Personal Information</div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-muted mb-2">First Name</label>
                                    <p class="lead">{{$alumni->Fname}}</p>{{--
                                    <input type="text" name="Fname" class="form-control" id="inputFName" placeholder="Kenny">--}}
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-muted mb-2">Last Name</label>
                                    <p class="lead">{{$alumni->Lname}}</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-muted mb-2">ID Number</label>
                                    <p class="lead">{{$alumni->IDNum}}</p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-muted mb-2">Date of Birth</label>
                                    <p class="lead">{{$alumni->DoB}}</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-muted mb-2">Nationality</label>
                                    <p class="lead">{{$alumni->Nationality}}</p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-muted mb-2">Gender</label>
                                    <p class="lead">{{$alumni->Gender}}</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-muted mb-2">Email</label>
                                    <p class="lead">{{$alumni->Email}}</p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-muted mb-2">Phone Number</label>
                                    <p class="lead">{{$alumni->Pnumber}}</p>
                                </div>
                            </div>

                            <hr/>
                            <div class="card-subtitle text-muted mb-2">Academic Information</div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="text-muted mb-2">Program</label>
                                    <p class="lead">{{$alumni->Program}}</p>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="text-muted mb-2">Faculty</label>
                                    <p class="lead">{{$alumni->Faculty}}</p>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="text-muted mb-2">Major</label>
                                    <p class="lead">{{$alumni->Major}}</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="text-muted mb-2">Credits Earned</label>
                                    <p class="lead">{{$alumni->CreditEarned}} Credits</p>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="text-muted mb-2">Advisor Name</label>
                                    <p class="lead">{{$alumni->AdvisorName}}</p>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="text-muted mb-2">Minor</label>
                                    <p class="lead">{{$alumni->Minor}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-muted mb-2">Residential Address</label>
                                <p class="lead">{{$alumni->ResidentialAddress}}</p>
                            </div>



                            <a class="btn btn-primary" href="{{route('alumni.viewlist')}}">Go Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
