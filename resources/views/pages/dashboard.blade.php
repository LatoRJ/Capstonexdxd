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

    <div class="p-6 ml-64">
        <h1 class="text-2xl font-bold mb-6">DASHBOARD</h1>

        <div class="grid grid-rows-1 lg:grid-rows-2 gap-6">
            <!-- Left column: Recent Activities (full width on large screens) -->
            <div class="lg:col-span-2 border rounded-lg p-4">
                <h2 class="text-lg font-bold">RECENT ACTIVITIES</h2>
                <p class="text-sm text-gray-600 mb-4">Last updated: August 8, 2025</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                    <div class="border rounded-md shadow-sm p-4 text-center">
                        <p class="text-sm font-medium">Total Registered Residents</p>
                        <p class="text-2xl font-bold">2000</p>
                    </div>
                    <div class="border rounded-md shadow-sm p-4 text-center">
                        <p class="text-sm font-medium">Number of Households</p>
                        <p class="text-2xl font-bold">500</p>
                    </div>
                    <div class="border rounded-md shadow-sm p-4 text-center">
                        <p class="text-sm font-medium">Active Blotter Cases</p>
                        <p class="text-2xl font-bold">11</p>
                    </div>
                    <div class="border rounded-md shadow-sm p-4 text-center">
                        <p class="text-sm font-medium">Registered Businesses</p>
                        <p class="text-2xl font-bold">20</p>
                    </div>
                    <div class="border rounded-md shadow-sm p-4 text-center">
                        <p class="text-sm font-medium">Pending Document Requests</p>
                        <p class="text-2xl font-bold">15</p>
                    </div>
                </div>
            </div>

            <!-- Right column: Demographic Summary -->
            <div class="border rounded-lg p-4">
                <h2 class="text-lg font-bold">DEMOGRAPHIC SUMMARY</h2>
                <p class="text-sm text-gray-600 mb-4">Last updated: August 8, 2025</p>

                <div class="grid grid-cols-1 gap-4">
                    <div class="border rounded-md shadow-sm p-4">
                        <p class="text-sm font-medium">Total Number of</p>
                        <p class="text-sm">Males = <span class="font-bold">1000</span></p>
                        <p class="text-sm">Females = <span class="font-bold">1000</span></p>
                    </div>
                    <div class="border rounded-md shadow-sm p-4">
                        <p class="text-sm font-medium">Age Group</p>
                        <p class="text-sm">Children (0–17) = <span class="font-bold">500</span></p>
                        <p class="text-sm">Adult (18–59) = <span class="font-bold">1000</span></p>
                        <p class="text-sm">Seniors (60+) = <span class="font-bold">500</span></p>
                    </div>
                </div>
            </div>

            <!-- Left column: Blotter Reports -->
            <div class="border rounded-lg p-4">
                <h2 class="text-lg font-bold">BLOTTER / INCIDENT REPORTS</h2>
                <p class="text-sm text-gray-600 mb-4">Last updated: August 8, 2025</p>

                <div class="grid grid-cols-1 gap-4">
                    <div class="border rounded-md shadow-sm p-4">
                        <p class="text-sm font-medium">Total Number of</p>
                        <p class="text-sm">Active Reports = <span class="font-bold">11</span></p>
                        <p class="text-sm">Resolved Cases = <span class="font-bold">50</span></p>
                    </div>
                    <div class="border rounded-md shadow-sm p-4">
                        <p class="text-sm font-medium">Incidents</p>
                        <p class="text-sm">Assault = <span class="font-bold">1</span></p>
                        <p class="text-sm">Theft = <span class="font-bold">1</span></p>
                        <p class="text-sm">Burglary = <span class="font-bold">1</span></p>
                        <p class="text-sm">Others (Vandalism, Disputes, Trespassing) = <span class="font-bold">20</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
