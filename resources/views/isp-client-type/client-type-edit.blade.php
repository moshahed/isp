@extends('isp-header.isp-master-page')



@section('content')

    {!! Form::model($client_info,['method' =>'PUT', 'url' => ["client-type",$client_info->id],'data-toggle' => 'form-ajax', 'id'=>'foo', 'data-url' => 'Yes']) !!}

    @include('isp-client-type._form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop