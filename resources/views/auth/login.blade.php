@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('login')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-12 col-md-9" style="height: 2000px;
        width: 1000px;

        position: fixed;
        top: 50%;
        left: 50%;
        margin-top: -200px;
        margin-left: -200px;">


                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-white mb-4" >@yield('title') {{config('app.name')}}</h1>
                                </div>
                                <form class="user" action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-group has-feedback @error('email') has-error @enderror">
                                        <input type="email" name="email" id="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Email" required>
                                            @error('email')
                                            <span class="help-block" style="color: red; font-size:12; ">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <div class="form-group has-feedback @error('password') has-error @enderror">
                                        <input type="password" id="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" required>
                                            @error('password')
                                            <span class="help-block">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <button type="sumbit" class="btn btn-primary btn-user btn-block">
                                        @yield('title')
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
