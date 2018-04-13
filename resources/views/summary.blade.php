@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Summary</div>

                <div class="card-body">
                    <div class=canvas-card>
                        <div class="canvas-title">Databaken 2 </div>
                        <canvas id="pieChart"></canvas>
                    </div>
                    <div class=canvas-card>
                        <div class="canvas-title">Databaken 2 </div>
                        <canvas class="pieChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
