<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>BLUE CHALCEDONY MANAGEMENT SYSTEM</title>
</head>
<body class="bg-gray-100 p-6 border border-gray-300">
    <div class="container mx-auto max-w-9xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-4xl font-semibold mb-4">Sub-Unit Production Report</h2>
        
        <!-- Year and Month Selection Section -->
        <div class="container mx-auto rounded-md shadow-sm bg-blue-900 border pt-2 pb-2 mb-4 flex justify-center space-x-2 items-center">
            <select id="yearSelect" class="border border-gray-300 rounded-md p-2 w-80">
                <option value="10">2025</option>
                <option value="25">2024</option>
                <option value="50">2023</option>
                <option value="100">2022</option>
                <option value="10">2021</option>
                <option value="10">2020</option>
                <option value="25">2019</option>
            </select>
            <select id="monthSelect" class="border border-gray-300 rounded-md p-2 w-80">
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
        </div>

        <div class="pb-5 p-4 bg-white rounded-md shadow-md">
        
        <!-- Show Entries and Search Section -->
        <div class="mb-4 flex justify-between items-center space-x-4">
            <div class="flex items-center space-x-2">
                <label for="entries" class="text-sm text-gray-600">Show entries:</label>
                <select id="entries" class="border border-gray-300 rounded-md p-2">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

            
            <div class="flex items-center space-x-2">
                <label for="search" class="text-sm text-gray-600">Search:</label>
                <input type="text" id="search" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
            </div>
        </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal ">
                            <th class="py-3 px-6 text-left">Branch</th>
                            <th class="py-3 px-6 text-left">Unit</th>
                            <th class="py-3 px-6 text-left">Sub-unit</th>
                            <th class="py-3 px-6 text-left">Issued</th>
                            <th class="py-3 px-6 text-left">Pending</th>
                            <th class="py-3 px-6 text-left">Total</th>
                            <th class="py-3 px-6 text-left">CC</th>
                            <th class="py-3 px-6 text-left">CC P.Y</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="py-3 px-6">BCDQ</td>
                            <td class="py-3 px-6">A001</td>
                            <td class="py-3 px-6">Finance</td>
                            <td class="py-3 px-6">Accounting</td>
                            <td class="py-3 px-6">Payroll</td>
                            <td class="py-3 px-6">John Doe</td>
                            <td class="py-3 px-6">100</td>
                            <td class="py-3 px-6">20</td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100 ">
                            <td class="py-3 px-6">BCDQ</td>
                            <td class="py-3 px-6">A002</td>
                            <td class="py-3 px-6">HR</td>
                            <td class="py-3 px-6">Recruitment</td>
                            <td class="py-3 px-6">Talent Acquisition</td>
                            <td class="py-3 px-6">Jane Smith</td>
                            <td class="py-3 px-6">80</td>
                            <td class="py-3 px-6">10</td>
                        </tr>
                        <!-- Add more rows as needed -->

                        <tr class="bg-gray-200 font-bold">
                            <td colspan="6" class="py-3 px-6 text-left">Overall Total</td>
                            <td class="py-3 px-6">180</td>  <!-- Sum of "Issued" -->
                            <td class="py-3 px-6">30</td>   <!-- Sum of "Pending" -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>

        <!-- Pagination Section - Aligned to the Right -->
        <div class="flex justify-end items-center mt-4 space-x-2 ml-auto">
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
