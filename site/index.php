<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>US Crime Analytics</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
    <link href="../src/fontawesome/css/all.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="index.php?category=main">US Crime Analytics</a>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="index.php?category=dashboard">
                        <i class="zmdi zmdi-circle"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="index.php?category=prediction">
                        <i class="zmdi zmdi-circle"></i> Crime Prediction
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="divMenu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin"><i class="zmdi zmdi-account-circle"></i> Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="zmdi zmdi-comments"></i> About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="divContent">

            <?php
                $menu="";
                if(isset($_GET["category"])){
                $menu = $_GET["category"];

                switch($menu){
                    case"main":{
                    $page="main.php";
                    break;
                    }
                    case"dashboard":{
                    $page="dashboard.php";
                    break;
                    }
                    case"prediction":{
                    $page="prediction.php";
                    break;
                    }
                    default:{
                    $page="main.php";
                    }
                }

                include($page);
                }
            ?>
            </div>
            
        </div>
    </div>

    <!-- Modal Login -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-backdrop">
                <div class="modal-body">
                    <div class="wrapperLogin fadeInDown">
                        <div id="formContent">
                            <!-- Tabs Titles -->
                            <button type="button" class="close" style="margin-right: 20px;margin-top: 20px;" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- Icon -->
                            <div class="fadeIn first input-group">
                                
                            </div>

                            <div class="text-center">
                                <h5>Login to site.com</h5>
                            </div><br>

                            <!-- Login Form -->
                            <form>
                                <input type="text" id="login" class="fadeIn second txtLogin" name="Email" placeholder="Email">
                                <input type="text" id="password" class="fadeIn third txtLogin" name="Password" placeholder="Password">
                                <input type="submit" class="fadeIn fourth btn-primary btnLogin" value="Log In">
                            </form>

                            <!-- Remind Passowrd -->
                            <div id="formFooter">
                                <a class="underlineHover aLogin" href="#">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divFooter"></div>

    <div class="card fixed-bottom">
        <div class="card-header text-right">
            CopyRight © 2020
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>