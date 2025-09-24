<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Information Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-white">
    <div class="w-full max-w-6xl px-4 py-10 grid md:grid-cols-2 gap-10 items-center">

        <div class="flex flex-col items-center md:items-start text-center md:text-left space-y-6">
            <h1 class="text-2xl md:text-3xl font-extrabold italic uppercase leading-snug">
                BARANGAY INFORMATION<br/>
                MANAGEMENT SYSTEM
            </h1>
            <div class="flex gap-8 justify-center md:justify-start">
                <div class="w-36 h-36 rounded-full border shadow flex items-center justify-center">
                    <span class="text-green-700 font-bold">LOGO</span>
                </div>

                <div class="w-36 h-36 rounded-full border shadow flex items-center justify-center">
                    <span class="text-red-600 font-bold">SK</span>
                </div>
            </div>
            <p class="text-gray-700 text-lg italic">Manage Barangay Information with Ease</p>
        </div>

        <div class="bg-white border rounded-xl shadow-md p-8">
            <h2 class="text-2xl font-extrabold text-center mb-6">ADMIN LOGIN</h2>

            <form method="POST" action="#">
                @csrf
                <div class="mb-4">
                    <input type="text" name="username" placeholder="Username"
                        class="w-full border rounded-lg px-4 py-3 text-base focus:ring-2 focus:ring-green-300 focus:outline-none">
                </div>

                <div class="mb-4">
                    <input type="password" name="password" placeholder="Password"
                        class="w-full border rounded-lg px-4 py-3 text-base focus:ring-2 focus:ring-green-300 focus:outline-none">
                </div>

                <button type="submit"
                    class="w-full bg-green-400 hover:bg-green-500 text-black font-bold py-3 rounded-lg transition">
                    ENTER
                </button>

                <div class="mt-4 text-center">
                    <a href="#" class="text-blue-600 hover:underline">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
