<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
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
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
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
    <center><h1>Halaman Utama</h1></center>

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
                echo '<a href="detail.php"><img class="book-image" src="book_images/' . $bookImage . '" alt="Buku"></a>';
                echo '<div class="book-buttons">';
                echo '<a href="detail.php"><button>Detail Buku</button></a>';
                echo '<a href="detail.php"><button>Baca Buku</button></a>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>
    
    <div class="menu">
        <a class="menu-item" href="logout.php"><button>Log Out</button></a>
        <a class="menu-item" href="aboutus.php"><button>About Us</button></a>
    </div>
</body>
</html>
