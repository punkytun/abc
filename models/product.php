<?php 

function get_product_list(){
   require '/../libraries/connect.php';
$sql = "SELECT * FROM product ORDER BY id ASC ";
return mysqli_query($conn,$sql);
} 

function add_product($data){ 
require '/../libraries/connect.php';
$sql = "INSERT INTO product(category_id, name, price, detail,size,size1,size2,longdetail,quantity, image, status) VALUES('{$data['category_id']}', '{$data['name']}', '{$data['price']}', '{$data['detail']}','{$data['size']}','{$data['size1']}','{$data['size2']}','{$data['longdetail']}','{$data['quantity']}','{$data['image']}','{$data['status']}')";
    return mysqli_query($conn,$sql);
}

function get_product_by_id($product_id){
require '/../libraries/connect.php';
$sql = "SELECT * FROM product WHERE id = '$product_id'";
$query= mysqli_query($conn,$sql);
    
return mysqli_fetch_assoc($query);
}

function edit_product($data, $product_id) {
require '/../libraries/connect.php';
$sql = "UPDATE product SET category_id = '{$data['category_id']}', name = '{$data['name']}', detail = '{$data['detail']}',size = '{$data['size']}',size1 = '{$data['size1']}',size2 = '{$data['size2']}',longdetail = '{$data['longdetail']}',quantity = '{$data['quantity']}', price = '{$data['price']}', status = '{$data['status']}'";

if($data['image']!=null){
    $sql .= ", image = '{$data['image']}'";   
}
    $sql.="WHERE id=$product_id";
    return mysqli_query($conn,$sql);
}

function delete_product($product_id){
require '/../libraries/connect.php';
$sql = "DELETE FROM product WHERE id='$product_id'";
return mysqli_query($conn,$sql);
}
?>