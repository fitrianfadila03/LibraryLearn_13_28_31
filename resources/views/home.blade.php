<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Learn</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen font-sans">

    <section id="Home" class="relative">
        <nav class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
            <ul class="flex justify-center space-x-8 py-5">
                <li><a href="#Home" class="text-black hover:text-red-500">Home</a></li>
                <li><a href="#About" class="text-black hover:text-red-500">About</a></li>
                <li><a href="index.html#Library" class="text-black hover:text-red-500">Library</a></li>
                <li><a href="index.html#BestSeller" class="text-black hover:text-red-500">BestSeller</a></li>
                <li><a href="Library/earn" class="text-black hover:text-red-500">Library/earn</a></li>
                <li><a href="index.html#Contact" class="text-black hover:text-red-500">Contact</a></li>
            </ul>
        </nav>

        <div class="relative mt-20">
            <div class="absolute top-[250px] -left-[150px] w-[250px] h-[250px] bg-red-500 rounded-full"></div>
            <div class="absolute bottom-[100px] -right-[150px] w-[250px] h-[250px] bg-red-500 rounded-full"></div>

            <div class="text-center mt-20">
                <h1 class="text-4xl md:text-5xl font-bold">Read a book to open your mind</h1>
            </div>
            <div class="flex justify-center gap-5 mt-6">
                <a href="/register" class="px-5 py-3 bg-red-500 text-white rounded-md text-sm font-bold hover:bg-red-600 transform hover:scale-105 transition-all">Register</a>
            </div>
            <div class="flex justify-center items-center mt-10">
                <img src="assets/image/book.png" class="max-w-full max-h-[70vh]" alt="Book Image">
            </div>
        </div>
    </section>
</body>
</html>