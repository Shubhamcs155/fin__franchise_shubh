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
<link href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
<link href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    
                    <div class="form-validation">
                        <form class="form-valide" action="#" method="post">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="bname">Batch Name<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="bname" name="bname" required>
                                </div>
                                <label class="col-lg-3 col-form-label" for="bclass">Select Class<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <select class="form-control" id="bclass" name="bclass" required>
                                        <option value="">Please select</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="all">all</option>
                                    </select>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="bsubject">Select Subject<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <select class="form-control" id="bsubject" name="bsubject" required>
                                        <option value="">Please select</option>
                                        <option value="maths">Maths</option>
                                        <option value="sceince">Science</option>
                                        <option value="english">English</option>
                                    </select>
                                </div>
                                <label class="col-lg-3 col-form-label" for="binstructor">Select Course<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <select class="form-control" id="binstructor" name="binstructor" required>
                                        <option value="">Please select</option>
                                        <option value="BJ2CS23">May JEE Physics 2022</option>
                                        <option value="BJ2CS32">June NEET Biology 2023</option>
                                        <option value="BJ2CS21">July JEE Chemistry 2023</option>
                                        <option value="BJ2CS34">10th English 2022</option>
                                    </select>
                                </div>                                                   
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="binstructor">Select Instructor<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <select class="form-control" id="binstructor" name="binstructor" required>
                                        <option value="">Please select</option>
                                        <option value="BJ2IN1">Mr Vijay Kumar</option>
                                        <option value="BJ2IN2">Ms Vinaya Kumari</option>
                                        <option value="BJ2IN3">Mr Jon Doe</option>
                                        <option value="BJ2IN4">Ms Jen Doe</option>
                                    </select>
                                </div>           
                                <label class="col-lg-3 col-form-label" for="bslots">Total Slots<span class="text-danger">*</span></label>
                                <div class="col-lg-3">
                                    <input type="number" min="1" class="form-control" name="bslots" id="bslots" required>
                                </div>
                                
                            </div>

                            <div class="form-group row">  
                                <label class="col-lg-3 col-form-label" for="bdaterange">Batch Duration<span class="text-danger">*</span> </label>
                                <div class="col-lg-3">
                                    <input class="form-control input-daterange-datepicker" type="text" name="bdaterange" id="bdaterange" value=""
                                        required>
                                </div>                             
                                <label class="col-lg-3 col-form-label" for="bsttime">Start Time (24 hr format)<span class="text-danger">*</span> </label>
                                <div class="col-lg-3">
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control" id="bsttime" name="bsttime" required> <span
                                            class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="bedtime">End Time (24 hr format)<span class="text-danger">*</span> </label>
                                <div class="col-lg-3">
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control" id="bedtime" name="bedtime" required> <span
                                            class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                    </div>
                                </div>
                                <label class="col-lg-3 col-form-label" for="bhall">Batch Hall<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="bhall" name="bhall" required>
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="bfees">Total Fees<span class="text-danger">*</span></label>
                                <div class="col-lg-3">
                                    <input type="number" min="0" class="form-control" name="bfees" id="bfees" required>
                                </div>
                                <label class="col-lg-3 col-form-label" for="bbps">Bisjhintus Margin<span class="text-danger">*</span></label>
                                <div class="col-lg-3">
                                    <input type="number" min="0" max="100" class="form-control" name="bbps" id="bbps" required>
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="bips">Instructor Margin<span class="text-danger">*</span></label>
                                <div class="col-lg-3">
                                    <input type="number" min="0" max="100" class="form-control" name="bips" id="bips" required>
                                </div>
                            </div>

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
<script src="{{asset('plugins/moment/moment.js')}}"></script>
<script src="{{asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<!-- Clock Plugin JavaScript -->
<script src="{{asset('plugins/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="{{asset('plugins/jquery-asColorPicker-master/libs/jquery-asColor.js')}}"></script>
<script src="{{asset('plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js')}}"></script>
<script src="{{asset('plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js')}}"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="{{asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!-- Date range Plugin JavaScript -->
<script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script src="{{asset('js/plugins-init/form-pickers-init.js')}}"></script>
<script src="{{asset('plugins/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/validation/jquery.validate-init.js')}}"></script>
@endsection