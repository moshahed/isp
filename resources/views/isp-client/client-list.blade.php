@extends('isp-header.isp-master-page')


@section('title', 'ISP- Internet Service Provider')

@section('content')
<div class="col-md-12">
 <div class="panel panel-primary">
            <div class="panel-heading">Secondary Pop Lists</div>
            <div class="panel-body">
                <div class="col-md-12" style="padding-bottom:10px;">
                    {!! Html::link("client-name/create",'Create Client', ['class' => 'btn btn-success','target'=>'_blank']) !!}
                <!--<a href="/client-type/create" ><div class="btn btn-success">Create New Client Type</div></a>-->
                </div>
    
<table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
    <thead>
    <tr>
        <th>ID</th>        
        <th>Client Type</th>        
        <th>Name</th>
        <th>Contact Person</th>
        <th>Billing Person</th>
        <th>Contact No</th>
        <th>Main POP</th>     
        <th>Switch Port No</th>     
        <th>Login ID</th>     
            
        <th>Package</th>       
             
        <th>Email</th>        
        <th>Address</th>        
        <th>Edit</th>
        <th>Delete</th>
        
    </tr>
    </thead>
    <tbody>
        @foreach($all_client as $row)
            <tr>
                <td>

                    @if($row->client_type_id==1)                   
                    {{ 'hom'.''.$row->id }}
                    @elseif($row->client_type_id==2)
                    {{ 'cor'.''.$row->id }}
                    @endif


                </td>
                <td>{{ $row->ClientType->name }}</td>                
                <td>{{ $row->name }}</td>                
                <td>{{ $row->contact_person }}</td>                
                <td>{{ $row->billing_person }}</td>                
                <td>{{ $row->contact_no }}</td>                
                <td>{{ $row->pop}}</td>
                <td>{{ @$row->CorporateClient->switch_port_no}}</td>
                <td>{{ @$row->NonCorporateClient->login_id}}</td>
                <td></td>  
                <td>{{ $row->email}}</td>                
                <td>{{ $row->address}}</td>
                <td>
                    <!--{!! Html::link("client-name/$row->id/edit", ' ',['class' => 'iframe glyphicon glyphicon-edit']) !!}-->
                </td>
                <td>
                    <!--{!! Html::link("#", ' ', ['class' => 'glyphicon glyphicon-trash']) !!}-->
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
@stop