<div class="form-group">

        {!! Form::label('secondary_pop','Secondary POP') !!}

        {!! Form::select('secondary_pop_id',['Select POP'] + $secondary_pops,null,['class' => 'form-control','id' => 'secondary_pop'])!!}

        </div>
<div class="more-package">
    <div class="form-group">
        {!! Form::label('pack_des','Package Description') !!}

        {!! Form::text('package_description[]',null, ['class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Package Description', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

    </div>
</div>

<div class="form-group">
    {!! Form::label('login_id','Login ID') !!}

    {!! Form::text('login_id[]',null, ['class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Login ID', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

</div>
<div id="package"></div>
<div>
    <button type="button" class="btn btn-success add-more-login">Add More..</button>
</div>