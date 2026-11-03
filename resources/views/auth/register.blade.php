@extends('auth.layouts.main')
@push('title')
    <title>Admin Portal | Register</title>
@endpush
@section('auth-main-section')

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="{{ route('login') }}" class="h1"><b>Admin</b>Portal</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Register a new membership</p>
                    @if (session('error'))
                        <div class="alert alert-danger text-light text-center m-2" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('register.store') }}" method="post" id="quickForm">
                        @csrf
                        <div class="input-group mb-3">
                            <input list="institutes" name="hei_name" id="hei_name" class="form-control"
                                placeholder="Higher Education Institution">
                                <datalist id="institutes">
                                    @foreach ($institutes as $institute)
                                        <option value="{{ $institute }}">
                                    @endforeach
                                </datalist>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-university"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group col-md-6">
                                <input type="text" name="rep_name" class="form-control" placeholder="Rep Name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-6">
                                <input type="text" name="rep_designation" class="form-control"
                                    placeholder="Rep Designation">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user-tag"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-6">
                                <input type="text" name="username" class="form-control" placeholder="Create a User Name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user-circle"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group col-md-6">
                                <input type="number" name="rep_phone" id="rep_phone" class="form-control"
                                    placeholder="Primary Phone">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-6">
                                <input type="number" name="rep_sec_phone" id="rep_sec_phone" class="form-control"
                                    placeholder="Secondary Phone">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone-alt"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group col-md-6">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-6">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" placeholder="Retype password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group row mb-0">
                            <div class="col-8">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="terms">
                                    <label class="custom-control-label" for="terms">
                                        I agree to the <a href="#">terms & conditions</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->
    @endsection
