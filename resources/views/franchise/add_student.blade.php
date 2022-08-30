@extends('franchise.franchise_master')
@section('reqstylesheets')
<link href="{{asset('plugins/jquery-steps/css/jquery.steps.css')}}" rel="stylesheet">
@endsection
@section('content')


<div class="container">
</div>
@endsection

@section('reqscripts')
<script src="{{asset('plugins/jquery-steps/build/jquery.steps.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/plugins-init/jquery-steps-init.js')}}"></script>
@endsection