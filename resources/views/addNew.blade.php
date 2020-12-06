@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-dark">{{ __('Add New') }}</div>

                    <div class="card-body">
                        @if (Session::has('Alumni_Added'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('Alumni_Added') }}
                            </div>
                        @endif
                            <form method="POST" action="{{route('alumni.addSubmit')}}">
                                @csrf
                                <div class="card-subtitle text-muted mb-2">Personal Information</div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputFName">First Name</label>
                                        <input type="text" name="Fname" class="form-control" id="inputFName" placeholder="Kenny" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputLName">Last Name</label>
                                        <input type="text" name="Lname" class="form-control" id="inputLName" placeholder="Ketty" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputId">ID Number</label>
                                        <input type="text" name="IDNum" class="form-control" id="inputId" placeholder="202000xxx" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputDoB">Date of Birth</label>
                                        <input type="date" name="DoB" class="form-control" id="inputDoB" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputNationality">Nationality</label>
                                        <input type="text" name="Nationality" class="form-control" id="inputNationality" placeholder="Khmer" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputGender">Gender</label>
                                        <select name="Gender" class="form-control" id="inputGender" required>
                                            <option>Select one</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" name="Email" class="form-control" id="inputEmail" placeholder="kennyketty@gmail.com" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPhone">Phone Number</label>
                                        <input type="tel" name="Pnumber" class="form-control" id="inputPhone" placeholder="+855 62 729 583 5" required>
                                    </div>
                                </div>

                                <hr/>
                                <div class="card-subtitle text-muted mb-2">Academic Information</div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="selectProgram">Program</label>
                                        <select name="Program" class="form-control" id="selectProgram" required>
                                            <option>Select one</option>
                                            <option value="International Program">International Program</option>
                                            <option value="Thai Program">Thai Program</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="selectFaculty">Faculty</label>
                                        <select name="Faculty" class="form-control" id="selectFaculty" required>
                                            <option>Select one</option>
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
                                        <select name="Major" class="form-control" id="selectMajor" required>
                                            <option>Select one</option>
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
                                        <input type="number" name="CreditEarned" class="form-control" id="inputCredit" placeholder="Credits" name="inputCredit" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputAdvisor">Advisor Name</label>
                                        <input type="text" name="AdvisorName" class="form-control" id="inputAdvisor" placeholder="Advisor's fullname" name="inputAdvisor" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="selectMinor">Minor</label>
                                        <select name="Minor" class="form-control" id="selectMinor">
                                            <option value="None">None</option>
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
                                    <textarea name="ResidentialAddress" class="form-control" id="inputAddress" rows="2" required></textarea>
                                </div>


                                <a class="btn btn-secondary" href="{{route('alumni.viewlist')}}">Go Back</a>
                                <button type="submit" value="Submit" class="btn btn-primary">Add Form</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
