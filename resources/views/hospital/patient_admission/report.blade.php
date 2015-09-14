<style>
    body{
        width:8.26in;
    }

    .wrapper{
        margin-left: .5in;
        margin-right: .2in;
        margin-top: 2.5in;

        /*        -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                transform: rotate(-90deg);*/
    }

    .admission_form_text{
        text-align: center;
        border-bottom: 1px solid black;
        font-size: 18pt;
        border-radius: 20px;
        border:2px solid black;
        width: 300px;
        padding: 5px;
        margin: auto;
        margin-bottom: .2in;
    }

    .patient_info{
        padding: 5px;
        /*border: 1px solid black;*/
        width:100%;

    }

    .patient_info td{
        padding: 5px;

        /*border: 1px solid black;*/
    }

    .patient_info tr{
        height: 30px;
    }

    td{
        font-size: 11pt;
    }
</style>

<div class="wrapper">

    <div class="admission_form_text">
        Admission Form
    </div>

    <div style='margin-bottom: 10px;'>
        <i>Admission Date & Time: </i><b style='font-size: 10pt;'>{{ date('d-m-Y',strtotime($admission_info->created_at)) }}</b> <span style='font-size: 8pt;'>{{ date('h:i:s a',strtotime($admission_info->created_at)) }}</span>
    </div>

    <div style="margin-top: 5px; border-bottom: 1px solid silver; padding-bottom: 10px;">
        Admission Id: <b>{{ $admission_info->id }}</b>
        {!! DNS1D::getBarcodeHTML("$admission_info->id", "C39",1,30) !!}
    </div>


    <table class="patient_info">
        <tr>
            <td>Bed Category</td>
            <td>:</td>
            <td><b>{{ $admission_info->bedInfo->bedType->name }}</b></td>
        </tr>

        <tr>
            <td>Bed No</td>
            <td>:</td>
            <td><b>{{ $admission_info->bed_id }}</b></td>
        </tr>

        <tr>
            <td>Primary Consultant</td>
            <td>:</td>
            <td>{!! $admission_info->doctorInfo->title !!} {!! $admission_info->doctorInfo->name !!} - {!! $admission_info->doctorInfo->speciality !!}</td>
        </tr>

        <tr>
            <td>Patient's ID</td>
            <td>:</td>
            <td>
                <b>{{ $admission_info->PatientInfo->id }}</b>
                <!--{{ DNS1D::getBarcodeHTML($admission_info->PatientInfo->id, "C39",1,30) }}-->
            </td>
        </tr>

        <tr>
            <td>Patient's Name</td>
            <td>:</td>
            <td>{{ $admission_info->PatientInfo->patient_name }}</td>
        </tr>

        <tr>
            <td>Age</td>
            <td>:</td>
            <td>{!! age_calculation($admission_info->patientInfo->date_of_birth) !!}</td>
        </tr>



        <tr>
            <td>Father's Name</td>
            <td>:</td>
            <td>{{ $admission_info->PatientInfo->fathers_name }}</td>
        </tr>

        <tr>
            <td>Mother's Name</td>
            <td>:</td>
            <td>{{ $admission_info->PatientInfo->mothers_name }}</td>
        </tr>

        <tr>
            <td>Spouse Name</td>
            <td>:</td>
            <td>{{ $admission_info->PatientInfo->spouse_name }}</td>
        </tr>

        <tr>
            <td>Patient Address</td>
            <td>:</td>
            <td>{{ $admission_info->PatientInfo->address }}</td>
        </tr>

        <tr>
            <td>Patient Mobile</td>
            <td>:</td>
            <td>{{ $admission_info->PatientInfo->mobile }}</td>
        </tr>


        <tr>
            <td style='border-top: 1px solid silver;'>Care Of</td>
            <td style='border-top: 1px solid silver;'>:</td>
            <td style='border-top: 1px solid silver;'>

                <div style='float: left;'>
                    {{ $admission_info->care_of }}
                </div>

                <div style='float: right; margin-right: 100px;'>
                    Signature:
                </div>

                <div style='clear: both;'></div>
            </td>
        </tr>

        <tr>
            <td>Relation With Patient</td>
            <td>:</td>
            <td>{{ $admission_info->relation_with_patient }}</td>
        </tr>

        <tr>
            <td>Relative's Address</td>
            <td>:</td>
            <td>{{ $admission_info->relatives_address }}</td>
        </tr>

        <tr>
            <td>Relative's Cell</td>
            <td>:</td>
            <td>{{ $admission_info->relatives_mobile }}</td>
        </tr>

        <tr>
            <td>Diagnosis</td>
            <td>:</td>
            <td>{{ $admission_info->reason_of_admission }}</td>
        </tr>

    </table>

</div><!--Wrapper End-->