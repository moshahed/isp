@extends('isp-header.isp-master-page')



@section('content')

    {!! Form::model($secondary_pop,['method' =>'PUT', 'url' => ["secondary-pop",$secondary_pop->id],'data-toggle' => 'form-ajax', 'id'=>'foo', 'data-url' => 'Yes']) !!}

    @include('isp-secondary-pop._form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop