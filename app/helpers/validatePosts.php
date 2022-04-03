<?php
function validatePost($post)
{
    $errors = array();
    
 
    if (empty($post['title'])) {

        array_push($errors , 'Title is Required');
    }
     
    if (empty($post['body'])) {

        array_push($errors , 'Body is Required');
    }

    
     
   $existingPost = selectOne('posts', ['title' => $post ['title']]);
   if (isset($existingPost)) {
    array_push($errors , 'Title name is exhisting');
   }

    return $errors;
}


function UpdatePost($post)
{
    $errors = array();
    
 
    if (empty($post['title'])) {

        array_push($errors , 'Title is Required');
    }
     
    if (empty($post['body'])) {

        array_push($errors , 'Body is Required');
    }

    if (empty($post['topic_id'])) {

        array_push($errors , 'Choose a topic');
    }


    return $errors;
}