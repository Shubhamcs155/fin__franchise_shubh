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
                        <label class="col-lg-4 col-form-label" for="uid">Enter Upload ID</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="uid" id="uid">
                        </div>
                        <button class="btn btn-primary btn-sm">Mark as Done</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('reqscripts')
@endsection