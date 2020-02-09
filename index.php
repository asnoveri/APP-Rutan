<?php
session_start();
ob_start();
include "config/conn.php";
include "config/FuncMasaTahanan.php";
include "config/FuncMasaHukuman.php ";
include "config/Funcpelangaran.php ";

//logika logout

    if (isset($_GET['logout'])){
        session_destroy();
        header('location:index.php');
    }

//logika login

if (isset($_POST['login'])){
    $username = mysqli_escape_string($conn, $_POST['Username']);
    $password = mysqli_escape_string($conn, $_POST['password']);

    $sql =mysqli_query($conn,"select * from USER WHERE username='$username' and pass='$password'");
    $a =mysqli_fetch_array($sql);
    if (!empty($a['username'])) {
        $_SESSION['level'] = $a['level'];
        $_SESSION['username'] = $a['username'];
        $_SESSION['nama'] = $a['nama'];
        $_SESSION['image'] = $a['image'];


    if (isset($_SESSION['level']) && $_SESSION['level']=='admin'){
        header('location:?page=db');
    }else
        if (isset($_SESSION['level']) && $_SESSION['level']=='pegawai'){
            header('location:?page=dashboard');
        }


    }else{
        header('location:?login=fail');
    }
}

if (isset($_SESSION['level']) && !empty($_SESSION['level'])){?>

<html>
<head>
    <title>SISTEM INFORMASI RUTAN</title>
    <link rel="stylesheet" href="css/stayle.css">
    <script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
    <script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
    <script  type="text/javascript" src="assets/web/js/Chart.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/bootstraps.min.css">



</head>

<body>
<div id="container">
    <div class="navbar">
        <a href="?logout=y"> <img class="img1" src="gambar/logout.png" alt="logout" width="40" height="30"></a><img class="gbr" src="./gambar/<?php echo $_SESSION['image'] ?>" >
        <h10>RUMAH TAHANAN KELAS IIB BATUSANGKAR</h10>
    </div>

    <?php
    if (isset($_SESSION['level']) && $_SESSION['level']=='admin'){
        include "menu/admin.php.";
    }else
        if (isset($_SESSION['level']) && $_SESSION['level']=='pegawai'){
        include "menu/pegawai.php";
    }
    ?>

    <div id="isi">
          <a>  <?php
            if (isset($_GET['page'])){
                $view =  'view/'.$_GET['page'].'.php';

                if (file_exists($view)){
                    include "$view";
                }else{
                    include "view/404error.php";
                }
            }
            ?>
              </a>
    </div>
</div>
</body>
</html>

<?php }else{
?>
<html>
<head>
    <title>SISTEM INFORMASI RUTAN</title>
    <link rel="stylesheet" href="css/stayle.css">
</head>
    <div id="lOGIN">
        <div class="kepala">

            <h1>Login</h1>
        </div>
        <div class="badn">
        <?php
            if (isset($_GET['login'])){
                echo "<div class='pesaneror'><h8>USERNAME & PASSWORD SALAH</h8></div>";
            }
        ?>
            <form action="" method="POST">
                <div class="form-grup">
                    <label for="">UserName</label>
                    <input type="text" name="Username" class="panuah" placeholder="Username">
                </div>
                <div class="form-grup">
                    <label for="">Password</label>
                    <input type="password" name="password" class="panuah"  placeholder="Password">
                </div>
                <div class="form-grup">
                    <input type="submit" value="Login"  name="login" class="itu">
                    <a href="#">Lupa password? </a>
                </div>
            </form>

        </div>
        <div class="kepala"><h8><marquee>SELAMAT DATANG DIRUTAN KELAS IIB BATUSANGKAR</marquee></h8></div>
    </div>

</html>
<?php }
?>
