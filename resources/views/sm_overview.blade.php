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
                @foreach($studymoments as $key)
                    <tr>
                        <td><?= $key->id ?></td>
                        <td><?=$courses[$key->course_id]->name?></td>
                        <td><?=  $key->duration ?></td>
                        <td><?= $key->date ?></td>
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
