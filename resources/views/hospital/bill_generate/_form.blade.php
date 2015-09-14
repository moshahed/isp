<div class="col-md-4 form_box">



    <div class="form-group">

        {!! Form::label('admitted_id','Doctor Name') !!}

        {!! Form::select('admitted_id',$admitted_list,null, ['id' => 'admitted_id', 'class' =>'form-control chosen', 'autocomplete' => 'off', 'placeholder' => 'Enter Doctor Name', 'maxlength' => '9', 'required' => 'required', 'onchange' => 'Hospital.billDetails({ id: this.value })' ]) !!}

    </div>


{!! Form::submit($submit_button,['class' => 'btn btn-info'])!!}