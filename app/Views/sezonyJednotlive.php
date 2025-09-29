<?= $this->extend("layout/sablona"); ?>

<?= $this->section("titulek"); ?>
    <title>Sezóny</title>
<?=$this->endSection();?>

<?=$this->section("content"); ?>
<h1 class="pt-2" style="text-align: center;">SEZÓNY SIGMA</h1>
<?php
    $table = new \CodeIgniter\View\Table(); //udělat ještě aj paginate a cokoliv, co znamená to seskupovat po desetiletích ==> budeme mít seskupené po desetiletích -> kliknem, vyběhne nám těch 10 roků a pak si vybereme rok a vyběhne nám, co už mám hotové->jednotlivaSezona :cc kms ==> předělat teda příště :((
    $table->setHeading("Kdy?");

    
    foreach ($season as $row) {
        $table->addRow(anchor("sezona/".$row->id, $row->start." - ".$row->finish, array('class' => 'text-black')));
    }
    
    $template = array(
        'table_open' => '<table class="table table-striped table-hover table-bordered">',
        'thead_open' => '<thead>',
        'thead_close' => '</thead>',
        'heading_row_start' => '<tr>',
        'heading_row_end' => ' </tr>',
        'heading_cell_start' => '<th>',
        'heading_cell_end' => '</th>',
        'tbody_open' => '<tbody>',
        'tbody_close' => '</tbody>',
        'row_start' => '<tr>',
        'row_end'  => '</tr>',
        'cell_start' => '<td>',
        'cell_end' => '</td>',
        'row_alt_start' => '<tr>',
        'row_alt_end' => '</tr>',
        'cell_alt_start' => '<td>',
        'cell_alt_end' => '</td>',
        'table_close' => '</table>'
    );

    $table->setTemplate($template);

    echo $table->generate();
    ?>






<?=$this->endSection();?>