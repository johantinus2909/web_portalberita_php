<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <form action="prosesRegistrasi.php" method="post">
        <h1>Registrasi</h1>
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" >
        <br>
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" >
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" >
        <!-- <br>
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="Confirm Password" > -->
        <br>
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" placeholder="tgl_lahir" >
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
