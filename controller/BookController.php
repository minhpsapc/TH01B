<?php
include 'models/Book.php';
include 'models/BookList.php';

class BookController {
  private $bookList;

  public function __construct() {
    $this->bookList = new BookList();
  }

  public function handlePostRequest($formData) {
    if (isset($formData['addBook'])) {
      // Process form data and create a new Book object
      $book = new Book(
        $formData['title'],
        $formData['author'],
        $formData['publisher'],
        $formData['publicationYear'],
        $formData['isbn']
      );

      // Add the book to the BookList
      $this->bookList->addBook($book);
    }
  }

  public function getBookList() {
    return $this->bookList->getBooks();
  }
}
?>
