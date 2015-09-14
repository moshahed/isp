@extends('registration/register_master_page')


@section('content')

    <div class="row">
        <div class="col-md-3 form_box">

            {!! Form::open(['url' => 'register-patient','id'=>'foo', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'myprint']) !!}

            <div class="form-group">

                {!! Form::label('group_name','Investigation Group') !!}

                {!! Form::select('group_name',[''=>'Select Group Name']+$group_name,null,['class' => 'form-control chosen', 'id' => 'category', 'onchange' => 'Diagnostic.categoryPopulate({ url: "investigation-trn", select: this}) '])!!}

            </div>

            <div class="form-group">

                {!! Form::label('investigation_name','Investigation Name') !!} <span class="loading"></span>

                <div id="subcategory">
                    {{--  {!! Form::select('investigation_name',[''],null,['class' => 'form-control chosen', 'id' => 'subcategory'])!!}--}}
                </div>

            </div>


            <div class="form-group" id="display_speciality" style="color:red; height:40px;">

                Display Speciality

            </div>

            <div class="form-group">

                {!! Form::label('doctor_id','Doctor Name') !!}

                {!! Form::select('doctor_id',$dr_list,null,['class' => 'form-control chosen', 'id' => 'doctor_id'])!!}

            </div>


            <div class="form-group">

                {!! Form::label('patient_id','Patient ID') !!}

                <div class="input-group">
                    {!! Form::text('patient_id',null,['class' => 'form-control numeric_field', 'id' => 'patient_id'])!!}

                    <span class="input-group-btn">
                        <button type="button" id="patient_id_search" class="btn btn-info">Search</button>
                    </span>
                </div>



            </div>


            <div class="form-group">

                {!! Form::label('rf_id','RF Name') !!}

                {!! Form::select('rf_id',[ '' => 'Select RF'] +  $rf_list,null,['class' => 'form-control chosen', 'id' => 'rf_id'])!!}

            </div>



            {!! Form::close() !!}


        </div>

        <!--Design End-->
    </div>

    <div id="ajax_loader"></div>

    <script>

        var drSpeciality = {!! $dr_speciality !!}

    </script>

@stop