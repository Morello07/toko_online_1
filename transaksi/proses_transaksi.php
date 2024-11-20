<?php
if($_POST){
    $id_pelanggan=$_POST['id_pelanggan'];
    $id_transaksi=$_POST['id_transaksi'];
    $id_petugas= $_POST['id_petugas'];
    $tgl_transaksi=$_POST['tgl_transaksi'];
   
    if(empty($id_pelanggan)){
        echo "<script>alert('ID PELANGGAN tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($id_petugas)){
        echo "<script>alert('ID PETUGAS tidak boleh kosong');location.href='transaksi.php';</script>";
    
    } elseif(empty($tgl_transaksi)){
        echo "<script>alert('TGL TRANSAKSI tidak boleh kosong');location.href='transaksi.php';</script>";
   
    } elseif(empty($id_transaksi)){
        echo "<script>alert('ID TRANSAKSI tidak boleh kosong');location.href='transaksi.php';</script>";
    
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into transaksi (id_pelanggan, id_transaksi, id_petugas, tgl_transaksi) value ('".$id_pelanggan."','".$id_transaksi."','".$id_petugas."','".$tgl_transaksi."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan transaksi');location.href='tampil_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php';</script>";
        }
    }
}
?>



