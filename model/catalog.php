<?php

function themdm($tendm){
  $conn=db();
  $sql = "INSERT INTO category (tendm) VALUES ('".$tendm."')";
  // use exec() because no results are returned
  $conn->exec($sql);
}


function updatedm($id,$tendm){
  $conn=db();
  $sql = "UPDATE category SET tendm='".$tendm."' WHERE id=".$id;
  // Prepare statement
  $stmt = $conn->prepare($sql);
  // execute the query
  $stmt->execute();
}

// function getonedm($id){
//   $conn=db();
//   $stmt = $conn->prepare("SELECT * FROM category WHERE id=".$id);
//   $stmt->execute();
//   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//   $kq=$stmt->fetchAll();
//   return $kq;
// }

function deletedm($id){
  $conn=db();
  $sql = "DELETE FROM category WHERE id=".$id;

  // use exec() because no results are returned
  $conn->exec($sql);
}

function getall_dm(){
     
    $conn=db();
    $stmt = $conn->prepare("SELECT * FROM category");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
    return $kq;
}
?>