@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('student.create') }}" class="btn btn-primary">Primary</a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Place of Birth</th>
                    <th scope="col">Date of Birth</th>
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
                            <td>{{ $item->birth_place }}</td>
                            <td>{{ $item->birth_time }}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
@endsection