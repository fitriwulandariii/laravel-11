<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="receipt">
        <table class="table receipt-table">
</tbody>
<tr>
    <td><label>ID Barang:</label></td>
    <td class="value"{{ $barang_masuk->barang->id}}></td>
</tr>
<tr>
    <td><label>Nama Barang:</label></td>
    <td class="value"{{ $barang_masuk->barang->nama_barang}}></td>
</tr>
<tr>
    <td><label>Jumlah:</label></td>
    <td class="value"{{ $barang_keluar->jumlah}}></td>
</tr>
<tr>
    <td><label>Harga Per Item:</label></td>
    <td class="value"{{'Rp'. number_format($barang_masuk->barang->harga_beli,0,',','.')}}></td>
</tr>
<tr>
    <td colspan="2"></td>
</tr>
<tr>
    <td><label>Total:</label></td>
    <td class="value">{{'Rp'. number_format($barang_masuk->jumlah * $barang_masuk->barang->harga_beli,0,',','.')}}</td>
</tr>
<tr>
    <td><label>Tanggal Pembayaran:</label></td>
    <td class="value"{{ $tgl_pembayaran}}></td>
</tr>

<tr>
    <td colspan="2" class="text center">
        <strong>Terima kasih</strong><br>
        <small>{{ $barang_masuk->nama_customer}}</small>

    </td>
</tr>
</tbody>
</table>
</div>
<br>
<div class="text center">
     <a class="btn btn-info btn-back" href="/barang_masuk">Kembali</a>
     <a href="javascript:window.print()" class="btn btn-warning btn-back">Cetak struk</a>
</div>
</html>
