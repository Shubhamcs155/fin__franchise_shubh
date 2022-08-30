@extends('franchise.franchise_master')
@section('reqstylesheets')
<link href="{{asset('plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet')}}">
@endsection

@section('content')

<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Instructors</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Profile</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BJ4IN1</td>
                                    <td>Tiger Nixon</td>
                                    <td><a href="#">Link</a></td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>BJ4IN2</td>
                                    <td>Garrett Winters</td>
                                    <td><a href="#">Link</a></td>
                                    <td>2012/02/29</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>BJ4IN3</td>
                                    <td>Ashton Cox</td>
                                    <td><a href="#">Link</a></td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>BJ4IN4</td>
                                    <td>Cedric Kelly</td>
                                    <td><a href="#">Link</a></td>
                                    <td>2011/04/25</td>
                                    <td>$990,800</td>
                                </tr>
                                <tr>
                                    <td>BJ4IN5</td>
                                    <td>Airi Satou</td>
                                    <td><a href="#">Link</a></td>
                                    <td>2012/05/10</td>
                                    <td>$110,800</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Profile</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('reqscripts')
    <script src="{{asset('plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
@endsection