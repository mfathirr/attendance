@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('kelas.create') }}" class="btn btn-primary">Primary</a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Name of Class</th>
                    <th scope="col">Teacher</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kelas as $item)
                        <tr>
                            
                            <th>
                                <a href="{{ route('kelas.show', $item->id) }}">
                                {{ $item->grade }} {{ $item->major }}
                                </a>
                            </th>
                            <td>{{ $item->users->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
@endsection