<?php
function addkh($ten,$matkhau,$email,$so,$vaitro,$tenanh){
    $sql="INSERT INTO `user`( `username`, `password`, `email`, `phone`, `role`, `image`) 
    VALUES ('$ten','$matkhau','$email','$so','$vaitro','$tenanh')";
    pdo_execute($sql);

}
function listkh(){
    $sql="SELECT `user_id`, `username`, `password`, `email`, `phone`, `role`, `image` FROM `user` WHERE 1";
    $listkh=pdo_query($sql);
    return $listkh;
}
function   deletekh(){
    $sql="DELETE FROM `user` WHERE user_id=".$_GET['id'];
    pdo_execute($sql);
}
function loadkhtheoid(){
    $sql="SELECT * FROM `user` WHERE user_id=".$_GET['id'];
    $sp=pdo_query_one($sql);
    return $sp;
}
function updatekh($ten,$matkhau,$email,$so,$vaitro,$tenanh,$id){
    if($tenanh!=""){
        $sql="UPDATE `user` SET
    
     `username`=' $ten',
     `password`=' $matkhau',
     `email`=' $email',
     `phone`=' $so',
     `role`=' $vaitro',
     `image`='$tenanh' WHERE user_id=".$id;
  
    }else{
        $sql="UPDATE `user` SET
    
     `username`=' $ten',
     `password`=' $matkhau',
     `email`=' $email',
     `phone`=' $so',
     `role`=' $vaitro'
      WHERE user_id=".$id;
    
    }
    pdo_execute($sql);
}




?>