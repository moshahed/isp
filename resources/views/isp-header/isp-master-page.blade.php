
<!DOCTYPE html>
<html lang="en">
@include('isp-header.isp-header')
  <body role="document">

@include('isp-header.isp-nav-menu')

        @section('sidebar')
            
        @show


      
      <div class="container">
        @yield('content')
      </div>

      
    
  </body>
</html>
