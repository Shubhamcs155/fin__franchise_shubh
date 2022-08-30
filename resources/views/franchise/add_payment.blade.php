>

@extends('franchise.franchise_master')
@section('reqstylesheets')
<link href="{{asset('plugins/jquery-steps/css/jquery.steps.css')}}" rel="stylesheet">
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
                                <label class="col-lg-4 col-form-label" for="tid">Transaction Id<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="tid" name="tid" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="tmethod">Method <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="tmethod" name="tmethod" required>
                                        <option value="">Please select</option>
                                        <option value="upi">UPI</option>
                                        <option value="bt">Bank Transer</option>
                                        <option value="ck">Check</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="tperson">Person<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="tperson" name="tperson" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="tamt">Amount <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" min="0" id="tamt" name="tamt" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="tdate">Date <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" id="tdate" name="tdate" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="tstatus">Status <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="tstatus" name="tstatus" required>
                                        <option value="">Please select</option>
                                        <option value="success">Success</option>
                                        <option value="pend">Pending</option>
                                        <option value="fail">Failed</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="treceit">Upload Receit <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="file" class="form-control" id="treceit" name="treceit" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="tremark">Remark<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" id="tremark" name="tremark" rows="5" placeholder="Salary" maxlength="100" required></textarea>
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
</div

@endsection

@section('reqscripts')
<script src="{{asset('plugins/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/validation/jquery.validate-init.js')}}"></script>
@endsection