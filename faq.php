<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ US</title>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full felx items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">UNIVERSITAS SONGWA</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="nav" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="hidden lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="index.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Fasilitas</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Kontak</a>
                            </li>
                            <li class="group">
                                <a href="" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Daftar</a>
                            </li>
                            <li class="group">
                                <a href="biayakuliah.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Biaya Kuliah</a>
                            </li>
                            <li class="group">
                                <a href="faq.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">FAQ</a>
                            </li>
                            <li class="group">
                                <a href="syaratdaftar.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Persyaratan</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Konten section Start-->
    <section id="faq" class="pt-32 pb-32">
        <div class="container mx-auto">
            <h1 class="text-primary text-3xl font-semibold text-center">Frequently Asked Questions (FAQ)</h1>
            <p class="text-lg text-center mt-4">Temukan jawaban dari berbagai pertanyaan yang sering diajukan seputar pelaksanaan PMB Universitas Songwa oleh calon pendaftar dan calon mahasiswa.</p>

            <?php
            $faqItems = array(
                array(
                    'question' => 'Bagaimana cara membuat akun PMB?',
                    'answer' => '1. Klik menu Registrasi.<br>2. Masukkan identitas Anda dengan benar dan pastikan email Anda aktif.<br>3. Jika sudah diisi semua klik Registrasi.<br>4. Kemudian cek pesan email yang masuk, lalu klik tombol verifikasi.<br>5. Masukkan email dan kata sandi yang didaftarkan.<br>6. Anda sudah berhasil mendaftar akun PMB US.'
                ),
                array(
                    'question' => 'Apa persyaratan untuk mendaftar sebagai mahasiswa baru?',
                    'answer' => 'Untuk mendaftar sebagai mahasiswa baru, Anda perlu melengkapi formulir pendaftaran, melampirkan salinan ijazah terakhir, transkrip nilai, dan dokumen pendukung lainnya. Silakan kunjungi halaman Pendaftaran di website kami untuk informasi lebih lanjut.'
                ),
                array(
                    'question' => 'Berapa biaya kuliah per semester?',
                    'answer' => 'Biaya kuliah per semester bervariasi tergantung pada program studi yang dipilih. Silakan mengunjungi halaman Biaya Kuliah di website kami untuk melihat rincian biaya kuliah.'
                ),
                array(
                    'question' => 'Apakah tersedia beasiswa untuk mahasiswa baru?',
                    'answer' => 'Ya, kami menyediakan berbagai jenis beasiswa untuk mahasiswa baru berprestasi. Anda dapat mengajukan beasiswa dengan melengkapi formulir yang tersedia di website kami. Pastikan untuk memenuhi persyaratan yang ditentukan.'
                ),
                array(
                    'question' => 'Bagaimana cara menghubungi pihak universitas jika memiliki pertanyaan lebih lanjut?',
                    'answer' => 'Anda dapat menghubungi kami melalui layanan pelanggan di nomor telepon XXX-XXXX-XXXX atau mengirimkan email ke info@universitasbaru.com. Tim kami akan dengan senang hati membantu menjawab pertanyaan Anda.'
                ),
                array(
                    'question' => 'Apakah saya perlu mengunggah hasil scan dari seluruh halaman di rapor saya?',
                    'answer' => 'Anda harus mengunggah hasil scan halaman rapor asli yang mencantumkan nilai akademik saudara dari semester 1 s.d. semester 5 dan halaman yang mencantumkan identitas saudara, dalam bentuk 1 file pdf. Halaman lain selain dari bagian-bagian tersebut tidak perlu diunggah.'
                ),
                array(
                    'question' => 'Bagaimana prosedur pengunduran diri jika saya dinyatakan lulus seleksi di Universitas Songwa?',
                    'answer' => 'Anda dapat mengundurkan diri dengan melampirkan surat pernyataan dan mengisi form pengunduran diri.'
                )
            );
            ?>

            <div class="max-w-2xl mx-auto mt-12 rounded-lg overflow-hidden">
                <?php foreach ($faqItems as $index => $item) : ?>
                    <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg mb-6">
                        <button class="w-full flex items-center justify-between py-4 px-6 text-left focus:outline-none bg-gray-200 hover:bg-green-200" onclick="toggleAccordion(<?php echo $index; ?>)">
                            <span class="font-semibold text-gray-800">
                                <?php echo $item['question']; ?>
                            </span>
                            <span class="text-gray-600">
                                <svg class="h-5 w-5 transform transition-transform duration-200" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="M10 13.83l6.55-6.56a1 1 0 0 1 1.41 1.41l-7.3 7.29a1 1 0 0 1-1.41 0L2.04 8.68A1 1 0 0 1 3.45 7.27L10 13.83z"></path>
                                </svg>
                            </span>
                        </button>
                        <div class="accordion-content hidden px-6 py-4 bg-white text-gray-800">
                            <?php echo $item['answer']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script>
        function toggleAccordion(index) {
            const content = document.querySelectorAll('.accordion-content');
            const icon = document.querySelectorAll('.accordion-toggle svg');

            content[index].classList.toggle('hidden');
            icon[index].classList.toggle('rotate-180');
        }
    </script>
    </section>
    <!-- Konten section End-->
    <!-- Footer Start -->
    <footer class="bg-dark pt-9 pb-3">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3 ">
                    <h3 class="font-bold text-xl text-white mb-2">Hubungi kami</h3>
                    <p>Universitas Songwa</p>
                    <p>Jl. Tongkol III No 1 Sleman</p>
                    <p>Yogyakarta</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3 ">
                    <h3 class="font-semibold text-xl text-white mb-5">Menu</h3>
                    <ul class="text-slate-300">
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-2">Home</a></li>
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-2">Fasilitas</a></li>
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-2">Fakultas</a></li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3 ">
                    <h3 class="font-semibold text-xl text-white mb-5">Menu</h3>
                    <ul class="text-slate-300">
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-2">Home</a></li>
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-2">Fasilitas</a></li>
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-2">Fakultas</a></li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-3 border-t border-slate-700">

                <p class="font-medium text-sm text-slate-500 text-center">Dibuat oleh kelompok x, dengan tailwind css </p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <!-- Script JS -->
    <script src="dist/js/script.js"></script>
</body>

</html>