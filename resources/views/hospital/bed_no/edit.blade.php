@extends('registration/register_master_page')


@section('content')

    {!! Form::model($bed_no_info,['method' =>'PUT', 'url' => ["hospital-bed-no",$bed_no_info->id],'id'=>'foo', 'data-toggle' => 'form-ajax', 'data-url' => 'No']) !!}

    @include('hospital.bed_no._form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop