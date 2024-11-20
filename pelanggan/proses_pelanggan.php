<?php
if($_POST){
    $nama=$_POST['nama'];
    $id_pelanggan=$_POST['id_pelanggan'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat= $_POST['alamat'];
    $telp=$_POST['telp'];
   
    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='pelanggan.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='pelanggan.php';</script>";
    
    } elseif(empty($telp)){
        echo "<script>alert('telp tidak boleh kosong');location.href='pelanggan.php';</script>";
   
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='pelanggan.php';</script>";
   
    } elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='pelanggan.php';</script>";
   
    } elseif(empty($id_pelanggan)){
        echo "<script>alert('id pelanggan tidak boleh kosong');location.href='pelanggan.php';</script>";
    
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pelanggan (nama, id_pelanggan, alamat, telp, username, password) value ('".$nama."','".$id_pelanggan."','".$alamat."','".$telp."' ,'".$username."' ,'".$password."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='pelanggan.php';</script>";
        }
    }
}
?>



