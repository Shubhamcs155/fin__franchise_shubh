@extends('franchise.franchise_master')
@section('reqstylesheets')

<link href="{{asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
<!-- Page plugins css -->
<link href="{{asset('plugins/clockpicker/dist/jquery-clockpicker.min.css')}}" rel="stylesheet">
<!-- Color picker plugins css -->
<link href="{{asset('plugins/jquery-asColorPicker-master/css/asColorPicker.css')}}" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="{{asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<!-- Daterange picker plugins css -->
<link href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
<link href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="#" method="post" id="addins">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="fname">Frist Name <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name.." required>
                                </div>
                                <label class="col-lg-3 col-form-label" for="sname">Second Name <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter second name.." required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="email">Email <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Your valid email.." required>
                                </div>

                                <label class="col-lg-3 col-form-label" for="mob">Mobile Number <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="mob" name="mob" placeholder="Your valid mobile number" required>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="username">Username <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                </div>
                                <label class="col-lg-3 col-form-label" for="password">Password <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Choose a safe one.." required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label>Classes he/she teaches</label>
                                    <div class="form-group container">
                                        <div class="row">
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="1" value="1" checked>First
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="2" value="2">Second
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="3" value="3">Third
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="4" value="4">Fourth
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row my-2">
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="5" value="5">Fifth
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="6" value="6">Sixth
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="7" value="7">Seventh
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="8" value="8">Eight
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label>Days on which Instructor will teach</label>
                                    <div class="form-group container">
                                        <div class="row">
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="mon" onclick="addTimes(this)">Monday
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="tue" onclick="addTimes(this)">Tuesday
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="wed" onclick="addTimes(this)">Wednesday
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="thu" onclick="addTimes(this)">Thursday
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row my-2">
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="fri" onclick="addTimes(this)">Friday
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="sat" onclick="addTimes(this)">Saturday
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="sun" onclick="addTimes(this)">Sunday
                                                </label>
                                            </div>
                                            <div class="col-sm font-weight-bold">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr> 
                            <div class="form-group row">
                                <div class="row col-12">
                                    <div class="col-sm text-center"
                                        style="border-top:1px solid black;border-bottom:1px solid black;padding-bottom:3px;padding-top:3px;">
                                        <b>Day</b>
                                    </div>
                                    <div class="col-sm text-center"
                                        style="border-top:1px solid black;border-bottom:1px solid black;padding-bottom:3px;padding-top:3px;">
                                        <b>From</b>
                                    </div>
                                    <div class="col-sm text-center"
                                        style="border-top:1px solid black;border-bottom:1px solid black;padding-bottom:3px;padding-top:3px;">
                                        <b>Till</b>
                                    </div>
                                </div>
                            </div>

                            <!-- time rows -->
                            <div class="form-group row" id="montr">
                                <div class="row col-12">
                                    <div class="col-sm text-center">
                                        <b>Monday</b>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="monst" name="monst"> <span class="input-group-append"><span
                                                    class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="moned" name="moned"> <span class="input-group-append"><span
                                                    class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr id="monhr">

                            <div class="form-group row" id="tuetr">
                                <div class="row col-12">
                                    <div class="col-sm text-center">
                                        <b>Tuesday</b>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="tuest" name="tuest"> <span class="input-group-append"><span
                                                    class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="tueed" name="tueed"> <span class="input-group-append"><span
                                                    class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr id="tuehr">

                            <div class="form-group row" id="wedtr">
                                <div class="row col-12">
                                    <div class="col-sm text-center">
                                        <b>Wednesday</b>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="wedst" name="wedst"> <span class="input-group-append"><span
                                                    class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="weded" name="weded">
                                            <span
                                                class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr id="wedhr">

                            <div class="form-group row" id="thutr">
                                <div class="row col-12">
                                    <div class="col-sm text-center">
                                        <b>Thursday</b>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="thust" name="thust"> <span class="input-group-append"><span
                                                    class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="thued" name="thued"> <span
                                                class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr id="thuhr">

                            <div class="form-group row" id="fritr">
                                <div class="row col-12">
                                    <div class="col-sm text-center">
                                        <b>Friday</b>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="frist" name="frist"> <span class="input-group-append"><span
                                                    class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="fried" name="fried"> <span
                                                class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr id="frihr">


                            <div class="form-group row" id="sattr">
                                <div class="row col-12">
                                    <div class="col-sm text-center">
                                        <b>Saturday</b>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="satst" name="satst"> <span class="input-group-append"><span
                                                    class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="sated" name="sated"> <span
                                                class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr id="sathr">

                            <div class="form-group row" id="suntr">
                                <div class="row col-12">
                                    <div class="col-sm text-center">
                                        <b>Sunday</b>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" placeholder="24hr format" id="sunst" name="sunst"> <span class="input-group-append"><span
                                                    class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-sm text-center">
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control"placeholder="24hr format" id="suned" name="suned"> <span
                                                class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr id="sunhr">

                            {{-- <div class="form-group row">
                                <label class="col-lg-4 col-form-label"><a href="#">Terms &amp; Conditions</a> <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                    <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                        <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1" required> <span
                                            class="css-control-indicator"></span> I agree to
                                        the terms</label>
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('reqscripts')
<script src="{{asset('plugins/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/validation/jquery.validate-init.js')}}"></script>
<script src="{{asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<!-- Clock Plugin JavaScript -->
<script src="{{asset('plugins/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>

<script src="{{asset('js/plugins-init/form-pickers-init.js')}}"></script>
<script src="{{asset('js/franchise/add_ins.js')}}"></script>
@endsection