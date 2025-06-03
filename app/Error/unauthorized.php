<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Access Denied</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="text-center max-w-md bg-white p-8 rounded-xl shadow-lg">

    <!-- Lottie Animation -->
    <lottie-player
      src="https://assets2.lottiefiles.com/packages/lf20_touohxv0.json"
      background="transparent"
      speed="1"
      style="width: 150px; height: 150px; margin: 0 auto;"
      loop
      autoplay>
    </lottie-player>

    <h1 class="text-6xl font-bold text-red-600">403</h1>
    <h2 class="text-2xl mt-4 text-gray-800 font-semibold">Access Denied</h2>
    <p class="text-gray-600 mt-2">
      You do not have permission to view this page.<br>Please contact the administrator for access.
    </p>

    <a href="index.php?payroll=login1" class="mt-6 inline-block px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-200">
      Return to Login
    </a>
  </div>

</body>
</html>
