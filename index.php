<!DOCTYPE html>
<html>
<head>
    <title>Membuat Login Dengan PHP dan MySQLi</title>
</head>
<body>
    <h2>Login</h2>
    <br/>
    <!-- cek pesan notifikasi -->
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username atau password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    <br/>
    <br/>
    <form method="post" action="cek_login.php">
        <table>
            <tr>
                <td>Username</td>
                <td></td>
                <td><input type="text" name="username" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td></td>
                <td><input type="password" name="password" placeholder="Masukkan password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>
</html>