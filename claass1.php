<?php
interface T_Interface{
	public function getAuthor ();
	public function getGenre();
	public function getVolume();
}
class Book implements  T_Interface
{
    public $volume, $genre, $author;
	

	public function __construct($volume,$genre,$author)
	{
		$this->volume = $volume;
		$this->genre = $genre;
		$this->author = $author;
	}


public function getVolume  ()
{echo $this->volume;}

public function getGenre()
{echo $this->genre;}

public function getAuthor ()
{echo $this->author;}
}

$no= new Book(366,'Темное фэнтези','Джо Аберкромби');
$no->getVolume(366);
$no->getGenre('Темное фэнтези');
$no->getAuthor('Джо Аберкромби');


