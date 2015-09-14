@extends('isp-header.isp-master-page')



@section('content')

    {!! Form::model($area_info,['method' =>'PUT', 'url' => ["area-name",$area_info->id],'data-toggle' => 'form-ajax', 'id'=>'foo', 'data-url' => 'Yes']) !!}

    @include('isp-area._form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop