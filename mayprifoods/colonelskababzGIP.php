 <!doctype php>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maypri Foods</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
    <link href="../css/online/styles.css" rel="stylesheet">
    <link href="../css/customStyles.css" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Chelsea+Market' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href="../js/booklet/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>
    <script type="text/javascript" src="../js/booklet/jquery-ui-1.10.4.custom.min.js"></script>
    <!-- Booklet -->
    <script src="../js/booklet/jquery.easing.1.3.js"></script>
    <script src="../js/parseMenu.js"></script>
</head>

<body style="background-image: url('../img/pageBackground.jpg'); background-size: 100%;">
    
    <!--Bootstrap navigation bar for mayprifoods -->
    <div class="navbar navbar-default" style="background-image: url('../img/teal2.jpg');">
        <div class="container">
            <div class="navbar-header">
                <a href="mayprifoods.html" class="navbar-brand"><img src="../img/maypri_foods_logo2.png" style="width:80px; height: auto;margin-top:-10px;"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                </button>                  
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="navlink"><a href="../index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;HOME</a></li>
                    <li class="navlink active"><a href="../mayprifoods.html"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>&nbsp;&nbsp;RESTAURANTS & CAFES</a></li>
                    <li class="navlink"><a href="../vending.html"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;VENDISTRO</a></li>
                    <li class="navlink"><a href=""><span class="glyphicon glyphicon-flag" aria-hidden="true"></span>&nbsp;&nbsp;FRANCHISING</a></li>
                    <li class="navlink"><a href=""><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>&nbsp;&nbsp;GIFTS</a></li>        
                </ul>
            </div>
        </div>            
    </div>

    <br/>
    <div>


        <div class="container" style="margin-top: 0px;">
            <div class="row-fluid">
                <div class="col-sm-3 col-md-3 col-lg-3">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div style="text-align: center; ">
                        <img src="../img/restaurants/logos/colonelskebabz_logo.png" style="margin-top: 20px;width:300px;">
                        <p class="subContent" style="text-align: center;font-size: 20px;">@ The Great India Place Mall, Noida</p>    
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6" style=" margin-top:0px;">
                    <div class="stitched" style="width:100%;border: 2px solid #C7BEB6;">
                        <div id="restaurantCarousel" class="carousel slide" style="height:500px;" data-ride="carousel" > 
                            <!-- Indicators --> 
                            <ol class="carousel-indicators">
                                <li data-target="#restaurantCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#restaurantCarousel" data-slide-to="1"></li>
                                <li data-target="#restaurantCarousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner"  role="listbox">
                                <div class="item active"> <img src="../img/restaurants/GIP/Make it a meal.png" data-src="0" alt="First slide">
                                    <div class="container">
                                        <div class="carousel-caption">
                                         </div>
                                    </div>
                                </div>
                                <div class="item"> <img src="../img/restaurants/GIP/Hot chocolate.png" data-src="1" alt="Second slide">
                                    <div class="container">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <img src="../img/restaurants/GIP/Shashlik Paneer.png" class="img-responsive" data-src="2" alt="Third slide">
                                    <div class="container">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#restaurantCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> 
                            <a class="right carousel-control" href="#restaurantCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-6" style="">
                   <!-- Mission statement div -->
                    <div class="" style="width:100%; margin-bottom:20px;">
                        <img src="../img/restaurants/misc/ckHistoryImage.png" class="img-responsive">
                        <!--<div style="margin-left:60px;width:76%;padding-top: 30px;">                           
                            <p style="display:inline-block;text-align: justify;font-size: 15px;font-weight: bold;"><span class="subHeading" style="display:inline-block;font-family:myFirstFont;color: red; text-align:left; margin-bottom: 0px;">Colonel's Kababz</span> is the legacy of Late Col KN Kochhar popularly known as "Kaku" Kochhar. The Colonel had great passion for food and was also well known for his culinary skills while serving the Army. It was more of a hobby than a profession which ventured out to be his mega success. The passion for food and serving delicious tikkas and kababs led the Late Col. Kochhar to venture into the food business in the year 1990 by opening up the first company-owned restaurant at Defence Colony in Delhi. Colonel's Kababz is now a prestigious chain of franchised restaurants in Delhi and a premuim name in catering. The recipes are all original by the Late Colonel.  The same legacy has been aptly inherited & is being rightly carried forward at the TGIP restaurant.</p>
                        </div>-->
                    </div>
                   <!-- Mission statement div -->
                    <div class="boxStyle1" style="width:100%; margin-bottom:20px; background-color: #3F9D9C;">
                        <p class="subContent" style="color:#FFFFFF;text-align: left;font-size: 20px;">"We will make our every guest happy with a smile on our face"<br/><span style="font-size: 15px; float: right;">-Our Restaurant's Mission</span></p>
                    </div>
                   
               </div>
            </div>
            <div class="row">
                <div class="col-sm-9 col-md-9 col-lg-9">                   
                </div>    
                <div class="col-sm-2 col-md-2 col-lg-2" style="text-align: center;">                   
                    <img id="bookTable" src="../img/restaurants/misc/book_a_table.png" style="width:200px;">
                </div>    
                <div class="col-sm-1 col-md-1 col-lg-1">                   
                </div>    
            </div>
            <br/><br/>
            <div class="row" style="margin-top: 20px">
                <div class="boxStyle1 col-sm-12 col-md-12 col-lg-12 " style="background: #A8BE37;">
                    <div class="section-heading">
                        <p class="subHeading" style="color: #3DA09D;">Our Menu</p>
                     </div>
                     <div>
                    <nav class="menuNavigation">
                        <ul id="menuNavigationList">
                            <li id="tandooriSpecialsLink" style="border-top-left-radius: 10px;border-bottom-left-radius: 10px;" href="">Dhanna Singh's Tandoori Specials</li>
                            <li id="signatureRollsLink" href="">Signature Rolls</li>
                            <li id="aLaCarteLink">Sepoy Omi's A la Carte</li>
                            <li id="sizzlingSpecialsLink">Chef's Sizzling Specials</li>
                            <li id="weekdayDelightsLink">Colonel's Weekday Combos</li>
                            <li id="riceBreadsLink" style="border-bottom-right-radius: 10px;border-top-right-radius: 10px;">Rumaalu's Rice & Breads</li>
                        </ul>
                    </nav>
                         
                     </div>
                     <br/>
                    
                    <!-- Tandoori Special Menu Category -->
                    <div class="stitched menuCategory" style="margin-top: 20px;" id="tandooriSpecials">
                        <p class="subContent" style="margin:0 auto;text-align: center; width:60%;">Dhanna Singh was Col. Saheb's most trusted and favorite batman, a soldier assigned to a commissioner officer, who served him for many years</p><br/><br/>
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                    <?php
                                        $file = "ckMenu/tandooriSpecials.csv";
                                        $file_handle = fopen("ckMenu/tandooriSpecials.csv", "r");
                                        $lines = count(file($file));
                                        $i=0;
                                        while ($i<ceil($lines/2)) {
                                            $line_of_text = fgetcsv($file_handle, 1024);
                                            print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                            if(isset($line_of_text[2])) {
                                               print "<dd>".$line_of_text[2]."</dd><br/>";
                                            }
                                            else {
                                                print "<br/>";
                                            }
                                            $i++;
                                        }
                                        
                                    ?>
                                      <!--<dt>Trio of Chicken<span style="float:right">Rs 325</span></dt>
                                      <dd>A tandoori six-pc sampler of our signature kababs namely Murgh Malai , Murgh Lahsuni & Murgh Tikka OR Murgh Malai , Murgh Lahsuni & Tandoori Chicken</dd>-->
                                    </dl>                                    
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                        <?php
                                            while($i<$lines) {
                                                $line_of_text = fgetcsv($file_handle, 1024);
                                                print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                                if(isset($line_of_text[2])) {
                                                   print "<dd>".$line_of_text[2]."</dd><br/>";
                                                }
                                                else {
                                                    print "<br/>";
                                                }
                                                $i++;
                                            }
                                            fclose($file_handle);    
                                        ?>
                                    </dl>                                    
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Signature Rolls Menu Category -->
                    <div class="stitched menuCategory" style="margin-top: 20px;" id="signatureRolls">
                        <p class="subContent" style="margin:0 auto;text-align: center; width:60%;"></p><br/><br/>
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                    <?php
                                        $file = "ckMenu/rolls.csv";
                                        $file_handle = fopen("ckMenu/rolls.csv", "r");
                                        $lines = count(file($file));
                                        $i=0;
                                        while ($i<ceil($lines/2)) {
                                            $line_of_text = fgetcsv($file_handle, 1024);
                                            print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                            if(isset($line_of_text[2])) {
                                               print "<dd>".$line_of_text[2]."</dd><br/>";
                                            }
                                            else {
                                                print "<br/>";
                                            }
                                            $i++;
                                        }
                                        
                                    ?>
                                      <!--<dt>Trio of Chicken<span style="float:right">Rs 325</span></dt>
                                      <dd>A tandoori six-pc sampler of our signature kababs namely Murgh Malai , Murgh Lahsuni & Murgh Tikka OR Murgh Malai , Murgh Lahsuni & Tandoori Chicken</dd>-->
                                    </dl>                                    
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                        <?php
                                            while($i<$lines) {
                                                $line_of_text = fgetcsv($file_handle, 1024);
                                                print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                                if(isset($line_of_text[2])) {
                                                   print "<dd>".$line_of_text[2]."</dd><br/>";
                                                }
                                                else {
                                                    print "<br/>";
                                                }
                                                $i++;
                                            }
                                            fclose($file_handle);    
                                        ?>
                                    </dl>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- A La Carte Menu Category -->
                    <div class="stitched menuCategory" style="margin-top: 20px;" id="aLaCarte">
                        <p class="subContent" style="margin:0 auto;text-align: center; width:60%;">Sepoy Om Prakash was Col. Saheb's favorite cook with whom he created new culinary delights</p><br/><br/>
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                    <?php
                                        $file = "ckMenu/aLaCarte.csv";
                                        $file_handle = fopen("ckMenu/aLaCarte.csv", "r");
                                        $lines = count(file($file));
                                        $i=0;
                                        while ($i<ceil($lines/2)) {
                                            $line_of_text = fgetcsv($file_handle, 1024);
                                            print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                            if(isset($line_of_text[2])) {
                                               print "<dd>".$line_of_text[2]."</dd><br/>";
                                            }
                                            else {
                                                print "<br/>";
                                            }
                                            $i++;
                                        }
                                        
                                    ?>
                                      <!--<dt>Trio of Chicken<span style="float:right">Rs 325</span></dt>
                                      <dd>A tandoori six-pc sampler of our signature kababs namely Murgh Malai , Murgh Lahsuni & Murgh Tikka OR Murgh Malai , Murgh Lahsuni & Tandoori Chicken</dd>-->
                                    </dl>                                    
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                        <?php
                                            while($i<$lines) {
                                                $line_of_text = fgetcsv($file_handle, 1024);
                                                print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                                if(isset($line_of_text[2])) {
                                                   print "<dd>".$line_of_text[2]."</dd><br/>";
                                                }
                                                else {
                                                    print "<br/>";
                                                }
                                                $i++;
                                            }
                                            fclose($file_handle);    
                                        ?>
                                    </dl>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sizzling Specials Category -->
                    <div class="stitched menuCategory" style="margin-top: 20px;" id="sizzlingSpecials">
                        <p class="subContent" style="margin:0 auto;text-align: center; width:60%;"></p><br/><br/>
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                    <?php
                                        $file = "ckMenu/sizzlingSpecials.csv";
                                        $file_handle = fopen("ckMenu/sizzlingSpecials.csv", "r");
                                        $lines = count(file($file));
                                        $i=0;
                                        while ($i<ceil($lines/2)) {
                                            $line_of_text = fgetcsv($file_handle, 1024);
                                            print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                            if(isset($line_of_text[2])) {
                                               print "<dd>".$line_of_text[2]."</dd><br/>";
                                            }
                                            else {
                                                print "<br/>";
                                            }
                                            $i++;
                                        }
                                        
                                    ?>
                                      <!--<dt>Trio of Chicken<span style="float:right">Rs 325</span></dt>
                                      <dd>A tandoori six-pc sampler of our signature kababs namely Murgh Malai , Murgh Lahsuni & Murgh Tikka OR Murgh Malai , Murgh Lahsuni & Tandoori Chicken</dd>-->
                                    </dl>                                    
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                        <?php
                                            while($i<$lines) {
                                                $line_of_text = fgetcsv($file_handle, 1024);
                                                print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                                if(isset($line_of_text[2])) {
                                                   print "<dd>".$line_of_text[2]."</dd><br/>";
                                                }
                                                else {
                                                    print "<br/>";
                                                }
                                                $i++;
                                            }
                                            fclose($file_handle);    
                                        ?>
                                    </dl>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                 <!-- Weekday Delights Category -->
                    <div class="stitched menuCategory" style="margin-top: 20px;" id="weekdayDelights">
                        <p class="subContent" style="margin:0 auto;text-align: center; width:60%;">Rumaalu was Col. Saheb's favorite cook in Misa Mari, Assam</p><br/><br/>
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                    <?php
                                        $file = "ckMenu/weekdayDelights.csv";
                                        $file_handle = fopen("ckMenu/weekdayDelights.csv", "r");
                                        $lines = count(file($file));
                                        $i=0;
                                        while ($i<ceil($lines/2)) {
                                            $line_of_text = fgetcsv($file_handle, 1024);
                                            print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                            if(isset($line_of_text[2])) {
                                               print "<dd>".$line_of_text[2]."</dd><br/>";
                                            }
                                            else {
                                                print "<br/>";
                                            }
                                            $i++;
                                        }
                                    ?>
                                    </dl>                                    
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                        <?php
                                            while($i<$lines) {
                                                $line_of_text = fgetcsv($file_handle, 1024);
                                                print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                                if(isset($line_of_text[2])) {
                                                   print "<dd>".$line_of_text[2]."</dd><br/>";
                                                }
                                                else {
                                                    print "<br/>";
                                                }
                                                $i++;
                                            }
                                            fclose($file_handle);    
                                        ?>
                                    </dl>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                 <!-- Rice & Breads Category -->
                    <div class="stitched menuCategory" style="margin-top: 20px;" id="riceBreads">
                        <p class="subContent" style="margin:0 auto;text-align: center; width:60%;">Rumaalu was Col. Saheb's favorite cook in Misa Mari, Assam</p><br/><br/>
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                    <?php
                                        $file = "ckMenu/riceBreads.csv";
                                        $file_handle = fopen("ckMenu/riceBreads.csv", "r");
                                        $lines = count(file($file));
                                        $i=0;
                                        while ($i<ceil($lines/2)) {
                                            $line_of_text = fgetcsv($file_handle, 1024);
                                            print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                            if(isset($line_of_text[2])) {
                                               print "<dd>".$line_of_text[2]."</dd><br/>";
                                            }
                                            else {
                                                print "<br/>";
                                            }
                                            $i++;
                                        }
                                    ?>
                                    </dl>                                    
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-6">
                                    <dl style="font-size: 12px;">
                                        <?php
                                            while($i<$lines) {
                                                $line_of_text = fgetcsv($file_handle, 1024);
                                                print "<dt>".$line_of_text[0]."<span style=\"float:right\">".$line_of_text[1]."</span></dt>";
                                                if(isset($line_of_text[2])) {
                                                   print "<dd>".$line_of_text[2]."</dd><br/>";
                                                }
                                                else {
                                                    print "<br/>";
                                                }
                                                $i++;
                                            }
                                            fclose($file_handle);    
                                        ?>
                                    </dl>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>    
        </div>
        


    </div> <!--End of wrapper -->    

</body>
    
</html>