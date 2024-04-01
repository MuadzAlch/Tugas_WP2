<?php

require_once 'Book.php';
require_once 'Library.php';

$book1 = new Book("Lord of the Rings", "J.R.R. Tolkien", 1954);
$book2 = new FictionBook("To Kill a Mockingbird", "Harper Lee", 1960, "Fiction");
$book3 = new Book("1984", "George Orwell", 1949);
$book4 = new FictionBook("The Great Gatsby", "F. Scott Fitzgerald", 1925, "Fiction");
$book5 = new FictionBook("Harry Potter", "J.K. Rowling", 2001, "Fiction");
$book6 = new Book("The Catcher in the Rye", "J.D. Salinger", 1951);

Library::addBook($book1);
Library::addBook($book2);
Library::addBook($book3);
Library::addBook($book4);
Library::addBook($book5);
Library::addBook($book6);

while (true) {
    echo "\nSelamat datang di Perpustakaan!\n";
    echo "Silakan pilih fitur yang ingin Anda gunakan:\n";
    echo "1. Tampilkan Buku Tersedia\n";
    echo "2. Pinjam Buku\n";
    echo "3. Mengembalikan Buku\n";
    echo "4. Keluar\n";

    $choice = readline("Masukkan nomor fitur: ");

    switch ($choice) {
        case '1':
          Library::printAvailableBooks();
          break;
        case '2':
            $titleToBorrow = readline("Masukkan judul buku yang ingin dipinjam: ");
            Library::borrowBook($titleToBorrow);
            break;
        case '3':
            $titleToReturn = readline("Masukkan judul buku yang ingin dikembalikan: ");
            Library::returnBook($titleToReturn);
            break;
        case '4':
            echo "Terima kasih telah menggunakan layanan perpustakaan.\n";
            exit;
        default:
            echo "Pilihan tidak valid.\n";
            break;
    }
}

?>
