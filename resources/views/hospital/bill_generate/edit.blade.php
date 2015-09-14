@extends('registration/register_master_page')


@section('content')

    <div class="row">
        <div class="col-md-12">

            {!! Form::model($patient_admission_info, ['method' => 'PUT', 'url' => ['patient-admission',$patient_admission_info->id],'id'=>'foo', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'Yes']) !!}

                @include('hospital.patient_admission._form',['submit_button' => 'Update'])

            {!! Form::close() !!}

        </div>

            <!--Design End-->
    </div>

    <div id="ajax_loader"></div>

@stop