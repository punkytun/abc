
<?php
include("addtocart.php"  );

include("../../libraries/connect.php");
include("../../configs/config.php");
$id = $_GET["id"];
$result = mysqli_query($conn,"SELECT * FROM `product`WHERE id = ".$id);
$row = mysqli_fetch_array($result);
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Single :: w3layouts</title>
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
     <!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){

							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,

								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->
</head>
<!--header-->
<?php
include("header.php");
 ?>
    <!--product-detail-->
     <div class="main">
                <form method="post" action="checkout.php?action=add&name=<?php echo $row["name"]; ?>">

      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-9 single_left">
				   <div class="single_image">
					     <ul id="etalage">
							<li>
									<img class="etalage_thumb_image" src="<?php echo SITE_URL . '/../admin/product/userfiles/' . $row["image"] ?>" />
									<img class="etalage_source_image" src="<?php echo SITE_URL . '/../admin/product/userfiles/' . $row["image"] ?>" />
								
							</li>
							<li>
								<img class="etalage_thumb_image" src="<?php echo SITE_URL . '/../admin/product/userfiles/' . $row["image"] ?>" />
								<img class="etalage_source_image" src="<?php echo SITE_URL . '/../admin/product/userfiles/' . $row["image"] ?>" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="<?php echo SITE_URL . '/../admin/product/userfiles/' .  $row["image"] ?>" />
								<img class="etalage_source_image" src="<?php echo SITE_URL . '/../admin/product/userfiles/' . $row["image"] ?>" />
							</li>
						</ul>
					    </div>
				        <!-- end product_slider -->
				        <div class="single_right">
				        	<h3><?php echo $row["name"] ?> </h3>
				        	<p class="m_10"><?php echo $row["detail"] ?></p>
				        	<ul class="options">
								<h4 class="m_12">Select a Size</h4>
								<li><a href="#"><?php if ($row["size"] == "XS" or $row["size"] == "S" or $row["size"] == "M" or $row["size"] == "L" or $row["size"] == "XL" or $row["size"] == "XXL" ) echo $row["size"]; else echo"Sold"?></a></li>
                <li><a href="#"><?php if ($row["size1"] == "XS" or $row["size1"] == "S" or $row["size1"] == "M" or $row["size1"] == "L" or $row["size1"] == "XL" or $row["size1"] == "XXL" ) echo $row["size1"]; else echo"Sold"?></a></li>
                <li><a href="#"><?php if ($row["size2"] == "XS" or $row["size2"] == "S" or $row["size2"] == "M" or $row["size2"] == "L" or $row["size2"] == "XL" or $row["size2"] == "XXL" ) echo $row["size2"]; else echo"Sold"?></a></li>
							</ul>
              <h4 class="m_12">Availability:</h4>
              <p class="m_10"><?php if ($row["status"] == 1) echo "New"; else echo "Sold"?></p>
							<div class="btn_form">
                <button type="submit" name="Submit" class="exclusive">
                  <span>Add to cart</span>
               </button>
							</div>
							<div class="social_buttons">
								<h4><?php echo $row["quantity"] ?> Items</h4>
								<button type="button" class="btn1 btn1-default1 btn1-twitter" onclick="">
					              <i class="icon-twitter"></i> Tweet
					            </button>
					            <button type="button" class="btn1 btn1-default1 btn1-facebook" onclick="">
					              <i class="icon-facebook"></i> Share
					            </button>
					             <button type="button" class="btn1 btn1-default1 btn1-google" onclick="">
					              <i class="icon-google"></i> Google+
					            </button>
					            <button type="button" class="btn1 btn1-default1 btn1-pinterest" onclick="">
					              <i class="icon-pinterest"></i> Pinterest
					            </button>
					        </div>
				        </div>
				        <div class="clear"> </div>
				</div>
				<div class="col-md-3">
				  <div class="box-info-product">
					<p class="price2">VND <?php echo $row["price"] ?></p>
          <div><input type="text" name="quantity" value="1" size="2" />
          				<input type="submit" value="Add to cart" class="btnAddAction" /></div>
				   </div>
			   </div>
			</div>
			<div class="desc">
			   	<h4>Description</h4>
			   	<p><?php echo $row["longdetail"] ?></p>
			</div>
      	<h3 class="m_3"><a href="shop.php">--Return To Shop--</a></h3>
        <div class="features">
          <div class="container">
            <h3 class="m_3">ELLE</h3>
            <div class="close_but"><i class="close1"> </i></div>
              <div class="row">
              <div class="col-md-3 top_box">
                <div class="view view-ninth"><a href="http://www.elle.com/beauty/hair/g28726/spring-2017-hair-trends/">
                          <img src="images/p1.jpg" class="img-responsive" alt=""/>
                          <div class="mask mask-1"> </div>
                          <div class="mask mask-2"> </div>
                            <div class="content">
                              <h2>ELLE NEWS</h2>
                              <p>Best hair style from NewYork FW 2017.</p>
                            </div>
                         </a> </div
                        </div>
                        <h4 class="m_4"><a href="#">Best hair style from NewYork FW 2017</a></h4>
                        <p class="m_5">ELLE MAGAZINE</p>
                      </div>
                      <div class="col-md-3 top_box">
                <div class="view view-ninth"><a href="http://www.elle.com/fashion/street-style/news/g27906/paris-fashion-week-street-style-2016/?">
                          <img src="images/p2.jpg" class="img-responsive" alt=""/>
                          <div class="mask mask-1"> </div>
                          <div class="mask mask-2"> </div>
                            <div class="content">
                              <h2>ELLE NEWS</h2>
                              <p>Best street style form Paris FW 2017.</p>
                            </div>
                          </a> </div>
                         <h4 class="m_4"><a href="#">Best street style form Paris FW 2017</a></h4>
                         <p class="m_5">ELLE MAGAZINE</p>
              </div>
              <div class="col-md-3 top_box">
                <div class="view view-ninth"><a href="http://www.elle.com/fashion/trend-reports/g28728/spring-2017-fashion-trends/?slide=8">
                          <img src="images/p3.jpg" class="img-responsive" alt=""/>
                          <div class="mask mask-1"> </div>
                          <div class="mask mask-2"> </div>
                            <div class="content">
                              <h2>ELLE NEWS</h2>
                              <p>Top trend from spring/summer Newyork FW 2017.</p>
                            </div>
                          </a> </div>
                         <h4 class="m_4"><a href="#">Top trend from spring/summer NewYork FW 2017</a></h4>
                         <p class="m_5">ELLE MAGAZINE</p>
              </div>
              <div class="col-md-3 top_box1">
                <div class="view view-ninth"><a href="http://www.elle.com/fashion/trend-reports/g29541/the-best-looks-from-london-fashion-week-fall-2017/">
                          <img src="images/p4.jpg" class="img-responsive" alt=""/>
                          <div class="mask mask-1"> </div>
                          <div class="mask mask-2"> </div>
                            <div class="content">
                              <h2>ELLE NEWS</h2>
                              <p>Best look from London Fall FW 2017.</p>
                            </div>
                           </a> </div>
                         <h4 class="m_4"><a href="#">Best look from London Fall FW 2017</a></h4>
                         <p class="m_5">ELLE MAGAZINE</p>
              </div>
            </div>
           </div>
            </div>
          </div>
            </form>
        </div>
<!--footer-->
	 <?php
   include("/footer.php");
    ?>
</body>
</html>
