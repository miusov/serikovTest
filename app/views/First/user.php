<?php if (!isset($_SESSION['user'])) { header('Location: /first'); } else { ?>
<div class="col-md-12 text-center">
    <h2>Добрый день <?=$_SESSION['user']?></h2>
    <a href="/first/exit">Выход</a>
</div>
<?php } ?>