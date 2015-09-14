@extends('isp-header.isp-master-page')


@section('title', 'ISP- Internet Service Provider')

@section('content')
<div class="col-md-8">
 <div class="panel panel-primary">
            <div class="panel-heading">Package Lists</div>
            <div class="panel-body">
                <div class="col-md-12" style="padding-bottom:10px;">
                    {!! Html::link("package-name/create",'Create New Package', ['class' => 'btn btn-success','target'=>'_blank']) !!}
                <!--<a href="/client-type/create" ><div class="btn btn-success">Create New Client Type</div></a>-->
                </div>
    
<table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>        
        <th>Amount</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Print</th>
    </tr>
    </thead>
    <tbody>
        @foreach($packages_list as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>                
                <td>{{ $row->description }}</td>                
                <td>{{ $row->amount }}</td>                
                <td>{!! Html::link("package-name/$row->id/edit", ' ',['class' => 'iframe glyphicon glyphicon-edit']) !!}</td>
                <td>{!! Html::link("#", ' ', ['class' => 'glyphicon glyphicon-trash']) !!}</td>
                <td>
                    {!! Html::link("#", ' ', ['class' => 'glyphicon glyphicon-print']) !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
@stop