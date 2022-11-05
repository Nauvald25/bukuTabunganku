<?php
require_once "fakeDB/fakedb.php";
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$database = getAllTransactions();
$totalPendapatan = getTotalPendapatan();
$totalPengeluaran = getTotalPengeluaran();
$totalSaldo = getTotalSaldo();
$formatedPendapatan = number_format($totalPendapatan, 2, ',', '.');
$formatedPengeluaran = number_format($totalPengeluaran, 2, ',', '.');
$formatedSaldo = number_format($totalSaldo, 2, ',', '.');

if (isset($_GET['action']) && $_GET['action'] == 'hapus') {
  $isDeleted = deleteTransaction(intval($_GET['index']));
  if ($isDeleted) {
    header("Location: " . '?menu=tabel');
  }
}

?>

<div class="table-container">
  <div class="main-table">
    <table>
      <thead>
        <tr>
          <th>Waktu</th>
          <th>Transaksi</th>
          <th>Keterangan</th>
          <th>Hapus</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($database as $index => $transaksi) : ?>
          <tr>
            <?php
            $date = explode("-", $transaksi['date']);
            $date[1] = $bulan[intval($date[1]) + 1];
            $isPendapatan = $transaksi["tipeTransaksi"] == "pendapatan";
            ?>
            <td><?= implode(" ", $date); ?></td>
            <td class="<?= $isPendapatan ? "font-green" : "font-red"; ?>">
              <?= ($isPendapatan ? "+" : "-") . " Rp. " . number_format($transaksi['nominal'], 2, ',', '.'); ?>
            </td>
            <td><?= $transaksi['keterangan']; ?></td>
            <td class="tombol-hapus"><a href="?menu=tabel&action=hapus&index=<?= $index; ?>">&times;</a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  <div class="tabel-total">
    <table>
      <tr>
        <td>Total Pendapatan</td>
        <td class="font-green">+ Rp. <?= $formatedPendapatan ?></td>
      </tr>
      <tr>
        <td>Total Pengeluaran</td>
        <td class="font-red">- Rp. <?= $formatedPengeluaran ?></td>
      </tr>
      <tr>
        <td>Total Saldo</td>
        <td>Rp. <?= $formatedSaldo ?></td>
      </tr>
    </table>
  </div>
</div>