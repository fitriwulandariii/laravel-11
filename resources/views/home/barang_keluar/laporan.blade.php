<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Barang keluar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a.btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        a.btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Laporan Barang Keluar</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Id Barang</th>
                <th>Nama customer</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangkeluar as $barang_keluar)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang_keluar->barang->nama_barang }}</td>
                <td>{{ $barang_keluar->nama_customer }}</td>
                <td>{{ $barang_keluar->jumlah }}</td>
                <td>{{ 'RP ' . number_format($barang_keluar->barang->harga_beli, 0, ',', '.') }}</td>
                <td>{{ $barang_keluar->created_at->format('Y-m-d') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="javascript:window.print()" class="btn">Cetak Laporan</a>
</body>
</html>
