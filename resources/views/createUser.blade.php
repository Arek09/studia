@extends('layouts.app')
@section('content')

    <div id="wrapper">

        @include('layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('layouts.topbar')

                <!-- Begin Page Content -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Użytkownicy</h6>
                            <a style="float: right" href="/user/">Utwórz użytkownika</a>
                        </div>
                        <div class="card-body">
                            <div class="p-5 col-md-8">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Stwórz konto</h1>
                                </div>
                                <form class="user" action="{{route('create-user')}}" method="POST">
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
                                                   placeholder="Pseudonim"  name="surname" value="">
                                            <span class="text-danger">@error('surname') {{$message}} @enderror</span>
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                                       placeholder="Stopień" name="name" value="">
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
                                        Utwórz konto

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- End of Main Content -->

            @include('layouts.footer')


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('layouts.logout')

@endsection
