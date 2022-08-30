@extends('instructor.instructor_master')
@section('content')
<div class="col-lg-12 my-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Upload Marksheet</h4>
            <div class="basic-form">
                <form>
                    <div class="form-group">
                        <input type="file" class="form-control-file">
                    </div>

                    <div class="form-group">
                        <label>Add Details</label>
                        <textarea class="form-control h-150px" rows="2" id="comment" name="marks_details"
                            required></textarea>
                    </div>

                    <button type="submit" class="btn mb-1 btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 my-3">
    <div class="card">
        <div class="card-body">
            
            <h4 class="card-title">Your Uploads</h4>
            <form>
                <div class="form-group text-center responsive">
                    <label for="stdate"><b>From &nbsp;</b></label>
                    <input type="date" name="stdate" id="stdate">
                    <label for="eddate"><b>Till &nbsp;</b></label>
                    <input type="date" name="eddate" id="eddate">
                    <button class="btn btn-primary btn-sm">Get Uploads</button>
                </div>
            </form>
           
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Upload date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>UFN1290</td>
                            <td>Batch-1 Marks test2</td>
                            <td>JEE Pahysics Marksheet Test 2010/3/21</td>
                            <td>2011/04/25</td>
                            <td><button type="button" class="btn mb-1 btn-info btn-sm">Download</button></td>
                        </tr>
                        <tr>
                            <td>UFN1395</td>
                            <td>Class Test 2 10th Class</td>
                            <td>Science Test marks dated 2021/9/20</td>
                            <td>2021/10/25</td>
                            <td><button type="button" class="btn mb-1 btn-info btn-sm">Download</button></td>
                        </tr>
                        <tr>
                            <td>UFN1510</td>
                            <td>Class Test 3 10th Class</td>
                            <td>Science Test marks dated 2021/7/15</td>
                            <td>2022/4/25</td>
                            <td><button type="button" class="btn mb-1 btn-info btn-sm">Download</button></td>
                        </tr>
                        <tr>
                            <td>UFN1034</td>
                            <td>Unit Test - 3 9th Class</td>
                            <td>English Unit Test marks dated 2022/8/1</td>
                            <td>2022/8/5</td>
                            <td><button type="button" class="btn mb-1 btn-info btn-sm">Download</button></td>
                        </tr>
                        <tr>
                            <td>UFN1034</td>
                            <td>Unit Test - 3 9th Class</td>
                            <td>English Unit Test marks dated 2022/8/1</td>
                            <td>2022/9/2</td>
                            <td><button type="button" class="btn mb-1 btn-info btn-sm">Download</button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Upload date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection