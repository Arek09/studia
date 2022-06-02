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
        <h6 class="m-0 font-weight-bold text-primary">Dodawanie produktu</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
       
        <div class="col-md-5 ">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div><form action="{{ url('add/'.$data->id) }}" method="post" enctype="multipart/form-data">
                   {{ csrf_field()}}
                    @method('PUT')
                   
                <div class="row mt-2">
                    
                    <div class="col-md-6"><label class="labels">Symbol</label><input required type="text" class="form-control" placeholder="" value="" name="weapon_number"></div>

                    <div class="col-md-6"><label class="labels">Nazwa</label><input type="text" required class="form-control" value="" placeholder="" name="weapon_name"></div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">j.m.</label><input type="text" required class="form-control" placeholder="" value="" name="type_weapon"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Ilość</label><input type="number" required class="form-control" placeholder="" value="Magazynki" name="weapon_mag"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Cena</label><input type="number" required class="form-control" placeholder="" value="" name="weapon_asg_dek"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Zdjęcie</label><input type="file" required class="form-control" placeholder="" value="" name="image"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Dodaj broń</button>
                </form></div>
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