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
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Numer broni</th>
                                            <th>Nazwa</th>
                                            <th>Typ/Model</th>
                                            <th>Magazynki</th>
                                            <th>ASG/Deko</th>
                                            <th>Zdjęcie</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Numer broni</th>
                                            <th>Nazwa</th>
                                            <th>Typ/Model</th>
                                            <th>Magazynki</th>
                                            <th>ASG/Deko</th>
                                            <th>Zdjęcie</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                   
                                    </tbody>
                                </table>
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


