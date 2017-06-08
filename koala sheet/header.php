<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">CCcamp</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-left">
                <?php
                if(isset($_SESSION['user'])) {
                    echo "<p class='navbar-text'>Signed in as ".$_SESSION['user']." </p>";
                    echo "<a href='logout.php' class='btn btn-default navbar-btn'>登出</a>";
                }else {
                    echo "<p class='navbar-text'>訪客你好</p>";
                    echo "<ul class='nav navbar-nav navbar-right'>";
                    echo "<li><a href='regist.php'><span class='glyphicon glyphicon-user'></span> 註冊會員</a></li>";
                    echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> 登入</a></li>";
                    echo "</ul>";
                }
                ?>
                </ul>

                <form class="navbar-form navbar-left" action="search.php" method="get">
                    <div class="form-group">
                    <input type="text" class="form-control" name="srch" placeholder="找找營隊">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                </form>
                
                <ul class="nav navbar-nav navbar-right">
                <?php
                if(!isset($_SESSION['auth'])) {
                    echo "<li><a href='allcamp.php'>營隊一覽</a></li>
                        <li><a href='user.php'>會員專區</a></li>
                        <li><a href='sup.php'>廠商專區</a></li>";
                }elseif ($_SESSION['auth'] == 'user') {
                    echo "<li><a href='co_update.php'>修改會員資料</a></li>
                        <li><a href='allcamp.php'>營隊一覽</a></li>
                        <li><a href='collection.php'>我的收藏</a></li>";
                }elseif ($_SESSION['auth'] == 'admin') {
                    echo "<li><a href='MAdData.php'>修改個人資料</a></li>
                        <li><a href='newcamp.php'>刊登營隊</a></li>
                        <li><a href='editcamp.php'>編輯營隊</a></li>";
                }
                ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</body>
</html>