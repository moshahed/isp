@extends('registration/register_master_page')

@section('content')


{{--{{ $patient_list }}--}}

<table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
    <thead>
    <tr>
        <th>Sl</th>
        <th>Bed Type</th>
        <th>Name</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>
        @foreach($bed_no_list as $key => $value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->bedType->name }}</td>
                <td>{{ $value->name }}</td>
                <td>{!! Html::link("hospital-bed-no/$value->id/edit", ' ',['class' => 'iframe glyphicon glyphicon-edit']) !!}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop