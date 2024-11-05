<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body class="bg-gray-900 text-white font-poppins">
    <nav
        class="py-4 px-6 top-0 left-0 right-0 bg-gray-800 bg-opacity-80 justify-between items-center border-b border-gray-700 flex fixed z-50">
        <a href="" class="text-2xl text-white bold italic">Kedai <span class="text-yellow-500">kopi</span></a>
        <div class="none md:flex space-x-6 font-semibold">
            <a href="#home" class="hover:text-yellow-500">Home</a>
            <a href="#tentang-kami" class="hover:text-yellow-500">Tentang kami</a>
            <a href="#menu" class="hover:text-yellow-500">Menu</a>
            <a href="#produk" class="hover:text-yellow-500">Produk</a>
            <a href="#contact" class="hover:text-yellow-500">Contact</a>

        </div>

        <div class="flex space-x-6">
            <a href="#" class="hover:text-yellow-500" id="search"><i data-feather="search"></i></a>
            <a href="#" class="hover:text-yellow-500"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="md:hidden hover:text-yellow-500" id="menu-button"><i data-feather="menu"></i></a>
            <a href="#" class="hidden  hover:text-yellow-500" id="close-button"><i data-feather="x"></i></a>
        </div>

        <div class="absolute top-full right-7 bg-white px-4 py-2 w-80 text-gray-900 flex items-center hidden"
            id="search-form">
            <input type="text" placeholder="Search here..." class="w-full p-2 focus:outline-none">
            <label for="search" class="cursor-pointer"><i data-feather="search"></i></label>
        </div>
    </nav>

    <aside class="fixed top-0 h-full w-64 bg-white text-black shadow-lg z-50 md:hidden sidebar" id="sidenav">
        <nav class="flex flex-col h-full space-y-4 p-8">
            <a href="#" class="hover:text-yellow-500">Home</a>
            <a href="#tentang-kami" class="hover:text-yellow-500">Tentang Kami</a>
            <a href="#menu" class="hover:text-yellow-500">Menu</a>
            <a href="#produk" class="hover:text-yellow-500">Produk</a>
            <a href="#Contact" class="hover:text-yellow-500">Contact</a>
        </nav>
    </aside>

    <section id="home" class="min-h-screen bg-cover bg-center items-center justify-center flex"
        style="background-image: url('assets/img/header-bg.jpeg');">

        <div class="bg-black bg-opacity-50 p-10 rounded-lg mx-6 text-center">
            <h1 class=" text-4xl font-bold mb-4">Mari Nikmati Secangkir <span class="text-yellow-500">Kopi</span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero corporis suscipit esse facere natus ex!</p>
        </div>
    </section>

    <section id="tentang-kami" class="py-20 px-6 bg-gray-800">
        <div class="text-center mb-10">
            <h2 class="font-bold text-3xl"><span class="text-yellow-500">Tentang</span> Kami</h2>
        </div>

        <div class="md:flex md:items-center space-y-6 md:space-y-0 md:space-x-6">
            <div class="md:w-1/2">
                <img src="assets/img/tentang-kami.jpg" alt="tentang-kami" class="rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2 space-y-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos repudiandae laudantium veritatis
                    doloribus doloremque illum ipsa unde perferendis accusamus possimus.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate non, fugit est dignissimos ipsum
                    fuga molestiae laudantium minus nemo ad?
                </p>
            </div>
        </div>
    </section>

    <section id="menu" class="py-20 px-6 bg-gray-900">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold"><span class="text-yellow-500">Menu</span> Kami</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, at?</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex flex-col items-center">
                <img src="storage/1.jpg" alt="menu" class="rounded-lg mb-4">
                <h3 class="text-xl font-semibold">- Expresso -</h3>
                <p class="text-yellow-500">IDR 15K</p>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex flex-col items-center">
                <img src="storage/1.jpg" alt="menu" class="rounded-lg mb-4">
                <h3 class="text-xl font-semibold">- Cappuchino -</h3>
                <p class="text-yellow-500">IDR 15K</p>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex flex-col items-center">
                <img src="storage/1.jpg" alt="menu" class="rounded-lg mb-4">
                <h3 class="text-xl font-semibold">- Latte -</h3>
                <p class="text-yellow-500">IDR 15K</p>
            </div>
        </div>
    </section>

    <section id="produk" class="bg-gray-800 py-20 px-6">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold"><span class="text-yellow-500">Produk Unggulan</span> Kami</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, inventore?</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-slate-900 p-6 rounded-lg shadow-lg items-center text-center flex flex-col">
                <div class="flex justify-center gap-4 mb-4">
                    <a href="#"
                        class="text-yellow-500 p-3 bg bg-gray-800 rounded-full hover:text-gray-900 hover:bg-yellow-500 transition duration-300 ease-in-out">
                        <i data-feather="shopping-cart">
                        </i>
                    </a>
                    <a href="#"
                        class="text-yellow-500 p-3 bg bg-gray-800 rounded-full hover:text-gray-900 hover:bg-yellow-500 transition duration-300 ease-in-out">
                        <i data-feather="eye">
                        </i>
                    </a>
                </div>
                <img src="storage/bunngkus-kopi.jpg" class="rounded-lg mb-4">
                <h3 class="text-xl font-semibold">- Coffe Beans -</h3>
                <div class="flex text-yellow-500 space-x-1 my-2 justify-center">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="flex gap-2">
                    <p class="text-yellow-500">IDR 30K</p>
                    <p class="text-gray-400 line-through">IDR 50K</p>
                </div>
            </div>

            <div class="bg-slate-900 p-6 rounded-lg shadow-lg items-center text-center flex flex-col">
                <div class="flex justify-center gap-4 mb-4">
                    <a href="#"
                        class="text-yellow-500 p-3 bg bg-gray-800 rounded-full hover:text-gray-900 hover:bg-yellow-500 transition duration-300 ease-in-out">
                        <i data-feather="shopping-cart">
                        </i>
                    </a>
                    <a href="#"
                        class="text-yellow-500 p-3 bg bg-gray-800 rounded-full hover:text-gray-900 hover:bg-yellow-500 transition duration-300 ease-in-out">
                        <i data-feather="eye">
                        </i>
                    </a>
                </div>
                <img src="storage/bunngkus-kopi.jpg" class="rounded-lg mb-4">
                <h3 class="text-xl font-semibold">- Coffe Beans -</h3>
                <div class="flex text-yellow-500 space-x-1 my-2 justify-center">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="flex gap-2">
                    <p class="text-yellow-500">IDR 30K</p>
                    <p class="text-gray-400 line-through">IDR 50K</p>
                </div>
            </div>

            <div class="bg-slate-900 p-6 rounded-lg shadow-lg items-center text-center flex flex-col">
                <div class="flex justify-center gap-4 mb-4">
                    <a href="#"
                        class="text-yellow-500 p-3 bg bg-gray-800 rounded-full hover:text-gray-900 hover:bg-yellow-500 transition duration-300 ease-in-out">
                        <i data-feather="shopping-cart">
                        </i>
                    </a>
                    <a href="#"
                        class="text-yellow-500 p-3 bg bg-gray-800 rounded-full hover:text-gray-900 hover:bg-yellow-500 transition duration-300 ease-in-out">
                        <i data-feather="eye">
                        </i>
                    </a>
                </div>
                <img src="storage/bunngkus-kopi.jpg" class="rounded-lg mb-4">
                <h3 class="text-xl font-semibold">- Coffe Beans -</h3>
                <div class="flex text-yellow-500 space-x-1 my-2 justify-center">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="flex gap-2">
                    <p class="text-yellow-500">IDR 30K</p>
                    <p class="text-gray-400 line-through">IDR 50K</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-gray-900 py-20 px-6">
        <div class="text-center mb-10">
            <h2 class=" text-3xl font-bold"><span class="text-yellow-500">Kontak</span>Kami</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="md:flex md:space-x-6">
            <iframe class="w-full md:w-1/2 h-64 rounded-lg mb-6"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86137.06928506277!2d107.11182043209102!3d-6.356289862383606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6990be06780f75%3A0x3368ae860c084f3c!2sJatirasa%20Waterboom%20(JR%20Waterboom)!5e0!3m2!1sid!2sid!4v1729560541777!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="md:w-1/2">
                <form class="bg-gray-800 p-6 rounded-lg shadow-lg" action="">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-semibold mb-1">Nama</label>
                        <input type="text" id="name" placeholder="nama"
                            class="w-full p-2 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-semibold mb-1">Email</label>
                        <input type="email" id="email" placeholder="email"
                            class="w-full p-2 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>

                    <div class="mb-4 text-gray-9001">
                        <label for="message" class="block text-sm font-semibold mb-1">Message</label>
                        <textarea name="message" id="message" rows="4" placeholder="Tulis pesan..."
                            class="w-full p-2 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
                    </div>
                </form>
                <div>
                    <button
                        class="bg-yellow-500 py-2 text-gray-900 font-semibold w-full rounded-lg hover:bg-yellow-400 transition duration-300">Kirim
                        Pesan</button>
                </div>
            </div>
        </div>

    </section>

    <footer class="bg-gray-800 py-6 text-center">
        <p class="text-gray-400">&copy; 2024 Kopi Kenangan Senja. Alright reserved</p>
        <div class="mt-2 text-center">
            <a href="" class="text-gray-400 hover:text-yellow-500 mx-2">Privacy Policy | Terms of Service</a>
        </div>
    </footer>

    <script>
        feather.replace();
    </script>

    <script src="assets/img/script.js"></script>
</body>

</html>