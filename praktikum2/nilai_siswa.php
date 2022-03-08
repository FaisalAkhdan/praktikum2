<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$total = $nilai_uts + $nilai_uas + $nilai_tugas;
$alphabet = $total/3;
    if ($alphabet <= 55){
        $lulus = "Anda Tidak Lulus";
    }else{
        $lulus = "Selamat Anda Lulus";
    }
    if ($alphabet >= 85){
        $grade = "A";
    }elseif($alphabet >= 70){
        $grade = "B";
    }elseif($alphabet >= 56){
        $grade = "C";
    }elseif($alphabet >= 36){
        $grade = "D";
    }elseif($alphabet >= 10){
        $grade = "E";
    }else{
        $grade = "I(tidak ada nilai)";
    }

if(!empty($proses)){
echo "Proses : $proses";
echo "<br/>Nama : $nama_siswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS  : $nilai_uts";
echo "<br/>Nilai UAS : $nilai_uas";
echo "<br/>Nilai Tugas Praktikum  : $nilai_tugas";
echo "<br/>Keterangan : $lulus";
echo "<br/>Grade : $grade";
echo "<br/> Data Telah di $proses";
}
?>