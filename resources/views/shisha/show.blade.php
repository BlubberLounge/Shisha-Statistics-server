@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <div class="well">
                <h1> {{ $shisha->name }} <span style="opacity:.5; font-size:.375em;"> ({{ $shisha->uuid }}) </span></h1>
                <p style="font-size:.75em;"> 
                    <span> last seen: {{ $shisha->last_seen->format('H:i d.m.Y') }} </span>
                    <span class="ms-2"> last update: {{ $shisha->updated_at->format('H:i d.m.Y') }} </span>
                </p>
                <p> {{ $shisha->description }} </p>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-6">
            <div class="well">
                <div class="well-header">
                    <h5>Activity Log</h5>
                </div>
                <div class="well-content">
                    <div id="tester" style="width:600px;height:250px;"></div>                    
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="well">
                <div class="well-header">
                    <h5>Log</h5>
                </div>
                <div class="well-content">
                    <ul style="width:100%;height:200px;overflow-y:scroll;">
                        @foreach([0,1,2,3,4,5,6,7,8,9,1,1,1,1,1,1,0,1,2,3,4,5,6,7,8,9,1,1,1,1,1,1] as $k => $i)
                            <li> Entry #{{$k}}</li>
                        @endforeach
                    </ul>            
                </div>
            </div>
        </div>
    </div>
    <h3 class="mt-5"> Devices </h3>
    <hr>
    <div class="row mb-4">
        @foreach($shisha->devices as $device)
            <div class="col-6 mb-4">
                <div class="well">
                    <div class="well-header d-flex justify-content-between">
                        <h5 class="mb-1" title="{{ $device->description }}">
                            {{ $device->name }}
                            <span style="opacity:.5; font-size:.5em;"> ({{ $device->uuid }}) </span>
                        </h5>
                        <div class="d-flex align-items-center">
                            <span class="me-1" style="font-size:.75em;"> 50% </span>
                            <i class="fa-solid fa-battery-three-quarters fa-xl"></i>
                        </div>
                    </div>
                    <div class="well-content d-flex flex-column justify-content-center align-items-center mt-3">
                        <p class="m-0">
                            <i class="fa-solid fa-wind fa-xl" style="transform: rotate(180deg);"></i>
                            Airflow
                        </p>
                        <p class="fw-bold m-0" style="color: red;">
                            High
                        </p>
                        <div class="deviceChart mt-5" id="{{ $device->uuid }}" style="width:90%;height:250px;"></div>
                        <p class="align-self-end black-50" style="font-size: .725em;"> last entry: {{ $device->latestData()->updated_at }}</p>
                    </div>
                </div>
            </div>
        @endforeach 
    </div>
</div>
@endsection