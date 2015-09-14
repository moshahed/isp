@extends('registration/register_master_page')

@section('content')


{{--{{ $patient_list }}--}}

<table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
    <thead>
    <tr>
        <th>Group Name</th>
        <th>Investigation Name</th>
        <th>Amount</th>
        <th>Heading Name</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>
        @foreach($investigation_list as $value)
            <tr>
                <td>{{ $value->InvestigationGroup->group_name }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->amount }}</td>
                <td>{{ $value->heading_name }}</td>
                <td>{!! Html::link("register-investigation/$value->id/edit", " ",['class' => 'iframe glyphicon glyphicon-edit']) !!}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop

