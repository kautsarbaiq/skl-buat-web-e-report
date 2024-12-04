
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Login sekarang!</h1>
                <p class="py-6 text-bold">masih belum memiliki akun? buatlah akun sekarang!</p>
            </div>
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                <form method="POST" action="login.php" class="card-body">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Username</span>
                        </label>
                        <input type="text" placeholder="username" class="input input-bordered" name="username" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="password" class="input input-bordered" name="password" required />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary" type="submit" name="submit">Login</button>
                    </div>
                    <div class="form-control mt-4">
                        <a class="btn btn-primary" href="register.php" class="text-primary">Buat Akun</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>




<!-- Scrip -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="./node_modules/preline/dist/preline.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="main.js"></script>
<script src="./node_modules/preline/dist/preline.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>





</body>

</html>

<?php


include "service/database.php";
session_start();

$login_message = "";

if (isset($_SESSION["is_login"])) {
    header("location: dasboard.php");
}


if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);


    $sql = "SELECT * FROM users WHERE username = '$username'
   AND password = '$password'
   ";

    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        $_SESSION["is_login"] = true;
        $_SESSION["username"] = $data["username"];
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Akun berhasil dibuat!',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'dasboard.php';
            }
        });
        </script>";
    } else {
        echo "<script> 
        Swal.fire({
  title: 'Akun tidak di temukan atau Password salah',
  text: 'buat akun sekarang juga?',
  icon: 'question'
        });
        
            </script>";
       
    }
}
?>