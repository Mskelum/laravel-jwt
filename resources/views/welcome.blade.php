<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-500 to-indigo-700 min-h-screen flex items-center justify-center">
  <div class="text-center text-white px-6">
    <h1 class="text-5xl font-bold mb-6 animate-fade-in">Welcome to JWT Auth App</h1>
    <p class="text-lg mb-8 max-w-xl mx-auto">
      A simple and secure Laravel app using JWT authentication. Start by registering or logging in via the API.
    </p>
    <a href="/api/auth/login" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-gray-100 transition-all">
      Go to API Login
    </a>
  </div>

  <style>
    @keyframes fade-in {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
      animation: fade-in 1.2s ease-in-out;
    }
  </style>
</body>
</html>
