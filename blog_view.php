<?php
$id = $_GET['id'];
$blogs = json_decode(file_get_contents("data/blog.json"), true);
$found = null;
foreach ($blogs as $b) if ($b['id'] === $id) $found = $b;
include "head.php";
?>
<body><div class="container">
<?php if ($found): ?>
<h2><?= $found['title'] ?></h2>
<small><?= $found['time'] ?></small>
<p><?= nl2br($found['content']) ?></p>
<?php else: ?><p>Blog tidak ditemukan 😢</p><?php endif; ?>
</div></body></html>
