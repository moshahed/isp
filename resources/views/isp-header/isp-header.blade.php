  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>@yield('title')</title>


{!! Html::style('css/bootstrap.min.css') !!}
{!! Html::script('js/script.js') !!}

<!--Jquery Date Picker-->
{!! HTML::style('jquery_datepicker/jquery.datetimepicker.css') !!}
{!! HTML::script('jquery_datepicker/jquery.datetimepicker.js') !!}

<!--jQuery ui Link-->
{!! HTML::style('jquery_ui/jquery-ui-1.10.2.custom.css') !!}
{!! HTML::script('jquery_ui/jquery-ui-1.10.2.custom.js') !!}

<!--{!! HTML::style('css/bootstrap-editable.css') !!}-->
<!--{!! HTML::script('js/bootstrap-editable.min.js') !!}-->

<!-- Oxygen Icons -->
{!! HTML::style('pnotify-1.2.0/oxygen/icons.css') !!}

<!--Start Pnotify Message Box-->
{!! HTML::style('pnotify-1.2.0/jquery.pnotify.default.css') !!}
{!! HTML::style('pnotify-1.2.0/jquery.pnotify.default.icons.css') !!}
{!! HTML::script('pnotify-1.2.0/jquery.pnotify.js') !!}

<!--Color Box-->
{!! HTML::style('colorbox/colorbox.css') !!}
{!! HTML::script('colorbox/jquery.colorbox.js') !!}

{!! HTML::style('css/chosen-bootstrap.css') !!}
{!! HTML::style('css/chosen.css') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            /*background-image:url("/images/background.png");*/
        }
    </style>
    <meta name="_token" content="{{ app('Illuminate\Encryption\Encrypter')->encrypt(csrf_token()) }}" />
<script type="text/javascript">
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-XSRF-Token': $('meta[name="_token"]').attr('content')
                }
            });
        });
    </script>
    
  </head>
