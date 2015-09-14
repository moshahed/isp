
{!! Html::style('css/bootstrap.min.css') !!}
{!! Html::script('js/script.js') !!}

<!--Jquery Date Picker-->
{!! HTML::style('jquery_datepicker/jquery.datetimepicker.css') !!}
{!! HTML::script('jquery_datepicker/jquery.datetimepicker.js') !!}

<!--jQuery ui Link-->
{!! HTML::style('jquery_ui/jquery-ui-1.10.2.custom.css') !!}
{!! HTML::script('jquery_ui/jquery-ui-1.10.2.custom.js') !!}

{!! HTML::style('css/bootstrap-editable.css') !!}
{!! HTML::script('js/bootstrap-editable.min.js') !!}

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

<html>
<body>

@include('registration/header')

<div class="container-fluid">

    @yield('content')

</div>

</body>
</html>



