<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>RainMaker</title>
  <!-- MDB icon -->
  @include('frontend.layouts._partial.css')
</head>
<body {{-- oncontextmenu="return false" --}}>

  <!-- Start your project here-->  
  @include('frontend.layouts._partial.nav')
  <div style="height: 100vh">
    @yield('content')
   

  </div>
  
 @include('frontend.layouts._partial.script')

</body>
</html>
