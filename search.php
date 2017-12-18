<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
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
</head>
<!--header-->
<?php
include("header.php");
 ?>
 <div class="container">
   <div class="main">
 <?php
           //Nếu người dùng submit form thì thực hiện
           if (isset($_REQUEST['submit']))
           {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);

            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            }
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "select * from product where name like '%$search%'";

                // Kết nối sql
             include("../../libraries/connect.php");
                include("../../configs/config.php");
                // Thực thi câu truy vấn
                $sql = mysqli_query($conn,$query);

                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sql);

                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "")
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num Result for Search: <b>$search</b>";

                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    while ($row = mysqli_fetch_array($sql)){?>
                                      <div class="main">
                                         <div class="col-md-3 shop_box"><a href="product-detail.php?id=<?php echo $row["id"]?>">
                                           <img src="<?php echo SITE_URL . '/../admin/product/userfiles/' . $row["image"]?>" class="img-responsive" alt=""/>
                                           <span class="sale-box">
                                             <span class="sale-label"><?php if($row["status"] == 1) echo "New"; else echo""?></span>
                                           </span>
                                           <div class="shop_desc">
                                             <h3><a href="#"><?php echo $row["name"] ?></a></h3>
                                             <p><?php echo $row["detail"] ?> </p>
                                             <span class="actual"><?php echo $row["price"]?></span><br>
                                             <ul class="buttons">
                                               <li class="shop_btn"><a href="product-detail.php?id=<?php echo $row["id"]?>">Buy Now</a></li>
                                               </ul>
                                               <div class="clear"> </div>
                                             </div>
                                         </div>
                                       </div>
                                    <?php }
                                  }
                                  else {
                                     echo "No Result for Search: <b>$search</b>";
                                 }
                                }
                              }
                                    ?>
</div>
</div>
<h3 class="m_3"><a href="shop.php">--Shopping Time--</a></h3>
<!--footer-->
<?php
include("footer.php");
 ?>
</body>
</html>
