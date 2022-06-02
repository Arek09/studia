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
                            <h6 class="m-0 font-weight-bold text-primary">Dane</h6>
                        </div>
    <div class="card-body">
        <div class="table-responsive">
        <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">

        <div class="col-md-5 border-right ">
            <div class="p-3 py-5">

                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>
                <form action="put/{{$product->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                <div class="row mt-2">

                    <div class="col-md-6"><label class="labels">Symbol </label><input required type="text" class="form-control" placeholder="weapon_number" value=" {{$product->weapon_number}}" name="weapon_number"></div>


                    <div class="col-md-6"><label class="labels">Nazwa</label><input type="text" required class="form-control" value="{{$product->weapon_name}}" placeholder="weapon_name" name="weapon_name"></div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">j.m.</label><input type="text" required class="form-control" placeholder="type_weapon" value="{{$product->type_weapon}}" name="type_weapon"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Ilość</label><input type="number" required class="form-control" placeholder="Magazynki" value="{{$product->weapon_mag}}" name="weapon_mag"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Cena</label><input type="text" required class="form-control" placeholder="ASG/Deko" value="{{$product->weapon_asg_dek}}" name="weapon_asg_dek"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Zdjęcie</label><input type="file"  class="form-control" placeholder="e-mail" value="" name="image"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Dodaj broń</button>
                </div></form>

            </div>
            </div>
        <div class="col-md-6 ">
            <div class="p-3 py-5">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1>Zdjęcie edytowanego wpisu</h1><br>


                </div>

                <img width="200px" src="{{ asset('uploads/images/'.$product['image'])}}"/>
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
</div>

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


