<div class="col-md-10 form_box">


    <!--<div class="form-group">-->

        <div class="form-group">
        {!! Form::label('pop_name','Secondary POP Name') !!}

        {!! Form::text('name',null, ['id' => 'pop_name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter POP Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}
        </div>
    <div class="form-group">

        {!! Form::label('secondary_pop','Secondary POP') !!}

        {!! Form::select('main_pop_id',['Select secondary pop'] + $main_pop,null,['class' => 'form-control'])!!}

        </div>
        
    <!--</div>-->
    <br>
    {!! Form::submit($submit_button,['class' => 'btn btn-primary'])!!}