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
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Course</th>
                                    <th>Instructor</th>
                                    <th>Capacity</th>
                                    <th>Admitted Students</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BJ4B1</td>
                                    <td>Jupyter</td>
                                    <td>6</td>
                                    <td>Science</td>
                                    <td>2020 Science</td>
                                    <td>Mr. Jon Doe</td>
                                    <td>100</td>
                                    <td>80</td>
                                    <td>23/4/2020</td>
                                    <td>24/4/2020</td>
                                    <td><span class="badge badge-danger">Ended</span></td>
                                </tr>
                                <tr>
                                    <td>BJ4B3</td>
                                    <td>Saturn</td>
                                    <td>7</td>
                                    <td>Maths</td>
                                    <td>2021 English</td>
                                    <td>Ms. Jon Doe</td>
                                    <td>60</td>
                                    <td>59</td>
                                    <td>23/4/2021</td>
                                    <td>24/4/2022</td>
                                    <td><span class="badge badge-danger">Ended</span></td>
                                </tr>
                                <tr>
                                    <td>BJ4B2</td>
                                    <td>Earth</td>
                                    <td>11</td>
                                    <td>Biology</td>
                                    <td>2022 Neet Biology</td>
                                    <td>Mr. Vijay Kumar</td>
                                    <td>150</td>
                                    <td>120</td>
                                    <td>21/1/2022</td>
                                    <td>22/1/2024</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>BJ4B4</td>
                                    <td>Galaxy</td>
                                    <td>12</td>
                                    <td>Biology</td>
                                    <td>2022 CBSE English</td>
                                    <td>Mr. Abc Pqr Xyz</td>
                                    <td>90</td>
                                    <td>85</td>
                                    <td>17/3/2022</td>
                                    <td>20/1/2023</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Course</th>
                                    <th>Instructor</th>
                                    <th>Capacity</th>
                                    <th>Admitted Students</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
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