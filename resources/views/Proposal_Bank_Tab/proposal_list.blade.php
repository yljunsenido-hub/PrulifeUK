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
        <p class="text-4xl font-semibold mb-10">Proposal List</p>

        <div class="p-4 border border-gray-300 bg-gray-200 font-normal mt-3 text-black rounded-tr-md rounded-tl-md flex justify-between items-center">
            <p>PROPOSALS</p>
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span class="sr-only">Add</span>
            </button>
        </div>

        <div class="border border-gray-300">
            <div class="mb-4 flex items-center ml-5 mt-5">
                <label for="entries" class="mr-2 text-md text-black">Show entries:</label>
                <select id="entries" class="border border-gray-300 rounded-md p-2">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="overflow-x-auto mt-4 pl-7 pr-7 pb-9">
                <table class="min-w-full bg-white border-2 border-gray-300">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">ID</th>
                            <th class="py-3 px-6 text-left">Age</th>
                            <th class="py-3 px-6 text-left">Plan</th>
                            <th class="py-3 px-6 text-left">Term</th>
                            <th class="py-3 px-6 text-left">Premium</th>
                            <th class="py-3 px-6 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-semibold">
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="py-3 px-6">1</td>
                            <td class="py-3 px-6">30</td>
                            <td class="py-3 px-6">Basic Plan</td>
                            <td class="py-3 px-6">10 Years</td>
                            <td class="py-3 px-6">$100</td>
                            <td class="py-3 px-6">
                                <button class="text-blue-600 hover:underline">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>