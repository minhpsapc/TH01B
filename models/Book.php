<?php
include 'models/IBookInterface.php';

class Book implements IBookInterface {
  private $title;
  private $author;
  private $publisher;
  private $publicationYear;
  private $isbn;

  public function __construct($title, $author, $publisher, $publicationYear, $isbn) {
    $this->title = $title;
    $this->author = $author;
    $this->publisher = $publisher;
    $this->publicationYear = $publicationYear;
    $this->isbn = $isbn;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getAuthor() {
    return $this->author;
  }

  public function getPublisher() {
    return $this->publisher;
  }

  public function getPublicationYear() {
    return $this->publicationYear;
  }

  public function getIsbn() {
    return $this->isbn;
  }
}
?>
