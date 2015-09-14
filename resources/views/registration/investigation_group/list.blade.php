@extends('registration/register_master_page')

@section('content')


{{--{{ $patient_list }}--}}

<table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
    <thead>
    <tr>
        <th>Name</th>
        <th>Heading Name</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>
        @foreach($investigation_group_list as $value)
            <tr>
                <td>{{ $value->group_name }}</td>
                <td>{{ $value->heading_name }}</td>
                <td>{!! Html::link("register-investigation-group/$value->id/edit", " ",['class' => 'iframe glyphicon glyphicon-edit']) !!}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop

