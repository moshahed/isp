<div class="col-md-4 form_box">


    <div class="form-group">

        {!! Form::label('name','Broker Name') !!}

        {!! Form::text('name',null, ['id' => 'name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Broker Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('mobile','Broker Mobile No') !!}

        <div class="input-group">
            <span class="input-group-btn">
                <button id="mobile_icon_button" type="button" class="btn btn-info">&nbsp;<i class="glyphicon glyphicon-phone-alt"></i></button>
            </span>

            {!! Form::text('mobile',null ,['class'=>'numeric_field form-control', 'id' => 'mobile', 'autocomplete' => 'off', 'placeholder' => 'Enter Mobile No', 'required' => 'required', 'maxlength' => '11' ]) !!}

        </div>
    </div>



    <div class="form-group">
        {!! Form::label('address','Address')!!}

        {!! Form::textarea('address',null,['id' => 'address', 'class' => 'form-control', 'placeholder' => "Enter Broker Address", 'autocomplete' => 'off', 'rows'=>'3']) !!}

    </div>


    {!! Form::submit($submit_button,['class' => 'btn btn-info'])!!}