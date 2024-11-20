<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $id_pelanggan=$_POST['id_pelanggan'];
    $alamat= $_POST['alamat'];
    $telp=$_POST['telp'];

    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tampil_pelanggan.php';</script>";

    } else{
        include "koneksi.php";
        if(empty($alamat)){
            $update=mysqli_query($conn,"update pelanggan set nama='".$nama."',telp='".$telp."' where id_pelanggan = '".$id_pelanggan."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        } else {
            $update=mysqli_query($conn, "update pelanggan set nama='".$nama."',telp='".$telp."', username='".$username."', alamat='".$alamat."' where id_pelanggan = '".$id_pelanggan."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        }
        
    } 
}  
?>