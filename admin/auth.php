<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="https://cse.bubt.edu.bd/static/images/icons/bubt.png"
    />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />

    <title>Admin | Login - BUBT Ennovation 2022</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body style="background-color: cadetblue;">
    <h1><?php if(isset($_REQUEST['error'])){echo "Invalid";} ?></h1>
    <div class="container card " style = "width: 30rem;">
    <div class="card-body">
    <h5 class="card-title text-center mb-3">Admin Login</h5>
    <form action = "./adminLogin.php" method = "POST">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="email" name="admin_email" class="form-control" />
            <label class="form-label" for="form1Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="password" name="admin_password" class="form-control" />
            <label class="form-label" for="form1Example2">Password</label>
        </div>

        <!-- Submit button -->
       <button type="submit" name="admin_login" class="btn btn-primary btn-block">Sign in</button>
       
    </form>
    <a href="./../index.php"><button class="btn btn-warning ms-auto">GO HOME</button></a>
  </div>
    </div>
  </body>
</html>
