<div class="col-md-4 form_box">


    <div class="form-group">

        {!! Form::label('patient_name','Patient Name') !!}

        {!! Form::text('patient_name',null, ['id' => 'patient_name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Patient Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('patient_mobile_no','Patient Mobile No') !!}

        <div class="input-group">
            <span class="input-group-btn">
                <button id="mobile_icon_button" type="button" class="btn btn-info">&nbsp;<i class="glyphicon glyphicon-phone-alt"></i></button>
            </span>

            {!! Form::text('mobile',null ,['class'=>'numeric_field form-control', 'id' => 'mobile', 'autocomplete' => 'off', 'placeholder' => 'Enter Mobile No', 'required' => 'required', 'maxlength' => '11' ]) !!}

        </div>
    </div>


    <div class="form-group">

        {!! Form::label('date_of_birth','Date of Birth')!!}

        {!! Form::text('date_of_birth',null,[ 'id' => 'date_of_birth', 'class' => 'form-control start_end_date datepicker', 'placeholder' => 'yyyy-mm-dd', 'autocomplete' => 'off',  'data-validation' => "date", 'data-validation-format' => "yyyy-mm-dd" ]) !!}


        {{ $errors->first('date_of_birth') }}
    </div>


    <div class="form-group">

        {!! Form::label('blood_group','Blood Group') !!}

        {!! Form::select('blood_group',['Select Blood Group'] + $blood_group,null,['class' => 'form-control'])!!}

    </div>

    <div class="form-group">

        {!! Form::label('male','Male') !!}
        {!! Form::radio('gender', 'Male', true, ['class' => 'form-contro', 'id' => "male"])!!} &nbsp;

        {!! Form::label('female','Female') !!}
        {!! Form::radio('gender', 'Female',null, ['class' => 'form-contro', 'id' => "female"])!!} &nbsp;

    </div>


    <div class="form-group">

        {!! Form::label('email','Email ') !!}

        <div class="input-group">
                <span class="input-group-btn">
                    <button id="mobile_icon_button" type="button" class="btn btn-info">&nbsp;<i class="glyphicon glyphicon-envelope"></i></button>
                </span>

            {!! Form::email('email',null ,[ 'class'=>'form-control', 'id' => 'email', 'autocomplete' => 'off', 'placeholder' => 'Enter Email', 'data-validation' => "email", 'data-validation-optional' => "true" ]) !!}

        </div>

    </div>

    <div class="form-group">

        {!! Form::label('fathers_name','Father\'s Name') !!}

        {!! Form::text('fathers_name',null ,['class'=>'form-control', 'id' => 'fathers_name', 'autocomplete' => 'off', 'placeholder' => 'Enter Fathers Name' ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('mothers_name','Mother\'s Name') !!}

        {!! Form::text('mothers_name',null ,['class'=>'form-control', 'id' => 'mothers_name', 'autocomplete' => 'off', 'placeholder' => 'Enter Mothers Name' ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('spouse_name','Spouse Name') !!}

        {!! Form::text('spouse_name',null ,['class'=>'form-control', 'id' => 'spouse_name', 'autocomplete' => 'off', 'placeholder' => 'Enter Spouse Name' ]) !!}

    </div>


    <div class="form-group">
        {!! Form::label('address','Address')!!}

        {!! Form::textarea('address',null,['id' => 'address', 'class' => 'form-control', 'placeholder' => "Enter Patient Address", 'autocomplete' => 'off', 'rows'=>'3']) !!}

    </div>


    {!! Form::submit($submit_button,['class' => 'btn btn-info'])!!}