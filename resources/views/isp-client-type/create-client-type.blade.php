@extends('isp-header.isp-master-page')


@section('title', 'ISP- Internet Service Provider')

@section('content')
<div class="container-fluid">
    <div class="col-md-6">

        <div class="panel panel-primary">
            <div class="panel-heading">Create Client</div>
            <div class="panel-body">
                 {!! Form::open(['url' => 'client-type','id'=>'foo', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'yes']) !!}

                @include('isp-client-type._form',['submit_button' => 'Submit'])

            {!! Form::close() !!}
            <div id="ajax_loader"></div>
            </div>
        </div>

    </div>
    <div class="col-md-6">

    </div>
</div>
@endsection

<!--http://simple-form-bootstrap.plataformatec.com.br/-->