@extends('registration/register_master_page')


@section('content')

    {!! Form::model($doctor_info,['method' =>'PUT', 'url' => ["register-doctor",$doctor_info->id],'id'=>'foo', 'data-toggle' => 'form-ajax' ,'data-url' => 'No']) !!}

    @include('registration.doctor._form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop