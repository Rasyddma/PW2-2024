<?php

class   Artis{
    protected $negara;
    protected $debutfilm;

    protected function __construct($negara, $debutfilm){
        $this->negara = $negara;
        $this->debutfilm = $debutfilm;
    }

    protected function getInfo(){
        echo 'Negara : '. $this->negara. '<br>';
        echo 'Debut Film : '. $this->debutfilm. '<br>';
    }
}

class Indonesia extends Artis{
    public $Namaartis;

    public function __construct($negara, $debutfilm ,$Namaartis){
        parent::__construct($negara, $debutfilm);
        $this->Namaartis = $Namaartis;
    }

    public function getInfoArtis(){
        parent::getInfo();
        echo 'Nama Artis: '. $this->Namaartis. '<br>';
    }

}


class China extends Artis{
    public $Namaartis;

    public function __construct($negara, $debutfilm ,$Namaartis){
        parent::__construct($negara, $debutfilm);
        $this->Namaartis = $Namaartis;
    }

    public function getInfoArtis(){
        parent::getInfo();
        echo 'Nama Artis: '. $this->Namaartis . '<br>';
    }
}

class India extends Artis{
    public $Namaartis;

    public function __construct($negara, $debutfilm ,$Namaartis){
        parent::__construct($negara, $debutfilm);
        $this->Namaartis = $Namaartis;
    }

    public function getInfoArtis(){
        parent::getInfo();
        echo 'Nama Artis: '. $this->Namaartis . '<br>';
    }
}


?>