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
    <title>Add Customer</title>
  </head>
  <body>
    <div class="container">
    <h1>Add Customer</h1>
        <form action="cust_add_process.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Fill with customers name." required>   
            </div>
            <div class="mb-3">
                <label for='address' class="form-label">Address</label>
                <input type='text' name='address' id='address' name="address" class="form-control" placeholder="Fill with customers address." required>    
            </div>
            <div class="mb-3">
                <label for='telephone' class="form-label">Telephone</label>
                <input type='text' name='telephone' id='telephone' name="telephone" class="form-control" placeholder="Fill with customers telephone." required>
            </div>
            <div class="mb-3">
                <label for='photo' class="form-label">Photo</label>
                <input type='file' name='photo' id='photo' name="photo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for='username' class="form-label">Username</label>
                <input type='text' name='username' id='username' name="username" class="form-control" placeholder="Fill with customers username." required>
            </div>
            <div class="mb-3">
                <label for='password' class="form-label">Password</label>
                <input type='password' name='password' id='password' name="password" class="form-control" placeholder="Fill with customers password." required>
            </div>
            </a> <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>



    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>