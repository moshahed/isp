<div class="col-md-4 form_box">


    <div class="form-group">

        {!! Form::label('group_name','Group Name') !!}

        {!! Form::text('group_name',null, ['id' => 'group_name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Investigation Group Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min1", 'data-validation-allowing' => "- _" ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('heading_name','heading_name') !!}

        {!! Form::text('heading_name',null, ['id' => 'heading_name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Heading Name']) !!}

    </div>


    {!! Form::submit($submit_button,['class' => 'btn btn-info'])!!}