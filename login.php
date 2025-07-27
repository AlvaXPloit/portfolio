<?php
session_start();
include "head.php";
$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userdb = json_decode(file_get_contents("data/user.json"), true);
    $username = trim($_POST['user']);
    $password = trim($_POST['pass']);

    if ($username === $userdb['user'] && $password === $userdb['pass']) {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "❌ Username atau Password salah!";
    }
}
?>
<body>
<div class="container">
    <h2>🔐 Login Admin</h2>
    <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <input name="user" placeholder="Username" required><br>
        <input type="password" name="pass" placeholder="Password" required><br>
        <button type="submit">Masuk</button>
    </form>
</div>
</body>
</html>