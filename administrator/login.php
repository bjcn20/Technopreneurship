<!DOCTYPE html>

<?php
    include 'connection.php';
    session_start();
    if(isset($_POST['login']))
    {
        $username = $_POST['inputUser'];
        $password = $_POST['inputPassword'];

        $sql= " SELECT * FROM account WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
        }
        else
        {
            echo
            '
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Error</h5>
                        </div>
                        <div class="modal-body">
                            <p>Username or Password is Wrong. Please try again!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
    }
?>



<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body
    style="background-image: url('https://i.gifer.com/RfmR.gif'); background-size:100% 100%; background-repeat: no-repeat; width: 100%;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4 ">Admin Login</h3></div>
                                    <div class="card-body">
                                        <form method="post" id="myForm">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputUser" name="inputUser" type="text" placeholder="Username" required>
                                                <label for="inputUser">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="inputPassword" type="password" placeholder="Password" required>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end mt-4 mb-0">
                                                <input type="submit" name="login" class="btn btn-primary" data-bs-target="#loginModal" data-bs-toggle="modal" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
