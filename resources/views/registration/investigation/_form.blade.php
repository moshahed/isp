<div class="col-md-4 form_box">


    <div class="form-group">

        {!! Form::label('group_id','Group Name') !!}


        {!! Form::select('group_id',['Select Group'] + $investigation_group_list, null, ['class' => 'form-control chosen', 'id' => 'group_id'])!!}

    </div>


    <div class="form-group">

        {!! Form::label('name','Investigation Name') !!}

        {!! Form::text('name',null, ['id' => 'name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Investigation Group Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min1", 'data-validation-allowing' => "- _" ]) !!}

    </div>


    <div class="form-group">

        {!! Form::label('amount','Amount') !!}

        {!! Form::text('amount',null, ['id' => 'amount', 'class' =>'form-control numeric_field', 'autocomplete' => 'off', 'placeholder' => 'Enter Amount', 'maxlength' => '10', 'required' => 'required', 'data-validation' => "float", 'data-validation-length' => "min1" ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('rf_amount','RF Amount') !!}

        {!! Form::text('rf_amount',null, ['id' => 'rf_amount', 'class' =>'form-control numeric_field', 'autocomplete' => 'off', 'placeholder' => 'Enter RF Amount', 'maxlength' => '10', 'required' => 'required', 'data-validation' => "float", 'data-validation-length' => "min1" ]) !!}

    </div>


    <div class="form-group">

        {!! Form::label('heading_name','Heading Name') !!}

        {!! Form::text('heading_name',null, ['id' => 'heading_name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Heading Name']) !!}

    </div>


    {!! Form::submit($submit_button,['class' => 'btn btn-info'])!!}