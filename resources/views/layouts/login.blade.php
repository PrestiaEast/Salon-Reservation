<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Salon Reservation</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <style type="text/css">

    body {
    color: #e65100;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

    main {
    flex: 1 0 auto;
  }

  .container {
    width: 80%
  }

  </style>

</head>
<body>
  <nav class="teal darken-3" role="navigation">
    <div class="nav-wrapper container">
    </div>

  </nav>

  <main>
    @yield('content')
  </main>

  <footer class="page-footer teal darken-3"> 
    
      <div class="container center">
      <h5></h5>
      </div>
    
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>
  

  </body>
</html>
