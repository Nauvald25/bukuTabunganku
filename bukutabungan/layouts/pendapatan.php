<?php
require_once "fakeDB/fakedb.php";
if (
  isset($_POST["tipeTransaksi"]) &&
  isset($_POST["nominal"]) &&
  isset($_POST["keterangan"]) &&
  isset($_POST["date"]) &&
  isset($_POST["time"])
) {
  addTransaction($_POST);
}
?>

<form action="" class="pendapatan-container" method="post">
  <input type="hidden" name="tipeTransaksi" value="pendapatan">
  <label for="nominal">Nominal Pendapatan*</label>
  <input type="number" name="nominal" id="nominal" required>
  <label for="keterangan">Keterangan*</label>
  <input type="text" name="keterangan" id="keterangan" placeholder="Contoh: Barang Terjual" autocomplete="no" required>
  <div class="date-and-time">
    <div>
      <label for="date">Date*</label>
      <input type="date" name="date" id="date">
    </div>
    <div>
      <label for="time">Time*</label>
      <input type="time" name="time" id="time">
    </div>
  </div>
  <button type="submit">Submit</button>
</form>
<script>
  let currentTime = new Date();
  currentTime.setMinutes(currentTime.getMinutes() - currentTime.getTimezoneOffset());
  currentTime.setSeconds(0);
  currentTime.setMilliseconds(0);
  document.getElementById("date").valueAsDate = currentTime;
  document.getElementById("time").valueAsDate = currentTime;
</script>