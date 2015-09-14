@extends('registration/register_master_page')

@section('content')


{{--{{ $patient_list }}--}}

<table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
    <thead>
    <tr>
        <th>Sl</th>
        <th>Patient Name</th>
        <th>Doctor</th>
        <th>Edit</th>
        <th>Print</th>
    </tr>
    </thead>
    <tbody>
        @foreach($list as $key => $value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->patientInfo->patient_name }}</td>
                <td>{{ $value->doctorInfo->name }}</td>
                <td>{!! Html::link("patient-admission/$value->id/edit", ' ',['class' => 'iframe glyphicon glyphicon-edit']) !!}</td>
                <td>{!! Html::link("patient-admission/$value->id", ' ',['class' => 'glyphicon glyphicon-print']) !!}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop