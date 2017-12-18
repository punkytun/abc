
<?php include('header.php') ?>
<!-- product-list -->
<div class="main">
<div class="content-top">
  <h2>snowboards</h2>
  <p>hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
  <div class="close_but"><i class="close1"> </i></div>
    <ul id="flexiselDemo3">
    <li><img src="images/b1.jpg" /></li>
    <li><img src="images/b2.jpg" /></li>
    <li><img src="images/b3.jpg" /></li>
    <li><img src="images/b4.jpg" /></li>
    <li><img src="images/b5.jpg" /></li>
    <li><img src="images/b6.jpg" /></li>
    <li><img src="images/b7.jpg" /></li>
    <li><img src="images/b8.jpg" /></li>
    <li><img src="images/b9.jpg" /></li>
    <li><img src="images/b10.jpg" /></li>
    <li><img src="images/b11.jpg" /></li>
    <li><img src="images/b12.jpg" /></li>
  </ul>
<h3>SnowBoard Extreme Series</h3>
  <script type="text/javascript">
$(window).load(function() {
  $("#flexiselDemo3").flexisel({
    visibleItems: 5,
    animationSpeed: 1000,
    autoPlay: true,
    autoPlaySpeed: 3000,
    pauseOnHover: true,
    enableResponsiveBreakpoints: true,
      responsiveBreakpoints: {
        portrait: {
          changePoint:480,
          visibleItems: 1
        },
        landscape: {
          changePoint:640,
          visibleItems: 2
        },
        tablet: {
          changePoint:768,
          visibleItems: 3
        }
      }
    });

});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
</div>
</div>
<!--product-list-->
    <div class="container">
      <?php
      include("../../libraries/connect.php");
// BƯỚC 1: TÌM TỔNG SỐ RECORDS
$result = mysqli_query($conn, 'select count(id) as total from product');
$row = mysqli_fetch_assoc($result);
$total_records = $row['total'];

// BƯỚC 2: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 5;

// BƯỚC 3: TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
$total_page = ceil($total_records / $limit);

// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}
 // Tìm Start
$start = ($current_page - 1) * $limit;
      ?>
         <?php include("products-list.php"); ?>
      </div>
<!-- -->
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
                            <h2>Hover Style #9</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                          </div>
                       </a> </div
                      </div>
                      <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                      <p class="m_5">claritatem insitam</p>
                    </div>
                    <div class="col-md-3 top_box">
    					<div class="view view-ninth"><a href="http://www.elle.com/fashion/street-style/news/g27906/paris-fashion-week-street-style-2016/?">
                        <img src="images/p2.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                          <div class="content">
                            <h2>Hover Style #9</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                          </div>
                        </a> </div>
                       <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                       <p class="m_5">claritatem insitam</p>
    				</div>
    				<div class="col-md-3 top_box">
    					<div class="view view-ninth"><a href="http://www.elle.com/fashion/trend-reports/g28728/spring-2017-fashion-trends/?slide=8">
                        <img src="images/p3.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                          <div class="content">
                            <h2>Hover Style #9</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                          </div>
                        </a> </div>
                       <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                       <p class="m_5">claritatem insitam</p>
    				</div>
    				<div class="col-md-3 top_box1">
    					<div class="view view-ninth"><a href="http://www.elle.com/fashion/trend-reports/g29541/the-best-looks-from-london-fashion-week-fall-2017/">
                        <img src="images/p4.jpg" class="img-responsive" alt=""/>
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                          <div class="content">
                            <h2>Hover Style #9</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                          </div>
                         </a> </div>
                       <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                       <p class="m_5">claritatem insitam</p>
    				</div>
    			</div>
    		 </div>
    	    </div>
<!--trang-->
      <center><div style="word-spacing: 5px" ><strong>Page:</strong>
            <?php
// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
if ($current_page > 1 && $total_page > 1){
    echo '<a href="Shop.php?page='.($current_page-1).'">Prev</a> | ';
}
// Lặp khoảng giữa
for ($i = 1; $i <= $total_page; $i++){
// Nếu là trang hiện tại thì hiển thị thẻ span
// ngược lại hiển thị thẻ a
    if ($i == $current_page){
        echo '<span>'.$i.'</span> | ';
    }
    else{
        echo '<a href="Shop.php?page='.$i.'">'.$i.'</a> | ';
    }
}
 // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
if ($current_page < $total_page && $total_page > 1){
    echo '<a href="Shop.php?page='.($current_page+1).'">Next</a> | ';
            } ?>
        </div>
  <!-- footer-->
<?php include('footer.php') ?>
