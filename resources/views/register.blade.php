<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>すき登録 | me - ひらいてむすんで気付く自分</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Bootstrap theme -->
  <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('/css/theme.css') }}" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body role="document">

      <!-- Fixed navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Bootstrap theme</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>


      <div class="container theme-showcase" role="main">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
          

        <div class="page-header">
          <h1>好きを登録</h1>
        </div>
        <form action="" method="get">
          <div class="form-group">
            <label for="pass">すき</label>
            <input type="text" class="form-control" name="pass" placeholder="すきを入力">
          </div>
          <div class="form-group">
            <label for="memo">メモ</label>
            <textarea class="form-control" name="memo" rows="5" placeholder="メモを入力"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">登録する</button>
        </form>

      </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
      </body>
      </html>
