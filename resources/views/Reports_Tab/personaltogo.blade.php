<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Personal To Go</title>
</head>

    <body class="bg-gray-100 p-6 border border-gray-300">
    <div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-4xl font-semibold mb-4">Personal To Go</h2>

        <div class="mb-4 p-4 bg-blue-900 rounded-md flex justify-between items-center">
            <h2 class="text-lg font-semibold text-yellow-300">Personal Monitoring</h2>
                <a class="px-3 py-1 bg-white text-gray-700 rounded-md hover:bg-yellow-300 hover:text-white text-sm font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-6">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </a>
        </div>

        <div class="mb-4 p-4 bg-blue-200 rounded-md flex justify-between items-center">
            <h3 class="text-xs font-semibold text-gray-600">Please note that any results presented here are for informational purposes only and are not official. These results are subject to finance validation and may change based on further analysis or updates.</h3>
        </div>

        <!-- Tabs Section -->
        <div class="mb-4 p-4 bg-white rounded-md shadow-md">
        <div class="flex border-b border-gray-300 mb-4">
            <a href="#" class="tab border-r border-l py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-yellow-300 transition-all duration-300 active-tab" id="tab1">A-AC Agent</a>
            <a href="#" class="tab border-r border-l py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-yellow-300 transition-all duration-300" id="tab2">B-AC UM</a>
            <a href="#" class="tab border-r border-l py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-yellow-300transition-all duration-300" id="tab3">C-100K Club</a>
            <a href="#" class="tab border-r border-l py-2 px-4 text-gray-600 hover:text-black font-semibold border-b-2 border-transparent hover:border-yellow-300 transition-all duration-300" id="tab4">C-HO Incentives</a>
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
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="flex items-center">
                    <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
                    <input type="text" id="search" class="px-3 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
                </div>
            </div>

            <!-- Table Content (Initially for Tab 1) -->
            <div id="tableContent" class="overflow-x-auto">
                <!-- Dynamic Table Rows will be inserted here -->
            </div>
        </div>
</div>
        
        <!-- Pagination Section -->
        <div class="flex justify-end items-center mt-4 space-x-2">
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

    </div>

    <script>
        let currentPage = 1;
        const totalPages = 3; // Total number of pages (can be updated dynamically)
        const previousBtn = document.getElementById('previousBtn');
        const nextBtn = document.getElementById('nextBtn');
        const pageNumbersContainer = document.getElementById('pageNumbers');
        const tableContent = document.getElementById('tableContent');

        // Sample table data for each tab
        const tabData = {
            tab1: [
                { No: 1, Incentives: 'A001', Status: 'Finance', Parameters: 'Accounting', Current: 'Payroll', 'To Go': 'John Doe' },
                { No: 2, Incentives: 'A002', Status: 'HR', Parameters: 'Recruitment', Current: 'Talent Acquisition', 'To Go': 'Jane Smith' }
            ],
            tab2: [
                { No: 1, Incentives: 'B001', Status: 'Finance', Parameters: 'Budgeting', Current: 'Forecasting', 'To Go': 'Alice Brown' },
                { No: 2, Incentives: 'B002', Status: 'Sales', Parameters: 'Marketing', Current: 'Sales Strategy', 'To Go': 'Bob White' }
            ],
            tab3: [
                { No: 1, Incentives: 'C001', Status: 'Legal', Parameters: 'Contract Review', Current: 'Negotiation', 'To Go': 'Charlie Green' },
                { No: 2, Incentives: 'C002', Status: 'IT', Parameters: 'Software Development', Current: 'Testing', 'To Go': 'David Black' }
            ],
            tab4: [
                { No: 1, Incentives: 'D001', Status: 'Operations', Parameters: 'Logistics', Current: 'Supply Chain', 'To Go': 'Eve Blue' },
                { No: 2, Incentives: 'D002', Status: 'Support', Parameters: 'Customer Service', Current: 'Resolution', 'To Go': 'Frank Gold' }
            ]
        };

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

        // Change table content based on the selected tab
        function updateTableContent(tabKey) {
            const data = tabData[tabKey];
            let tableHTML = ` 
                <table class="min-w-full bg-white border border-gray-300 text-sm">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase">
                            <th class="py-2 px-4 text-left border-r border-gray-300">No.</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Incentives</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Status</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Parameters</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Current</th>
                            <th class="py-2 px-4 text-left">To Go</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">`;

            data.forEach(item => {
                tableHTML += `
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-2 px-4 border-r border-gray-300">${item.No}</td>
                        <td class="py-2 px-4 border-r border-gray-300">${item.Incentives}</td>
                        <td class="py-2 px-4 border-r border-gray-300">${item.Status}</td>
                        <td class="py-2 px-4 border-r border-gray-300">${item.Parameters}</td>
                        <td class="py-2 px-4 border-r border-gray-300">${item.Current}</td>
                        <td class="py-2 px-4">${item['To Go']}</td>
                    </tr>
                `;
            });

            tableHTML += `</tbody></table>`;
            tableContent.innerHTML = tableHTML;
        }

        // Event listeners for tabs
        document.getElementById('tab1').addEventListener('click', () => updateTableContent('tab1'));
        document.getElementById('tab2').addEventListener('click', () => updateTableContent('tab2'));
        document.getElementById('tab3').addEventListener('click', () => updateTableContent('tab3'));
        document.getElementById('tab4').addEventListener('click', () => updateTableContent('tab4'));

        // Initialize
        generatePageNumbers();
        updatePageInfo();
        updateTableContent('tab1'); // Show content for the first tab by default
    </script>

</body>
</html>
