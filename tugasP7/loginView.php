<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - LOGO COMPANY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <div class="card login-form">
      <div class="card-body">
        <div class="text-center">
          <h2 class="card-title">Welcome to <br> LOGO COMPANY</h2>
          <h6 class="card-subtitle text-muted mb-5 fw-bolder">
            Please login first!
          </h6>
        </div>
        <form method="POST" action="commandPHP/loginProcess.php">
          <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Username*</label>
            <input type="text" class="form-control" name="username" placeholder="Input your username here" required />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password*</label>
            <input type="password" class="form-control" name="password" placeholder="Input your password" required />
          </div>
          <div class="d-flex justify-content-between">
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" />
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <div>
              <a href="#" class="forgotpassword">Forgot Password?</a>
            </div>
          </div>
          <div class="d-grid mt-3">
            <button type="submit" class="btn btn-success btn-login">
              Login
            </button>
          </div>

          <div class="mt-4 text-center">
            <label>Not have account ?
              <a href="registerView.php" class="forgotpassword">Create an account</a></label>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>