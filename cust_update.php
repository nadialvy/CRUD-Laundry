<?php 
    include 'koneksi.php'; //koneksi

    //ambil data

        $id = $_GET["id"];
        
        //kueri
        $query = "SELECT * FROM customers
                  WHERE cust_id = $id";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400&display=swap');
        body, html{
            font-family: "Outfit";
        }

        h1{
            text-align: center;
            margin: 20px;
        }

        img{
            border-radius: 5px;
            width: 8%;
            margin-bottom: 10px;
        }
    </style>
    <title>Update Data</title>
  </head>
  <body>
    <h1>Update Data Customer</h1>
    <form action="cust_update_process.php" method="POST" enctype="multipart/form-data">
        <div class="container">
                <input type="hidden" name="id" value= "<?= $data['cust_id']?>" >   
                <input type="hidden" name="oldFile" value= "<?= $data['cust_photo']?>" >   
            <div class="mb-3">
                <label for="name" class="form-label">Name </label>
                <input type="text" class="form-control" id="name" name="name" value= "<?= $data['cust_name']; ?>" required>   
            </div>
            <div class="mb-3">
                <label for='address' class="form-label">Address</label>
                <input type='text' name='address' id='address' name="address" class="form-control" value= "<?= $data['cust_address']; ?>" required>    
            </div>
            <div class="mb-3">
                <label for='telephone' class="form-label">Telephone</label>
                <input type='text' name='telephone' id='telephone' name="telephone" class="form-control" value= "<?= $data['cust_tel']; ?>" required>
            </div>
            <div class="mb-3">
                <label for='photo' class="form-label">Photo</label> <br>
                <img src="cust_photo/<?= $data['cust_photo']; ?>" alt="">
                <input type='file' name='photo' id='photo' name="photo" class="form-control">
            </div>
            <div class="mb-3">
                <label for='username' class="form-label">Username</label>
                <input type='text' name='username' id='username' name="username" class="form-control" value= "<?= $data["cust_usn"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for='password' class="form-label">Password</label>
                <input type='password' name='password' id='password' name="password" class="form-control" value= "<?= $data["cust_pass"]; ?>"  required>
            </div>
            </a> <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>