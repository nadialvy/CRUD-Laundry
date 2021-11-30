<?php 

    function show($query){
        include 'koneksi.php'; //koneksi

        $data = mysqli_query($conn, $query);
    
        $wadah = [];
        while( $value = mysqli_fetch_assoc($data) ) {
            $wadah[] = $value;
        }
        return $wadah;    
    }
    
?>