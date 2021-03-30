<!DOCTYPE html>
<html>
<body>

<?php
class Album {
    public $idAlbum
    public $idPemasok
    public $namaAlbum
    public $genreAlbum
    public $harga

    function _construct($idAlbum, $idPemasok, $namaAlbum, $genreAlbum, $harga){
        $this->idAlbum = $idAlbum;
        $this->idPemasok = $idPemasok;
        $this->namaAlbum = $namaAlbum;
        $this->harga = $harga;
    }
    
    
}