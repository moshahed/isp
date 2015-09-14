
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script>
//$(document).ready(function(){
//   
//  //event delegation
//  $(".container").on("click","button",function(){
//      alert("Clicked");
//  });
//  
//  $("#addmore").on("click",function(){
//    
//    var l = $(".container button").length+1;
//    $("<button/>").html("Click Me "+l).appendTo($(".container"));
//    
//  });
//});
</script>  

<div class="col-md-10 form_box">
<!--     <script>

$(function(){

  
  $('.add').click(function(e){
    e.preventDefault();

    $('#example').html('<a href="#" class="clicker">Test</a>');
  });


  $(document).on("click", '.clicker', function(e){
    e.preventDefault();

    alert("clicked");
  });  

});
</script>

     <a href="#" class="add">Add clicker</a>
--><div id="example"></div>
<!--    
<div class="form-group pack_desk">
    {!! Form::label('pack_des','Package Description') !!}

    {!! Form::text('package_description[]',null, ['class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Package Description', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

</div>
    
<div>
    <button type="button" id="addmore" class="btn btn-success add-more-login2">Add More..</button>
</div>-->
    <!--<div class="form-group">-->
   
        
        <div class="form-group">

        {!! Form::label('Client_Type','Client Types') !!}

        {!! Form::select('client_type_id',['Select Client Type'] + $client_type,null,['class' => 'form-control','id' => 'client_type'])!!}

        </div>
        
       
        <div class="form-group">

        {!! Form::label('Client_Package','Client Packages') !!}

        {!! Form::select('package_id',['Select Client Package'] + $client_package,null,['class' => 'form-control','id' => 'Client_Package'])!!}

        </div>
        <div class="form-group">
            {!! Form::label('client_name','Client Name') !!}

        {!! Form::text('name',null, ['id' => 'client_name', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Client Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

        </div>
        <div class="form-group">
            {!! Form::label('con_person','Contact Person') !!}

        {!! Form::text('contact_person',null, ['id' => 'con_person', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Contact Person Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

        </div>
        <div class="form-group">
            {!! Form::label('bill_person','Billing Person') !!}

        {!! Form::text('billing_person',null, ['id' => 'bill_person', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Billing Person Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

        </div>
        <div class="form-group">
            {!! Form::label('con_no','Contact No') !!}

        {!! Form::text('contact_no',null, ['id' => 'con_no', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Contact No', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

        </div>
        <div class="form-group">
            {!! Form::label('client_pop','POP') !!}

        {!! Form::text('pop',null, ['id' => 'client_pop', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Client Name', 'maxlength' => '50', 'required' => 'required', 'data-validation' => "length alphanumeric", 'data-validation-length' => "min2", 'data-validation-allowing' => "- _" ]) !!}

        </div>
    
     <div class="form-group" id="home">
         <div id="loader"></div>
    </div>
        
            {!! Form::label('email','Email')!!}
        <div class="input-group">
                <span class="input-group-btn">
                    <button id="mobile_icon_button" type="button" class="btn btn-info">&nbsp;<i class="glyphicon glyphicon-envelope"></i></button>
                </span>
            {!! Form::email('email',null ,[ 'class'=>'form-control', 'id' => 'email', 'autocomplete' => 'off', 'placeholder' => 'Enter Email', 'data-validation' => "email", 'data-validation-optional' => "true" ]) !!}

        </div>
    <div class="form-group">
        {!! Form::label('address','Address')!!}

        {!! Form::textarea('address',null,['id' => 'address', 'class' => 'form-control', 'placeholder' => "Enter Patient Address", 'autocomplete' => 'off', 'rows'=>'3']) !!}

    </div>
    <!--</div>-->
    <br>
    {!! Form::submit($submit_button,['class' => 'btn btn-primary'])!!}