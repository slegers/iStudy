@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enroll course</div>

                <div class="card-body">
                <form method="POST" action="">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="studypoints" class="col-md-4 col-form-label text-md-right">{{ __('Studypoints') }}</label>

                            <div class="col-md-6">
                                <input id="studypoints" type="number" class="form-control{{ $errors->has('studypoints') ? ' is-invalid' : '' }}" name="studypoints" value="{{ old('studypoints') }}" required>

                                @if ($errors->has('studypoints'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('studypoints') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="semester" class="col-md-4 col-form-label text-md-right">{{ __('Semester') }}</label>

                            <div class="col-md-6">
                                <input id="semester" type="number" class="form-control{{ $errors->has('semester') ? ' is-invalid' : '' }}" name="semester" required>

                                @if ($errors->has('semester'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('semester') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enroll') }}
                                </button>
                            </div>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
