<?php 
function get_user_by_username($username){ 
require '/../libraries/connect.php';
//sql
$sql = "SELECT * FROM user WHERE username = '$username' AND status = 1";


//query

$query = mysqli_query($conn,$sql);

    return mysqli_fetch_assoc($query);
}

function get_user_list(){
require '/../libraries/connect.php';
//sql
$sql =  "SELECT * FROM user ORDER BY id DESC";
    
return mysqli_query($conn,$sql);
}

function add_user($data){
require '/../libraries/connect.php';
$sql = "INSERT INTO user (username,password,name,status,email,phone) VALUES ('{$data['username']}','{$data['password']}','{$data['name']}','{$data['status']}','{$data['email']}','{$data['phone']}')";

return mysqli_query($conn,$sql);
}
function add_userweb($data){
require '/../libraries/connect.php';
$sql = "INSERT INTO user (username,password,name,status,email,phone) VALUES ('{$data['username']}','{$data['password']}','{$data['name']}','{$data['checkbox']}','{$data['email']}','00')";

return mysqli_query($conn,$sql);
}

function get_user_by_id($user_id){
require '/../libraries/connect.php';
  $sql= "SELECT * FROM user where id = '$user_id'";
    
    $query= mysqli_query($conn,$sql);
    
    return mysqli_fetch_assoc($query);
    
}

function edit_user($data,$user_id){
require '/../libraries/connect.php';
    $sql = "UPDATE user SET username= '{$data['username']}', name = '{$data['name']}', email = '{$data['email']}', status = {$data['status']}, phone = '{$data['phone']}'";
    
if($data['password'] != null){
    $sql .= ", password = '{$data['password']}'";
}
$sql.="WHERE id=$user_id";
  return mysqli_query($conn,$sql);
}

function delete_user($user_id){
require '/../libraries/connect.php';
    $sql = "DELETE FROM user where id='$user_id'";
    return mysqli_query($conn,$sql);
    
}
?> 
