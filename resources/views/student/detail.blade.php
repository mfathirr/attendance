@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ url('/student') }}" type="button" class="btn btn-warning mt-3"><i class="bi bi-arrow-left-short"></i></a>
        <div class="card w-25 m-auto">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
                <h4 class="card-title"><span class="fw-bold">Name</span> : {{ $student->name }}</h4>
                <h5 class="card-title"><span class="fw-bold">Class</span> : {{ $student->kelas->grade }} {{ $student->kelas->major }}</h5>
                <h5 class="card-title"><span class="fw-bold">NISN</span> : {{ $student->nisn }}</h5>
                <h5 class="card-title"><span class="fw-bold">Place and Time of Birth</span> : {{ $student->birth_place }}, {{ $student->birth_time }}</h5>
                <h5 class="card-title"><span class="fw-bold">Religion</span> : {{ $student->religion }}</h5>
                <p class="card-text"><span class="fw-bold">Address</span> : {{ $student->address }}</p>
            </div>
        </div>
    </div>
@endsection