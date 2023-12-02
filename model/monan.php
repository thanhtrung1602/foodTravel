<?php
    function getall_dish(){
        $conn= db();
        $sql = "SELECT * FROM dish ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dssp = $stmt->fetchAll();
        $conn = null;
        return $dssp;
    }
    function getone_dish($id){
        $conn= db();
        $stmt = $conn->prepare("SELECT * FROM dish where id=".$id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dssp = $stmt->fetchAll();
        $conn = null;
        return $dssp;
    }

    function getId($id){
        $conn = db();
        $sql = "SELECT * FROM dish WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dssp = $stmt->fetch();
        return $dssp;
    }

    function deldish($id){
        $conn= db();
        $sql = "DELETE FROM dish WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function adddish($id_dish,$name_dish,$price_dish,$img_dish,$id_eatery,$id_catalog){
        $conn= db();
        $sql = "INSERT INTO dish (id,name,price,img,id_eatery,id_catalog) VALUES ('".$id_dish."','".$name_dish."','".$price_dish."','".$img_dish."','".$id_eatery."','".$id_catalog."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function addBill($nameUser, $phone, $addressUser, $note, $totalPay, $id_dish) {
        $conn = db();
        $sql = "INSERT INTO bill (nameUser, phone, addressUser, note, totalPay, id_dish) VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nameUser, $phone, $addressUser, $note, $totalPay, $id_dish]);
    }
    
    function updatedish($id_dish,$name_dish,$price_dish,$img_dish,$id_eatery,$id_catalog){
        $conn= db();
        $sql = "UPDATE dish SET name='".$name_dish."' ,price='".$price_dish."' ,img='".$img_dish."' ,id_eatery='".$id_eatery."' ,id_catalog='".$id_catalog."' WHERE id=".$id_dish;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function checkuser($username,$password) {
        $conn=db();
        $stmt = $conn->prepare("SELECT * FROM user WHERE name='".$username."' AND password='".$password."'");
        $stmt ->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        if(count($kq)>0) return $kq[0]['role'];
        else return 0;
    }
    function getuserinfo($username,$password) {
        $conn=db();
        $stmt = $conn->prepare("SELECT * FROM user WHERE name='".$username."' AND password='".$password."'");
        $stmt ->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function getonedm(){
        $conn=db();
        $stmt = $conn->prepare("SELECT * FROM category ORDER BY id DESC");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
      }

      function bill() {
        $conn = db();
        $sql = "SELECT * FROM bill ORDER BY id DESC LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $bill = $stmt->fetchAll();
        $conn = null;
        return $bill;
    }

    function getone_Bill($id){
        $conn= db();
        $stmt = $conn->prepare("SELECT * FROM bill where id=".$id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dssp = $stmt->fetchAll();
        $conn = null;
        return $dssp;
    }

    function deleteBill($id){
        $conn= db();
        $sql = "DELETE FROM bill WHERE id=".$id;
        $conn->exec($sql);
    }
    


?>