<?php
//include("../../path.php");



$table ='theater';
$errors =array();
$topics = selectAll($table);
$theatername = '';
$id = '';
$theaterplace = "";


//creating posts
if (isset($_POST['add-theater'])) 
{
     

    if (count($errors) == 0) {
        unset($_POST['add-theater']);
    
       
        $post_id = create( $table , $_POST);//create the post
        $_SESSION['message'] = "Theater Created Succesfully";
        $_SESSION['type'] = "";
        header('location: ' . $BASE_URL . 'admin/theaters/index.php');//re directing to the post page
    }else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $price = $_POST['price'];
        $published = isset($_POST['published']) ? 1:0;
    }

    
}


//delete posts
if (isset($_GET['del_id'])) {
    $count = delete($table,$_GET['del_id']);
    $_SESSION['message'] = 'Post Deleted Succesfully';
    $_SESSION['type'] = '';
    header('location: ' . $BASE_URL . 'admin/posts/index.php');
    exit();
    
}

//unpublish and publish posts
if (isset($_GET['published']) && isset($_GET['p_id'])) {
   $published = $_GET['published'];
   $p_id = $_GET['p_id'];
   $count = update( $table ,$p_id, ['published' => $published]);
   $_SESSION['message'] = 'Post Publish state changed';
   $_SESSION['type'] = '';
   header('location: ' . $BASE_URL . 'admin/posts/index.php');
   exit();
    
}



//get post and display on field

if (isset($_GET['id'])) {
 
    $id = $_GET['id'];
   $tid=$id;
    $post = selectOne($table,['id' => $id]);
    
    $theater = $post['Theater_name'];
    $theaterlocation = $post['Theater_Location'];
   
}

//update posts
if (isset($_POST['update-theater'])) {
   
    
    if (count($errors) == 0) {
        $id=$_POST['id'];
        unset($_POST['update-theater'],$_POST['id']);
      
        $post_id = update( $table ,$id, $_POST);//create the post
        $_SESSION['message'] = "Post updated Succesfully";
        $_SESSION['type'] = "";
        header('location: ' . $BASE_URL . 'admin/theaters/index.php');//re directing to the post page
    }else {
        $theaterlocation = $_POST['Theater_Location'];
        $theater = $_POST['theater'];
       
    }
}