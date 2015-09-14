@extends('registration/register_master_page')

@section('content')


<table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Print</th>
    </tr>
    </thead>
    <tbody>
        @foreach($patient_list as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->patient_name }}</td>
                <td>{{ $patient->mobile }}</td>
                <td>{{ $patient->date_of_birth }}</td>
                <td>{{ $patient->address }}</td>
                <td>{!! Html::link("register-patient/$patient->id/edit", ' ',['class' => 'iframe glyphicon glyphicon-edit']) !!}</td>
                <td>{!! Html::link("register-patient/$patient->id", ' ', ['class' => 'glyphicon glyphicon-print']) !!}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop