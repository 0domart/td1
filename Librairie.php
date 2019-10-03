<?php

class Librairie
{

    const MAX_BOOKS = 5;
    private $name;
    private $adress;
    private $max;
    private $books = [];

    public function __construct($name, $adress, $max)
    {
        $this->adress = $adress;
        $this->max = $max;
        $this->name = $name;
    }

    public function addBooks($book)
    {

        array_push($this->books, $book);
    }


    public function ShowBooks() {

        if (count($this->books) == 0) {
            echo 'Pas de livre dans la librairie';
            return;
        }
       ?>
            <table>
                <tr>
                    <th style="border: 1px solid black;">Titre</th>
                    <th style="border: 1px solid black;">Editeur</th>
                    <th style="border: 1px solid black;">Auteur</th>
                    <th style="border: 1px solid black;">NbPages</th>
                </tr>
                <?php
                foreach ($this->books as $book) { ?>
                    <tr>
                        <th style="border: 1px solid black;"><?=$book->getTitle()?></th>
                        <th style="border: 1px solid black;"><?=$book->getEditor()?></th>
                        <th style="border: 1px solid black;"><?=$book->getAuthor()?></th>
                        <th style="border: 1px solid black;"><?=$book->getNbPages()?></th>
                    </tr>
                }
            </table>




        <?php
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->adress;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getMax()
    {
        return $this->max;
    }

    public function setMax($max)
    {
        $this->max = $max;
    }

}