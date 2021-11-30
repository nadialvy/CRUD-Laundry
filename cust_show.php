<?php 
    require 'cust_show_process.php';
    $cust = show("SELECT * FROM customers");
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
    </style>

    <title>Customers Data</title>
  </head>
  
  <body>
    <h1>Customers Data</h1>
    
    <table class="table table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Telephone</th>
                <th scope="col">Photo</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($cust as $customers) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $customers["cust_name"]; ?></td>
                <td><?= $customers["cust_address"]; ?></td>
                <td><?= $customers["cust_tel"]; ?></td>
                <td><img src="cust_photo/<?= $customers["cust_photo"]; ?>" alt=""></td>
                <td><?= $customers["cust_usn"]; ?></td>
                <td><?= $customers["cust_pass"]; ?></td>
                <td>
                    <a href="cust_update.php?id=<?= $customers["cust_id"]; ?>">
                        <button type="button" class="btn btn-primary btn-sm">Update</button>
                    </a>
                    | 
                    <a href="cust_delete.php?id=<?= $customers["cust_id"]; ?>" onclick="return confirm ('Do you want to delete this data?')">
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
    <center> <a href="cust_add.php"> <button type="button" class="btn btn-primary">Add Data</button> </a>  </center>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>