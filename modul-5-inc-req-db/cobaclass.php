<?php

class CobaPertama
{
    public string $salam;
    public string $cetak;
    public string $alamat = "UPN Veteran Jawa Timur";

    public function __construct()
    {
        $this->salam = "Hallo Sobat, Mari kita belajar OOP yuk <br>";
        echo $this->salam;
    }

    public function cetak_nama(string $nim, string $nama, string $kelas): string
    {
        $this->cetak = "NIM: $nim, Nama: $nama, Kelas: $kelas <br>";
        echo $this->cetak;
        return $this->cetak;
    }

    public function __destruct()
    {
        $this->salam = "Sudah selesai belajarnya. Selamat tinggal <br>";
        echo $this->salam;
    }
}
