<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>BLUE CHALCEDONY MANAGEMENT SYSTEM</title>
</head>

<body class="bg-gray-100 p-6 border border-gray-300">

    <!-- Main Container -->
    <div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md mb-3">

        <!-- Header Section -->
        <p class="text-4xl font-semibold mb-4">EASY REPORTS</p>

        <!-- Switch to YTD Section -->
        <h1 class="container mx-auto max-w-8xl bg-blue-900 p-2 rounded-l rounded-r shadow-md mb-3">
            <p class="ml-2 text-yellow-300 hover:underline hover:text-white">Switch to YTD</p>
        </h1>

        <!-- Table Controls Section -->
        <div class="container mx-auto max-w-8xl bg-white-100 p-5 rounded-l rounded-r shadow-md mb-2 ">
            
            <!-- Entries and Search Controls -->
            <div class="mb-1 flex justify-between items-center pb-3">

                <!-- Entries Dropdown -->
                <div class="flex items-center">
                    <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                    <select id="entries" class="border border-gray-300 rounded-md p-2 py-1 mr-4">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <!-- Search Input -->
                <div class="flex items-center px-2 py-2">
                    <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
                    <input type="text" id="search" class="px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
                </div>
            </div>

            <!-- Table Section -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">#</th>
                            <th class="py-3 px-6 text-left">Title</th>
                            <th class="py-3 px-6 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <!-- Row 1 -->
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="py-3 px-6">1</td>
                            <td class="py-3 px-6">TOP 50 AGENTS (IN TERMS OF RECRUIT)</td>
                            <td class="py-3 px-6">
                                <a href="#" class="text-blue-500 hover:underline">VIEW</a> |
                                <a href="#" class="text-blue-500 hover:underline">PLAIN VIEW</a> |
                                <a href="#" class="text-blue-500 hover:underline">DOWNLOAD</a>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="py-3 px-6">2</td>
                            <td class="py-3 px-6">BRANCH TOP 50 LIFE SAVERS (CASE COUNT)</td>
                            <td class="py-3 px-6">
                                <a href="#" class="text-blue-500 hover:underline">VIEW</a> |
                                <a href="#" class="text-blue-500 hover:underline">PLAIN VIEW</a> |
                                <a href="#" class="text-blue-500 hover:underline">DOWNLOAD</a>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination Section -->
        <div class="flex justify-end items-center mt-4 space-x-2 ml-auto">
            <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 text-sm" id="previousBtn">Previous</button>

            <!-- Page Numbers Container -->
            <div class="mr-1 flex items-center space-x-2">
                <div id="pageNumbers" class="flex space-x-1">
                    <!-- Page numbers will be dynamically inserted here -->
                </div>
            </div>

            <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 text-sm" id="nextBtn">Next</button>
        </div>

    </div>

    <!-- JavaScript Section -->
    <script>
        let currentPage = 1;
        const totalPages = 3; // Total number of pages (can be updated dynamically)
        const previousBtn = document.getElementById('previousBtn');
        const nextBtn = document.getElementById('nextBtn');
        const pageNumbersContainer = document.getElementById('pageNumbers');

        // Dynamically generate page numbers
        function generatePageNumbers() {
            pageNumbersContainer.innerHTML = '';  // Clear previous page numbers
            for (let i = 1; i <= totalPages; i++) {
                const pageButton = document.createElement('button');
                pageButton.textContent = i;
                pageButton.classList.add('px-3', 'py-1', 'border', 'border-gray-300', 'rounded-md', 'hover:bg-gray-400', 'text-sm');
                pageButton.addEventListener('click', () => goToPage(i));
                pageNumbersContainer.appendChild(pageButton);
            }
        }

        // Update page numbers and highlight current page
        function updatePageInfo() {
            const pageButtons = document.querySelectorAll('#pageNumbers button');
            pageButtons.forEach(button => {
                button.classList.remove('bg-gray-400', 'text-white'); // Remove highlight from all buttons
                if (parseInt(button.textContent) === currentPage) {
                    button.classList.add('bg-gray-400', 'text-white'); // Highlight the current page
                }
            });
        }

        // Go to a selected page
        function goToPage(page) {
            currentPage = page;
            updatePageInfo();
        }

        // Handle Previous and Next Button actions
        previousBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                updatePageInfo();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentPage < totalPages) {
                currentPage++;
                updatePageInfo();
            }
        });

        // Generate the initial page numbers on page load
        window.onload = generatePageNumbers;
    </script>

</body>

</html>
