<?= $this->extend("layout/sablona"); ?>

<?= $this->section("titulek"); ?>
    <title>Ligy sezóny</title>
<?=$this->endSection();?>

<?=$this->section("content"); ?>
<div class="mt-3">
<?php
    $table = new \CodeIgniter\View\Table();
    $table->setHeading("Logo", "Název", "Level");

    foreach ($leagueSeason as $row) {
        $img = array(
            "src" => base_url("obrazky/league/".$row->logo),
            "alt" => $row->name,
            "class" => "w-100 mb-4 pt-3",
        );
        $table->addRow(img($img), $row->name, $row->level);
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
</div>





<?=$this->endSection();?>