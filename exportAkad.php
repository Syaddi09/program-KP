<?php
include('connection.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($conn,"SELECT * FROM dt_akad");

$html = '<center><h3>Data Akad</h3></center><hr/><br/>';
$html .= '<table style="border-collapse: collapse; width: 100%;">
    <tr style="border: 1px solid #000;">
        <th style="border: 1px solid #000;">No</th>
        <th style="border: 1px solid #000;">Nama Lengkap</th>
        <th style="border: 1px solid #000;">Nama Pasangan</th>
        <th style="border: 1px solid #000;">Email</th>
        <th style="border: 1px solid #000;">No. HP</th>
        <th style="border: 1px solid #000;">Alamat</th>
        <th style="border: 1px solid #000;">Tanggal Pelaksanaan</th>
        <th style="border: 1px solid #000;">Jam</th>
        <th style="border: 1px solid #000;">Surat KUA</th>
        <th style="border: 1px solid #000;">Bukti Bayar</th>
        <th style="border: 1px solid #000;">Status</th>
    </tr>';
$no = 1;
while($row = mysqli_fetch_array($query)) {
    $html .= "<tr style='border: 1px solid #000;'>
        <td style='border: 1px solid #000;'>".$no."</td>
        <td style='border: 1px solid #000;'>".$row['nama_lengkap']."</td>
        <td style='border: 1px solid #000;'>".$row['nama_pasangan']."</td>
        <td style='border: 1px solid #000;'>".$row['email']."</td>
        <td style='border: 1px solid #000;'>".$row['nomer_hp']."</td>
        <td style='border: 1px solid #000;'>".$row['alamat_lengkap']."</td>
        <td style='border: 1px solid #000;'>".$row['tanggal_pelaksanaan']."</td>
        <td style='border: 1px solid #000;'>".$row['jam']."</td>
        <td style='border: 1px solid #000;'>".$row['surat_kua']."</td>
        <td style='border: 1px solid #000;'>".$row['bukti_bayar']."</td>";

    // Menambahkan kolom status
    $status = empty($row['status']) ? "<span class='badge badge-warning'>Pending</span>" : "<span class='badge badge-info'>".$row['status']."</span>";
    $html .= "<td style='border: 1px solid #000;'>".$status."</td>";

    $html .= "</tr>";
    $no++;
}
$html .= "</table>";

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('laporan_akad.pdf');
?>
