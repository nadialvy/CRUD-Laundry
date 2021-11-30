<?php 

    
    if($_POST){
        include 'koneksi.php'; //koneksi

        //ambil data
        $name = htmlspecialchars( $_POST["name"] );
        $address =  htmlspecialchars( $_POST["address"] );
        $telephone =  htmlspecialchars( $_POST["telephone"] );
        $username = htmlspecialchars( $_POST["username"] );
        $password = htmlspecialchars($_POST["password"] );

        //upload image
        require 'upload_photo.php';
        $photo = upload();

        //query
        $query = "INSERT INTO customers
                  VALUE ('', '$name', '$address', '$telephone', '$photo', '$username', '$password') ";
        $insert_data = mysqli_query($conn, $query);

        //cek
        if($insert_data){
            echo "
                <script>
                    alert('Succes add data customers')
                    document.location.href = 'cust_show.php';
                </script>
            ";
        }
        else {
            echo "
            <script>
                alert('Failed to add data customers')
                document.location.href = 'cust_add.php';
            </script>
        ";
        }
    }

?>