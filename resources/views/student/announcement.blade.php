@extends('student.student_master')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Subject:{{$announcement->data['message']['subject']}}</h4>
                        <br>
                        <br>
                        <p>
                            {{$announcement->data['message']['message']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection