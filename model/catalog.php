<?php

function themdm($tendm){
  $conn=connectdb();
  $sql = "INSERT INTO catalog (tendm) VALUES ('".$tendm."')";
  // use exec() because no results are returned
  $conn->exec($sql);
}


function updatedm($id,$tendm){
  $conn=connectdb();
  $sql = "UPDATE catalog SET tendm='".$tendm."' WHERE id=".$id;
  // Prepare statement
  $stmt = $conn->prepare($sql);
  // execute the query
  $stmt->execute();
}

function getonedm($id){
  $conn=connectdb();
  $stmt = $conn->prepare("SELECT * FROM catalog WHERE id=".$id);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}

function deletedm($id){
  $conn=connectdb();
  $sql = "DELETE FROM catalog WHERE id=".$id;

  // use exec() because no results are returned
  $conn->exec($sql);
}

function getall_dm(){
     
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM catalog");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
    return $kq;
}
?>