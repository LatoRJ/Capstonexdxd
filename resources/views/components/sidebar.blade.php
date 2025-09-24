<aside class="fixed top-0 left-0 w-64 h-screen bg-white border-r shadow-md z-20">
    <!-- Logo -->
    <div class="p-6 flex justify-center">
        <img src="{{ asset('image/brgylogo.jpg') }}" alt="Logo" class="w-24 h-24">
    </div>

    <!-- Menu -->
    <nav class="mt-4 px-4 space-y-2">
        <a href="" 
          class="block px-4 py-2 rounded-lg font-medium bg-green-500 text-black hover:bg-green-600">
            DASHBOARB
        </a>

        <div class="mt-4">
            <p class="px-4 py-2 font-medium bg-gray-500 text-black rounded-lg">REGISTRATION</p>
            <a href="#" class="flex mt-2 items-center px-4 py-2 rounded-lg hover:bg-gray-300">
                <span class="material-icons mr-2">person_add</span>
                Add Resident
            </a>
            <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-300">
                <span class="material-icons mr-2">qr_code_scanner</span>
                Scan QR
            </a>
        </div>
    </nav>
</aside>