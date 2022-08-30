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
                    <h4 class="card-title">All Batches</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Profile</th>
                                    <th>Admission Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BJ4S1</td>
                                    <td><a href="#">Jon Doe</a></td>
                                    <td>12/1/2022</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    
                                </tr>
                                <tr>
                                    <td>BJ4S3</td>
                                    <td><a href="#">Ms. Jen Doe</a></td>
                                    <td>6/2/2022</td>
                                    <td><span class="badge badge-danger">Not Active</span></td>
                                    
                                </tr>
                                <tr>
                                    <td>BJ4S4</td>
                                    
                                    <td><a href="#">Abc Xyz</a></td>
          
                                    <td>5/3/2022</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    
                                </tr>
                                <tr>
                                    <td>BJ4S10</td>
                                    <td><a href="#">Suresh Raina</a></td>
                                    <td>8/6/2022</td>
                                    <td><span class="badge badge-danger">Not Active</span></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Profile</th>
                                    <th>Admission Date</th>
                                    <th>Status</th>
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