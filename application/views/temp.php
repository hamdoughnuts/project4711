
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Amsterdam</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Primary CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Amsterdam
                    </a>
                </li>
                <li>
                    <a href="#">Eat</a>
                </li>
                <li>
                    <a href="#">Play</a>
                </li>
                <li>
                    <a href="#">Sleep</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Most recent  -->
                    <div class="col-lg-12">
                        <div class="col-lg-8 col-lg-offset-2 " id="recent-div">
                            RECENT
                        </div>
                        
                    </div>
                    <!-- End most recent-->
                    <!-- EAT PLAY SLEEP BUTTONS-->
                    <div id="eat-play-sleep" class="col-lg-12 top-buffer">
                        <!-- EAT   BUTTONS-->
                        <div id="eat-div" class="col-lg-4">
                            EAT
                        </div>
                        <!-- PLAY  BUTTONS-->
                        <div id="play-div" class="col-lg-4">
                            PLAY
                            
                        </div>
                        <!-- SLEEP BUTTONS-->
                        <div id="sleep-div" class="col-lg-4">
                            SLEEP
                        </div>
                    </div>
                    <!-- END EAT PLAY SLEEP BUTTONS-->
                    <div class="col-lg-12">
                        <h1>Welcome to Amsterdam's favourite tourist site !</h1>
                        <p>Come here to find a place to sleep, eat, and play.</p>
                        <p>Make sure you don't forget to sleep!.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
