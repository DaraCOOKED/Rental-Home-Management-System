
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Properties</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    

<div class="p-8 max-w mx-auto">

    <h1 class="text-3xl font-bold mb-6">Properties</h1>

    <!-- GRID -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- CALL COMPONENT -->
        <x-property-card 
            title="Premium Apartment"
            price="$29/mo"
            location="Phnom Penh"
            description="2-bedroom fully furnished"
            amount="2 units available"
            status="Available"
        />

        <x-property-card 
            title="Studio Room"
            price="$19/mo"
            location="Russian Market"
            description="Modern compact room"
            amount="5 units available"
            status="Occupied"
        />

    </div>

</div>

</body>
</html>



