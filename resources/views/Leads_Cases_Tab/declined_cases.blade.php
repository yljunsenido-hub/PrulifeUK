<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>BLUE CHALCEDONY MANAGEMENT SYSTEM</title>
</head>
<body class="bg-gray-100 p-6 border border-gray-300">
    <div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md mb-3">
        <p class="text-4xl font-semibold mb-4">Trackers</p>
    </div>
    <div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md">
        <div class="container mx-auto max-w-8xl bg-gray-300 p-3 rounded-l shadow-md mb-5">
            <p class="ml-2">Declined/Postponed Cases</p>
        </div>

        <div class="mb-4 flex justify-between items-center">
            <div class="flex items-center">
                <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                <select id="entries" class="border border-gray-300 rounded-md p-2 mr-4">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <input type="text" placeholder="Search..." class="border border-gray-300 rounded-md p-2" />
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">First Name</th>
                        <th class="py-3 px-6 text-left">Last Name</th>
                        <th class="py-3 px-6 text-left">Application No.</th>
                        <th class="py-3 px-6 text-left">Policy No.</th>
                        <th class="py-3 px-6 text-left">APE</th>
                        <th class="py-3 px-6 text-left">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-semibold">
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6">MONTHLY TOTAL</td>
                        <td class="py-3 px-6">f</td>
                        <td class="py-3 px-6">f</td>
                        <td class="py-3 px-6">f</td>
                        <td class="py-3 px-6">f</td>
                        <td class="py-3 px-6">f</td>
                        <td class="py-3 px-6">f</td>
                    </tr>
                </tbody>
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">First Name</th>
                        <th class="py-3 px-6 text-left">Last Name</th>
                        <th class="py-3 px-6 text-left">Application No.</th>
                        <th class="py-3 px-6 text-left">Policy No.</th>
                        <th class="py-3 px-6 text-left">APE</th>
                        <th class="py-3 px-6 text-left">Status</th>
                    </tr>
                </thead>
            </table>
        </div>
        
    </div>
</body>
</html>