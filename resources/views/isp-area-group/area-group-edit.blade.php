@extends('isp-header.isp-master-page')



@section('content')

    {!! Form::model($group_info,['method' =>'PUT', 'url' => ["area-group",$group_info->id],'data-toggle' => 'form-ajax', 'id'=>'foo', 'data-url' => 'Yes']) !!}

    @include('isp-area-group._form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop