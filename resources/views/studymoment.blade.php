@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Studymoment</div>

                <div class="card-body">
                <form method="post" action="{{ route('studymoment.insert') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Study time') }}</label>
                            <div class="col-md-6">
                                <input id="duration" type="time" class="form-control{{ $errors->has('duration') ? ' is-invalid' : '' }}" name="duration" value="{{ old('duration') }}" required autofocus>

                                @if ($errors->has('time'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Study date') }}</label>
                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" required autofocus>

                                @if ($errors->has('date'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="course_id">
                                    @foreach($courses as $course)
                                        <option value="{{ $course->id }}"> {{ $course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="in_class" class="col-md-4 col-form-label text-md-right">{{ __('Lesson?') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="in_class">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
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
