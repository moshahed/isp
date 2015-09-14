@extends('registration/register_master_page')


@section('content')

    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['url' => 'patient-admission','id'=>'foo', 'role' => 'form', 'data-toggle' => 'form-aja', 'data-url' => 'Yes']) !!}

                @include('hospital.patient_admission._form',['submit_button' => 'Submit'])

            {!! Form::close() !!}

        </div>

            <!--Design End-->
    </div>

    <div id="ajax_loader"></div>

@stop