@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('kelas.store') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingGrade" placeholder="" name="grade">
                <label for="floatingGrade">Grade</label>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Major</label>
                <select class="form-select" id="inputGroupSelect01" name="major">
                    <option selected>Choose...</option>
                    <option value="1">RPL</option>
                    <option value="2">TKJ</option>
                    <option value="3">DKV</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Teacher</label>
                <select class="form-select" id="inputGroupSelect01" name="id_user">
                    <option selected>Choose...</option>
                    @foreach ($teacher as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection