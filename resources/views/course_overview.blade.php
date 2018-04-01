@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Courses overview</div>
                <div class="card-body">
                <table class="table table-hover">
                  <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Studypoints</th>
                        <th scope="col">Edit</th>
                     </tr>
                </thead>
                <tbody>
                @foreach($courses as $key)
                    <tr>
                        <td><?= $key->id ?></td>
                        <td><?= $key->name ?></td>
                        <td><?= $key->studypoints ?></td>
                        <td><?= $key->name ?></td>
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
