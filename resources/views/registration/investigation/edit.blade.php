@extends('registration/register_master_page')


@section('content')

    {!! Form::model($investigation_info,['method' =>'PUT', 'url' => ["register-investigation",$investigation_info->id],'id'=>'foo', 'data-toggle' => 'form-ajax', 'data-url' => 'No']) !!}

    @include('registration.investigation._form',['submit_button' => 'Update'])

    {!! Form::close() !!}

@stop