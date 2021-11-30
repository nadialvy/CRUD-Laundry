<?php 
    
    if( $_GET["id"] ){
        include 'koneksi.php';

        $id = $_GET["id"]; //mengambil data

        //kueri
        $query = "DELETE FROM customers
                  WHERE cust_id = $id";
        $delete = mysqli_query($conn, $query);

        //cek
        if( $delete ){
            echo "
                <script>
                    alert('Successfully delete data')
                    document.location.href = 'cust_show.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Failed to delete data')
                    document.location.href = 'cust_show.php';
                </script>
            ";
        }
    }

?>