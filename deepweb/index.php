<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
    <style>
        /* CSS untuk tata letak gambar buku */
        .book-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        
        .book-item {
            margin: 10px;
        }
        
        .book-image {
            width: 150px;
            height: 200px;
            object-fit: cover;
        }
        
        /* CSS untuk menu */
        .menu {
            text-align: center;
            margin-top: 20px;
        }
        
        .menu-item {
            display: inline-block;
            margin: 10px;
        }
    </style>
</head>
<body>

    <center><h1>Selamat Datang, Selamat Membaca</h1></center>

    <div class="book-container">
        <?php
            // Daftar gambar buku
            $bookImages = array(
                "book1.png",
                "book2.png",
                "book3.png",
                "book4.png"
            );
            
            // Menampilkan gambar buku
            foreach ($bookImages as $bookImage) {
                echo '<div class="book-item">';
                echo '<img class="book-image" src="book_images/' . $bookImage . '" alt="Buku">';
                echo '</div>';
            }
        ?>
    </div>

    <div class="menu">
        <a class="menu-item" href="login.php">Login</a>
        <a class="menu-item" href="register.php">Register</a>
        <a class="menu-item" href="aboutus.php">About Us</a>
    </div>
</body>
</html>
