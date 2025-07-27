<?php
session_start();
if (!isset($_SESSION['admin'])) die("<script>location='login.php'</script>");
$blogfile = "data/blog.json";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents($blogfile), true);
    $data[] = [
        "id" => uniqid(),
        "title" => $_POST['title'],
        "content" => $_POST['content'],
        "time" => date("Y-m-d H:i")
    ];
    file_put_contents($blogfile, json_encode($data, JSON_PRETTY_PRINT));
    header("Location: dashboard.php?done=1");
    exit;
}
include "head.php";
?>
<body>
<div class="container">
    <h2>📋 Dashboard Admin</h2>
    <a href="logout.php">🚪 Logout</a>
    <form method="POST">
        <input name="title" placeholder="Judul Blog" required>
        <textarea name="content" rows="10" placeholder="Isi blog..." required></textarea>
        <button>📝 Upload Blog</button>
    </form>
</div></body></html>
