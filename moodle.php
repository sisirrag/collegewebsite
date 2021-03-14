<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moodle</title>
</head>
<body background="https://images.pexels.com/photos/50711/board-electronics-computer-data-processing-50711.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
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
    <div class="container">
        
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <br><br><br><br>
                <table border="0" class="table table-borderless " style="background-color: #035036; color:rgb(211, 232, 238); border: 0px;">
                    <tr>
                        <td><center><h3>Moodle</h3></center></td>
                        
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="pass" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-outline-light">Login</button></td>
                    </tr>
                </table>
            
            </div>
            <div class="col"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  
  
</body>
</html>