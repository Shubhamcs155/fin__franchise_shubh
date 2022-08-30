@extends('admin.admin_master')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-5">Enroll Student</h4>
                        <div class="form-validation">
                            <form class="form-valide">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                            
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" id="val-email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phone No</label>
                                            <input type="phone" class="form-control" placeholder="Phone No.">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        
                                           
                                            <div class="form-group col-md-4">
                                                <label>Date of Birth</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Gender</label>
                                                <select id="inputState" class="form-control">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            
                                        

                                    </div>
                              
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Zip</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">Check me out</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark">Enroll</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('script')
    <script src="{{asset('./plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="{{asset('./plugins/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="{{asset('./plugins/jquery-asColorPicker-master/libs/jquery-asColor.js')}}"></script>
    <script src="{{asset('./plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js')}}"></script>
    <script src="{{asset('./plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js')}}"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{asset('./plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="{{asset('./plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('./plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <script src="{{asset('./js/plugins-init/form-pickers-init.js')}}"></script>
    

    <script src="{{asset('./plugins/validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('./plugins/validation/jquery.validate-init.js')}}"></script>
@endsection