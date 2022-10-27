<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=" Registration template in php.">
    <meta name="keywords" content="register page">
    <meta name="author" content="Adewunmi Oladele">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body class="p-3 m-0 border-0 bd-example">
<h1>Register now</h1>
<form method="POST" action="user_data.php">

<div class="mb-3 row">
  <label for="name" class="col-sm-2 col-form-label">Name:</label>
  <div class="col-sm-5">
    <input type="text" name="name" class="form-control-sm form-control-lg" id="name">
  </div>
</div>
<div class="mb-3 row">
  <label for="email" class="col-sm-2 col-form-label">Email:</label>
  <div class="col-sm-5">
    <input type="email" name="email" class="form-control-sm form-control-lg" id="email">
  </div>
</div>

<div class="mb-3 row">
  <label for="date" class="col-sm-2 col-form-label">Date of Birth:</label>
  <div class="col-sm-5">
    <input type="date" name="date" class="form-control-sm form-control-lg" id="dob">
  </div>
</div>

<div class="mb-3 row">
  <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
  <div class="col-sm-5">
    <input type="radio" name="gender" value="female" class="form-control-sm form-control-lg" id="gender">Female
    <input type="radio" name="gender" value="male" class="form-control-sm form-control-lg" id="gender">Male
  </div>

<div class="mb-3 row">
  <label for="country" class="col-sm-2 col-form-label">Country:</label>
  <div class="col-sm-5">
    <input type="text" name="country" class="form-control-sm form-control-lg" id="country">
  </div>
</div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>


   

</body>
</html>