<?php 
include 'head.php';

if(isset($_POST['bayar'])){
  $id = $_SESSION['id'];
  $nama_pendaftar = $_SESSION['nama'];
  $namabank = $_POST['namabank'];

  $nama   = $_FILES['gambar']['name'];
  $size   = $_FILES['gambar']['size'];
  $error  = $_FILES['gambar']['error'];
  $asal   = $_FILES['gambar']['tmp_name'];

  $lokasi = "img/bukti_transfer/" . $nama;
  $format = pathinfo($nama, PATHINFO_EXTENSION);

  if($error === 0){
    if($size > 9000){
      if(in_array($format, ['jpg', 'png', 'JPG', 'PNG'])){
        move_uploaded_file($asal, "img/bukti_transfer/".$nama);

<<<<<<< HEAD
        if(simpantransaksi($id, $nama_pendaftar, $namabank, $lokasi)){
          echo "<script>window.location.href='user.php'</script>";
        } else {
          echo "Error: Unable to save transaction data.";
        }
      } else {
        echo "Maaf format filenya harus jpg/png ";
=======
    if ($size > 9000){ 
    
          if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
            
            if(simpantransaksi($id,$nama_pendaftar,$namabank,$lokasi)){

              echo "<script>window.location.href='user.php'</script>";
              }else{
                echo "Error: " . $query . "<br>" . mysqli_error($konek);
              } 
    
            move_uploaded_file($asal, "img/bukti_transfer/".$nama);
          }else{
            echo "Maaf format filenya harus jpg/png ";
          }
          
      }else{
        echo "file terlalu besar";
>>>>>>> 45caa11a027f35d23552da1bbbad4e565fc18f3d
      }
    } else {
      echo "File terlalu besar";
    }
  } else {
    echo "Ada kesalahan saat upload";
  }
}
?>
