<?= $this->extend("layout/sablona"); ?>

<?= $this->section("titulek"); ?>
    <title><?=$article->title;?></title>
<?=$this->endSection();?>

<?=$this->section("content"); ?>
<?php
    $img = array(
        "src" => base_url("obrazky/sigma/".$article->photo),
        "alt" => "meow",
        "class" => "w-100 mb-4 pt-3",
    );
    echo img($img);
?>

<h1 class="mb-4" style="text-align: center;"><?= $article->title;?></h1>

<div style="text-align: justify;">
    <?= $article->text;?>
</div>



<?=$this->endSection();?>