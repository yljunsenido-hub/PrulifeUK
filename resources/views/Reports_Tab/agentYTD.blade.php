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
        <p class="text-4xl font-semibold mb-4">Agents Production Reports</p>
    
    <div class="container shadow-md mb-3 mb-4 p-2 bg-blue-900 rounded-md flex justify-between items-center">
        <h1 class="pl-2 text-l text-yellow-300 font-semibold ">Year-to-date</h1>
</div>
        
<div class="mb-4 p-4 bg-white rounded-md shadow-md">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
                    <select id="entries" class="border border-gray-300 rounded-md p-1 text-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="flex items-center">
                    <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
                    <input type="text" id="search" class="px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
                </div>
            </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Rank</th>
                        <th class="py-3 px-6 text-left">Code</th>
                        <th class="py-3 px-6 text-left">Branch</th>
                        <th class="py-3 px-6 text-left">Unit</th>
                        <th class="py-3 px-6 text-left">Sub-unit</th>
                        <th class="py-3 px-6 text-left">Coding</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">NAP</th>
                        <th class="py-3 px-6 text-left">Issued</th>
                        <th class="py-3 px-6 text-left">Pending</th>
                        <th class="py-3 px-6 text-left">Total</th>
                        <th class="py-3 px-6 text-left">CC</th>
                        <th class="py-3 px-6 text-left">Ave. SA</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <tr class="border-b border-gray-300 hover:bg-gray-100 ">
                        <td class="py-3 px-6 border-r">1</td>
                        <td class="py-3 px-6 border-r">A001</td>
                        <td class="py-3 px-6 border-r">Finance</td>
                        <td class="py-3 px-6 border-r">Accounting</td>
                        <td class="py-3 px-6 border-r">Payroll</td>
                        <td class="py-3 px-6 border-r">John Doe</td>
                        <td class="py-3 px-6 border-r">100</td>
                        <td class="py-3 px-6 border-r">20</td>
                        <td class="py-3 px-6 border-r">120</td>
                        <td class="py-3 px-6 border-r">CC1</td>
                        <td class="py-3 px-6 border-r">75%</td>
                        <td class="py-3 px-6 border-r">75%</td>
                        <td class="py-3 px-6 border-r">75%</td>
                    </tr>
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6 border-r">2</td>
                        <td class="py-3 px-6 border-r">A002</td>
                        <td class="py-3 px-6 border-r">HR</td>
                        <td class="py-3 px-6 border-r">Recruitment</td>
                        <td class="py-3 px-6 border-r">Talent Acquisition</td>
                        <td class="py-3 px-6 border-r">Jane Smith</td>
                        <td class="py-3 px-6 border-r">80</td>
                        <td class="py-3 px-6 border-r">10</td>
                        <td class="py-3 px-6 border-r">90</td>
                        <td class="py-3 px-6 border-r">CC2</td>
                        <td class="py-3 px-6 border-r">88%</td>
                        <td class="py-3 px-6 border-r">75%</td>
                        <td class="py-3 px-6 border-r">75%</td>
                    </tr>
                    <!-- Overall summary row -->
                    <tr class="bg-gray-200 text-black font-semibold">
                        <td class="py-3 px-6" colspan="7">Overall</td>
                        <td class="py-3 px-6">180</td>
                        <td class="py-3 px-6">30</td>
                        <td class="py-3 px-6">210</td>
                        <td class="py-3 px-6">-</td>
                        <td class="py-3 px-6">81.5%</td>
                        <td class="py-3 px-6">75%</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>

        <div class="mt-4 ml-3 mr-3 flex justify-between items-center">
            <div class="text-sm text-gray-600">
                Showing 1 to 10 of 489 entries
            </div>
            
<div class="flex justify-end items-center space-x-2 ml-auto">
            <div class="ml-4 flex space-x-2">
                <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 text-sm" id="previousBtn">Previous</button>
                <div class="mr-1 flex items-center space-x-2">
                    <div id="pageNumbers" class="flex space-x-1">
                        <!-- Page numbers will be dynamically inserted here -->
                    </div>
                </div>
                <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 text-sm" id="nextBtn">Next</button>
        </div>
    </div>

    <script>
        let currentPage = 1;
        const totalPages = 3; // Total number of pages (can be updated dynamically)
        const previousBtn = document.getElementById('previousBtn');
        const nextBtn = document.getElementById('nextBtn');
        const pageNumbersContainer = document.getElementById('pageNumbers');
        const tableContent = document.getElementById('tableContent');
        
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
    </script>

    </div>
</body>
</html>