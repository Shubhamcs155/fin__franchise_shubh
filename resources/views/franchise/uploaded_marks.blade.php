@extends('franchise.franchise_master')
@section('reqstylesheets')
<link href="{{asset('plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet')}}">
<style>
    span.badge {
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
                                    <th>Id</th>
                                    <th>Test Name</th>
                                    <th>Course</th>
                                    <th>Batch Id</th>
                                    <th>Instructor</th>
                                    <th>Upload Date</th>
                                    <th>Remark</th>
                                    <th>Status</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BJ4U1</td>
                                    <td>Week Test 1 May 2022</td>
                                    <td>Physics January 2022</td>
                                    <td>BJ4B1</td>
                                    <td>Mr. Jon Doe</td>
                                    <td>5/3/2022</td>
                                    <td>Something Remark</td>
                                    <td><span class="badge badge-success">Added</span></td>
                                    <td class="text-center"><a href="#" class="label label-info">Link</a> 
                                </tr>
                                <tr>
                                    <td>BJ4U3</td>
                                    <td>Month Test 2 June 2022</td>
                                    <td>Biology February 2021</td>
                                    <td>BJ4B3</td>
                                    <td>Ms. Jen Doe</td>
                                    <td>6/2/2022</td>
                                    <td>Some Remark</td>
                                    <td><span class="badge badge-danger">Pending</span></td>
                                    <td class="text-center"><a href="#" class="label label-info">Link</a> 
                                </tr>
                                <tr>
                                    <td>BJ4U4</td>
                                    <td>Week Test 4 December 2021</td>
                                    <td>Chemistry January 2021</td>
                                    <td>BJ4B6</td>
                                    <td>Mr. Jon Doe</td>
                                    <td>5/3/2022</td>
                                    <td>Some Remark</td>
                                    <td><span class="badge badge-success">Added</span></td>
                                    <td class="text-center"><a href="#" class="label label-info">Link</a> 
                                </tr>
                                <tr>
                                    <td>BJ4U6</td>
                                    <td>Month Test 5 August 2022</td>
                                    <td>Maths February 2021</td>
                                    <td>BJ4B10</td>
                                    <td>Mr. Vijay Kumar</td>
                                    <td>8/6/2022</td>
                                    <td>Some Remark</td>
                                    <td><span class="badge badge-danger">Pending</span></td>
                                    <td class="text-center"><a href="#" class="label label-info">Link</a> 
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Test Name</th>
                                    <th>Course</th>
                                    <th>Batch Id</th>
                                    <th>Instructor</th>
                                    <th>Upload Date</th>
                                    <th>Remark</th>
                                    <th>Status</th>
                                    <th>Download</th>
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