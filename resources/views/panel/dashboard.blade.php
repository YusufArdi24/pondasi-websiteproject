@extends('layouts.panel')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="row">
            {{-- Total Portofolio --}}
            <div class="col-xl-3 col-md-6">
                <div class="card text-white mb-4" style="background-color: #F57C1F;">
                    <div class="card-body">Total Portofolio: {{ $portofolio }}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('panel/portofolio') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            {{-- Total Layanan Rumah --}}
            <div class="col-xl-3 col-md-6">
                <div class="card text-white mb-4" style="background-color: #F57C1F;">
                    <div class="card-body">Total Layanan Rumah: {{ $layananrumah }}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('panel/layananrumah') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            {{-- Total Layanan Interior --}}
            <div class="col-xl-3 col-md-6">
                <div class="card text-white mb-4" style="background-color: #F57C1F;">
                    <div class="card-body">Total Layanan Interior: {{ $layananinterior }}</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('panel/layananinterior') }}">View
                            Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
