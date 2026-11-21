<?php

class kendaraan {
    public $merk = " ";
    public $model = " ";
    public $warna = " ";
    public $roda = 0;

    // Constructor: otomatis jalan saat object dibuat (new)
    function __construct() {
        echo "<h2>Data sebuah kendaraan</h2><br>";
    }

    // FUNCTION 1
    function Klakson() {
        echo "Hoki (Tin! Tin!)<br>";
    }

    // FUNCTION 2 (Setter & Getter)
    function Setmerk($brand) {
        $this->merk = $brand;
    }

    function Setmodel($series) {
        $this->model = $series;
    }

    function Setwarna($colors) {
        $this->warna = $colors;
    }

    function Setroda($tire) {
        $this->roda = $tire;
    }

    function Getmerk() {
        return $this->merk;
    }

    function Getmodel() {
        return $this->model;
    }

    function Getwarna() {
        return $this->warna;
    }

    function Getroda() {
        return $this->roda;
    }

    // Destructor: otomatis jalan di paling akhir saat script selesai
    function __destruct() {
        echo "<hr><h5>contact . about . home</h5><br>";
    }

    function SetAllData($brand, $series, $colors, $tire) {
        $this->merk = $brand;
        $this->model = $series;
        $this->warna = $colors;
        $this->roda = $tire;
    }

    function GetAllData() {
        return "Merk: " . $this->merk . "<br>" .
               "Model: " . $this->model . "<br>" .
               "Warna: " . $this->warna . "<br>" .
               "Jumlah Roda: " . $this->roda . "<br>";
    }
}

// Konsep Inheritance (Pewarisan)
class Motor extends kendaraan {
    function StandardOn() {
        echo "On<br>";
    }

    function StandardOff() {
        echo "Off<br>";
    }
}

// QUIZ CLASS SEGITIGA & INHERITANCE
// simpan nilai alas, tinggi, sisi dan tampilkan nilai yg dimasukan
// buat kelas inheritence atau turunan yang bisa hitung luas dan keliling segitiga sama kaki, siku siku, dan sama sisi
class Segitiga {
    public $alas = 0;
    public $tinggi = 0;
    public $sisi = 0;

    function Setalas($alas) {
        $this->alas = $alas;
    }

    function Settinggi($tinggi) {
        $this->tinggi = $tinggi;
    }

    function Setsisi($sisi) {
        $this->sisi = $sisi;
    }

    function Getalas() {
        return $this->alas;
    }

    function Gettinggi() {
        return $this->tinggi;
    }

    function Getsisi() {
        return $this->sisi;
    }

    function hitungLuas() {
        return ($this->alas * $this->tinggi) / 2;
    }
}

// Turunan Segitiga Sama Kaki
class SegitigaSamaKaki extends Segitiga {
    function hitungKeliling() {
        return $this->alas + (2 * $this->sisi);
    }
}

// Turunan Segitiga Siku-Siku
class SegitigaSikuSiku extends Segitiga {
    function hitungKeliling() {
        return $this->alas + $this->tinggi + $this->sisi;
    }
}

// Turunan Segitiga Sama Sisi
class SegitigaSamaSisi extends Segitiga {
    function hitungKeliling() {
        return 3 * $this->sisi;
    }
}

// EKSEKUSI SEGITIGA
echo "<br>Segitiga Dasar<br>";
$Segitiga = new Segitiga();
$Segitiga->Setalas(5);
$Segitiga->Settinggi(7);
$Segitiga->Setsisi(4);

echo "alas segitiga = " . $Segitiga->Getalas() . "<br>";
echo "tinggi segitiga = " . $Segitiga->Gettinggi() . "<br>";
echo "sisi segitiga = " . $Segitiga->Getsisi() . "<br>"; 
echo "luas segitiga = " . $Segitiga->hitungLuas() . "<br><br>";

// Sama Kaki 
echo "<br>Segitiga Sama Kaki<br>";
$samaKaki = new SegitigaSamaKaki();
$samaKaki->Setalas(6);
$samaKaki->Settinggi(4);
$samaKaki->Setsisi(5);

echo "Alas = " . $samaKaki->Getalas() . ", Tinggi = " . $samaKaki->Gettinggi() . ", Sisi Kaki = " . $samaKaki->Getsisi() . "<br>";
echo "Luas = " . $samaKaki->hitungLuas() . "<br>";
echo "Keliling = " . $samaKaki->hitungKeliling() . "<br><br>"; 

// Siku-Siku 
echo "<br>Segitiga Siku Siku<br>";
$sikuSiku = new SegitigaSikuSiku();
$sikuSiku->Setalas(3);
$sikuSiku->Settinggi(4);
$sikuSiku->Setsisi(5);

echo "Alas = " . $sikuSiku->Getalas() . ", Tinggi = " . $sikuSiku->Gettinggi() . ", Sisi Miring = " . $sikuSiku->Getsisi() . "<br>";
echo "Luas = " . $sikuSiku->hitungLuas() . "<br>";
echo "Keliling = " . $sikuSiku->hitungKeliling() . "<br><br>";

// Sama Sisi
echo "<br>Segitiga Sama Sisi<br>";
$samaSisi = new SegitigaSamaSisi();
$samaSisi->Setalas(8);
$samaSisi->Settinggi(7);
$samaSisi->Setsisi(8);

echo "Alas = " . $samaSisi->Getalas() . ", Tinggi = " . $samaSisi->Gettinggi() . ", Sisi = " . $samaSisi->Getsisi() . "<br>";
echo "Luas = " . $samaSisi->hitungLuas() . "<br>";
echo "Keliling = " . $samaSisi->hitungKeliling() . "<br><br>";

// EKSEKUSI KENDARAAN
// Instansiasi Object
$mobil = new kendaraan();
$motor = new Motor();

// Isi data Setter
$mobil->Setmerk("BMW");
$mobil->Setmodel("M4");
$mobil->Setwarna("Pink");
$mobil->Setroda(4);

$motor->Setmerk("Honda");
$motor->Setmodel("CBR");
$motor->Setwarna("Hitam");      
$motor->Setroda(2);

// Nampil data Getter & Method
echo "<br>Data Mobil <br>";
echo "Merk: " . $mobil->Getmerk() . "<br>";
echo "Model: " . $mobil->Getmodel() . "<br>";
echo "Warna: " . $mobil->Getwarna() . "<br>";
echo "Jumlah Roda: " . $mobil->Getroda() . "<br>";
echo "Klakson: ";
$mobil->Klakson();

echo "<br>Data Motor (Inheritance) <br>";
echo "Merk: " . $motor->Getmerk() . "<br>";
echo "Model: " . $motor->Getmodel() . "<br>";
echo "Warna: " . $motor->Getwarna() . "<br>";
echo "Jumlah Roda: " . $motor->Getroda() . "<br>";
$motor->StandardOn();

// SetAllData dan GetAllData 
$kapal = new kendaraan();
$kapal->SetAllData("Kapal Laut", "Ferry", "Putih", 0);
echo "<br> Data Kapal <br>";
echo $kapal->GetAllData();
