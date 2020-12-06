@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-dark">{{ __('Add New') }}</div>

                    <div class="card-body">
                        @if (Session::has('alumni_updated'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('alumni_updated') }}
                            </div>
                        @endif
                        <form method="POST" action="{{route('alumni.updateAlumni')}}">
                            @csrf
                            <input type="hidden" name="AID" value="{{$alumni->AID}}" />
                            <div class="card-subtitle text-muted mb-2">Personal Information</div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputFName">First Name</label>
                                    <input type="text" value="{{$alumni->Fname}}" name="Fname" class="form-control" id="inputFName" placeholder="Kenny">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputLName">Last Name</label>
                                    <input type="text" value="{{$alumni->Lname}}" name="Lname" class="form-control" id="inputLName" placeholder="Ketty">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputId">ID Number</label>
                                    <input type="text" value="{{$alumni->IDNum}}" name="IDNum" class="form-control" id="inputId" placeholder="202000xxx">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputDoB">Date of Birth</label>
                                    <input type="date" value="{{$alumni->DoB}}" name="DoB" class="form-control" id="inputDoB">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNationality">Nationality</label>
                                    <input type="text" value="{{$alumni->Nationality}}" name="Nationality" class="form-control" id="inputNationality" placeholder="Khmer">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputGender">Gender</label>
                                    <select value="{{$alumni->Gender}}" name="Gender"  class="form-control" id="inputGender">
                                        <option>Selected: {{$alumni->Gender}}</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" value="{{$alumni->Email}}" name="Email" class="form-control" id="inputEmail" placeholder="kennyketty@gmail.com">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPhone">Phone Number</label>
                                    <input type="tel" value="{{$alumni->Pnumber}}" name="Pnumber" class="form-control" id="inputPhone" placeholder="+855 62 729 583 5">
                                </div>
                            </div>

                            <hr/>
                            <div class="card-subtitle text-muted mb-2">Academic Information</div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="selectProgram">Program</label>
                                    <select value="{{$alumni->Program}}" name="Program" class="form-control" id="selectProgram">
                                        <option value="{{$alumni->Program}}">Selected {{$alumni->Program}}</option>
                                        <option value="International Program">International Program</option>
                                        <option value="Thai Program">Thai Program</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="selectFaculty">Faculty</label>
                                    <select value="{{$alumni->Faculty}}" name="Faculty" class="form-control" id="selectFaculty">
                                        <option value="{{$alumni->Faculty}}">Selected: {{$alumni->Faculty}} </option>
                                        <option value="Arts & Humanities">Arts & Humanities</option>
                                        <option value="Business Administration">Business Administration</option>
                                        <option value="Education">Education</option>
                                        <option value="Religious Studies">Religious Studies</option>
                                        <option value="Science">Science</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Mission Faculty of Nursing">Mission Faculty of Nursing</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="selectMajor">Major</label>
                                    <select name="Major" value="{{$alumni->Major}}" class="form-control" id="selectMajor">
                                        <option value="{{$alumni->Major}}">Selected: {{$alumni->Major}}</option>
                                        <option value="English">English</option>
                                        <option value="Business Administration">Business Administration</option>
                                        <option value="Teaching">Teaching</option>
                                        <option value="Christian Studies">Christian Studies</option>
                                        <option value="Bioscience">Bioscience</option>
                                        <option value="Information Technology" >Information Technology</option>
                                        <option value="English (Thai)">English (Thai)</option>
                                        <option value="Accountancy (Thai)">Accountancy (Thai)</option>
                                        <option value="Business Administration (Thai)">Business Administration (Thai)</option>
                                        <option value=">Nursing Science (Thai)">Nursing Science (Thai)</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputCredit">Credits Earned</label>
                                    <input type="number" value="{{$alumni->CreditEarned}}" name="CreditEarned" class="form-control" id="inputCredit" placeholder="Credits" name="inputCredit">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAdvisor">Advisor Name</label>
                                    <input type="text" value="{{$alumni->AdvisorName}}" name="AdvisorName" class="form-control" id="inputAdvisor" placeholder="Advisor's fullname" name="inputAdvisor">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="selectMinor">Minor</label>
                                    <select  value="{{$alumni->Minor}}" name="Minor" class="form-control" id="selectMinor">
                                        <option value="{{$alumni->Minor}}">Selected: {{$alumni->Minor}}</option>
                                        <option value="English">English</option>
                                        <option value="Business Administration">Business Administration</option>
                                        <option value="Teaching">Teaching</option>
                                        <option value="Christian Studies">Christian Studies</option>
                                        <option value="Bioscience">Bioscience</option>
                                        <option value="Information Technology" >Information Technology</option>
                                        <option value="English (Thai)">English (Thai)</option>
                                        <option value="Accountancy (Thai)">Accountancy (Thai)</option>
                                        <option value="Business Administration (Thai)">Business Administration (Thai)</option>
                                        <option value=">Nursing Science (Thai)">Nursing Science (Thai)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Residential Address</label>
                                <textarea name="ResidentialAddress"  value="{{$alumni->ResidentialAddress}}" class="form-control" id="inputAddress" rows="2">{{$alumni->ResidentialAddress}}</textarea>
                            </div>


                            <a class="btn btn-secondary" href="{{route('alumni.viewlist')}}">Go Back</a>
                            <button type="submit" value="Update" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
