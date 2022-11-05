<?php

function getAllTransactions()
{
  $jsonFile = file_get_contents("fakeDB/fakedb.json");
  return json_decode($jsonFile, true);
}

function addTransaction($data)
{
  $allTransactions = getAllTransactions();
  array_push($allTransactions, $data);
  $jsonData = json_encode($allTransactions);
  file_put_contents("fakeDB/fakedb.json", $jsonData);
}

function getTotalPendapatan()
{
  $allTransactions = getAllTransactions();
  $filteredTransactions = array_filter($allTransactions, fn ($val) => $val['tipeTransaksi'] == 'pendapatan');
  return array_reduce($filteredTransactions, fn ($carry, $item) => $carry + intval($item['nominal']), 0);
}

function getTotalPengeluaran()
{
  $allTransactions = getAllTransactions();
  $filteredTransactions = array_filter($allTransactions, fn ($val) => $val['tipeTransaksi'] == 'pengeluaran');
  return array_reduce($filteredTransactions, fn ($carry, $item) => $carry + intval($item['nominal']), 0);
}

function getTotalSaldo()
{
  return getTotalPendapatan() - getTotalPengeluaran();
}

function deleteTransaction($index)
{
  $allTransactions = getAllTransactions();
  array_splice($allTransactions, $index, 1);
  $jsonData = json_encode($allTransactions);
  file_put_contents("fakeDB/fakedb.json", $jsonData);
  return true;
}

function cekBoros($limit)
{
  return getTotalPendapatan() * $limit / 100 <= getTotalPengeluaran();
}
