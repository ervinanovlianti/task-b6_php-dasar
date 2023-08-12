<?php
    class BangunDatar {
        protected $nama;
        protected $luas;
        protected $keliling;

        public function __construct($nama) {
            $this->nama = $nama;
        }

        public function area() {
            return $this->luas;
        }

        public function circumference() {
            return $this-> keliling;
        }

        public function enlarge($scale) {
            // Implementasi untuk memperbesar sesuai scale
            $this->luas *= $scale * $scale;
            $this->keliling *= $scale;
        }

        public function shrink($scale){
            // Implementasi untuk memperkecil sesuai scale
            $this->luas /= $scale * $scale;
            $this->keliling /= $scale;
        }
    }
    class Lingkaran extends BangunDatar {
        private $jari_jari;

        public function __construct($jari_jari) {
            parent::__construct("Lingkaran");
            $this->jari_jari = $jari_jari;
            $this->luas = $this->hitungLuas();
            $this->keliling = $this->hitungKeliling();
        }

        private function hitungLuas() {
            return 3.14 * $this->jari_jari * $this->jari_jari;
        }

        private function hitungKeliling() {
            return 2 * 3.14 * $this->jari_jari;
        }

        public function enlarge($scale) {
            parent::enlarge($scale);
            $this->jari_jari *= $scale;
        }

        public function shrink($scale) {
            parent::shrink($scale);
            $this->jari_jari /= $scale;
        }
    }

    class Persegi extends BangunDatar {
        private $sisi;

        public function __construct($sisi) {
            parent::__construct("Persegi");
            $this->sisi = $sisi;
            $this->luas = $this->hitungLuas();
            $this->keliling = $this->hitungKeliling();
        }

        private function hitungLuas() {
            return $this->sisi * $this->sisi;
        }

        private function hitungKeliling() {
            return 4 * $this->sisi;
        }

        public function enlarge($scale) {
            parent::enlarge($scale);
            $this->sisi *= $scale;
        }

        public function shrink($scale) {
            parent::shrink($scale);
            $this->sisi /= $scale;
        }
    }

    class PersegiPanjang extends BangunDatar {
        private $panjang;
        private $lebar;

        public function __construct($panjang, $lebar) {
            parent::__construct("Persegi Panjang");
            $this->panjang = $panjang;
            $this->lebar = $lebar;
            $this->luas = $this->hitungLuas();
            $this->keliling = $this->hitungKeliling();
        }

        private function hitungLuas() {
            return $this->panjang * $this->lebar;
        }

        private function hitungKeliling() {
            return 2 * ($this->panjang + $this->lebar);
        }

        public function enlarge($scale) {
            parent::enlarge($scale);
            $this->panjang *= $scale;
            $this->lebar *= $scale;
        }

        public function shrink($scale) {
            parent::shrink($scale);
            $this->panjang /= $scale;
            $this->lebar /= $scale;
        }
    }

    class Descriptor {
        public static function describe($bangunDatar)
        {
            echo "Bangun datar ini adalah " . get_class($bangunDatar) . " yang memiliki luas " . $bangunDatar->area() . " dan keliling " . $bangunDatar->circumference() . ".";
        }
    }

    $lingkaran = new Lingkaran(5);
    $persegi = new Persegi(10);
    $persegiPanjang = new PersegiPanjang(4, 8);
    // Perbesar lingkaran, persegi, dan persegi panjang
    $lingkaran->enlarge(2);
    $persegi->enlarge(4);
    $persegiPanjang->enlarge(4);

    Descriptor::describe($lingkaran);
    echo "\n";
    Descriptor::describe($persegi);
    echo "\n";
    Descriptor::describe($persegiPanjang);
    echo "\n";

    $lingkaran1 = new Lingkaran(5);
    $persegi1 = new Persegi(10);
    $persegiPanjang1 = new PersegiPanjang(4, 8);
    $lingkaran1->shrink(2);
    $persegi1->shrink(4);
    $persegiPanjang1->shrink(4);

    Descriptor::describe($lingkaran1);
    echo "\n";
    Descriptor::describe($persegi1);
    echo "\n";
    Descriptor::describe($persegiPanjang1);
?>