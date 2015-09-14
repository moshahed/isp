    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ISP Management</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
<!--              <li class="active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Creation<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li>{!! Html::link('client-type/create', 'Create Client Type') !!}</li>
                <li role="separator" class="divider"></li>
                <li>{!! Html::link('area-group/create', 'Create Area Group') !!}</li>
                <li role="separator" class="divider"></li>
                <li>{!! Html::link('package-name/create', 'Create Package') !!}</li>
                <li role="separator" class="divider"></li>
                <li>{!! Html::link('area-name/create', 'Create Area') !!}</li>
                <li role="separator" class="divider"></li>
                <li>{!! Html::link('client-name/create', 'Create Client') !!}</li>
              </ul>
                  
              </li>-->
            <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Create/View<span class="caret"></span></a>
              <ul class="dropdown-menu">
                 <li>{!! Html::link('client-type', 'Client Type List') !!}</li>
                
                <li role="separator" class="divider"></li>
               <li>{!! Html::link('main-pop', 'Main POP List') !!}</li
               
                <li role="separator" class="divider"></li>
                <li role="separator" class="divider"></li>
               <li>{!! Html::link('secondary-pop', 'Secondary POP List') !!}</li>
               
                <li role="separator" class="divider"></li>
               <li>{!! Html::link('package-name', 'Package List') !!}</li>
                
                <li role="separator" class="divider"></li>
               <li>{!! Html::link('client-name', 'Client List') !!}</li>
              </ul>
                  
              </li>
            <li><a href="#contact">Report</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Change Password</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Logout</a></li>
                
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>