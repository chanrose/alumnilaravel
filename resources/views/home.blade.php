@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('Dashboard') }}</div>
                <div class="img-fluid max-width: 20% m-4">
                    <img src="https://raw.githubusercontent.com/chanrose/alumnilaravel/main/public/media/AIUCenter.png" class="rounded mx-auto d-block" alt="..." width="260" >


                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="d-flex justify-content-center">
                            <form method="get" action="{{url('/search')}}">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="query"
                                               type="text" class="form-control bg-light border-0"
                                               placeholder="Search ID Number" aria-label="Search"
                                               aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button
                                                    type="submit" class="btn btn-dark" type="button">
                                                <i ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                                    </svg></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                            <p>
                                Currently, you have {{$NumAlumni}} Alumnus
                            </p>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
