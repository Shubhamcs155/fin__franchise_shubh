@extends('admin.admin_master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                 
                    <div class="card-body">
                      @if (Session::has('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session::get('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                          
                      @endif
                        <form action="{{route('admin.announcement')}}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Subject:</label>
                              <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="-">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">To:</label>
                              <select class="form-control" name="to" id="exampleFormControlSelect1">
                                <option value="students">Students</option>
                                <option value="instructors">Instructors</option>
                                <option value="franchises">Franchises</option>
                                <option value="all">All</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Message:</label>
                              <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Send</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection