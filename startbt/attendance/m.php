<?php
include 'config.php';
$result= $conn->query("SELECT * FROM staff_register");
$customers = $result->fetch_all(MYSQLI_ASSOC);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <style>
        #join-btn {
  border: 1px solid #f17a71;
  background: #f17a71;
  font-size: 18px;
  color: white;
  margin-top: 20px;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
  &:hover :
    background: rgba(20, 20, 20, .8);
    padding: 10px 80px;
  }
}
    </style>
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
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
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
                         <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Forms and tables
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Manage system
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

                         <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                           Reports
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Dark mode </a>
                                <a class="nav-link" href="#">Light mode</a>
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
                    <h1 class="mt-4">Add staff members and do modifications</h1>
                    <ol class="breadcrumb mb-4">
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                      Add user
                                    </button> 
                        
                                    </div>
                           
                         
                    </ol>
                  
                    <div class="card mb-4">
                        <div class="card-header" style="color: #f17a71;">
                            <i class="fas fa-table me-1"></i>
                            View System users
                        </div>
                        <div class="card-body" style="color: #f17a71;">
                            <table id="datatablesSimple" >
                                <thead>
                                    <tr style="color: #f17a71;">
                                        <th>#</th> 
                                        <th>Firstname</th>
                                        <th>lastname</th>
                                        <th>department</th>
                                        <th>position</th>
                                        <th>status</th>
                                        <th>Activities</th>
                                    
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th> 
                                        <th>Firstname</th>
                                        <th>lastname</th>
                                        <th>department</th>
                                        <th>position</th>
                                        <th>status</th>
                                         <th>Activities</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                foreach($customers as $customer) :?>

                            
                                <tr>
                    <td><?php echo $customer['id']?></td>
					<td><?php echo $customer['first_name']?></td>
					<td><?php echo $customer['last_name']?></td>
                    	<td><?php echo $customer['department_name']?></td>
                    	<td><?php echo $customer['position']?></td>
                        <td>
                            <?php
                                         if($customer['status'] == 1){
                                           echo '<p><a href="active.php?id='.$customer['id'].'&status=0" class="btn btn-success"> Active </a></p>';
                                         }
                                         else{
                                           echo '<p><a href="active.php?id='.$customer['id'].'&status=1" class="btn btn-primary"> Deactive </a></p>';
                                         }
                                         ?>
                                  
                        </td>
				
					<td><a href="javascript:void();" data-id="'.$customer['id'].'" data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-sm btn info"> Edit</a>
                </td>
				                </tr>
				<?php endforeach; ?>
                
                             </tbody>
                            </table>
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
                </div>
                </div>
            </footer>
        </div>
    </div>
   
<!--modal-->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="addUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!--registration form-->
<form  id="saveUserForm" action="javascript:void();" method="POST">
  
<div class="mb-3">
    <label for="InputFirst_name" class="form-label">first_name</label>
    <input type="text" name="first_name" class="form-control" id="exampleInputFirst_name" required>
    
  </div>
<div class="mb-3">
    <label for="Inputlast_name" class="form-label">last_name</label>
    <input type="text" name="last_name" class="form-control" id="exampleInputlast_name" required>
     
  </div>
<div class="mb-3">
    <label for="Inputdepartment_name" class="form-label">department</label>
   <select class="form-select" aria-label="Default select example" id="exampleInputdepartment_name" name="department_name" required>
  <option selected>Open this select  Staff deapartment</option>
  <option>Corporate</option>
  <option>Minister</option>
  <option>Financial</option>
    <option>ICT</option>
</select>
  </div>
 <div class="mb-3">
    <label for="Inputposition" class="form-label">Position</label>
    <input type="text"  name="position" class="form-control" id="exampleInputposition" required>

  </div>
    <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
</form>
    
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!--End of modal-->

<div class="modal fade" id="editUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">update user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!--registration form-->
<form  id="saveUserForm" action="javascript:void();" method="_POST_">
  <input type="hidden" name="" id="id" value="">
   <input type="hidden" name="trid" id="trid" value="">
<div class="mb-3">
    <label for="InputFirst_name" class="form-label">first_name</label>
    <input type="text" name="_first_name" class="form-control" id="_InputFirst_name" required>
    
  </div>
<div class="mb-3">
    <label for="Inputlast_name" class="form-label">last_name</label>
    <input type="text" name="_last_name" class="form-control" id="_Inputlast_name" required>
     
  </div>
<div class="mb-3">
    <label for="Inputdepartment_name" class="form-label">department</label>
   <select class="form-select" aria-label="Default select example" id="_Inputdepartment_name" name="_department_name" required>
  <option selected>Open this select  Staff deapartment</option>
  <option value="1">Corporate</option>
  <option value="2">Minister</option>
  <option value="3">Financial</option>
    <option value="3">ICT</option>
</select>
  </div>
 <div class="mb-3">
    <label for="Inputposition" class="form-label">Position</label>
    <input type="text"  name="_position" class="form-control" id="_Inputposition" required>

  </div>
</form>
    
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary" name="submit">Save changes</button>
      </div>
    </div>
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
   <script>
    
 $(document).on('submit', '#saveUserForm', function (event) {
    event.preventDefault();

    let form = document.querySelector('#saveUserForm'); 

    $.ajax({
                url: "add_user.php",
                type: "POST",
                data: $("#saveUserForm").serialize(),
                success: function (data) {
                    if (data==1){
                      alert('data saved successfully');
                      setTimeout(() => {  
                           refreshpage();
                           form.reset();
                           }, 3000);
                    }else{
                        alert(data);
                         
                    }
                }

    });
    function refreshpage(){
        window.location.reload()
    }


});
   </script>
</body>

</html>