<!DOCTYPE html>
<html lang="en">
<head>
        <title><?=$page_title?></title>
    <link rel="stylesheet" href="assetts/bootstrap.min.css">
    <link href="assetts/main.css" rel="stylesheet">
    <link href="assetts/main-AboutMe.css" rel="stylesheet">
    <link href="assetts%2520-%2520form/main.css" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>

        <div class="container-fluid">
    <header>
            <div class="row row1">
                <div class="col-md-3"><div class="logo">Logo</div></div>
                <div class="col-md-9">
                    <div class="nav">
                        <ul>
                            <li><a <?=($page=="page2")? "class='current'" : "" ?>href="index2.php">About Me</a></li>
                            <li><a <?=($page=="page3")? "class='current'" : "" ?> href="#">Essay & Tips</a></li>
                            <li><a <?=($page=="page4")? "class='current'" : "" ?> href="#">Contact me</a></li>

                        </ul>
                    </div>
                </div>
            </div>
    </header>
