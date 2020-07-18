@extends('layouts.app')
@section('content')
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Student</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update',$student->id) }}" method="POST">
    	@csrf
    	@method('PUT')

    	<div class="row" style="padding: 25px;">	
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Name</strong>
	                <input type="text" name="name" class="form-control" placeholder="Name" value="{{$student->name}}">
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Address</strong>
	                <textarea class="form-control" style="height:150px" name="address" placeholder="Address">{{$student->address}}</textarea>
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Mobile No</strong>
	                <input type="text" name="mobile_number" class="form-control" placeholder="Mobile No" value="{{$student->mobile_number}}">
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Telephone</strong>
	                <input type="text" name="telephone_number" class="form-control" placeholder="Telephone" value="{{$student->telephone_number}}">
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>School Name</strong>
	                <input type="text" name="school_name" class="form-control" placeholder="School Name" value="{{$student->school_name}}">
	            </div>
	        </div>
	        <div class="col-xs-6 col-sm-6 col-md-6">
	            <div class="form-group">
	                <strong>Std/Class</strong>
	                <select name="class" class="form-control">
	                	@foreach([1,2,3,4,5,6,7,8,9,10,11,12] as $std)
	                	<option value="{{$std}}" {{($student->class == $std ? "selected" : "")}}>{{$std}}</option>
	                	@endforeach
	                </select>
	            </div>
	        </div>
	        <div class="col-xs-6 col-sm-6 col-md-6">
	            <div class="form-group">
	                <strong>Medium</strong>
	                <select name="medium" class="form-control">
	                	<option value="gujarati" {{($student->medium == 'gujarati' ? "selected" : "")}}>Gujarati</option>
	                	<option value="english" {{($student->medium == 'english' ? "selected" : "")}}>English</option>
	                	<option value="hindi" {{($student->medium == 'hindi' ? "selected" : "")}}>Hindi</option>
	                </select>
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Birthdate</strong>
	                <input type="text" name="birthdate" class="form-control" placeholder="Birthdate" value="{{$student->birthdate}}">
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Admission Date</strong>
	                <input type="text" name="admission_date" class="form-control" placeholder="Admission Date" value="{{ $student->admission_date }}">
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
	                <button type="submit" class="btn btn-primary">Submit</button>
	        </div>
	    </div>
    </form>
@endsection