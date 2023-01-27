<?php
require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
$faker = faker\factory::create();
$dompdf = new dompdf();

$nama = $faker->nama();
$alamat = $faker->text();

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml("
    <table border='1'>
        <tr>
            <td>nama</td>
            <td>alamat</td>
        </tr>

    </table>
");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();