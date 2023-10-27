@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('teacher.create') }}" class="btn btn-primary">Primary</a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teacher as $item)
                    
                        <tr>
                            
                            <th>
                                <a href="{{ route('teacher.show', $item->id) }}">
                                {{ $item->name }}
                                </a>
                            </th>
                            <td>{{ $item->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
@endsection