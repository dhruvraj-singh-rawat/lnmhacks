<?php
    session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Profile</title>

   
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

   
    <link href="css/style.css" rel="stylesheet">

    

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Profile Mash</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section class="bg-primary">
            <div class="container">
               <div class="row">
                    <div class="col-md-6">
                         <div class="panel panel-default">
                            <div class="panel-heading"><strong><center>Basic Info</strong></center></div>
                            <div class="panel-body">
                            <center>
                            <img src="http://i.imgur.com/JS090UT.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    
                         </center>
                         <hr>
                            <center>
                            <h3 class="media-heading"><?php $_SESSION['freelancer_name'] ?> <small><?php $_SESSION['freelancer_location']  ?></small></h3>
                            <p class="bio"><strong>Bio:</strong><br>
                        I do a little bit of everything.</p>
                            <p class="rating"><strong>Rating:</strong><br>
                        <?php echo $_SESSION['freelancer_rating']  ?></p>
                            <p class="rate"><strong>Rate:</strong><br>
                        <?php $_SESSION['freelancer_rate'] ?></p>
                            <p class="recommendation"><strong>Recommendations:</strong><br>
                        Some recommendation score goes here.</p></center></div>
      </div>

                        <div class="panel panel-default">
                            <div class="panel-heading"><center><strong>Projects:</strong></center></div>
                            <div class="panel-body">
                            <center>
                            <p class="project1"><strong>Project 1:</strong><br>
                        Did this and that!</p>
                            <p class="project2"><strong>Project 2:</strong><br>
                        Did this and that!</p>
                            <p class="project3"><strong>Project 3:</strong><br>
                        Did this and that!</p>
                            <p class="project4"><strong>Project 4:</strong><br>
                        Did this and that!</p>                    
                            </center>
                        </div>
      </div>
    </div>
           
                  <div class="col-md-6">
      <div class="panel panel-default">
       <div class="panel-heading"><center><strong>Skills</strong></center></div>
       <div class="panel-body"><span>
        <div class="skills">
                        <span class="skill1">Photoshop<br></span><br>
                        <span class="skill2">Adobe Premiere<br></span><br>
                        <span class="skill3">After Effects<br></span><br>
                        <span class="skill4">HTML/CSS<br></span><br>
                    </center></div>
      </div>
      </div>  
    <div class="panel panel-default">
       <div class="panel-heading"><center><strong>Reviews:</strong></center></div>
       <div class="panel-body">      
                    <hr>
                    <p class="pr1"><strong>Review 1:</strong><br>
                        This guy's awesome.</p>
                    <p class="pr2"><strong>Review 2:</strong><br>
                        This guy's awesome.</p>
                    <p class="pr3"><strong>Review 3:</strong><br>
                        This guy's awesome.</p>
                    <p class="pr4"><strong>Review 4:</strong><br>
                        This guy's awesome.</p>

                    <br>
                    </div>
      </div>
</section>  

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
