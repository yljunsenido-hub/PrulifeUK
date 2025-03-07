<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Maintenance</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto max-w-7xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-4xl font-semibold mb-4">Sub-Unit Maintenance</h2>

        <!-- Create New Sub-Unit Button -->
        <div class="mb-4 p-4 bg-blue-200 rounded-md flex justify-between items-center">
            <h3 class="text-xs font-semibold text-gray-600">
                <a href="#" id="createNewSubUnit" class="text-base xl:text-blue-600 hover:text-blue-900 font-semibold">Create New Sub-Unit</a>
            </h3>
        </div>

        <!-- Table Section -->
        <div class="mb-4 p-4 bg-white rounded-md shadow-md">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                    <select id="entries" class="border border-gray-300 rounded-md p-1 text-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </div>

                <div class="flex items-center">
                    <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
                    <input type="text" id="search" class="px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
                </div>
            </div>

            <!-- Table Content -->
            <div id="tableContent" class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 text-sm">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600">
                            <th class="py-2 px-4 text-left border-r border-gray-300">ID</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Unit</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Sub-Unit</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Officer</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Status</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Date Promoted</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <!-- Example Row -->
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="py-2 px-4 border-r border-gray-300">1</td>
                            <td class="py-2 px-4 border-r border-gray-300">BLUE CHALCEDONY DIRECT</td>
                            <td class="py-2 px-4 border-r border-gray-300">TEAM JOCELYN FABIAN (DIRECT)</td>
                            <td class="py-2 px-4 border-r border-gray-300">70020068 - MERCIDIITA HILIARIO</td>
                            <td class="py-2 px-4 border-r border-gray-300">Active</td>
                            <td class="py-2 px-4 border-r border-gray-300">0000-00-00 00:00:00</td>
                            <td class="py-2 px-4 border-r border-gray-300 text-center">
                                <a href="#" class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-700">Edit</a>
                            </td>
                        </tr>
                        <!-- Repeat for other rows -->
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Pagination Section -->
        <div class="flex justify-end items-center mt-4 space-x-2">
            <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 text-sm" id="previousBtn">Previous</button>
            <div class="flex items-center space-x-2">
                <button class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">1</button>
                <button class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">2</button>
                <button class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">3</button>
            </div>
            <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 text-sm" id="nextBtn">Next</button>
        </div>
    </div>

    <script>
        document.getElementById('createNewSubUnit').addEventListener('click', function(event) {
            event.preventDefault();
            alert('Create New Sub-Unit functionality to be implemented.');
        });

        let currentPage = 1;
        const totalPages = 3;

        document.getElementById('previousBtn').addEventListener('click', function() {
            if (currentPage > 1) {
                currentPage--;
                updatePagination();
            }
        });

        document.getElementById('nextBtn').addEventListener('click', function() {
            if (currentPage < totalPages) {
                currentPage++;
                updatePagination();
            }
        });

        function updatePagination() {
            const pageNumbers = document.getElementById('pageNumbers');
            pageNumbers.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const pageButton = document.createElement('button');
                pageButton.textContent = i;
                pageButton.className = `px-2 py-1 rounded-md ${i === currentPage ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'}`;
                pageButton.addEventListener('click', function() {
                    currentPage = i;
                    updatePagination();
                });
                pageNumbers.appendChild(pageButton);
            }
        }

        updatePagination();
    </script>
</body>
</html>