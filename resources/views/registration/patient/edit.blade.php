@extends('registration/register_master_page')


@section('content')

    {!! Form::model($patient_info,['method' =>'PUT', 'url' => ["register-patient",$patient_info->id],'data-toggle' => 'form-ajax', 'id'=>'foo', 'data-url' => 'Yes']) !!}

    @include('registration.patient._form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop