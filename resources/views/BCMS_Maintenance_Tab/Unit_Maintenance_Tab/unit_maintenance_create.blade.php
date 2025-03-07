<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Unit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-xl font-bold mb-4">Unit Maintenance / Create New Unit</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <form action="/create-unit" method="POST">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="officer-code">Officer Code</label>
                    <input type="text" id="officer-code" required class="mt-1 block w-1/3 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" placeholder="Enter Officer Code">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="unit-name">Unit Name</label>
                    <input type="text" id="unit-name" required class="mt-1 block w-1/3 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" placeholder="Enter Unit Name">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="promotion-date">Promotion Date</label>
                    <input type="date" id="promotion-date" required class="mt-1 block w-1/5 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
                <div class="flex justify-between mt-6">
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Create New Unit</button>
                    <button type="button" onclick="window.location.href='/unit-maintenance'" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Back</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>