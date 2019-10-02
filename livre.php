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

    public function Show() {

        echo  'Livre : ' . $this->title . '. Edité par '. $this->editor . '. L\'auteur est : '. $this->author .' et il a ' .$this->pageNb . ' pages';
    }
}