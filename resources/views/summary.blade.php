@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @foreach($courses as $course)
        <div class="card mr-4 mb-4">
            <div class="card-header col-auto">
              <i class="fa fa-pie-chart"></i> <?= $course->name ?></div>
            <div class="card-body">
              <canvas id="{{ $course->id }}" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    @endforeach
    </div>
</div>
@endsection
