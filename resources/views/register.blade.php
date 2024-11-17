<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Styled Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <nav
      class="flex justify-center gap-6 py-4 bg-white shadow-md text-sm font-medium"
    >
      <a href="#" class="text-black hover:text-gray-500">About</a>
      <a href="#" class="text-black hover:text-gray-500">Library</a>
      <a href="#" class="text-black hover:text-gray-500">Bestseller</a>
      <a href="#" class="text-black hover:text-gray-500">Home</a>
      <a href="#" class="text-red-500 font-semibold">Library/earn</a>
      <a href="#" class="text-black hover:text-gray-500">Contact</a>
      <a href="#" class="text-black hover:text-gray-500">Get Help</a>
    </nav>

    <!-- Main Container -->
    <div class="flex items-center justify-center h-screen">
      <div class="flex bg-white shadow-lg rounded-3xl p-8 gap-8 max-w-4xl">
        <!-- Image Section -->
        <div
          class="flex items-center justify-center bg-gray-200 rounded-2xl w-64 h-64"
        >
          <img
            src="assets/image/laki.png"
            alt="Illustration"
            class="rounded-full"
          />
        </div>

        <!-- Form Section -->
        <div
          class="flex flex-col justify-center bg-red-200 rounded-3xl px-10 py-8 w-96 shadow-md"
        >
          <form class="flex flex-col gap-5">
            <!-- Email Input -->
            <input
              type="email"
              placeholder="E-mail address"
              class="p-3 rounded-full shadow-inner border border-gray-300 focus:outline-none"
            />
            <!-- Password Input -->
            <input
              type="password"
              placeholder="Password"
              class="p-3 rounded-full shadow-inner border border-gray-300 focus:outline-none"
            />
            <!-- Double Password Input -->
            <input
              type="password"
              placeholder="Double Password"
              class="p-3 rounded-full shadow-inner border border-gray-300 focus:outline-none"
            />

            <!-- Button and Login Link -->
            <div class="flex justify-between items-center">
              <button
                type="submit"
                class="px-6 py-2 rounded-full bg-red-500 text-white font-semibold hover:bg-red-600"
              >
                Sign-in
              </button>
              <a href="#" class="text-red-500 font-medium hover:underline"
                >Login ></a
              >
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>