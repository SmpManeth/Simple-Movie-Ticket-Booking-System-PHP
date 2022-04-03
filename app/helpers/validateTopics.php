<?php

function validatetopic($topic)
{
    $errors = array();
    

    if (empty($topic['name'])) {

        array_push($errors , 'Topic Name is Required');
    }
     
    

   $existingTopic = selectOne('topics', ['name' => $topic ['name']]);
   if (isset($existingTopic)) {
    array_push($errors , 'Topic is Entered Before by SomeOne');
   }

    return $errors;
}

function UpdateTopic($topic)
{
    $errors = array();
    

    if (empty($topic['name'])) {

        array_push($errors , 'Topic Name is Required');
    }

    return $errors;
}
