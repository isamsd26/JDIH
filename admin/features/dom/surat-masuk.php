
<h3> Surat Masuk </h3>

<table border="1">
    <tr>
        <th>Alamat Pengirim</th>
        <th>Tanggal Surat </th>
        <th>Nomor Surat </th>
        <th>Perihal </th>
        <th>Alamat Tujuan </th>
        <th>Isi Disposisi </th>
        <th> Keterangan </th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from surat masuk");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[alamat_pengirim]</td>
            <td>$tampil[tanggal_surat]</td>
            <td>$tampil[nomor_surat]</td>
            <td>$tampil[perihal]</td>
            <td>$tampil[alamat_tujuan]</td>
            <td>$tampil[isi_disposisi]</td>
            <td>$tampil[keterangan]</td>
            <td><a href='?kode=$tampil[kode_barang]'> Hapus </a></td>
            <td><a href='barang-ubah.php?kode=$tampil[kode_barang]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete  from barang where kode_barang='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='barang-data.php'>";

    }