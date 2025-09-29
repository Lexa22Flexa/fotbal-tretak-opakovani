<?= $this->extend("layout/sablona"); ?>

<?= $this->section("titulek"); ?>
    <title>SIGMA OLOMOOOOUUUUC JOOOOOOOOOOOO</title>
<?=$this->endSection();?>

<?=$this->section("content"); ?>

<div class="row pt-3">
    
<?php //správně nalajnovat obrázky článků, jak je v předloze
$n = 0;
foreach ($article as $row) { 
    if ($n == 0) { ?>
        <div class="col-lg-6">
        <?php $velikost = "velikostL";
    } elseif($n==1) { ?>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6 pb-4"> 
        <?php $velikost = "velikostS";
    } else { ?>
        <div class="col-lg-6 pb-4">
        <?php $velikost = "velikostS";
    }
    //velikost fontu, aby u 4 malých okýnek byla menší ??? OPRAVIT STYLE!!!!!!!!
    ?>
    <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-size: cover;background-position:center;background-image: url(<?=base_url("obrazky/sigma/".$row->photo)?>)"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex flex-column justify-content-center align-items-start text-white text-left p-3">
            <div class="mt-auto fw-bold fs-2 text-white text-decoration-none"><?= anchor($row->link, $row->title, array('class' => 'mt-auto fw-bold fs-2 text-white text-decoration-none '.$velikost)); ?></div> <!-- PŘEDĚLAT NA ODKAZ SPRÁVNĚ!!!! -->
            <div class="mt-3 fs-4 text-white"><?=date("d. m. Y", $row->date)?></div>
        </div>
    </div>
    <?php
    
    $n++;
    ?>
    
</div>
<?php
}

?>
</div>
</div>


<?=$this->endSection();?>