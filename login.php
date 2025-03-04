<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['user'];
  
  //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
  $password = md5($_POST['pass']);

	//prepared statement
  $stmt = $conn->prepare("SELECT username 
                          FROM user 
                          WHERE username=? AND password=?");

	//parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string
  
  //database executes the statement
  $stmt->execute();
  
  //menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
  //mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  //check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
    //jika ada, simpan variable username pada session
    $_SESSION['username'] = $row['username'];

    //mengalihkan ke halaman admin
    header("location:admin.php");
  } else {
	  //jika tidak ada (gagal), alihkan kembali ke halaman login
    header("location:login.php");
  }

	//menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
?>

<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="icon" href="img/Logo.jpg" />
</head>
<body style="background-color: rgb(4, 212, 160);">
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow rounded-5">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="img//1736687171_Logo.jpg" alt="Logo" width="60" height="60">
                            <p>Welcome To Toko Valorant</p>
                            <hr/>
                        </div>
                        <form action="" method="post">
                            <input
                            type="text"
                            name="user"
                            class="form-control my-4 py-2 rounded-4"
                            placeholder="Username"
                            />
                            <input
                            type="password"
                            name="pass"
                            class="form-control my-4 py-2 rounded-4"
                            placeholder="Password"
                            />
                            <div class="text-center my-3 d-grid">
                            <button style="background-color: rgb(4, 212, 160);" class=" rounded-4">Login</button>
                            <br>
                            <button  style="background-color: Cyan;" class=" rounded-4">
                            <a class="nav-link" href="index.php" >back</a>
                            </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
//set variable username dan password dummy
$username = "admin";
$password = "123456";

//check apakah ada request dengan method POST yang dilakukan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //tampilkan isi dari variable array POST menggunakan perulangan
    foreach($_POST as $key => $val){
        echo $key . " : " . $val ."<br>";
    } 

    //check apakah username dan password yang di POST sama dengan data dummy
    if($_POST['user'] == $username AND $_POST['pass'] == $password){
        echo "Username dan Password Benar";
    }else{
        echo "Username dan Password Salah";
    }
};
?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>



</body>
</html>