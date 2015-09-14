<div class="form-group">
    {!! Form::label('switch_port','Switch Port No') !!}

    {!! Form::text('switch_port_no',null, ['id' => 'switch_port', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Switch Port No', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

</div>
<div class="form-group">
    {!! Form::label('service_des','Service Description') !!}

    {!! Form::text('service_description',null, ['id' => 'service_des', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Service Description', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

</div>
<div class="form-group">
    {!! Form::label('bandwidth','Bandwidth') !!}

    {!! Form::text('bandwidth',null, ['id' => 'bandwidth', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Bandwidth', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

</div>
<div class="form-group">
    {!! Form::label('ip_address','IP Address') !!}

    {!! Form::text('ip_address',null, ['id' => 'ip_address', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter IP Address', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length numbers", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

</div>