<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Template/style.css">
    <title>DzulStore | Login</title>
</head>

<body>

    <div class="circle"></div>
    <div class="card">
        <div class="logo">
            <h1>DzulStore</h1>
        </div>
        <h2>Silahkan login terlebih dahulu</h2>
        <form class="form" action="Proses/proses_login.php" method="POST">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login" value="login">LOGIN</button>
        </form>
        <footer>
            Existing users, sign in
            <a href="#">Here</a>
        </footer>
    </div>

</body>

</html>