@extends('layouts.app')
@section('content')
<div class="container">
    
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row-lg-5 justify-content-center">
                    <div class="col-lg-5 d-none d-lg-block"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Stwórz konto</h1>
                            </div>
                            <form class="user" action="{{route('register-employe')}}" method="POST">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(session()->has('fail'))
                                <div class="alert alert-danger">nie{{ session()->get('fail') }}</div>
                                @endif
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Imię" name="name" value="{{old('name')}}">
                                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Nazwisko"  name="surname" value="{{old('surname')}}">
                                            <span class="text-danger">@error('surname') {{$message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Adres e-mail" name="email" value="{{old('email')}}">
                                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Hasło" name="password" value="{{old('password')}}">
                                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" name="password_confirmation" placeholder="Powtórz hasło">
                                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block" type="submit">
                                    Zarejestruj konto
                               
                                </button>
                            </form>
                        
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Zapomniałeś hasła?
                                </a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login">Posiadasz konto? zaloguj się!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
