<?php 
class Robot{
    public $name;
    public $color ;
    public $size;
    
    function __construct($name,$color,$size){
        // automatis akan berjalan jika object dibuat
        $this->name = $name;
        $this->color = $color;
        $this->size = $size;
    }

   function __destruct(){
        echo " ini adalah isi dari function destruct " ;
   }
}

?>