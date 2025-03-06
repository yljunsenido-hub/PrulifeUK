<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Business</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
        <h1 class="text-2xl font-bold mb-4">New Business</h1>
        <p class="mb-4">Update Submission / Policy Record</p>

        <div class="mb-4 flex justify-between items-center">
            <div>
                <label for="entries" class="mr-2">Show</label>
                <select id="entries" class="border border-gray-300 rounded p-1">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
                <span class="ml-2">entries</span>
            </div>
            <div>
                <input type="text" placeholder="Search..." class="border border-gray-300 rounded p-1">
            </div>
        </div>

        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">First Name</th>
                    <th class="border px-4 py-2">Last Name</th>
                    <th class="border px-4 py-2">Date Submitted</th>
                    <th class="border px-4 py-2">Application No.</th>
                    <th class="border px-4 py-2">Policy No.</th>
                    <th class="border px-4 py-2">Agent</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100">
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">firstname</td>
                    <td class="border px-4 py-2">lastname</td>
                    <td class="border px-4 py-2">0000-00-00</td>
                    <td class="border px-4 py-2">0</td>
                    <td class="border px-4 py-2">0</td>
                    <td class="border px-4 py-2">name - no</td>
                    <td class="border px-4 py-2">Issued</td>
                    <td class="border px-4 py-2">
                        <a href="#" class="text-blue-500">UPDATE</a> | 
                        <a href="#" class="text-blue-500">REMOVE</a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">firstname</td>
                    <td class="border px-4 py-2">lastname</td>
                    <td class="border px-4 py-2">0000-00-00</td>
                    <td class="border px-4 py-2">0</td>
                    <td class="border px-4 py-2">0</td>
                    <td class="border px-4 py-2">name - no</td>
                    <td class="border px-4 py-2">Issued</td>
                    <td class="border px-4 py-2">
                        <a href="#" class="text-blue-500">UPDATE</a> | 
                        <a href="#" class="text-blue-500">REMOVE</a>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>