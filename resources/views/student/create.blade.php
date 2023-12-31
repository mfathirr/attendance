@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('student.store') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="" name="name">
                <label for="floatingInput">Nama of Student</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingNISN" placeholder="" name="nisn">
                <label for="floatingNISN">NISN</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPlace" placeholder="" name="birth_place">
                <label for="floatingPlace">Place of Birth</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingDate" placeholder="" name="birth_time">
                <label for="floatingDate">Date of Birth</label>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Religion</label>
                <select class="form-select" id="inputGroupSelect01" name="religion">
                    <option selected>Choose...</option>
                    <option value="1">Islam</option>
                    <option value="2">Kristen</option>
                    <option value="3">Budha</option>
                    <option value="4">Hindu</option>
                </select>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingAddress" placeholder="" name="address">
                <label for="floatingAddress">Address</label>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Class</label>
                <select class="form-select" id="inputGroupSelect01" name="id_class">
                    <option selected>Choose...</option>
                    @foreach ($kelas as $item)
                    <option value="{{ $item->id }}">{{ $item->grade }} {{ $item->major }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection