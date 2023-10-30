@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ url('/teacher') }}" type="button" class="btn btn-warning mt-3"><i class="bi bi-arrow-left-short"></i></a>
        <div class="card w-25 m-auto">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
                <h4 class="card-title"><span class="fw-bold">Name</span> : {{ $teacher->name }}</h4>
                <h5 class="card-title"><span class="fw-bold">Class</span> : {{ $kelas->grade }} {{ $kelas->major }}</h5>
                <h5 class="card-title"><span class="fw-bold">Email</span> : {{ $teacher->email }}</h5>
                <h5 class="card-title"><span class="fw-bold">Place and Time of Birth</span> : {{ $teacher->birth_place }}, {{ $teacher->birth_time }}</h5>
                <h5 class="card-title"><span class="fw-bold">Religion</span> : {{ $teacher->religion }}</h5>
                <p class="card-text"><span class="fw-bold">Address</span> : {{ $teacher->address }}</p>
            </div>
        </div>
    </div>
@endsection