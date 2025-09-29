<?= $this->extend("layout/sablona"); ?>

<?= $this->section("titulek"); ?>
    <title><?=$article->title;?></title>
<?=$this->endSection();?>

<?=$this->section("content"); ?>
<?php
    $img = array(
        "src" => base_url("obrazky/sigma/".$article->photo),
        "alt" => $article->title."obrázek",
        "class" => "w-100 mb-4 pt-3",
    );
    echo img($img);
?>

<h1 class="mb-4" style="text-align: center;"><?= $article->title;?></h1>
<h2 class="p-5"><?=date("d. m. Y", $article->date)?></h2>

<div style="text-align: justify;">
    <?= $article->text;?>
</div>



<?=$this->endSection();?>