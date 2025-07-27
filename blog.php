<?php
$blogs = json_decode(file_get_contents("data/blog.json"), true);
include "head.php";
?>
<body><div class="container">
<h2>📝 Semua Blog</h2>
<ul>
<?php foreach (array_reverse($blogs) as $b): ?>
    <li><a href="blog_view.php?id=<?= $b['id'] ?>"><?= $b['title'] ?> - <?= $b['time'] ?></a></li>
<?php endforeach; ?>
</ul></div></body></html>
