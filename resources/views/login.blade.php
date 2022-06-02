@extends('layouts.app')
@section('content')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@php

   
@endphp
  
<div class="container">
  

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-7 col-md-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 justify-content-center">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Witaj!</h1>
                            </div>

                            <form class="user" id="" action="{{ route('login-employe') }}"  method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Wprowadź adres e-mail" name="email" value="{{old('email')}}">
                                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Wprowadź hasło" name="password">
                                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Zapamiętaj</label>
                                    </div>
                                </div>
                                
                            
                              
                                <br>
                                <button class="btn btn-primary btn-user btn-block" id="submit" name="submit"  type="submit">
                                    Zaloguj
                                
                                </button> 
                                <hr>
                            
                            </form>
                           
                            <div class="text-center">
                                <a class="small" href="register">Zapomniałeś hasła?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="register">Stwórz konto!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
@endsection
