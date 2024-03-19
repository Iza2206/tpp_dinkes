<?php
// require_once('../libraries/config/dbcon.php');
// include('../libraries/function/libgenerator.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $username = $_POST['username_oper']; // Ambil nilai dari input email
    $password = $_POST['passwd_oper']; // Ambil nilai dari input password

    // Contoh validasi sederhana, sesuaikan dengan kebutuhan Anda
    if ($username == "tpp@gmail.com" && $password == "masuk123") {
        // Redirect ke halaman dashboard atau tampilkan pesan sambutan
        echo '<script language="JavaScript">
        alert("Login berhasil...");
        document.location = "../Administrator/dashboard";
        </script>';
    } else {
        // Tampilkan pesan error jika kredensial tidak valid
        echo "<script>alert('Email atau password salah.');</script>";
    }
}
?>

<style media="screen">
    *,
    *:after,
    *:before {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #f4f4fa;
    }

    .background {
        width: 430px;
        height: 520px;
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
    }

    .background .shape {
        height: 200px;
        width: 200px;
        position: absolute;
        border-radius: 50%;
    }

    .shape:first-child {
        background: linear-gradient(#1845ad, #23a2f6);
        left: -80px;
        top: -80px;
    }

    .shape:last-child {
        background: linear-gradient(to right, #ff512f, #f09819);
        right: -30px;
        bottom: -80px;
    }

    form {
        height: auto;
        max-width: 80%;
        width: 400px;
        background-color: rgba(80, 80, 80, 0.13);
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
        padding: 50px 35px;
    }

    form * {
        font-family: 'Poppins', sans-serif;
        color: #080710;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
    }

    form h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
    }

    label {
        display: block;
        margin-top: 30px;
        font-size: 16px;
        font-weight: 500;
    }

    input {
        display: block;
        height: 50px;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.27);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 300;
    }

    ::placeholder {
        font-size: 16px;
        padding-top: 10px;
        background-color: rgba(255, 255, 255, 0.27);
        color: #080710;
    }

    button {
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }

    .social {
        margin-top: 30px;
        display: flex;
    }

    .social div {
        width: 45%;
        max-width: 150px;
        border-radius: 3px;
        padding: 5px 10px;
        background-color: rgba(255, 255, 255, 0.27);
        color: #080710;
        text-align: center;
    }

    .social div:hover {
        background-color: rgba(255, 255, 255, 0.47);
    }

    .social .fb {
        margin-left: 25px;
    }

    .social i {
        margin-right: 4px;
    }
    .form-check-input {
        margin-right: 10px;
        width: 20px;
        /* Lebar kotak centang */
        height: 20px;
        /* Tinggi kotak centang */

    }
    .form-check {
        display: flex;
        align-items: center;
        /* Mengatur vertikal ke tengah */
    }
</style>

<div class="container">
    <section
        class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="background">
                        <div class="shape"></div>
                        <div class="shape"></div>
                    </div>

                    <form action="#" method="post">
                        <h3>TPP</h3>
                        <label for="username">Email</label>
                        <input
                            type="text"
                            name="username_oper"
                            class="form-control form-control-xl"
                            placeholder="Email"
                            required="required">

                        <label for="password">Password</label>
                        <input
                            type="password"
                            id="myInput"
                            name="passwd_oper"
                            class="form-control form-control-xl"
                            placeholder="Password"
                            required="required">
                        <br>
                        <div class="form-check">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="showPassword"
                                onclick="myFunction()">
                            <label class="form-check-label" for="showPassword" style="margin-top:0">Cek Password</label>
                        </div>

                        <button type="submit" value="submit" name="submit">Log In</button>
                    </form>

                </div>
            </div>
        </div>

    </section>
</div>