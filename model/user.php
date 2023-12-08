<?php
    function getall_user(){
        $conn= db();
        $sql = "SELECT * FROM user ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dssp = $stmt->fetchAll();
        $conn = null;
        return $dssp;
    }
    function deluser($id){
        $conn= db();
        $sql = "DELETE FROM user WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    // function adduser($nameuser,$information){
    //     $conn= db();
    //     $sql = "INSERT INTO comment (nameuser,information) VALUES ('".$nameuser."','".$information."')";
    //     // use exec() because no results are returned
    //     $conn->exec($sql);
    // }
?>