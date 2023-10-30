@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ url('/kelas') }}" type="button" class="btn btn-warning mt-3"><i class="bi bi-arrow-left-short"></i></a>
        <div class="card w-25 m-auto">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
                <h4 class="card-title"><span class="fw-bold">Class</span> : {{ $kelas->grade }} {{ $kelas->major }}</h4>
                <h4 class="card-title"><span class="fw-bold">Teacher</span> : {{ $kelas->users->name }}</h4>
                <h5 class="card-title"><span class="fw-bold">Student</span> : </h5>

                @if ($student)
                <ul>
                    @foreach ($student as $item)
                    <li class="fs-5">{{ $item->name }}</li>
                    @endforeach
                </ul>
                @else
                <span class="badge text-bg-danger w-100 h-50">There is no student in this class</span>
                @endif
            </div>
        </div>
    </div>
@endsection