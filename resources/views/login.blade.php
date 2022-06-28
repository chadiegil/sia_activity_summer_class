@extends('base')
@section('content')

    <div class="row mt-5 ">
        <div class="col-md-3 offset-md-5">
            <h1>User login</h1>
            {!! Form::open(['url'=>'/login','method'=>'POST']) !!}


            <div class="mb-3">
                {!! Form::label('email', "Email") !!}
                <br>
                {!! Form::email('email', null, ['class'=>'form-controll']) !!}
            </div>
            <div class="mb-3">
                {!! Form::label('password', "Password") !!}
                <br>

                {!! Form::password('password', null, ['class'=>'form-controll']) !!}
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>

        {!! Form::close() !!}
        </div>
    </div>

@endsection
