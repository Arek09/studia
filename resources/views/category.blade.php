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
                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                          
                                            <th>Nazwa</th>
                                            <th>Ilość produktów</th>
                                            <th>Przeznaczenie</th>
                                            <th>Wartość</th>
                            
                                            <th>Akcja</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        
                                            <th>Nazwa</th>
                                            <th>Ilość produktów</th>
                                            <th>Przeznaczenie</th>
                                            <th>Wartość</th>
                            
                                            <th>Akcja</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                        <td>Wyroby szklane</td>
                                        <td>5</td>
                                        <td>Eksport</td>
                                        <td>1.500 zł</td>
                                        <td><img width="200px" src=""/>
                                          
                                                <a href="" class="btn btn-info btn-circle">
                                                <span class="icon text-white-50">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </span>

                                                </a><a href="" class="btn btn-danger btn-circle">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                </a></td>
                                            </tr>
                                            <tr>
                                                <td>Wyroby drewniane</td>
                                                <td>15</td>
                                                <td>Import</td>
                                                <td>2.700 zł</td>
                                                <td><img width="200px" src=""/>
                                                  
                                                        <a href="" class="btn btn-info btn-circle">
                                                        <span class="icon text-white-50">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </span>
        
                                                        </a><a href="" class="btn btn-danger btn-circle">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        </a></td>


                                            </tr>
                                            <tr>
                                                <td>Przemysł hutniczy</td>
                                                <td>7</td>
                                                <td>Eksport</td>
                                                <td>500 zł</td>
                                                <td><img width="200px" src=""/>
                                                  
                                                        <a href="" class="btn btn-info btn-circle">
                                                        <span class="icon text-white-50">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </span>
        
                                                        </a><a href="" class="btn btn-danger btn-circle">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        </a></td>


                                            </tr>
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


