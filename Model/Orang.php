<?php 

class Orang{
    public $nama,$umur;

    function __construct($nama,$umur){
        $this->nama = $nama;
        $this->umur = $umur;
    }

    final function sayHello(){
        // menambahkan fungsi final word adalah agar tidak bisa di overwrite
        echo "halo nama saya adalah {$this->nama} dan umur saya adalah {$this->nama} tahun";
    }
}

?>