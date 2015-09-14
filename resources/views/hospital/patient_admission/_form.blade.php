<div class="col-md-4 form_box">


    <div class="form-group">

        {!! Form::label('patient_id','Patient ID') !!}

        <div class="input-group">

            {!! Form::text('patient_id',null, ['id' => 'patient_id', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Patient ID', 'maxlength' => '9', 'required' => 'required' ]) !!}

            <span class="input-group-btn">
                    <button type="button" id="patient_id_search" class="btn btn-info">Search</button>
            </span>
        </div>

    </div>

    <div class="form-group">

        {!! Form::label('doctor_id','Doctor Name') !!}

        {!! Form::select('doctor_id',$doctors_list, null, ['id' => 'doctor_id', 'class' =>'form-control chosen', 'autocomplete' => 'off', 'placeholder' => 'Enter Doctor Name', 'maxlength' => '9', 'required' => 'required' ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('reason_of_admission','Reason Of Admission') !!}

        {!! Form::text('reason_of_admission',null, ['id' => 'reason_of_admission', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Reason Of Admission', 'maxlength' => '50', 'required' ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('bed_id','Bed No') !!}

        {!! Form::select('bed_id',$bed_list,null, ['id' => 'bed_id', 'class' =>'form-control chose', 'autocomplete' => 'off', 'placeholder' => 'Enter Relative\'s Mobile' ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('care_of','Care of') !!}

        {!! Form::text('care_of',null, ['id' => 'care_of', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Care of', 'maxlength' => '50']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('relation_with_patient','Relation With Patient') !!}

        {!! Form::text('relation_with_patient',null, ['id' => 'relation_with_patient', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Relation of Patient', 'maxlength' => '50']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('relatives_address','Relative\'s Address') !!}

        {!! Form::textarea('relatives_address',null, ['rows' => '3', 'id' => 'relatives_address', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Relative\'s Address']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('relatives_mobile','Relative\'s Mobile') !!}

        {!! Form::text('relatives_mobile',null, ['id' => 'relatives_mobile', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Relative\'s Mobile']) !!}

    </div>



{!! Form::submit($submit_button,['class' => 'btn btn-info'])!!}