<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="dist/contact.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
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
                                <a href="fasilitas.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Fasilitas</a>
                            </li>
                            <li class="group">
                                <a href="kontak.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Kontak</a>
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
    <section id="prodi" class="pt-36 pb-32">
        <div class="container-1">
        <div class="form">
            <div class="contact-info">
            <h3 class="title">Informasi Kontak Penting</h3>

            <div class="text">
                <h4>Layanan PMB</h4>
                <ul>
                <li>Situs web: pmb.uii.ac.id</li>
                <li>Email: admisi@uii.ac.id</li>
                <li>Telp: (0274) 898444 ext. 1234, Faks: (0274) 898459</li>
                </ul>
            </div>

            <div class="text">
                <h4>Rektorat</h4>
                <ul>
                <li>Telp: (0274) 898444 (hunting)</li>
                <li>Faks: (0274) 898459</li>
                <li>Situs web: uii.ac.id</li>
                <li>Email: info@uii.ac.id</li>
                </ul>
            </div>

            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                </div>
                <br />
                <div class="credit">Universitas Songwa Yogyakarta</a></div>
            </div>
            </div>

            <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            <form action="index.html" autocomplete="off">
                <h3 class="title">Contact us</h3>
                <div class="input-container-1">
                <input type="text" name="name" class="input" />
                <label for="">Username</label>
                <span>Username</span>
                </div>
                <div class="input-container-1">
                <input type="email" name="email" class="input" />
                <label for="">Email</label>
                <span>Email</span>
                </div>
                <div class="input-container-1">
                <input type="tel" name="phone" class="input" />
                <label for="">Phone</label>
                <span>Phone</span>
                </div>
                <div class="input-container-1 textarea">
                <textarea name="message" class="input"></textarea>
                <label for="">Message</label>
                <span>Message</span>
                </div>
                <input type="submit" value="Send" class="btn" />
            </form>
            </div>
        </div>
        </div>

    </section>
    <script>
            const inputs = document.querySelectorAll(".input");

            function focusFunc() {
            let parent = this.parentNode;
            parent.classList.add("focus");
            }

            function blurFunc() {
            let parent = this.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }
            }

            inputs.forEach((input) => {
            input.addEventListener("focus", focusFunc);
            input.addEventListener("blur", blurFunc);
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