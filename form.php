








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Info Form</title>
  </head>
  <body>


<h1 class="text-center">Data entry page</h1>

<div class="container mt-5 w-50 p-2">
<form action="config.php" method= "post">
<div class="mb-3">
  <label for="name" class="form-label">Name</label>
  <input type="text" class="form-control"
   placeholder='Enter your username' name='username'>
</div>
<div class="mb-3">
  <label for="exampleInputemail" class="form-label">Email</label>
  <input type="email" class="form-control"
   placeholder='Enter your email' name='email'>
</div>
<div class="mb-3">
  <fieldset>

    <div>
        <label>Gender </label>
        <input type="radio" name="gender" value="m"/>
        <label for="genderChoice1">Male</label>

        <input type="radio" name="gender" value="f"/>
        <label for="genderChoice2">Female</label>

        <input type="radio" name="gender" value="m"/>
        <label for="genderChoice3">Others</label>
    </div>
  </fieldset>
</div>
<div class="mb-3">
  <label for="exampleInputphone1" class="form-label">Phone</label>
  <input type="phone" class="form-control"
   placeholder='Enter your phone no' name='phone'>
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Password</label>
  <input type="password" class="form-control"
   placeholder='Enter your password' name='password'>
</div>

<button type="submit" class="btn btn-primary w-100">Login</button>
</form> 

</div>

</body>
</html>