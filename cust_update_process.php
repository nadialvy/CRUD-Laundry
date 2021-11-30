<?php 

    if($_POST){
        include 'koneksi.php'; //koneksi

        //ambil data
        $id = $_POST["id"];
        $name = htmlspecialchars( $_POST["name"] );
        $address =  htmlspecialchars( $_POST["address"] );
        $telephone =  htmlspecialchars( $_POST["telephone"] );
        $username = htmlspecialchars( $_POST["username"] );
        $password = htmlspecialchars($_POST["password"] );
        $oldPhoto = $_POST["oldFile"];

        //cek apakah user pilih gambar baru atau tidka
        if($_FILES['photo']['error'] === 4){
            $oldPhoto;
        }
        else {
            //upload image
            require 'upload_photo.php';
            $oldPhoto = upload();
        }

        //query
        $query = "UPDATE customers SET
                    cust_id = '$id',
                    cust_name = '$name',
                    cust_address = '$address',
                    cust_tel = '$telephone',
                    cust_photo = '$oldPhoto',
                    cust_usn = '$username',
                    cust_pass = '$password'
                  WHERE `customers`.`cust_id` = $id;";
        $update_data = mysqli_query($conn, $query);
        

        //cek
        if($update_data){
            echo "
                <script>
                    alert('Succes update data customers')
                    document.location.href = 'cust_show.php';
                </script>
            ";
        }
        else {
            echo "
            <script>
                alert('Failed to update data customers')
                document.location.href = 'cust_show.php';
            </script>
        ";
        }
    }

?>

