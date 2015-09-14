<div class="col-md-10 form_box">


    <!--<div class="form-group">-->

        {!! Form::label('package_name','Package Name') !!}

        {!! Form::text('name',null, ['id' => 'package_name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Group Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}
        
        {!! Form::label('package_desc','Package Description') !!}

        {!! Form::text('description',null, ['id' => 'package_desc', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Description', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}
        
        {!! Form::label('amount_name','Amount') !!}

        {!! Form::text('amount',null, ['id' => 'amount_name', 'class' =>'form-control numeric_field', 'autocomplete' => 'off', 'placeholder' => 'Enter Amount', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length numeric_field", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

    <!--</div>-->
    <br>
    {!! Form::submit($submit_button,['class' => 'btn btn-primary'])!!}