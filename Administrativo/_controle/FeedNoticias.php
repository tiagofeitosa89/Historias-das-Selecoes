<?php   

    Class FeedNoticias{
        private $codigo;
        private $titulo;
        private $link;
        private $imagem;

        public function FeedNoticias($codigo, $titulo, $link, $imagem){
            $this->codigo = $codigo;
            $this->titulo = $titulo;
            $this->link = $link;
            $this->imagem = $imagem;
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        
        public function getLink(){
            return $this->link;
        }

        public function setLink($link){
            $this->link = $link;
        }

        public function getImagem(){
            return $this->imagem;
        }

        public function setImagem($imagem){
            $this->imagem = $imagem;
        }
    }
?>