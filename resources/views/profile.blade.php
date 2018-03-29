@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User profile</div>
                <div class="panel-body">
                  <div class="row">
                  <div class="col-md-3 col-lg-3 col-mt-3" align="center"> <img alt="User Pic" src="{{ asset('img/unknow.jpg') }}" class="img-circle img-responsive"> </div>
                    <div class=" col-md-9 col-lg-9 "> 
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>Name:</td>
                            <td>Yanice Slegers</td>
                          </tr>
                          <tr>
                            <td>E-mail:</td>
                            <td>yaniceslegers@gmail.com</td>
                          </tr>
                          <tr>
                            <td>Number of courses</td>
                            <td>8</td>
                          </tr>
                          <tr>
                            <td>Number of studymoments</td>
                            <td>8</td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="row">
                      <div class="col-2 ml-4 mb-4">
                      <form id="logout-form" action="" method="POST">
                       @csrf
                            <button type="submit" class="btn btn-primary">
                              <i class="fa fa-edit"> </i>{{ __('Edit') }}
                            </button>
                      </div>
                      <div class="col-3 ml-2 mb-4">
                      <form id="logout-form" action="" method="POST">
                        @csrf
                              <button type="submit" class="btn btn-primary btn-delete">
                                <i class="fa fa-times"> </i>{{ __('Delete') }} 
                              </button>
                      </form>
                      </div>
                      </div>
                    </div>
                  </form>                    
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
