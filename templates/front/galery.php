
<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Experiance :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
    <!-- light-box -->
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
   <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

		});
	</script>
</head>
<!--header-->
<?php
include("/header.php");
 ?>
 <!--content-->
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row ex_box">
				<h3 class="m_2">LOOKBOOK FROM HOT FASHION BRAND</h3>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="https://hypebeast.com/2017/6/supreme-louis-vuitton-official-lookbook"><img src="images/l9.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						SUPREME X LOUIS VUITON
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="http://us.louisvuitton.com/eng-us/stories/men-s-spring-summer-2017-show"><img src="images/l8.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						LOUIS VUITTON 2017
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="https://www.gucci.com/ca/en/lo/runway/men/spring-summer-2017-runway-c-runway-men-spring-summer-2017-runway" ><img src="images/l7.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						GUCCI COLLECTION 2017
					</div>
				</a></div>
				</div>
		    </div>
		    <div class="row ex_box">
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="http://www.chanel.com/en_MY/fashion/collection/show-spring-summer-2017.html"><img src="images/l6.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						CHANNEL COLLECTION 2017
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="http://www.chanel.com/en_MY/fashion/collection/show-cruise-2017-18-paris.html" ><img src="images/l5.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						CHANNEL COLLECTION 2017
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="https://www.dior.com/couture/en_int/womens-fashion/ready-to-wear/cruise-2018-show"><img src="images/l2.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						DIOR CRUISE 2018
					</div>
				</a></div>
				</div>
		    </div>
		    <div class="row ex1_box">
			   <div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="https://www.dior.com/couture/en_int/womens-fashion/ready-to-wear/autumn-winter-2017-18-ready-to-wear-show" ><img src="images/l3.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						DIOR AUTUMN 2018
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="http://www.vogue.com/fashion-shows/spring-2017-ready-to-wear/saint-laurent/slideshow/collection" ><img src="images/l4.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						SAINT LAURENT SPRING COLLECTION
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="http://www.vogue.com/fashion-shows/fall-2017-menswear/fear-of-god/slideshow/collection#1" ><img src="images/l1.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						FEAR OF GOD FALL COLLECTION 2017
					</div>
				</a></div>
			   </div>
		    </div>
		 </div>
	   </div>
	  </div>
    <!--footer-->
	  <?php
    include("/footer.php");
     ?>
</body>
</html>
