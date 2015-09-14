@extends('isp-header.isp-master-page')



@section('content')

    {!! Form::model($package_info,['method' =>'PUT', 'url' => ["package-name",$package_info->id],'data-toggle' => 'form-ajax', 'id'=>'foo', 'data-url' => 'Yes']) !!}

    @include('isp-packages._form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop