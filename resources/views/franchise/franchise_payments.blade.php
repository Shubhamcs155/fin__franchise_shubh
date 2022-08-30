@extends('franchise.franchise_master')
@section('reqstylesheets')
<link href="{{asset('plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet')}}">
<style>
    span.badge,a.badge {
        font-size: 13px;
    }
</style>
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
                                    <th>Payment Id</th>
                                    <th>Transaction Id</th>
                                    <th>Method</th>
                                    <th>Person</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Remarks</th>
                                    <th>Status</th>
                                    <th>Receit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BJ4P23</td>
                                    <td>TR4533343</td>
                                    <td>UPI</td>
                                    <td>Mr. Jon Doe</td>
                                    <td>50000</td>
                                    <td>23/4/2020</td>
                                    <td>Salary</td>
                                    <td><span class="badge badge-info">Pending</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>BJ4P23</td>
                                    <td>TR4533343</td>
                                    <td>Net Banking</td>
                                    <td>Mr. Jon Doe</td>
                                    <td>50000</td>
                                    <td>23/4/2020</td>
                                    <td>Salary</td>
                                    <td><span class="badge badge-danger">Failed</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>BJ4P23</td>
                                    <td>TR4533343</td>
                                    <td>Bank Transfer</td>
                                    <td>Mr. Jon Doe</td>
                                    <td>50000</td>
                                    <td>23/4/2020</td>
                                    <td>Salary</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                    <td><a href="#" class="badge badge-info">Download</a></td>
                                </tr>
                                <tr>
                                    <td>BJ4P25</td>
                                    <td>TR4533346</td>
                                    <td>Check</td>
                                    <td>Ms. Jen Doe</td>
                                    <td>50000</td>
                                    <td>23/5/2020</td>
                                    <td>Salary</td>
                                    <td><span class="badge badge-success">Success</span></td>
                                    <td><a href="#" class="badge badge-info">Download</a></td>
                                    <
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Payment Id</th>
                                    <th>Transaction Id</th>
                                    <th>Method</th>
                                    <th>Person</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Remarks</th>
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