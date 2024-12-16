<head>
    <style>
        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;

        }

        .corner-line {
            display: inline-block;
            width: 50px;

            height: 50px;

            border-left: 7px solid #A59D84;

            border-top: 7px solid #A59D84;
            margin-bottom: 20px;

        }

        .section-title h2 {
            color: #A59D84;
            /* Warna teks */
            font-size: 50px;
            /* Ukuran teks */
            font-weight: bold;
            margin: 0;
        }

        .corner-line-bottom {
            display: inline-block;
            width: 50px;
            /* Panjang garis horizontal */
            height: 50px;
            border-right: 7px solid #A59D84;
            /* Warna garis vertikal */
            border-bottom: 7px solid #A59D84;
            margin-top: 30px;
        }

        .bg-light {
            background-color: #ffe4ca;
            color: #ffe4ca;
            padding: 20px 25px;
            border-radius: 15px;
            border: 1px solid #dcdcdc;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .bg-light:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        p {
            font-family: 'Georgia', serif;
            font-size: 18px;
            line-height: 1.8;
            text-align: justify;
            margin: 15px 0;
            color: #ffe4ca;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 22px;
            }

            .bg-light {
                padding: 15px;
            }

            p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="section-title ms-5">
        <span class="corner-line"></span>
        <h2>Deskripsi</h2>
        <span class="corner-line-bottom"></span>
    </div>
    <div class="bg-dark rounded border-black shadow mt-2" style="max-width: 1150px; margin:auto;">
        <p class="ms-3 me-3">
            Kabupaten Kebumen (bahasa Jawa: Hanacaraka: ꦏꦼꦧꦸꦩꦺꦤ꧀, Pegon: كبومن, translit. Kebumen) merupakan sebuah wilayah kabupaten yang terletak di Provinsi Jawa Tengah, Indonesia. Ibu kotanya adalah Kecamatan Kebumen Kota. Kabupaten ini berbatasan dengan Kabupaten Banjarnegara di Utara, Kabupaten Wonosobo dan Kabupaten Purworejo di Timur, Samudra Hindia di Selatan, serta Kabupaten Cilacap dan Kabupaten Banyumas di sebelah Barat. Wilayah Kebumen seluas 1.581,11 km2 merupakan hasil penggabungan dua kabupaten (regenshap), yaitu Kabupaten Karanganyar (Roma) di bagian barat dengan Kabupaten Kebumen (Pandjer) di bagian timur pada 1 Januari 1936.
        </p>
        <p class="ms-3 me-3">
            Kabupaten Kebumen terdiri dari 26 kecamatan, 11 kelurahan, dan 449 desa dengan jumlah Rukun Warga (RW) sebanyak 1.930 buah dan 7.027 buah Rukun Tetangga (RT). Pada tahun 2017, jumlah penduduknya mencapai 1.362.524 dengan luas wilayah 1.211, 74 dan sebaran penduduk 1.124/km².[1][2] Pusat pemerintahan berada di Kecamatan Kebumen. Di samping Kecamatan Kebumen, kota-kota kecamatan lainnya yang cukup signifikan adalah Gombong, Karanganyar, Kutowinangun, Ayah, Petanahan serta Prembun.
        </p>
        <p class="ms-3 me-3">
            Masyarakat Kabupaten Kebumen umumnya menggunakan bahasa Indonesia dan bahasa Jawa dalam kehidupan sehari-hari. Namun jika dilihat dari logat bahasanya, bahasa Jawa yang dituturkan oleh masyarakat Kabupaten Kebumen terbagi dalam beberapa logat/dialek bahasa. Sebelah timur aliran Sungai Kedungbener berbahasa dengan didominasi vokal o, dan mbandek (poko'e) atau lebih dekat dengan logat Bagelen dan Bahasa Kedu. Masyarakat yang menuturkan logat ini meliputi Kecamatan Ambal, Kecamatan Mirit, Kecamatan Kutowinangun, Kecamatan Poncowarno, Kecamatan Padureso, Kecamatan Prembun dan Kecamatan Bonorowo. Sementara di sebelah barat aliran sungai Luk Ulo didominasi vokal a dan k medok, (pokoke) atau dikenal dengan Dialek Banyumasan.
        </p>
        <p class="ms-3 me-3">
            Sebagian besar masyarakat Kabupaten Kebumen menuturkan bahasa jawa dengan logat ini seperti di Kecamatan Rowokele, Kecamatan Ayah, Kecamatan Buayan, Kecamatan Sempor, Kecamatan Gombong, Kecamatan Kuwarasan, Kecamatan Puring, Kecamatan Petanahan, Kecamatan Adimulyo, Kecamatan Karanganyar, Kecamatan Karanggayam, Kecamatan Pejagoan, Kecamatan Sruweng, dan Kecamatan Klirong. Sedangkan di antara aliran sungai Luk Ulo dan aliran Sungai Kedungbener bahasanya campur bawur, ada yang memakai poko'e, ada yang memakai pokoke. Masyarakat yang menuturkan logat ini meliputi Kecamatan Kebumen, Kecamatan Alian, Kecamatan Karangsambung, Kecamatan Sadang dan Kecamatan Buluspesantren. Namun jika diperhatikan masyarakat di wilayah Kecamatan Alian, Kecamatan Karangsambung, Kecamatan Sadang lebih fasih berbicara dengan logat Wonosoboan dengan memanjangkan fonem akhir.
        </p>
    </div>


    <?php include 'footer.php'; ?>
</body>