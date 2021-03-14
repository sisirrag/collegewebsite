<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="about.php">Alumni</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">NIRF</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">Library</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">More</a>
    </li>
  </ul>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#035036">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="http://dyuti.in/assets/images/RCSS_logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php" target="content">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php" target="content">Gallery</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="contact.php" target="content">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php" target="content">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dept.php" target="content">Department</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="moodle.html">Moodle</a></li>
                  <li><a class="dropdown-item" href="fedena.html">Fedena</a></li>
                  
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <br><br><br>
    <div class="container">
        
        <br><br>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <table class="table table-borderless" style="background-color: #035036; color: #ffffff;">
                    <tr>
                        <td colspan="2"><center><h2>Registration Form</h2></center></td><br>
                    </tr>
                <tr>
                    <td>Code</td>
                    <td><input class="form-control" type="text"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input class="form-control"type="text"></td>
                </tr>
                <tr>
                    <td>Designation</td>
                    <td><input class="form-control"type="text"></td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td><input class="form-control"type="text"></td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td><input class="form-control"type="text"></td>
                </tr>
                <tr>
                    <td>Place</td>
                    <td><input class="form-control"type="text"></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input class="form-control" type="date" name="" id=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="form-control"type="text"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input class="form-control"type="text"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input class="form-control"type="password" name="" id=""></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input class="form-control"type="password" name="" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><Button class="btn btn-primary" >Register</Button></td>
                </tr>
            </table></div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>