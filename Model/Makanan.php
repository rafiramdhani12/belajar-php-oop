<?php 
    class Makanan{
        public $nama = "Semangka";
        private $jenis = "Penuci Mulut";
        protected $harga = "Rp 5.000";

        function getJenis(){
            return $this->jenis ;
        }
    }
    
    class Buah extends Makanan{
        public function getHarga(){
            return $this->harga;
        }
    }

    $makanan1 = new Makanan();
    echo $makanan1->nama;

    echo "<br>";

    echo $makanan1->getJenis();

    echo "<br>";

    $buah1 = new Buah();
    echo $buah1->getHarga();

?>