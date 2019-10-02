<?php

class Livre {


    private $title;
    private $author;
    private $editor;
    private $pageNb;

    public function __construct($title, $author, $editor, $pageNb)
    {
        $this->author = (string) $author;
        $this->title = (string) $title;
        $this->editor = (string)$editor;
        $this->pageNb = (int)$pageNb;
    }

    public function getTitle() {

        return $this->title;
    }

    public function setTitle($title) {

        $this->title = (string)$title;
    }
    public function getAuthor() {

        return $this->author;
    }
    public function getEditor() {

        return $this->editor;
    }
    public function getNbPages() {

        return $this->pageNb;
    }

    public function Show() {

        echo  'Le nom du livre est : ' . $this->getTitle() . '. Edité par '. $this->getEditor() . '. L\'auteur est : '. $this->getAuthor() .' et il a ' .$this->getNbPages() . ' pages';
    }
}

?>