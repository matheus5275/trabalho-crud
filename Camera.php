<?php

class Camera {
    private $codigo;
    private $modelo;
    private $fabricante;
    private $preco;
    private $garantia;
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getGarantia() {
        return $this->garantia;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setGarantia($garantia) {
        $this->garantia = $garantia;
    }


}
