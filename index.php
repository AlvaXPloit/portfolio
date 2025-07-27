<?php
include "head.php";
$blogs = json_decode(file_get_contents("data/blog.json"), true);
?>
<body>
<div class="container">
    <h1 style="font-size:3em; color:#58a6ff;">AlvaXPloit</h1>
    <p style="font-size:1.2em; color:#bbb;">💀 Pentester | 🧠 Reverse Engineer | 🌐 Darknet Explorer</p>
    <div style="margin: 20px 0;">
        <a href="blog.php" class="btn">📖 Lihat Semua Blog</a>
        <a href="login.php" class="btn">⚙️ Masuk Admin</a>
    </div>
    <h2>📢 Blog Terbaru</h2>
    <ul>
    <?php foreach (array_slice(array_reverse($blogs), 0, 3) as $b): ?>
        <li><a href="blog_view.php?id=<?= $b['id'] ?>">📝 <?= $b['title'] ?> <small style="color:#888;">- <?= $b['time'] ?></small></a></li>
    <?php endforeach; ?>
    </ul>
</div></body></html>

// 5. blog.php
<?php
$blogs = json_decode(file_get_contents("data/blog.json"), true);
include "head.php";
?>
<body><div class="container">
<h2>📝 Semua Blog</h2>
<ul>
<?php foreach (array_reverse($blogs) as $b): ?>
    <li><a href="blog_view.php?id=<?= $b['id'] ?>">🧾 <?= $b['title'] ?> <small style="color:#888;">- <?= $b['time'] ?></small></a></li>
<?php endforeach; ?>
</ul></div></body></html>