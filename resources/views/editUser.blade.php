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
  <div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edycja konta</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-4 py-5"><img class="mt-2" width="150px" src="{{ asset ('uploads/images/'.$user->image) }}"><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div><form action="{{ url('update-user/'.$user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="row mt-2">

                    <div class="col-md-6"><label class="labels">Imię</label><input type="text" class="form-control" placeholder="first name" value="{{ $user->name }}" name="name"></div>
                    <div class="col-md-6"><label class="labels">Nazwisko</label><input type="text" class="form-control" value="{{ $user->surname }}" placeholder="surname" name="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Adres e-mail</label><input type="text" class="form-control" placeholder="e-mail" value="{{ $user->email }}" name="email"></div>
                </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Pseudonim</label><input type="text" class="form-control" placeholder="e-mail" value="" name="pseudonim"></div>
                    </div>
                    <div class="form-group">
      <label for="input-country">Stopień</label>

  
      <select class="form-control custom-select d-block w-100" name="rankName" id="input-country">
        <option>-- Wybierz Stopień --</option>
        @foreach ($rank as $ranks)
        <option value="{!! $ranks->id !!}"> {!! $ranks->rankName !!}</option>
         @endforeach
     
      </select>

      
    
      </div>
 
            </div>
                    <br>
                    <div class="row mt-3">
                        <div class="col-md-12">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Admin
                        </label>
                        <br>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Użytkownik
                        </label>
                    </div>
                    </div>
                    <br>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Avatar</label><input type="file" class="form-control" placeholder="" value="" name="image"></div>
                </div><div class="col-md-5 mb-3">
              

                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Zapisz profil</button>
                </form></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience">
                    <span class="text-center">Edytuj hasło</span>
                </div>
                <form action="{{ route('login-employe')}}" method="post" >
                    @csrf
                    @method('PUT')
                <br>
                <div class="col-md-12"><label class="labels">Aktualne hasło</label><input type="password" class="form-control" placeholder="********" value="">
                </div>
                <br>
                <div class="col-md-12"><label class="labels">Nowe hasło</label><input type="password" class="form-control" placeholder="" value=""></div>
                <br>
                <div class="col-md-12"><label class="labels">Potwierdź hasło</label><input type="password" class="form-control" placeholder="" value=""></div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="#">Zaktualizuj hasło</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>


        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
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
