<?php

function validateUser($user)
{
    $errors = array();
    

    if (empty($user['username'])) {

        array_push($errors , 'User Name is Required');
    }
     
    if (empty($user['email'])) {

        array_push($errors , 'Email is Required');
    }

    if (empty($user['password'])) {

        array_push($errors , 'Password is Required');
    }

    if ($user['passwordConf'] !== $user['password']) {

        array_push($errors , 'Entered passwords are not same !');
    }

   $existingUser = selectOne('users', ['email' => $user ['email']]);
   if (isset($existingUser)) {
    array_push($errors , 'Email is Registered with us.');
   }

    return $errors;
}

function validateLogin($user)
{
    $errors = array();
    

    if (empty($user['username'])) {

        array_push($errors , 'User Name is Required');
    }
     

    if (empty($user['password'])) {

        array_push($errors , 'Password is Required');
    }


    return $errors;
}

function updateUser($user)
{
    $errors = array();
    

    if (empty($user['username'])) {

        array_push($errors , 'User Name is Required');
    }
     
    if (empty($user['email'])) {

        array_push($errors , 'Email is Required');
    }

    if (empty($user['password'])) {

        array_push($errors , 'Password is Required');
    }

    if ($user['passwordConf'] !== $user['password']) {

        array_push($errors , 'Entered passwords are not same !');
    }


    return $errors;
}