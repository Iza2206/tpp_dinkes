<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laporan Bank</title>
        <style>
            /* table {
            width: 100%;
            border-collapse: collapse;
            } */

            td,
            th {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }

            h2 {
                /* width: 40rem; */
                padding: 10px;
                margin: 0 auto 10px;
                text-align: center;
                font-family: arial;
                font-size: 10pt;
                /* max-width: 40rem; */
            }

            .ttd {
                border-top: none;
                border-bottom: none;
                border-left: none;
                border-right: none;
            }

            h5 {
                margin: auto;
                font-size: 6pt;
                padding: 1px;
                font-family: arial;

            }

            th {
                background-color: #f2f2f2;
                font-weight: bold;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            @media screen and (max-width: 900px) {
                /* table, */
                tbody,
                td,
                th,
                thead,
                tr {
                    display: block;
                }

                td,
                th {
                    padding: 8px;
                }

                th {
                    height: 40px;
                }

                tr {
                    margin: 0 0 16px;
                }

            }
            @media print {
                body {
                    text-align: center;
                }

                table {
                    margin: auto;
                    text-align: left;
                    /* Kembalikan ke kiri untuk konten tabel */
                }
            }
        </style>
    </head>
    <body>

        <h2>DAFTAR PEMBAYARAN TAMBAHAN PENGHASILAN PEGAWAI<br>
            DINAS KESEHATAN<br>
            BULAN : JANUARI & FEBRUARI 2023</h2>
        <table
            style="border: 1px solid black; border-collapse: collapse; font-family: arial; font-size: 8pt; max-width: 900px;margin-bottom: 10px;">
            <tbody>
                <!-- Rencana Pembayaran 1 Bulan -->
                <tr>
                    <td style="width: 10px;text-align: center;">
                        <b>NO</b>
                    </td>
                    <td style="width: 100px;text-align: center;padding: 15px;">
                        <b>NAMA PEGAWAI</b>
                    </td>
                    <td style="width: 100px;text-align: center;padding: 15px;">
                        <b>NO. REKENING</b>
                    </td>
                    <td style="width: 100px;text-align: center;padding: 15px;">
                        <b>JUMLAH BERSIH</b>
                    </td>
                    <td style="width: 100px;text-align: center;padding: 15px;">
                        <b>JUMLAH DIKREDITKAN OLEH BANK</b>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">isi NAMA</td>
                    <td style="text-align: center;">isi NO. Rekening</td>
                    <td style="text-align: center;">isi JUMLAH</td>
                    <td style="text-align: center;">isi JUMLAH DIKREDITKAN</td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <b>JUMLAH</b>
                    </td>
                    <td style="text-align: center;">
                        <b>Total JUMLAH</b>
                    </td>
                    <td style="text-align: center;">
                        <b>Total JUMLAH DIKREDITKAN</b>
                    </td>
                </tr>
                <!-- Rencana Pembayaran 2 Bulan -->
                <!-- <tr> <td rowspan="2" style="width: 10px;text-align: center;"><b>NO</b></td>
                <td rowspan="2" style="width: 100px;text-align: center;padding: 15px;"><b>NAMA
                PEGAWAI</b></td> <td rowspan="2" style="width: 100px;text-align: center;padding:
                15px;"><b>NO. REKENING</b></td> <td colspan="3" style="width: 100px;text-align:
                center;padding: 15px;"><b>JUMLAH BERSIH</b></td> <td style="width:
                100px;text-align: center;padding: 15px;"><b>JUMLAH DIKREDITKAN OLEH
                BANK</b></td> </tr> <tr> <td style="width: 70px;text-align:
                center;">JANUARI</td> <td style="width: 70px;text-align: center;">FEBRUARI</td>
                <td style="width: 70px;text-align: center;">JUMLAH</td> </tr> <tr> <td
                style="text-align: center;">1</td> <td style="text-align: center;">isi NAMA</td>
                <td style="text-align: center;">isi NO. Rekening</td> <td style="text-align:
                center;">isi JANUARI</td> <td style="text-align: center;">isi FEBRUARI</td> <td
                style="text-align: center;">isi JUMLAH</td> <td style="text-align: center;">isi
                JUMLAH DIKREDITKAN</td> </tr> <tr> <td colspan="3" style="text-align:
                center;"><b>JUMLAH</b></td> <td style="text-align: center;"><b>Total
                JANUARI</b></td> <td style="text-align: center;"><b>Total FEBRUARI</b></td> <td
                style="text-align: center;"><b>Total JUMLAH</b></td> <td style="text-align:
                center;"><b>Total JUMLAH DIKREDITKAN</b></td> </tr> -->
            </tbody>

        </table>

    </body>
</html>
<script type="text/javascript">
    window.print();
</script>