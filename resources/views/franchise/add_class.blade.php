
@extends('franchise.franchise_master')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <h5>Add Class</h5>
                        <form class="form-valide" action="#" method="post">                
                            <div class="form-group row">
                                <label for="std" class="col-lg-3 col-form-label">Enter Standard<span class="text-danger">*</span></label>
                                <div class="col-lg-3">
                                    <input type="number" min="1" name="std" id="std" class="form-control" required>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <h5>Add Subject</h5>
                        <form class="form-valide" action="#" method="post">   
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="form-check-label" for="sub">
                                        Enter Subject Name <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control" type="text" name="sub" id="sub" required>
                                </div>                                
                            </div>             
                            <div class="row my-3">
                                <div class="col-sm font-weight-bold">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="1" value="1">First
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
                            <div class="form-group row my-3">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Add Subject</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <h5>Add Course</h5>
                        <form class="form-valide" action="#" method="post">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="sel-class">Select Class<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="sel-class" name="sel-class" required>
                                        <Option value="">Please Select</Option>
                                        <option value="6">class 6</option>
                                        <option value="7">class 7</option>
                                        <option value="8">class 8</option>
                                        <option value="9">class 9</option>
                                        <option value="10">class 10</option>
                                        <option value="11">class 11</option>
                                        <option value="12">class 12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="sel-course">Select Subject <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="sel-course" name="sel-course" required>
                                        <option value="">Please Select</option>
                                        <option value="sc">Science </option>
                                        <option value="mt">Maths</option>
                                        <option value="hs">History</option>
                                        <option value="en">English</option>
                                        <option value="py">Python</option>
                                        <option value="cp">C++</option>
                                        <option value="ge">Geography</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="fname">Course Name <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" id="fname" name="fname" class="form-control" required>
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
<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
@endsection
