<?php 
require "Model/Orang.php";

class Guru extends Orang{
    function aktifitas(){
        echo  'saya mengajar TIK';
    }

    // function sayHello(){
    //     echo "ini overide dari parents ";
    // }

}

?>