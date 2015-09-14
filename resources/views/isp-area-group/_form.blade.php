<div class="col-md-10 form_box">


    <!--<div class="form-group">-->

        {!! Form::label('area_name','Main POP') !!}

        {!! Form::text('main_pop',null, ['id' => 'area_name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Main POP', 'maxlength' => '100', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}
        
        {!! Form::label('secondary_pop','Secondary POP') !!}

        {!! Form::text('secondary_pop',null, ['id' => 'secondary_pop', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Secondary POP', 'maxlength' => '100', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

    <!--</div>-->
    
        <br>
    {!! Form::submit($submit_button,['class' => 'btn btn-primary'])!!}