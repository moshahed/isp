@extends('registration/register_master_page')


@section('content')

    {!! Form::model($broker_info,['method' =>'PUT', 'url' => ["register-broker",$broker_info->id],'id'=>'foo', 'data-toggle' => 'form-ajax', 'data-url' => 'Yes']) !!}

    @include('registration.broker._form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop