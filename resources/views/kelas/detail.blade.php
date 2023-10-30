@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ url('/kelas') }}" type="button" class="btn btn-warning m-3"><i class="bi bi-arrow-left-short"></i></a>
        <div class="card w-25 m-auto">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
                <h4 class="card-title"><span class="fw-bold">Class</span> : {{ $kelas->grade }} {{ $kelas->major }}</h4>
                <h4 class="card-title"><span class="fw-bold">Teacher</span> : {{ $kelas->users->name }}</h4>

                
            </div>
        </div>
        {{-- table --}}
        @if ($student)
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">NISN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->nisn }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="d-flex justify-content-center mt-4">
            <span class="badge text-bg-danger fs-6">There is no student in this class</span>
        </div>
        @endif
        {{-- table end --}}
    </div>
@endsection