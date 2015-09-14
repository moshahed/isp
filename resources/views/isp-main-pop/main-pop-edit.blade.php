@extends('isp-header.isp-master-page')



@section('content')

    {!! Form::model($pop_info,['method' =>'PUT', 'url' => ["main-pop",$pop_info->id],'data-toggle' => 'form-ajax', 'id'=>'foo', 'data-url' => 'Yes']) !!}

    @include('isp-main-pop._form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop