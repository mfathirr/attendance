@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('student.create') }}" class="btn btn-primary my-4"><i class="bi bi-plus-lg"></i></a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Class</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $item)
                    
                        <tr>
                            
                            <th>
                                <a href="{{ route('student.show', $item->id) }}">
                                {{ $item->name }}
                                </a>
                            </th>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->kelas->grade }} {{ $item->kelas->major }}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
@endsection