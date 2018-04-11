@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Studymoment Overview</div>
                <div class="card-body">
                <table class="table table-hover">
                  <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Date</th>
                     </tr>
                </thead>
                <tbody>
                @foreach($studymoments as $s)
                    <tr>
                        <td> {{ $s->id }}</td>
                        <td> {{ $courses[$s->course_id]->name }}</td>
                        <td> {{ $s->duration }}</td>
                        <td> {{ $s->date  }} </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
