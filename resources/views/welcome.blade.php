@extends('layout')

@section('content')
    <div class="row">
        <h1>Welcome to my website</h1>
        <p>We are creating something beautiful today.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <h2>Sign Up</h2>
        {!! Html::ul($errors->all(), array('class'=>'errors')) !!}

        {!! Form::open(array('url' => 'signup','class'=>'form-inline')) !!}
        <div class="form-group">
            {!! Form::label('first_name', 'First Name',array('class' => 'form-label')) !!}
            {!! Form::text('first_name',null,array('class' => 'form-control')) !!}
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            {!! Form::label('last_name','Last Name',array('class' => 'form-label')) !!}
            {!! Form::text('last_name',null,array('class' => 'form-control')) !!}
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            {!! Form::label('dob','Date of Birth', array('class' => 'form-label')) !!}
            {!! Form::date('dob','') !!}
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            {!! Form::label('gender','I Am',array('class' => 'form-label') ) !!}
            {!! Form::checkbox('gender', 'Male',null,array('class' => 'form')) !!}
            {!! Form::label('gender','Male') !!}
            {!! Form::checkbox('gender', 'Female',null,array('class' => 'form')) !!}
            {!! Form::label('gender','Female') !!}
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            {!! Form::label('email', 'E-Mail Address',array('class' => 'form-label')) !!}
            {!! Form::text('email','', array('class' => 'form-control')) !!}
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            {!! Form::label('password', 'Password',array('class' => 'form-label')) !!}
            {!! Form::password('password', array('class' => 'form-control')) !!}
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
            {!! Form::label('','',array('class' => 'form-label')) !!}
            {!! Form::submit('Sign Up' , array('class' => 'btn btn-primary form-control')) !!}
        </div>

        {!! Form::close() !!}
    </div>

@stop

@section('footer')

@stop
