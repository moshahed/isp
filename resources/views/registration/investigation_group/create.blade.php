@extends('registration/register_master_page')


@section('content')

    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['url' => 'register-investigation-group','id'=>'foo', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'No']) !!}

                @include('registration.investigation_group._form',['submit_button' => 'Submit'])

            {!! Form::close() !!}
        </div>

    </div>

    <div id="ajax_loader"></div>

@stop