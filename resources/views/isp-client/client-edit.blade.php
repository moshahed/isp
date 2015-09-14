@extends('isp-header.isp-master-page')



@section('content')

    {!! Form::model($client_info,['method' =>'PUT', 'url' => ["client-name",$client_info->id],'data-toggle' => 'form-ajax', 'id'=>'foo', 'data-url' => 'Yes']) !!}

    @include('isp-client._form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop