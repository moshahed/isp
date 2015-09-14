@extends('registration/register_master_page')


@section('content')

    {!! Form::model($bed_type_info,['method' =>'PUT', 'url' => ["hospital-bed-type",$bed_type_info->id],'id'=>'foo', 'data-toggle' => 'form-ajax', 'data-url' => 'No']) !!}

    @include('hospital/bed_type/_form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop