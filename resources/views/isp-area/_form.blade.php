<div class="col-md-10 form_box">


    <!--<div class="form-group">-->

        <div class="form-group">
        {!! Form::label('package_name','Areas Name') !!}

        {!! Form::text('name',null, ['id' => 'package_name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Group Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}
        </div>
        <div class="form-group">

        {!! Form::label('blood_group','Area Group') !!}

        {!! Form::select('main_pop_id',['Select Main POP'] + $main_pop,null,['class' => 'form-control'])!!}

        </div>
    <!--</div>-->
    <br>
    {!! Form::submit($submit_button,['class' => 'btn btn-primary'])!!}