@extends('franchise.franchise_master')

@section('reqstylesheets')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <label class="col-lg-2 col-form-label" for="batch">Enter batch ID</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="batch" id="batch">
                        </div>
                        {{-- if batch name is not found it will show no batch exists --}}
                        <label class="col-lg-2 col-form-label" for="btest">Enter Test Name</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="btest" id="btest">
                        </div>
                        <button class="btn btn-primary btn-sm" onclick="checkbatch()">Add Marks</button>


                        {{-- this will check for existing test names for current batch and it will show student list with options for entering marks
                        with name and student id for that batch if test name isn't already existed otherwise it will show test name already exists for
                        that batch--}}
                    </div>
                    <div class="form-validation mt-3" id="frm" style="display: none;">
                        <hr>
                        <form class="form-valide" action="#" method="post" >
                            <div class="form-group row">
                                <label for="bid" class="col-lg-3 col-form-label">Batch ID</label>
                                <div class="col-lg-3 col-form-label">
                                    <input type="text" class="form-control" id="bid" placeholder="BJ3B2" name="bid" disabled>
                                </div>

                                <label class="col-lg-3 col-form-label" for="btestname">Test Name
                                </label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="btestname" placeholder="Week Test 1 - May JEE 2022" name="btestname" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="btestdate">Test Date<span class="text-danger">*</span></label>
                                <div class="col-lg-3">
                                    <input class="form-control" type="date" name="btestdate" id="btestdate" required>
                                </div>
                                <label class="col-lg-3 col-form-label" for="btotmarks">Total Marks<span class="text-danger">*</span></label>
                                <div class="col-lg-3">
                                    <input type="number" class="form-control" min="1" id="btotmarks" id="btotmarks" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="BJ4S1">BJ4S1 Zorina Abreu <span class="text-danger">*</span></label>
                                <div class="col-lg-2">
                                    <input type="number" class="form-control" name="BJ4S1" id="BJ4S1" placeholder="Enter Marks" required>
                                </div>
                                <label class="col-lg-4 col-form-label" for="BJ4S2">BJ4S2 Ying Alter<span class="text-danger">*</span></label>
                                <div class="col-lg-2">
                                    <input type="number" class="form-control" name="BJ4S2" id="BJ4S2" placeholder="Enter Marks" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="BJ4S3">BJ4S3 Mayank Agrawal <span class="text-danger">*</span></label>
                                <div class="col-lg-2">
                                    <input type="number" class="form-control" name="BJ4S3" id="BJ4S3" placeholder="Enter Marks" required>
                                </div>
                                <label class="col-lg-4 col-form-label" for="BJ4S4">BJ4S4 Harshit Jain<span class="text-danger">*</span></label>
                                <div class="col-lg-2">
                                    <input type="number" class="form-control" name="BJ4S4" id="BJ4S4" placeholder="Enter Marks" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="BJ4S5">BJ4S5 Rohit Sharma <span class="text-danger">*</span></label>
                                <div class="col-lg-2">
                                    <input type="number" class="form-control" name="BJ4S5" id="BJ4S5" placeholder="Enter Marks" required>
                                </div>
                                <label class="col-lg-4 col-form-label" for="BJ4S6">BJ4S6 Akshar Patel<span class="text-danger">*</span></label>
                                <div class="col-lg-2">
                                    <input type="number" class="form-control" name="BJ4S6" id="BJ4S6" placeholder="Enter Marks" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form-validation mt-3" id="msg" style="display: none;">Batch not found or batch is ended.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('reqscripts')
<script>
    // code to be run by ajax query to fetch current batch deatils by batch id
    // then according to result show proper form or not found message
    function checkbatch() {
        let foundbatch = 1;
        let frm = document.getElementById("frm");
        let msg = document.getElementById("msg");
        if (foundbatch == 1) {
            frm.style.display = "block";
            msg.style.display = "none";
        } else {
            frm.style.display = "none";
            msg.style.display = "block";
        }
    }
</script>
<script src="{{asset('plugins/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/validation/jquery.validate-init.js')}}"></script>
@endsection