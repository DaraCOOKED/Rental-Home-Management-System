<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties — Jinlong Rental</title>
    <script src="https://cdn.tailwindcss.com"></script>
  
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="p-8 max-w-7xl mx-auto">
        
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Properties</h1>
                <p class="text-sm text-gray-500">Manage your rental listings</p>
            </div>

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg font-semibold shadow-sm transition-all active:scale-95">
                + Add More
            </button>
        </header>

        <div class="bg-white h-64 rounded-xl shadow-sm border border-gray-200 flex items-center justify-center text-gray-400">
                <property-card 
                title="Jinlong Tower Unit 12" 
                price="$450/month" 
                location="Incheon, South Korea"
                :total="1"
            ></property-card>
        </div>

    </div>
</body>
</html>