<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - @yield('title','website')</title>
  
  @include('admin.layout.head')
</head>
<!--font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
<body class="hold-transition sidebar-mini layout-fixed">
  
    <header>
      @include('admin.layout.header')
    </header>

    <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('admin.layout.sidebar')
        </div>

    <!-- main content -->
        <div id="main">
           @yield('content')
        </div>


      @include('admin.layout.footer')
   
  
</body>
</html>