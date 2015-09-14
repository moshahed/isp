<div class="col-md-4 form_box">


    <div class="form-group">

        {!! Form::label('bed_type','Bed Type') !!}

        {!! Form::text('name',null, ['id' => 'bed_type', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Bed Type', 'maxlength' => '20', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

    </div>


    {!! Form::submit($submit_button,['class' => 'btn btn-info'])!!}