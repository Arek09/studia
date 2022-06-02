@extends('layouts.app')
@section('content')
@php
 
@endphp
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
                            @if(Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered" id="" width="100%" cellspacing="0">

                                    <thead>
                                    <tr>
                                        <th>Lp</th>
                                        <th>Imię</th>
                                        <th>Nazwisko</th>
                                        <th>Wiek</th>
                                        <th>Rola użytkownika</th>
                                        <th>Zdjęcie</th>
                                        <th>Akcja</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Lp</th>
                                        <th>Imię</th>
                                        <th>Nazwisko</th>
                                        <th>Wiek</th>
                                        <th>Rola użytkownika</th>
                                        <th>Zdjęcie</th>
                                        <th>Akcja</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    @foreach($usersRank as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->surname }}</td>
                                            <td>{{ $user->year }}</td>
                                            <td>
                                             @if($user->rank_id==null)
                                                -- Brak Roli --
                                            @else
                                                {{ $user->rank->rankName }}
                                            @endif                           
                                            </td>
                                             
                                            <td><img width="200px" src="uploads/images/{{ $user->image }}"/>
                                            <td>
                                                <a href="{{ url('users/'.$user->id) }}" class="btn btn-info btn-circle">
                                                <span class="icon text-white-50">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </span>

                                                </a><a href="{{ url('delete-user/'.$user->id) }}" class="btn btn-danger btn-circle">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                </a></td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
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
