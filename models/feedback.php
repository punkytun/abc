<?php
function get_feedback_list()
{
require '/../libraries/connect.php';
$sql = "SELECT * FROM feedback ORDER BY feedback_id DESC";
return mysqli_query($conn,$sql);
}

function delete_feedback($feedback_id)
{
require '/../libraries/connect.php';
$sql = "DELETE FROM feedback WHERE feedback_id='$feedback_id'";
$query= mysqli_query($conn,$sql);
return mysqli_fetch_assoc($query);
}

function add_fb($data){
<<<<<<< HEAD
require '/../libraries/connect.php';
$sql = "INSERT INTO feedback (content) VALUES ('{$data['content']}')";
=======
require '../../libraries/connect.php';
$sql = "INSERT INTO feedback (userid, content) VALUES ('{$_SESSION['user']['id']}','{$data['content']}')";
>>>>>>> c33bcd7bebcfd50f57e974f80e417e0b9722dcc6

return mysqli_query($conn,$sql);
}

?>
