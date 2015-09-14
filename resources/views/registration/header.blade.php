
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">HMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Creation <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li>
                            {!! Html::link('register-patient/create', 'Patient Registration') !!}

                            {!! Html::link('register-doctor/create', 'Doctor Registration') !!}

                            {!! Html::link('register-broker/create', 'RF Registration') !!}

                            {!! Html::link('register-investigation-group/create', 'Investigation Group') !!}

                            {!! Html::link('register-investigation/create', 'Investigation') !!}

                            {!! Html::link('investigation-trn', 'Investigation TRN') !!}

                            {!! Html::link('hospital-bed-type/create', 'Hospital Bed Type') !!}

                            {!! Html::link('hospital-bed-no/create', 'Hospital Bed No') !!}

                        </li>

                        <li class="divider"></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">List <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li>
                            {!! Html::link('register-patient', 'Patient Registration List') !!}

                            {!! Html::link('register-doctor', 'Doctor Registration List') !!}

                            {!! Html::link('register-broker', 'RF Registration List') !!}

                            {!! Html::link('register-investigation-group', 'Investigation Group List') !!}

                            {!! Html::link('register-investigation', 'Investigation List') !!}

                            {!! Html::link('hospital-bed-type', 'Hospital Bed Type List') !!}

                            {!! Html::link('hospital-bed-no', 'Hospital Bed No List') !!}

                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Transaction <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li>
                            {!! Html::link('patient-admission/create', 'Patient Admission') !!}
                            {!! Html::link('patient-admission', 'Patient Admission List') !!}
                            {!! Html::link('hospital-bill-generate/create', 'Bill Generate') !!}

                        </li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>