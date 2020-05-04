@extends('layouts.app')
@section('content')

<div class ="container">
@include('admin.navbar')
</div>
<br>


<div class="container">
    <ol class="breadcrumb">
    <li> <a href="{{ route('admin.index') }}">Dashboard</a> </li>
    <li><a href="{{ route('students.index') }}">
    <i class="fa fa-chevron-right" style="padding:2px; font-size:10px; width:20px;"></i>Students Page</a></li>
    <li class="active">
    <i class="fa fa-chevron-right" style="padding:2px; font-size:10px; width:20px;"></i>Update Data</li>
    </ol>
</div>

<div class="container">

@if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>



	<div class="container">

	{!! Form::model($student, array('route' => array('students.update', $student->id), 'method' => 'PUT')) !!}

	<div class="jumbotron">
    <div class="col-md-12">
       <table class="table">
                <thead>
                    <tr>

    <div class="row">
    <div class="col-sm-6">
    
        <h4>Last Created:</h4> <p class="lead"> {{ date('M j, Y h:ia', strtotime($student->created_at)) }}</p>
         
        </div>
        
        <div class="col-sm-6">
       <h4> Last Updated:</h4> <p class="lead"> {{ date('M j, Y h:ia', strtotime($student->updated_at)) }}</p>
        </div>   
    </div> 
    <br>
                      </tr>
                </thead>
                <tbody>

               <tr style="background-color: #fff;">
                     
            <td>

    <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
    	 {!! Form::open() !!}
		{{ Form::label('lastName', 'Last Name:') }}
		{{ Form::text('lastName', null, array('class'=>'form-control')) }}

			@if ($errors->has('lastName'))
            <span class="help-block">
                <strong>{{ $errors->first('lastName') }}</strong>
            </span>
        @endif
 	 </div>
			</td>
                            <td>
    <div class="form-group{{ $errors->has('otherNames') ? ' has-error' : '' }}">
		{{ Form::label('otherNames', 'Other Names:') }}
		{{ Form::text('otherNames', null, array('class'=>'form-control')) }}

		@if ($errors->has('otherNames'))
            <span class="help-block">
                <strong>{{ $errors->first('otherNames') }}</strong>
            </span>
        @endif
 	 </div>
                            </td>

                            <td>
    <div class="form-group{{ $errors->has('regNo') ? ' has-error' : '' }}">
		{{ Form::label('regNo', 'Reg. No:') }}
		{{ Form::text('regNo', null, array('class'=>'form-control')) }}

		@if ($errors->has('regNo'))
            <span class="help-block">
                <strong>{{ $errors->first('regNo') }}</strong>
            </span>
        @endif
 	</div>
                            </td>
                            <td>
        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
		{{ Form::label('phone', 'Phone Number:') }}
		{{ Form::text('phone', null, array('class'=>'form-control')) }}

		@if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
 	</div>
                            </td>
                            <td>
     <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
		{{ Form::label('gender', 'Gender:') }}
		{{ Form::text('gender', null, array('class'=>'form-control')) }}

		@if ($errors->has('gender'))
            <span class="help-block">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>
        @endif
 	</div>
                            </td>

                             <td>
     <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
		{{ Form::label('state', 'State of Origin:') }}
		{{ Form::text('state', null, array('class'=>'form-control')) }}

		@if ($errors->has('state'))
            <span class="help-block">
                <strong>{{ $errors->first('state') }}</strong>
            </span>
        @endif
 	</div>
                            </td>

                             <td>
     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		{{ Form::label('email', 'Email:') }}
		{{ Form::text('email', null, array('class'=>'form-control')) }}

		@if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
 	</div>
                            </td>
                        
                   </tr>
                </tbody>

            </table>
    </div>
    <br>
    <div class="row">
    <div class="col-sm-3">
    
        {!! Html::linkRoute('students.index', 'Cancel', array($student->id), array('class'=>'btn btn-danger btn-block')) !!}
    
        </div>
        
        <div class="col-sm-3">
            {{ Form::submit('Update Changes', ['class'=>'btn btn-success btn-block']) }}
    
        </div>
        
    </div> 
    </div> 
    
    
    {!! Form::close() !!}
</div>


@endsection