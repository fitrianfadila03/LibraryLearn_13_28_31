<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body
    class="flex items-center justify-center h-screen bg-white relative overflow-hidden font-sans">
    <div
      class="absolute bg-[#d54445] rounded-full"
      style="bottom: -15%; right: -15%; width: 300px; height: 300px">
    </div>
    <div
      class="absolute bg-[#d54445] rounded-full"
      style="top: 30%; left: -8%; width: 180px; height: 180px">
    </div>

    <div
      class="bg-[#f68e8e] p-10 rounded-[30px] shadow-lg text-center w-[350px]">
      <h2 class="text-white text-2xl font-bold mb-6">Login</h2>
      <form>
        <input
          type="text"
          placeholder="Username"
          class="w-full p-3 mb-3 rounded-full border-none text-base shadow-md"/>
        <input
          type="password"
          placeholder="Password"
          class="w-full p-3 mb-6 rounded-full border-none text-base shadow-md"/>
        <button
          type="submit"
          class="bg-white text-[#d54445] border-2 border-[#d54445] w-full p-3 rounded-full font-bold text-lg transition hover:bg-[#d54445] hover:text-white">
          Login
        </button>
      </form>
    </div>
    <script src="assets/js/script.js"></script>
  </body>
</html>