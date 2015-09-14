<style>
    body{
        margin: 0px;
        padding: 0px;
    }

    .reg-box{
        /*border:1px solid black;*/
        width: 3.4in;
        height: 2.1in;
        border-radius: 3px;
        /*overflow: hidden;*/
    }

    .reg-card{
        border: 1px solid black;
        border-collapse: collapse;
        width:3.4in;
        height: 2.1in;
    }

    .logo{
        width:40px;
    }

</style>


<title>Registration Card</title>

<div class="reg-box">

    <div style="font-size:17pt; margin-top: 20px; margin-left: 10px;">
        <div style="float:left; margin-right: 4px;">
            {!! Html::image('images/logo.jpg', $alt="Pranto Logo", $attributes = array('class'=>'logo')) !!}
        </div>
        <div style="float:right; padding-top: 18px; margin-right: 20px; color: forestgreen; font-size:16pt;">
             {{ $company_info->company_name }}
        </div>
    </div>

    <div style="clear: both;"></div>


    <div style="position:absolute; top:60px;">

        <div style="text-align: right; font-size: 16px; font-weight: bold; margin-top: 20px;">
           {{ $patient_info->patient_name }}
        </div>


        <div style="text-align: right; margin-top: 20px;">
           Patient Id : <b>{{ $patient_info->id }}</b>
        </div>


        <div style="text-align: right; margin-left: 130px;">
            {!! DNS1D::getBarcodeHTML("$patient_info->id", "C39",1,30) !!}
        </div>

    </div>

</div>