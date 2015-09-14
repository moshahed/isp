<div class="col-md-4 form_box">


    <div class="form-group">

        {!! Form::label('title','Title') !!}

        {!! Form::select('title',$title,null,['class' => 'form-control'])!!}

    </div>

    <div class="form-group">

        {!! Form::label('doctor_name','Doctor Name') !!}

        {!! Form::text('name',null, ['id' => 'doctor_name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Doctor Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('speciality','Speciality') !!}

        {!! Form::text('speciality',null, ['id' => 'speciality', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Speciality']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('mobile','Doctor Mobile No') !!}

        <div class="input-group">
            <span class="input-group-btn">
                <button id="mobile_icon_button" type="button" class="btn btn-info">&nbsp;<i class="glyphicon glyphicon-phone-alt"></i></button>
            </span>

            {!! Form::text('mobile',null ,['class' => 'numeric_field form-control', 'id' => 'mobile', 'autocomplete' => 'off', 'placeholder' => 'Enter Mobile No', 'required' => 'required', 'maxlength' => '11' ]) !!}

        </div>
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

        {!! Form::label('chamber','Chamber') !!}

        {!! Form::select('chamber',$chamber,null,[ 'id' => 'chamber', 'class' => 'form-control'])!!}

    </div>

    <div class="form-group">
        {!! Form::label('address','Address')!!}

        {!! Form::textarea('address',null,['id' => 'address', 'class' => 'form-control', 'placeholder' => "Enter Doctor Address", 'autocomplete' => 'off', 'rows'=>'3']) !!}

    </div>


    {!! Form::submit($submit_button,['class' => 'btn btn-info'])!!}