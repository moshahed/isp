@extends('registration/register_master_page')


@section('content')

    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['url' => 'hospital-bed-no','id'=>'foo', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'No']) !!}

                @include('hospital.bed_no._form',['submit_button' => 'Submit'])

            {!! Form::close() !!}


        </div>

            <!--Design End-->
    </div>

    <div id="ajax_loader"></div>

@stop