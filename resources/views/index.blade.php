<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alnajah Bakeries | مخابز النجاح</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        

    </head>

    <body>

        <!-- Top menu -->
        <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Bootstrap Registration Form Template</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <!-- <span class="li-text">
                                Put some text or
                            </span> 
                            <a href="#"><strong>links</strong></a> 
                            <span class="li-text">
                                here, or some icons: 
                            </span>  -->
                            <span class="li-social">
                                <a href="https://www.facebook.com/profile.php?id=100012291096771&fref=nf"><i class="fa fa-facebook"></i></a> 
                                <a href="https://twitter.com/sales_alnajah"><i class="fa fa-twitter"></i></a> 
                                <a href="#"><i class="fa fa-envelope"></i></a> 
                                <a href="#"><i class="fa fa-skype"></i></a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1>مصنع ومخابز وحلويات النجاح</h1>
                            <div class="description">
                                <p>
                                    جمهورنا وعملائنا الكرام جميع فروعنا ترحب بكم ‫فشاركونا النجاح‬ 
                                </p>
                            </div>
                            <div class="top-big-link">
                                <a class="btn btn-link-1" href="#">عملاء</a>
                                <a class="btn btn-link-2" href="#">موزعون</a>
                            </div>
                        </div>

                        <div class="col-sm-5 form-box">
                            <img src="assets/img/alnajah_logo.png" alt="">
                        </div>
                    </div> <!-- end of row 2 -->

                    <div class="row">
                        
                        <div id="map-outer" class="col-md-12">
                          <div id="address" class="col-md-4">
                            <h2>المركز الرئيسي</h2>
                            <address>
                            <strong> طريق الملك فيصل</strong><br>
                                Al Kharsو Al Mubarraz<br>
                                ص.ب : 10059<br>
                                الرمز البريدي : 31982<br>
                                <abbr>رقم الهاتف:</abbr> 0135362222
                                
                               
                           </address>
                          </div>
                            <div id="map-container" class="col-md-8"></div>
                        </div><!-- /map-outer -->

                    </div><!-- end of row  -->


                    


                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script>    
 
          function init_map() {
            var var_location = new google.maps.LatLng(25.4263432,49.5779139);
     
            var var_mapoptions = {
              center: var_location,
              zoom: 14
            };
     
            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title:"Venice"});
     
            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);
     
            var_marker.setMap(var_map); 
     
          }
     
          google.maps.event.addDomListener(window, 'load', init_map);
     
        </script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>