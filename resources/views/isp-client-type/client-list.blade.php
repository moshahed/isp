<!--@extends('isp-header.isp-master-page')-->


@section('title', 'ISP- Internet Service Provider')

@section('content')
<div class="col-md-8">
 <div class="panel panel-primary">
            <div class="panel-heading">Client Type Lists</div>
            <div class="panel-body">
                <div class="col-md-12" style="padding-bottom:10px;">
                    <!--{!! Html::link("client-type/create",'Create New Client Type', ['class' => 'btn btn-success','target'=>'_blank']) !!}-->
               
                </div>
    
<table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        
        <th>Edit</th>
        <th>Delete</th>
        <th>Print</th>
    </tr>
    </thead>
    <tbody>
        @foreach($client_list as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>                
                <td>{!! Html::link("client-type/$row->id/edit", ' ',['class' => 'iframe glyphicon glyphicon-edit']) !!}</td>
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