<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="create.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Menu Bar -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-2">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="dashboard.php">DASHBOARD</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>

    <!-- Form start -->
    <div class="container mt-4 mb-4">
      <div class="card">
        <h2 class="card-header">Add New Information</h2>
        <div class="card-body">
          <form name="myForm" id="formId" method="POST" action="store.php" onsubmit="return mySubmit();">
          <table id="myTable">
            <tr>
              <td>Enter UserName</td>
              <td><input type="text" name="username" id="uname"></td>
            </tr>
            <tr>
              <td>Enter Email</td>
              <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
              <td>Enter Phone</td>
              <td><input type="text" name="phone" id="phone"></td>
            </tr>
            <tr>
              <td>Hide phone</td>
              <td><input type="checkbox" name="checkPhone" onclick="pd()"></td>
            </tr>
            <tr>
              <td>Select Department</td>
              <td><select name="department" id="department">
                <option>Select........</option>
                <option>CSE</option>
                <option>CSIT</option>
                <option>EEE</option>
                <option>ENG</option>
              </select></td>
            </tr>
            <tr>
              <td>Enter Id</td>
              <td><input type="text" name="Id" id="Id"></td>
            </tr>
            <tr>
              <td>About Yourself</td>
              <td><textarea name="about" id="about"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="submit" value="Save Data">
              <input type="reset" value="Reset"></td>
            </tr>
          </table>
        </form>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>