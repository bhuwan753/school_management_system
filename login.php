<?php
if (isset($_SESSION['uid'])) {
    header('location: admin/dashboard.php');
}
?>

<?php include('header.php'); ?>
<section class="navigation">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  px-lg-5 px-3 text-light">
        <ul class="navbar-nav mr-auto pl-lg-3 pl-2">
            <li class="nav-item">
                <a href="index.php" class="btn btn-info text-light text-decoration-none">Back</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            <li class="navbar-brand nav-item">School Management System: <strong>LOGIN PANNEL</strong></li>
        </ul>
    </nav>
</section>

<section>
    <div class="container m-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="md-form form-group">
                            <input type="text" name="uname" class="form-control" placeholder="Username">
                        </div>
                        <div class="md-form form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" value="submit" name="login" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>

<?php
include('includes/dbcon.php');

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($res);
    print_r($row);

    if ($row < 1) {
?>
        <script>
            alert('Username or Password not matched !');
            window.open('login.php', '_self');
        </script>
<?php
    } else {
        $data = mysqli_fetch_assoc($res);
        $id = $data['id'];

        session_start();
        $_SESSION['uid'] = $id;
        header('location: admin/dashboard.php');
    }
}
?>