<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Styled Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100 font-sans">


     <!-- Main Container -->
  <div class="flex items-center justify-center h-screen">
    <div class="flex bg-white shadow-lg rounded-3xl p-8 gap-8 max-w-4xl">
      <!-- Image Section -->
      <div class="flex items-center justify-center bg-gray-200 rounded-2xl w-64 h-64">
        <img src="assets/image/laki.png" alt="Ilustrasi" class="rounded-full" />
      </div>

      <!-- Form Section -->
      <div class="flex flex-col justify-center bg-red-200 rounded-3xl px-10 py-8 w-96 shadow-md">
        <form action="{{ url('/register') }}" method="POST" class="flex flex-col gap-5">
          @csrf
          <!-- Email Input -->
          <input
            type="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="E-mail address"
            class="p-3 rounded-full shadow-inner border border-gray-300 focus:outline-none"
          />
          @error('email')
            <div class="text-red-500 text-sm">{{ $message }}</div>
          @enderror

          <!-- Password Input -->
          <input
            type="password"
            name="password"
            placeholder="Password"
            class="p-3 rounded-full shadow-inner border border-gray-300 focus:outline-none"
          />
          @error('password')
            <div class="text-red-500 text-sm">{{ $message }}</div>
          @enderror

          <!-- Double Password Input -->
          <input
            type="password"
            name="password_confirmation"
            placeholder="Confirm Password"
            class="p-3 rounded-full shadow-inner border border-gray-300 focus:outline-none"
          />

          <!-- Button and Login Link -->
          <div class="flex justify-between items-center">
            <button
              type="submit"
              class="px-6 py-2 rounded-full bg-red-500 text-white font-semibold hover:bg-red-600"
            >
              Daftar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  </body>
</html>