<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran OSIS {{ $pdf->nama }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            background-color: #f1f1f1;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        .invoice-details {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 30px;
        }

        .invoice-details td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .invoice-details th {
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f1f1f1;
        }

        .invoice-total {
            margin-top: 30px;
            text-align: right;
        }

        .invoice-total td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .invoice-total th {
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f1f1f1;
        }

        .img-edit {
          display: block;
          margin-left: auto;
          margin-right: auto;
          max-width: 354px;
          max-height: 472px;
          padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Pendaftaran {{ $pdf->pendaftaran }}</h1>
    </header>
    <div class="invoice-content">
        <h2>Data Pendaftar</h2>
        <div class="img-edit">
          <img src="assets/berita/{{ $pdf->pict_personal }}" alt="Foto">
        </div>
        <table class="invoice-details">
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $pdf->nama }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{ $pdf->kelas }}</td>
            </tr>
            <tr>
              <th>Jenis Kelamin</th>
              <td>{{ $pdf->gender }}</td>
            </tr>
            <tr>
                <th>No. Handphone</th>
                <td>{{ $pdf->contact }}</td>
            </tr>
            <tr>
                <th>Apa yang kamu ketahui tentang OSIS & MPK</th>
                <td>
                  {{ $pdf->about }}
                </td>
            </tr>
            <tr>
                <th>Alasan ingin bergabung OSIS / MPK</th>
                <td>
                  {{ $pdf->reason }}
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
