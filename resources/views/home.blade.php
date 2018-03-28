@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <div class="card text-white bg-red o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                </div>
                            <div class="mr-10">Add Studymoment</div>
                            </div>
                            <a class="card-footer text-white clearfix z-1" href="{{ route('login') }}">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right "></i>
                                </span>
                            </a>
                            </div>
                        </div>

                        <div class="col-xl-6 mb-3">
                            <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                </div>
                            <div class="mr-10">Add Course</div>
                            </div>
                            <a class="card-footer text-white clearfix z-1" href="{{ route('login') }}">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right "></i>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <div class="card text-white bg-yellow o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                </div>
                            <div class="mr-10">Show Studymoments</div>
                            </div>
                            <a class="card-footer text-white clearfix z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right "></i>
                                </span>
                            </a>
                            </div>
                        </div>

                        <div class="col-xl-6 mb-3">
                            <div class="card text-white bg-green o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                </div>
                            <div class="mr-10">Show Courses</div>
                            </div>
                            <a class="card-footer text-white clearfix z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right "></i>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
