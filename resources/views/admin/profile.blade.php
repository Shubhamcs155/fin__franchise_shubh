@extends('admin.admin_master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{Session::get('success')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            
        @endif
        @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{Session::get('error')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            
        @endif
        <div class="row">
           
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-5">Profile Settings</h4>
                        <form action="{{route('admin.profileUpdate')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label>Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control input-rounded" placeholder="Name" value="{{auth()->user()->name}}">
                                @error('name')
                                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <input type="text"  class="form-control input-rounded" placeholder="Role" readonly value="Admin">
                            </div>
                            <div class="form-group">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control input-rounded" placeholder="Email" value="{{auth()->user()->email}}">
                                @error('email')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="phone" name="phone" class="form-control input-rounded" placeholder="Phone" value="{{auth()->user()->phone}}">
                            </div>
                            <div class="form-group">
                                <label>Avatar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input " name="image" id="inputGroupFile02">
                                    <label class="custom-file-label">Choose Photograph</label>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary outline-none"><i class="ti-check mr-2"></i>Submit</button>
                            </div>
                          
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-5">Change Password</h4>
                        <form action="{{route('admin.changePassword')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Current Password<span class="text-danger">*</span></label>
                                <input type="password" name="current_password"  class="form-control input-rounded" placeholder="Current Password">
                                @error('current_password')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>New Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control input-rounded" name="new_password" placeholder="New Password">
                                @error('new_password')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control input-rounded"  name="new_confirm_password" placeholder="Confirm Password">
                                @error('new_confirm_password')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary outline-none"><i class="ti-check mr-2"></i>Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('script')
<script>
   $(document).on('change', '.custom-file-input', function (event) {
    $(this).next('.custom-file-label').html(event.target.files[0].name);
})
</script>
    
@endsection