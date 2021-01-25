@extends("template/bar")
@section('title')
Dashboard
@endSection()
@section('css')
<link rel="stylesheet" href="css/tambahmenu.css">
@endsection
@section('content')
@section('bodyclass')
class="c-app flex-row align-items-center"
@endsection

<div class="c-wrapper c-fixed-components">
    @include('template/header')
    <div class="c-body">
        <main class="c-main">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card mx-4">
                                <div class="card-body p-4">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <h1>Register</h1>
                                        <p class="text-muted">Create your account</p>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <svg class="c-icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                                    </svg></span></div>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <svg class="c-icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                                    </svg></span></div>
                                            <input id="email" type="email" name="email" class="form-control" type="text" placeholder="Email">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <svg class="c-icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                                    </svg></span></div>
                                            <select id="role_id" type="" name="role_id" class="form-control" type="text" placeholder="role">
                                            <option>Admin</option>
                                            <option>Kasir</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <svg class="c-icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                                    </svg></span></div>
                                            <input id="password" type="password" name="password" class="form-control" type="password" placeholder="Password">
                                        </div>

                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <svg class="c-icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                                    </svg></span></div>
                                            <input id="password-confirm" class="form-control" type="password" name="password_confirmation" placeholder="Repeat password">
                                        </div>
                                        <button class="btn btn-block btn-success" type="submit">Create Account</button>
                                    </form>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
    @endsection