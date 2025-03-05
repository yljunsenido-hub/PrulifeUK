<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Recruitment Maintenance</title>
</head>
<body class="bg-gray-100 p-6 border border-gray-300">

    <div class="container mx-auto max-w-7xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Recruitment Maintenance</h2>

        <div class="mb-4 p-4 bg-gray-500 rounded-md flex justify-between items-center">
            <a href="your_link_here" class="block mb-1 p-1 text-white font-semibold underline hover:text-blue-500">Create New Recruit</a>
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

            <!-- Table Content -->
            <div id="tableContent" class="overflow-x-auto">
                <!-- Dynamic Table Rows will be inserted here -->
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
        let entriesPerPage = 10; // Default value
        const previousBtn = document.getElementById('previousBtn');
        const nextBtn = document.getElementById('nextBtn');
        const pageNumbersContainer = document.getElementById('pageNumbers');
        const tableContent = document.getElementById('tableContent');
        const entriesSelect = document.getElementById('entries');
        const searchInput = document.getElementById('search');

        // Sample table data
        const tableData = [
            { No: 1, Incentives: 'A001', Unit: 'Finance', Recruiter: 'John Doe', Progress: 80, ForApproval: 'Yes' },
            { No: 2, Incentives: 'A002', Unit: 'HR', Recruiter: 'Jane Smith', Progress: 70, ForApproval: 'No' },
            { No: 3, Incentives: 'B001', Unit: 'Sales', Recruiter: 'Alice Brown', Progress: 85, ForApproval: 'Yes' },
            { No: 4, Incentives: 'B002', Unit: 'Marketing', Recruiter: 'Bob White', Progress: 90, ForApproval: 'No' },
            { No: 5, Incentives: 'C001', Unit: 'Legal', Recruiter: 'Charlie Green', Progress: 75, ForApproval: 'Yes' },
            { No: 6, Incentives: 'C002', Unit: 'Support', Recruiter: 'David Black', Progress: 60, ForApproval: 'No' },
            { No: 7, Incentives: 'D001', Unit: 'Operations', Recruiter: 'Eve Blue', Progress: 95, ForApproval: 'Yes' },
            { No: 8, Incentives: 'D002', Unit: 'Finance', Recruiter: 'Frank Gold', Progress: 80, ForApproval: 'No' },
            { No: 9, Incentives: 'E001', Unit: 'Sales', Recruiter: 'Grace Hill', Progress: 70, ForApproval: 'Yes' },
            { No: 10, Incentives: 'E002', Unit: 'HR', Recruiter: 'Hannah Moore', Progress: 90, ForApproval: 'No' },
            { No: 11, Incentives: 'F001', Unit: 'IT', Recruiter: 'Ivy Lee', Progress: 85, ForApproval: 'Yes' },
            { No: 12, Incentives: 'F002', Unit: 'Operations', Recruiter: 'Jack Adams', Progress: 80, ForApproval: 'No' },
            { No: 13, Incentives: 'G001', Unit: 'Marketing', Recruiter: 'Kaitlyn Rivers', Progress: 75, ForApproval: 'Yes' },
            { No: 14, Incentives: 'G002', Unit: 'Support', Recruiter: 'Liam Carter', Progress: 60, ForApproval: 'No' }
        ];

        // Filter table data based on search input
        function filterTableData() {
            const searchTerm = searchInput.value.toLowerCase();
            return tableData.filter(item =>
                Object.values(item).some(value => value.toString().toLowerCase().includes(searchTerm))
            );
        }

        // Dynamically generate page numbers
        function generatePageNumbers() {
            pageNumbersContainer.innerHTML = '';  // Clear previous page numbers
            const pageCount = Math.ceil(filteredData.length / entriesPerPage);
            for (let i = 1; i <= pageCount; i++) {
                const pageButton = document.createElement('button');
                pageButton.textContent = i;
                pageButton.classList.add('px-3', 'py-1', 'border', 'border-gray-300', 'rounded-md', 'hover:bg-gray-400', 'text-sm');
                pageButton.addEventListener('click', () => goToPage(i));
                pageNumbersContainer.appendChild(pageButton);
            }
        }

        // Update page numbers and highlight the current page
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
            renderTable();
        }

        // Handle Previous and Next Button actions
        previousBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                updatePageInfo();
                renderTable();
            }
        });

        nextBtn.addEventListener('click', () => {
            const totalPages = Math.ceil(filteredData.length / entriesPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                updatePageInfo();
                renderTable();
            }
        });

        // Event listener for entries per page selection
        entriesSelect.addEventListener('change', (e) => {
            entriesPerPage = parseInt(e.target.value);
            renderTable();
        });

        // Render the table content
        function renderTable() {
            filteredData = filterTableData();
            const start = (currentPage - 1) * entriesPerPage;
            const end = currentPage * entriesPerPage;
            const pageData = filteredData.slice(start, end);

            let tableHTML = `
                <table class="min-w-full bg-white border border-gray-300 text-sm">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600">
                            <th class="py-2 px-4 text-left border-r border-gray-300">ID</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Incentives</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Unit / Sub-unit</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Recruiter</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Progress Rating (%)</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300">Approvals</th>
                            <th class="py-2 px-4 text-left border-r border-gray-300 text-center w-auto">Actions</th>    
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">`;

            pageData.forEach(item => {
                tableHTML += `
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-2 px-4 border-r border-gray-300">${item.No}</td>
                        <td class="py-2 px-4 border-r border-gray-300">${item.Incentives}</td>
                        <td class="py-2 px-4 border-r border-gray-300">${item.Unit}</td>
                        <td class="py-2 px-4 border-r border-gray-300">${item.Recruiter}</td>
                        <td class="py-2 px-4 border-r border-gray-300">${item.Progress}</td>
                        <td class="py-2 px-4 border-r border-gray-300">${item.ForApproval}</td>

                        <td class="py-4 px-5 space-x-2 text-center w-auto">

                        <!-- View Progress Button with Image -->

                                <a href="view-progress-link/${item.Incentives}"     class="px-3 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700" target="_blank">
                                <img src="path_to_image.png" alt="View Progress Icon" class="h-4 w-4 inline-block" />
                            </a>

                        <!-- Edit Recruit Info Button with Image -->

                                <a href="edit-recruit-info/${item.Incentives}" class="px-3 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-700" target="_blank">
                                <img src="path_to_image.png" alt="Edit Recruit Info Icon" class="h-4 w-4 inline-block" />
                            </a>
                        </td>

                    </tr>
                `;
            });

            tableHTML += `</tbody></table>`;
            tableContent.innerHTML = tableHTML;
            generatePageNumbers();
        }

        // Initialize
        renderTable();
    </script>

</body>
</html>
