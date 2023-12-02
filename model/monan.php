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
        $sql = "SELECT * FROM bill ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $bill = $stmt->fetchAll();
        $conn = null;
        return $bill;
    }
    // function get_address() {
    //     $conn=db();
    //     $sql_dia_chi = "SELECT mon_an.id, dia_chi.ten_dia_chi
    //     FROM mon_an
    //     JOIN dia_chi ON mon_an.dia_chi_id = dia_chi.id";
    //     $result_dia_chi = $conn->query($sql_dia_chi);

    //                     $dia_chi_array = array();
    //             while ($row_dia_chi = $result_dia_chi->fetch_assoc()) {
    //                 $dia_chi_array[$row_dia_chi['id']] = $row_dia_chi['ten_dia_chi'];
    //             }
    // }


?>