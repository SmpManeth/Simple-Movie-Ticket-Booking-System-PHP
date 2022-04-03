<?php
session_start();
include "connect1.php";

/****
$sql = "SELECT * FROM topics";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
var_dump($users);
*/

function dd($value) //to be deleted
{
    echo"<pre>", print_r($value, true), "</pre>";
    die();
}
//Execution Quary
function executeQuery($sql, $data)
{
    //sql = 'INSERT INTO `topics`( `name`, `description`) VALUES (?,?)'
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types= str_repeat('s', count($values));
    $stmt->bind_param($types,...$values);
    $stmt->execute();
    
    return $stmt;

}
 
function executeQuerytopic($sql, $data)
{
    //sql = 'INSERT INTO `topics`( `name`, `description`) VALUES (?,?)'
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types= str_repeat('s', count($values));
    $stmt->bind_param($types,...$values);
    $stmt->execute();
    
    return $stmt;
 

}

//Select all Function
function selectAll($table )//, $conditions
{
    global $conn;
    $sql = "SELECT * FROM $table ";
    if (empty($conditions))
    {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    else 
    {
         $i = 0;
        
        foreach ($conditions as $key => $value)

         {
             if ($i ===0)
             {
                $sql = $sql . " WHERE $key =?";
             }
             else
             {
               $sql = $sql . " AND $key =?";
             }
             $i++;
         }
         $stmt = executeQuery($sql, $conditions);
         $records = $stmt->get_result()->fetch_all(MySQLi_ASSOC);
         return $records;
    }
      
} 

//Select One Function
function selectOne($table , $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";

         $i = 0;
        
        foreach ($conditions as $key => $value)

         {
             if ($i ===0)
             {
                $sql = $sql . " WHERE $key =?";
             }
             else
             {
               $sql = $sql . " AND $key =?";
             }
             $i++;
         }

         $sql = $sql . " LIMIT 1";
         $stmt = executeQuery($sql, $conditions);
         $records = $stmt->get_result()->fetch_assoc();
         return $records;
}

//Create Function
function create($table, $data)
{
    global $conn;
    //$sql = "INSERT INTO users SET username=?, admin=?, password=?"
    $sql ="INSERT INTO $table SET ";

    $i = 0;
        
    foreach ($data as $key => $value)

     {
         if ($i ===0)
         {
            $sql = $sql . " $key =?";
         }
         else
         {
           $sql = $sql . ", $key =?";
         }
         $i++;
     }
     //dd($sql);
     $stmt = executeQuery($sql, $data);
     $id = $stmt->insert_id;
     return $id;
     
}

//Create topoic Function for topic
function createtopic($table, $data)
{
    global $conn;
    //$sql = "INSERT INTO users SET username=?, admin=?, password=?"
    $sql ="INSERT INTO $table VALUES ";

    $i = 0;
        
    foreach ($data as $key => $value)

     {
         if ($i ===0)
         {
            $sql = $sql . " $key =?";
         }
         else
         {
           $sql = $sql . ", $key =?";
         }
         $i++;
     }
     $stmt = executeQuerytopic('INSERT INTO `topics`( `name`, `description`) VALUES (?,?)', $data);
     $id = $stmt->insert_id;
     return $id;
     
}

//Update function
function update($table, $id, $data)
{
    global $conn;
    //$sql = "UPDATE users SET username=?, admin=?, password=? WHERE id=?"
    $sql ="UPDATE $table SET ";

    $i = 0;
        
    foreach ($data as $key => $value)

     {
         if ($i ===0)
         {
            $sql = $sql . " $key =?";
         }
         else
         {
           $sql = $sql . ", $key =?";
         }
         $i++;
     }

     $sql = $sql ." WHERE id=?";
     $data['id'] = $id;
     //dd($data);
     $stmt = executeQuery($sql, $data);
     return $stmt->affected_rows;
}

//Delete Function
function delete($table, $id)
{
    global $conn;
    //$sql = "Delete from users WHERE id=?"
    $sql ="DELETE FROM $table WHERE id=?";

     $stmt = executeQuery($sql, ['id' => $id]);
     return $stmt->affected_rows;
}


function selectAllusers( )//, $conditions
{
    global $conn;
    $sql= "SELECT `posts`.*, `users`.`username`FROM `posts`, `users`WHERE `posts`.`published` = '1'";
    //$sql ="SELECT `posts`.*, `users`.`username` FROM `posts` , `users`";
    if (empty($conditions))
    {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    else 
    {
         $i = 0;
        
        foreach ($conditions as $key => $value)

         {
             if ($i ===0)
             {
                $sql = $sql . " WHERE $key =?";
             }
             else
             {
               $sql = $sql . " AND $key =?";
             }
             $i++;
         }
         $stmt = executeQuery($sql, $conditions);
         $records = $stmt->get_result()->fetch_all(MySQLi_ASSOC);
         return $records;
    }
      
} 


function getPublishedPosts($term)
{
    $match = '%'.$term.'%';
    global $conn;
    $sql =" SELECT `posts`.*, `users`.`username`FROM `posts`, `users` WHERE `posts`.`title` LIKE ? OR `posts`.`body` LIKE ? ";
    $stmt = executeQuery($sql,['title'=> $match  ,'body' => $match]);
    $records = $stmt->get_result()->fetch_all(MySQLi_ASSOC);
    return $records;

}