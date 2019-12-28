<?php
include("config1.php");
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "DELETE FROM blog WHERE id=$id";
  $query = mysqli_query($db,$sql);
  if($query){
    header('Location:timeline.php');
  }else{
    die("gagal Hapus Data");
  }
}else {
  die("akses Dilarang");
} ?>
