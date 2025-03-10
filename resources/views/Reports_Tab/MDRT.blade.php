<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>BLUE CHALCEDONY MANAGEMENT SYSTEM</title>
</head>
<body class="bg-gray-100 p-6 border border-gray-300">
    <div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-4xl font-semibold mb-4">MDRT Tracker</h2>
        
        <h1 class="container mx-auto max-w-8xl bg-blue-900 p-2 rounded-l rounded-r shadow-md mb-3">
        <p class="ml-2 text-yellow-300 hover:underline hover:text-white">Switch to YTD</p> </h1>
        

        <div class="mb-4 p-3 bg-white rounded-md shadow-md">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Policy No.</th>
                        <th class="py-3 px-6 text-left">Client</th>
                        <th class="py-3 px-6 text-left">Mode</th>
                        <th class="py-3 px-6 text-left">Effectivity</th>
                        <th class="py-3 px-6 text-left">JAN</th>
                        <th class="py-3 px-6 text-left">FEB</th>
                        <th class="py-3 px-6 text-left">MAR</th>
                        <th class="py-3 px-6 text-left">APR</th>
                        <th class="py-3 px-6 text-left">MAY</th>
                        <th class="py-3 px-6 text-left">JUN</th>
                        <th class="py-3 px-6 text-left">JUL</th>
                        <th class="py-3 px-6 text-left">AUG</th>
                        <th class="py-3 px-6 text-left">SEP</th>
                        <th class="py-3 px-6 text-left">OCT</th>
                        <th class="py-3 px-6 text-left">NOV</th>
                        <th class="py-3 px-6 text-left">DEC</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-semibold">
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6">MONTHLY TOTAL</td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                        <td class="py-3 px-6">0.00</td>
                    </tr>
                    <!-- Overall summary row -->
                    <tr class="font-semibold">
                        <td class="py-3 px-6" colspan="15">ASSUMED TOTAL FYP</td>
                        <td class="py-3 px-6">0.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>

<!-- Pagination Section - Aligned to the Right -->
<div class="flex justify-end items-center mt-4 space-x-2 ml-auto">
            <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 text-sm" id="previousBtn">Previous</button>

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

    </div>
</body>
</html>