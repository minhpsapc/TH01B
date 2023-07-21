<div class="book-list-container">
  <h1>Danh sách sách</h1>
  <form action="" method="post">
    <label for="title">Tên sách:</label>
    <input type="text" name="title" required><br>

    <label for="author">Tên tác giả:</label>
    <input type="text" name="author" required><br>

    <label for="publisher">Nhà xuất bản:</label>
    <input type="text" name="publisher" required><br>

    <label for="publicationYear">Năm xuất bản:</label>
    <input type="number" name="publicationYear" required><br>

    <label for="isbn">Số hiệu ISBN:</label>
    <input type="text" name="isbn" required><br>

    <input type="submit" name="addBook" value="Thêm sách">
  </form>

  <?php
  // Display the list of books
  $books = $controller->getBookList();
  if (count($books) > 0) {
    echo '<h2>Danh sách thông tin sách:</h2>';
    echo '<ul>';
    foreach ($books as $book) {
      echo '<li>';
      echo 'Tên sách: ' . $book->getTitle() . ', ';
      echo 'Tác giả: ' . $book->getAuthor() . ', ';
      echo 'Nhà xuất bản: ' . $book->getPublisher() . ', ';
      echo 'Năm xuất bản: ' . $book->getPublicationYear() . ', ';
      echo 'ISBN: ' . $book->getIsbn();
      echo '</li>';
    }
    echo '</ul>';
  }
  ?>
</div>
