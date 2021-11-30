<?php 
//fungsi upload gambar

function upload(){
    //ambil data gambar
    $fileName = $_FILES['photo']['name'];
    $fileTmp = $_FILES['photo']['tmp_name'];

    //cek apakah yang diup gambar/bukan
    $extensionImageValid = ['jpg', 'jpeg', 'png', 'jfif'];
    $extensionImage = explode('.', $fileName); //misal nama file = Nadia.jpg maka akan dipisah menjadi ['Nadia', 'jpg']
    $extensionImage = strtolower(end($extensionImage));
                    // end = mengambil array paling terakhir. Kalau ada kasus nama filenya Nadia.Lovely.Hai.jpg
                    // strtolower = mengubah nama menjadi huruf kecil semua. Kalau ada kasus nama file Nadia.Lovely.Halo.JPG
    if( !in_array($extensionImage, $extensionImageValid) ){ //true jika ada, false jika tidak ada
        echo "
            <script>
                alert('You only can upload jpg, jpeg, png and jfif file.')
                document.location.href = 'cust_add.php';
            </script>
        ";  
    }

    //lolos pengecekan, gambar siap di upload
    //antisipasi jika user bed tapi nama file sama
    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $extensionImage;
    $uploadFile = move_uploaded_file($fileTmp, 'cust_photo/' . $newFileName);

    return $newFileName;
}

?>