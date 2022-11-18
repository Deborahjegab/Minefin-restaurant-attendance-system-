<?php

@include 'config.php';

if(isset($_POST['submit'])){


   $name = mysqli_real_escape_string($conn, $_POST['first_name']);
   $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
   $department = mysqli_real_escape_string($conn, $_POST['department_name']);
   $position = mysqli_real_escape_string($conn, $_POST['position']);
  
       
      $insert = "INSERT INTO staff_register(first_name,last_name,department_name,position) VALUES('$name','$lname','$department','$position')";
         mysqli_query($conn, $insert);
         header('employee.php');
   };


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

<STYle>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}

body {
  margin: 185px;
  padding: 0;
  overflow: hidden;
  background: white;
  background-repeat: no-repeat;

}

.signupSection {
  background: url(https://source.unsplash.com/TV2gg2kZD1o/1600x800);
  background-repeat: no-repeat;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 800px;
  height: 450px;
  text-align: center;
  display: flex;
  color:#f17a71;
  box-shadow: white;
}

.info {
  width: 45%;
  background: white;
  padding: 30px 0;
  border-right: 5px solid #f17a71;
  h2 {
    padding-top: 30px;
    font-weight: 300;
  }
  p {
    font-size: 18px;
  }
  .icon {
    font-size: 8em;
    padding: 20px 0;
    color: rgba(10, 180, 180, 1);
  }
}

.signupForm {
  width: 70%;
  padding: 30px 0;
  background: white;
  transition: .2s;
  h2 {
    font-weight: 300;
  }
}

.inputFields {
  margin: 15px 0;
  font-size: 16px;
  padding: 10px;
  width: 250px;
  border: 1px solid #f17a71;
  border-top: none;
  border-left: none;
  border-right: none;
  background: white;
  color: grey;
  outline: none;
}

.noBullet {
  list-style-type: none;
  padding: 0;
}

#join-btn {
  border: 1px solid #f17a71;
  background: #f17a71;
  font-size: 18px;
  color: white;
  margin-top: 20px;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
  &:hover {
    background: rgba(20, 20, 20, .8);
    padding: 10px 80px;
  }
}


</STYle>


</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Minecofin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Admin Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Activities</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.php">Dark mode </a>
                                <a class="nav-link" href="layout-sidenav-light.php">Light mode</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Manage
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Manage
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="users.php">Register users</a>
                                         <a class="nav-link" href="view.php">Manage Employee</a>
                                          <a class="nav-link" href="attendance.php">Attendance</a>
                                    </nav>
                                </div>
                               
                            </nav>
                        </div>
                       
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as :</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
      <div id="layoutSidenav_content">
                <main>
                     <div class="container-fluid px-4">
                        <h1 class="mt-4">System users :</h1>
                  
                    <div class="card mb-4">
                       
                        <div class="card-body">
                        <div class="signupSection">
  <div class="info">
    <h2>System Users Signup</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Register Here</p>
   <a href="view.php">    <button type="submit"  name="submit" id="join-btn" alt="Submit"  >View system users</button></a>
  </div>
  <form action="#" method="POST" class="signupForm" name="signupform">
      <h3>register now</h3>
    
    <h2>Sign Up</h2>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
    <ul class="noBullet">
      <li>
        <label for="first name"></label>
        <input type="text" class="inputFields" id="username" name="first_name" placeholder="Enter  firstname" value="" oninput="return userNameValidation(this.value)" required/>
      </li>

      <li>
        <label for="last name"></label>
        <input type="text" class="inputFields" id="email" name="last_name" placeholder="Enter  lastname" value="" required/>
      </li>

      
      <li>
         <label for="department_name"></label>
        <select name="department_name"  class="inputFields" style="background-color: white;">
                            <option value="Corporate">Corporate</option>
                            <option value="Minister">Minister</option>  
                            <option value="Financial">Financial</option>   
                            <option value="ICT">ICT</option>      
                        </select>
                    </li>

    <li>
        <label for="position"></label>
        <input type="text" class="inputFields" id="email" name="position" placeholder="Enter  position" value="" required/>
    </li>
      <li id="center-btn">
        <input type="submit"  name="submit" id="join-btn" alt="Submit" value="register now">
         
        
      </li>
    </ul>
  </form>
</div>   
  </div>
 </div>
 </div>
</div>
</div>
 </main>
      
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy;ishimwe deborah 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
<script >
    var alertRedInput = "#8C1010";
var defaultInput = "rgba(10, 180, 180, 1)";

function userNameValidation(usernameInput) {
    var username = document.getElementById("username");
    var issueArr = [];
    if (/[-!@#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/.test(usernameInput)) {
        issueArr.push("No special characters!");
    }
    if (issueArr.length > 0) {
        username.setCustomValidity(issueArr);
        username.style.borderColor = alertRedInput;
    } else {
        username.setCustomValidity("");
        username.style.borderColor = defaultInput;
    }
}

function passwordValidation(passwordInput) {
    var password = document.getElementById("password");
    var issueArr = [];
    if (!/^.{7,15}$/.test(passwordInput)) {
        issueArr.push("Password must be between 7-15 characters.");
    }
    if (!/\d/.test(passwordInput)) {
        issueArr.push("Must contain at least one number.");
    }
    if (!/[a-z]/.test(passwordInput)) {
        issueArr.push("Must contain a lowercase letter.");
    }
    if (!/[A-Z]/.test(passwordInput)) {
        issueArr.push("Must contain an uppercase letter.");
    }
    if (issueArr.length > 0) {
        password.setCustomValidity(issueArr.join("\n"));
        password.style.borderColor = alertRedInput;
    } else {
        password.setCustomValidity("");
        password.style.borderColor = defaultInput;
    }
}
</script>
</body>

</html>