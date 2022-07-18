<!DOCTYPE html>
<?php

    include 'connection.php';
    require_once 'process.php';

    if(!isset($_SESSION['username'])){
       header("Location:login.php");
    }
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables</title>
        <link rel="stylesheet" href="/assets/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/noscroll.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark d-flex justify-content-between align-items-center">
            <div class="p-3">
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                <a class="navbar-brand ps-3" href="index.php">Educ+ Admin</a>
            </div>
            <div class="">
                <ul class= "navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Educ+ Administrator
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="tables.php">Tables</a></li>
                            <li class="breadcrumb-item active">Update Information</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card">
                                    <form method="post">
                                        <div class="card card-body">
                                            <div class="row py-3">
                                                <input type="hidden" name=id value="<?php echo $id?>">
                                                <div class="input-group col">
                                                    <span class="input-group-text" id="Name">
                                                        <i class="fa fa-genderless" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="Name" value="<?php echo $nameTemp?>" name="name" required>
                                                </div>
                                                <div class="input-group col">
                                                    <span class="input-group-text" id="Email">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="Email" value="<?php echo $emailTemp?>" name="email" required>
                                                </div>
                                            </div>
                                            <div class="row py-3">
                                                <div class="input-group col">
                                                    <span class="input-group-text" id="ContactNumber">
                                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" class="form-control" placeholder="Contact Number" aria-label="ContactNumber" aria-describedby="ContactNumber" value="<?php echo $contactNumberTemp?>" name="contactnumber" required>
                                                </div>
                                                <div class="input-group col">
                                                    <span class="input-group-text" id="SchoolName">
                                                        <i class="fa fa-university" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="School Name" aria-label="SchoolName" aria-describedby="SchoolName" value="<?php echo $schoolNameTemp?>" name="schoolname" required>
                                                </div>
                                            </div>
                                            <div class="row py-3">
                                                <div class="col">
                                                    <textarea class="form-control" placeholder="Message" name="message" required><?php echo $messageTemp?></textarea>
                                                </div>
                                            </div>
                                            <div class="row py-3">
                                                <div class="col-auto me-auto"></div>
                                                <div class="col-auto">
                                                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                                                    <a href="tables.php">
                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Educ+ 2022</div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
