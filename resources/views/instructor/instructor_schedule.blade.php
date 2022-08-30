@extends('instructor.instructor_master')
@section('required-stylesheets')
<link href="{{asset('plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Calendar</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box m-b-50">
                                <div id="calendar"></div>
                            </div>
                        </div>

                        <!-- end col -->
                        <!-- BEGIN MODAL -->
                        <div class="modal fade none-border" id="event-modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><strong>Event Details</strong></h4>
                                    </div>
                                    <div class="modal-body"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Add Category -->
                        <div class="modal fade none-border" id="add-category">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><strong>Add a category</strong></h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END MODAL -->
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
    </div>
</div>

@endsection
@section('required-scripts')    
    <script src="{{asset('plugins/fullcalendar/js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/plugins-init/fullcalendar-init.js')}}"></script>
@endsection