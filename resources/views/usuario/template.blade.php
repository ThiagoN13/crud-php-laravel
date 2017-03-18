<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="./css/bootstrap.css" >
    <link rel="stylesheet" href="./css/bootstrap-theme.css" >
    <script src="./js/bootstrap.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="/create">Criar usuario</a></li>
          <li><a href="/list">Listar usuario</a></li>
        </ul>
      </div>
    </nav>

    @yield("content");

  </body>
</html>