<div class="col-md-10 form_box">


    <!--<div class="form-group">-->

        {!! Form::label('client_name','Client Type') !!}

        {!! Form::text('name',null, ['id' => 'client_name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Client Type Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

    <!--</div>-->
    
       <br>
    {!! Form::submit($submit_button,['class' => 'btn btn-primary'])!!}