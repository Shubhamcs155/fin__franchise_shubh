@extends('franchise.franchise_master')
@section('reqstylesheets')
        
@endsection
@section('content')
    <div class="container-fluid">
        <section style="background-color: #eee;">
            <div class="container py-5">
        
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="{{asset('images/logo.png')}}"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 115px;">
                                <h5 class="my-3">Ace Science Academy</h5>
                                <p class="text-muted mb-4">Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Franchise ID</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">BJ4F2</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Head Person</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Johnatan Smith</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Sub-Head Person</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Jon Doe</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Franchise</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Allen Kota</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">example@example.com</p>
                                    </div>
                                </div>
                                <hr>
                                {{-- <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(097) 234-5678</p>
                                    </div>
                                </div>
                                <hr> --}}
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Contact Nos.</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(098) 765-4321,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+91) 8324512980,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+91) 8021391231</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Status</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Active</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Agreement Duration</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">17-08-2021 to 11-05-2023</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Agreement Document</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><a href="#" style="text-decoration: underline;">Link</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('reqscripts')
    
@endsection