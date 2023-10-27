@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('teacher.store') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="" name="name">
                <label for="floatingInput">Name of Teacher</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingEmail" placeholder="" name="email">
                <label for="floatingEmail">Email</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="" name="password">
                <label for="floatingPassword">Password</label>
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

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection