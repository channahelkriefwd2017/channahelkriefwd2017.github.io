<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$page_title?></title>
        <link rel="stylesheet" href="assetts/bootstrap.min.css">
        <link href="assetts/main.css" rel="stylesheet">
        <link href="../planning/assets/main.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <header>
         <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Web Development</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">

              <ul class="nav navbar-nav navbar-right">
                <li><a <?=($page=="page1")? "class = 'current'" : "" ?> href="#">Services</a></li>
                <li><a  <?=($page=="page2")? "class = 'current'" : "" ?>href="#">Contact Me</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Work Examples</a></li>
              </ul>
            </div>
          </div>
        </nav>
        </header>
