<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persyaratan pendaftaran</title>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        .animate-fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .list-green li::marker {
            color: rgb(20 184 166);
        }
    </style>
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
    <!-- Keuntungan section Start-->
    <section id="syaraydaftar" class="pt-9 pb-32 bg-gray-100">
        <div class="container mx-auto px-4 py-8 h-full">
            <h1 class="text-3xl text-center font-bold mb-8 text-primary">Persyaratan Pendaftaran Mahasiswa Baru</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col justify-center items-center">
                    <div class="max-w-3xl bg-white p-8 shadow rounded-lg animate-fade-in h-full w-full">
                        <h2 class="text-2xl font-bold mb-4 text-white text-center bg-primary rounded-lg">KETENTUAN PENDAFTARAN (WNI)</h2>
                        <ul class="list-disc list-green ml-6">
                            <li class="mb-2">Warga Negara Indonesia (WNI)</li>
                            <li class="mb-2">Khusus Prodi D3 Teknik Informatika, S1 Informatika, S1 Teknik Komputer: SMA/MA IPA atau SMK Teknik</li>
                            <li class="mb-2">Upload berkas pendaftaran</li>
                            <li class="mb-2">Bebas biaya pendaftaran</li>
                        </ul>
                    </div>
                    <div class="max-w-3xl w-full bg-white p-8 shadow rounded-lg mt-8 animate-fade-in h-full">
                        <h2 class="text-2xl font-bold mb-4 text-white text-center bg-primary rounded-lg">SYARAT BERKAS</h2>
                        <ul class="list-disc list-green ml-6">
                            <li class="mb-2">Scan niali UN / Ujian sekolah / Nilai raport semester 5</li>
                            <li class="mb-2">Memiliki ijazah dan transkrip nilai yang sah</li>
                            <li class="mb-2">Mengisi formulir pendaftaran online</li>
                            <li class="mb-2 text-bold">Membayar biaya pendaftaran</li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div class="max-w-3xl w-full bg-white p-8 shadow rounded-lg animate-fade-in h-full">
                        <h2 class="text-2xl font-bold mb-4 text-white text-center bg-primary rounded-lg">KETENTUAN PENDAFTARAN (WNA)</h2>
                        <ul class="list-disc list-green ml-6">
                            <li class="mb-2">Warga Negara Asing (Paspor)</li>
                            <li class="mb-2">Mendaftar prodi Kelas Internasional</li>
                            <li class="mb-2">Mengikuti sesi wawancara</li>
                            <li class="mb-2">Melengkapi Berkas Pendukung setelah dinyatakan diterima.</li>
                            <li class="mb-2">Bebas biaya pendaftaran</li>
                        </ul>
                    </div>
                    <div class="max-w-3xl w-full bg-white p-8 shadow rounded-lg mt-8 animate-fade-in h-full">
                        <h2 class="text-2xl font-bold mb-4 text-white text-center bg-primary rounded-lg">SYARAT BERKAS</h2>
                        <ul class="list-disc list-green ml-6">
                            <li class="mb-2">Scan ijazah asli</li>
                            <li class="mb-2">Scan transkrip nilai asli</li>
                            <li class="mb-2">Scan ijazah penyetaraan</li>
                            <li class="mb-2">Visa</li>
                            <li class="mb-2">Kartu ijin tinggal</li>
                        </ul>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <div class="max-w-3xl mx-auto bg-white p-8 shadow rounded-lg animate-fade-in h-full">
                        <h2 class="text-2xl font-bold mb-4 text-white text-center bg-primary rounded-lg">Jadwal Pendaftaran</h2>
                        <p class="ml-6 text-gray-700 text-center">Pendaftaran dibuka mulai tanggal 1 Juli 2023 hingga 31 Juli 2023.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Animation on scroll
        window.addEventListener('scroll', function () {
            var element = document.getElementById('syaratdaftar');
            var position = element.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;

            if (position < windowHeight) {
                element.classList.add('animate-fade-in');
            }
        });
    </script>
    <!-- Keuntungan section End-->
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