@extends('layouts.app')
@section('title',"Escritorio")
@section('content')
           <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                   <Div class="row"> <h1>Escritorio</h1></Div>
                </li>
                <hr>
            </ol>



            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">26 Tablas de datos!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/tablas">
                            <span class="float-left">Ver detalle</span>
                            <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                           </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 mb-3">
                    <div class="card text-white bg-secondary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">123 Usuarios del sistema!</div>
                        </div>
                        <div class="card-header"> <i class="fa fa-table"></i> Data Table Example</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="25%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">11 Empresas o entidades!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="empresas">
                            <span class="float-left">Ver detalle</span>
                            <span class="float-right">
                              <i class="fa fa-angle-right"></i>
                             </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">123 Usuarios del sistema!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/usuario">
                            <span class="float-left">Ver detalle</span>
                            <span class="float-right">
                                 <i class="fa fa-angle-right"></i>
                               </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-support"></i>
                            </div>
                            <div class="mr-5">13 New Tasks!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/tareas">
                            <span class="float-left">Ver detalle</span>
                                <span class="float-right">
                                 <i class="fa fa-angle-right"></i>
                             </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
           <div class="row">



           </div>
            <!-- Example DataTables Card-->
{{--            <div class="card mb-3">
                <div class="card-header"> <i class="fa fa-table"></i> Data Table Example</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>




                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>--}}
           <!-- Blank div to give the page height to preview the fixed vs. static navbar-->

           <!-- Logout Modal-->
           @include('layouts.logout_modal')
@endsection

@section('script')
  {{--  <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>--}}
    <script src="{{ asset('js/sb-admin-datatables.js') }}"></script>
@endsection
