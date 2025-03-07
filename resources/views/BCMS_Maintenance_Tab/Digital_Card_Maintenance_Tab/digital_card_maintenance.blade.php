<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Card Maintenance</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto max-w-7xl bg-white p-6 rounded-lg shadow-md mt-10">
        <h2 class="text-4xl font-semibold mb-4">Digital Card Maintenance</h2>

        <div class="mb-4 p-4 bg-white rounded-md shadow-md">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                    <select id="entries" class="border border-gray-300 rounded-md p-1 text-sm">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                    <span class="ml-2 text-sm text-gray-600">entries</span>
                </div>
                <div class="flex items-center">
                    <input type="text" placeholder="Search..." class="px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm">
                    <button class="bg-blue-500 text-white rounded px-4 py-1 ml-2 hover:bg-blue-700">+ Add</button>
                </div>
            </div>

            <div id="tableContent" class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 text-sm">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600">
                            <th class="py-2 px-4 text-left border-r border-gray-300">Card_ID</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Agent</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Status</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="border px-4 py-2">152</td>
                            <td class="border px-4 py-2">201 - CORDOVA, ALFREN</td>
                            <td class="border px-4 py-2">Active</td>
                            <td class="border px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update</button>
                                <button class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Unlink</button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="border px-4 py-2">52</td>
                            <td class="border px-4 py-2">202 - TORRES, AJ</td>
                            <td class="border px-4 py-2">Active</td>
                            <td class="border px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update</button>
                                <button class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Unlink</button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">70010293 - Fabian, Ocel</td>
                            <td class="border px-4 py-2">Active</td>
                            <td class="border px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update</button>
                                <button class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Unlink</button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="border px-4 py-2">2</td>
                            <td class="border px-4 py-2">70024953 - DEL MUNDO, ISRAEL</td>
                            <td class="border px-4 py-2">Active</td>
                            <td class="border px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update</button>
                                <button class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Unlink</button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="border px-4 py-2">6</td>
                            <td class="border px-4 py-2">70025613 - PUNONGBAYAN, MARIA LOURDES</td>
                            <td class="border px-4 py-2">Active</td>
                            <td class="border px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update</button>
                                <button class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Unlink</button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="border px-4 py-2">8</td>
                            <td class="border px-4 py-2">70033873 - CLUTARIO, EULALVI SAM</td>
                            <td class="border px-4 py-2">Active</td>
                            <td class="border px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update</button>
                                <button class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Unlink</button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="border px-4 py-2">4</td>
                            <td class="border px-4 py-2">70038966 - CERIOLA, JEANEROSE</td>
                            <td class="border px-4 py-2">Active</td>
                            <td class="border px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update</button>
                                <button class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Unlink</button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="border px-4 py-2">3</td>
                            <td class="border px-4 py-2">70039569 - FABIAN, JOSEFINA</td>
                            <td class="border px-4 py-2">Active</td>
                            <td class="border px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update</button>
                                <button class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Unlink</button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="border px-4 py-2">5</td>
                            <td class="border px-4 py-2">70046799 - VILLAUZ, TEDDY</td>
                            <td class="border px-4 py-2">Active</td>
                            <td class="border px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update</button>
                                <button class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Unlink</button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="border px-4 py-2">9</td>
                            <td class="border px-4 py-2">70048843 - FRAYCO JR., NESTOR</td>
                            <td class="border px-4 py-2">Active</td>
                            <td class="border px-4 py-2 text-center">
                                <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update</button>
                                <button class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Unlink</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="flex justify-between mt-4">
            <span class="text-gray-700">Showing 1 to 10 of 15 entries</span>
            <div>
                <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400" disabled>Previous</button>
                <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">1</button>
                <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">2</button>
                <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Next</button>
            </div>
        </div>
    </div>
</body>
</html>