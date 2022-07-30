<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register - LOGO COMPANY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <div class="card register-form">
      <div class="card-body">
        <div class="text-center">
          <h2 class="card-title">Register to <br> LOGO COMPANY</h2>
          <h6 class="card-subtitle text-muted mb-5 fw-bolder">
            Please register here
          </h6>
        </div>
        <form>
          <!-- Email -->
          <div class="mb-4">
            <label for="email" class="form-label">Email*</label>
            <input type="email" class="form-control" id="email" placeholder="Input your email here" />
          </div>
          <!-- /Email -->
          <!-- Username -->
          <div class="mb-4">
            <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" id="Username" placeholder="Your username" />
          </div>
          <!-- /Username -->
          <!-- Password -->
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password*</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Input your password" />
          </div>
          <!-- /Password -->
          <div class="d-grid mt-3">
            <button type="submit" class="btn btn-success btn-login">
              Register
            </button>
          </div>
        </form>
        <div class="mt-4 text-center">
          <label>Aleready have account ?
            <a href="loginView.php" class="forgotpassword">Login here</a></label>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>