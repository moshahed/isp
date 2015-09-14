<div class="col-md-4 form_box">


    <div class="form-group">

        {!! Form::label('bed_type_id','Bed Type') !!}

        {!! Form::select('bed_type_id',$bed_type_list,null,[ 'class' => 'form-control chosen', 'autocomplete' => 'off' ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('bed_no','Bed No') !!}

        {!! Form::text('name',null, ['id' => 'bed_no', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Bed No', 'maxlength' => '20', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('amount','Bed Amount') !!}

        {!! Form::text('amount',null, ['id' => 'amount', 'class' =>'form-control numeric_field', 'autocomplete' => 'off', 'placeholder' => 'Enter Bed Amount', 'maxlength' => '20', 'required' => 'required', 'data-validation' => "number", 'data-validation-length' => "min1" ]) !!}

    </div>


    {!! Form::submit($submit_button,['class' => 'btn btn-info'])!!}