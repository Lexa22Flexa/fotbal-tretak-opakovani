<?= $this->extend("layout/sablona"); ?>

<?= $this->section("titulek"); ?>
    <title>Sezóny</title>
<?=$this->endSection();?>

<?=$this->section("content"); ?>
<h1 class="pt-2" style="text-align: center;">SEZÓNY SIGMA</h1>
<?php
    $table = new \CodeIgniter\View\Table();
    $table->setHeading("Desetiletí");

    $prvniRok = (int)floor($season[0]->start/10)*10;
    $posledniRok = $season[sizeof($season) - 1]->start;
    while($prvniRok < $posledniRok) {
        if ($prvniRok+10 > $posledniRok) {
            $posled = $posledniRok;
        } else {
            $posled = $prvniRok+10;
        }

        $table->addRow(anchor("sezonaDesetileti/".$prvniRok, $prvniRok." - ".$posled, array('class' => 'text-black')));
        $prvniRok += 10;
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