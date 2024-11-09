<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Mahasiswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .slider-container {
            width: 600px;
            height: 400px;
            overflow: hidden;
        }

        .slider {
            width: 100%;
            height: 100%;
            display: flex;
            animation: slide 5s infinite;
        }

        .slide {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }

        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-100%);
            }

            50% {
                transform: translateX(-200%);
            }

            75% {
                transform: translateX(-300%);
            }

            100% {
                transform: translateX(-400%);
            }
        }
    </style>
</head>

<body>
    <div class="slider-container">
        <?php
        $slides = array(
            array(
                'title' => 'Selamat Datang di Universitas ABC',
                'content' => 'Kami menyediakan program studi yang berkualitas dengan fasilitas modern.'
            ),
            array(
                'title' => 'Program Studi Terakreditasi',
                'content' => 'Program studi kami telah terakreditasi dengan standar internasional.'
            ),
            array(
                'title' => 'Kerjasama Industri',
                'content' => 'Kami menjalin kerjasama dengan berbagai perusahaan terkemuka.'
            ),
            array(
                'title' => 'Beasiswa Tersedia',
                'content' => 'Kami memberikan kesempatan untuk mendapatkan beasiswa kepada mahasiswa berprestasi.'
            )
        );
        ?>

        <div class="slider">
            <?php foreach ($slides as $slide) { ?>
                <div class="slide">
                    <h2 class="text-3xl font-bold mb-4"><?php echo $slide['title']; ?></h2>
                    <p><?php echo $slide['content']; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>

    <script>
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function showSlide() {
            slides.forEach((slide, index) => {
                if (index === currentSlide) {
                    slide.style.display = 'flex';
                } else {
                    slide.style.display = 'none';
                }
            });
        }

        function nextSlide() {
            currentSlide++;
            if (currentSlide >= slides.length) {
                currentSlide = 0;
            }
            showSlide();
        }

        setInterval(nextSlide, 5000);

        showSlide();
    </script>
</body>

</html>
