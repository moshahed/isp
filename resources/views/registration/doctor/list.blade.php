@extends('registration/register_master_page')

@section('content')


{{--{{ $patient_list }}--}}

<table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
    <thead>
    <tr>
        <th>Name</th>
        <th>Speciality</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Print</th>
    </tr>
    </thead>
    <tbody>
        @foreach($doctor_list as $value)
            <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->speciality }}</td>
                <td>{{ $value->mobile }}</td>
                <td>{{ $value->address }}</td>
                <td>{!! Html::link("register-doctor/$value->id/edit", ' ',['class' => 'iframe glyphicon glyphicon-edit']) !!}</td>
                <td>{!! Html::link("register-doctor/$value->id", ' ', ['class' => 'glyphicon glyphicon-print']) !!}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop