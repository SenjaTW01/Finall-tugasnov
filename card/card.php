<!DOCTYPE html>
<html>

<head>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&family=Plus+Jakarta+Sans:wght@500;600&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&display=swap');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

        body {
            background-color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            margin: 0;
        }

        .book-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
            padding: 20px;
            margin: 10px;
            max-width: 300px;
            text-align: center;
        }

        img {
            float: left;
            margin: 5px;
            width: 30%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        h2 {
            color: #935900;
            font-family: Poppins;
            font-size: 20px;
        }

        .description {
            display: none;
            color: #7D7C7C;
            font-family: 'Poppins';
            text-align: left;

        }

        .rating {
            color: #FFD700; /* Warna kuning */
            font-size: 24px;
        }

        .button-rounded {
            background-color: #004225;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            margin: 10px 5px;
            cursor: pointer;
        }

        .button-rounded:hover {
            background-color: #333;
        }

        .notification {
            display: none;
            position: fixed;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #004225;
            color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .show-notification {
            display: block;
        }

        p {
            font-family: 'Poppins';
        }

    </style>
</head>

<body>
    <div class="book-card">
        <img src="bookdragon.png" alt="Dragon of Lab RPL">
        <h2>Dragon of Lab RPL: Legenda yang Menantang</h2>
        <p class="description">Dalam dunia ilmu komputer yang futuristik, ada sebuah laboratorium yang dikenal sebagai Laboratorium Rekayasa Perangkat Lunak (RPL). Laboratorium ini menjadi saksi sejumlah legenda yang tak terlupakan, dan salah satunya adalah kisah epik tentang seorang pejuang yang berani melawan naga mengerikan yang berkeliaran di dalam laboratorium ini.</p>
        <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <button class="button-rounded" onclick="showDetails()">Selengkapnya</button>
    </div>

    <!-- Ini adalah bagian tampilan lengkap buku -->
    <div class="book-details" style="display: none;">
        <div class="book-info">
            <img src="bookdragon.png" alt="Dragon of Lab RPL">
            <h2>Dragon of Lab RPL: Legenda yang Menantang</h2>
            <p><strong>Penulis:</strong> Secret</p>
            <p><strong>Penerbit:</strong> Secret</p>
            <p><strong>Tahun Terbit:</strong> 2023</p>
            <p><strong>Rating:</strong> 
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="rating-details">(Jumlah Ulasan: 670)</span>
            </p>
        </div>
        <div class="book-description">
            <h3>Deskripsi Buku:</h3>
            <p>Dalam dunia ilmu komputer yang futuristik, ada sebuah laboratorium yang dikenal sebagai Laboratorium Rekayasa Perangkat Lunak (RPL). Laboratorium ini menjadi saksi sejumlah legenda yang tak terlupakan, dan salah satunya adalah kisah epik tentang seorang pejuang yang berani melawan naga mengerikan yang berkeliaran di dalam laboratorium ini.</p>
        </div>
        <div class="book-action">
            <p><strong>Jumlah Buku Tersisa:</strong> 75</p>
            <button class="button-rounded" onclick="addToCart()">Tambah ke Keranjang</button>
        </div>
        <button class="button-rounded back-button" onclick="hideDetails()">
            <i class="fas fa-arrow-left"></i> Back
        </button>
    </div>
    
    <div id="cart-response" class="notification"></div>
    
    <script>
        function showDetails() {
            const card = document.querySelector(".book-card");
            const details = document.querySelector(".book-details");
            card.style.display = "none";
            details.style.display = "block";
        }
        
        function hideDetails() {
            const card = document.querySelector(".book-card");
            const details = document.querySelector(".book-details");
            card.style.display = "block";
            details.style.display = "none";
        }
        
        function addToCart() {
            // Logika untuk menambahkan buku ke keranjang belanja
            // Misalnya, simpan data buku ke dalam session atau database.
            // Kirim respons jika berhasil.
            const response = "Buku telah ditambahkan ke keranjang.";
            const cartResponse = document.getElementById("cart-response");
            cartResponse.innerHTML = response;
            cartResponse.classList.add("show-notification");
    
            setTimeout(() => {
                cartResponse.classList.remove("show-notification");
            }, 3000); // Notifikasi akan hilang setelah 3 detik
        }
    </script>
</body>

</html>
