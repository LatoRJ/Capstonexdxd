<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-50">
    <x-sidebar />
    <x-header />

    <!-- Temporary Main Content -->
    <main class="ml-64 p-6">
        <h2 class="text-2xl font-bold mb-4">DASHBOARD</h2>

        <!-- Temporary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Total Registered Residents</h3>
                <p class="text-3xl font-bold">2000</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Number of Households</h3>
                <p class="text-3xl font-bold">500</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Active Blotter Cases</h3>
                <p class="text-3xl font-bold">11</p>
            </div>
        </div>
    </main>
</body>
</html>
