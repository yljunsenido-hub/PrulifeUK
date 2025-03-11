<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poster Maintenance</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Sticky Navbar */
        nav {
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        /* Sidebar Style */
        .sidebar {
            position: fixed;
            top: 72px;
            left: 0;
            width: 260px;
            height: calc(100% - 72px);
            background-color: #1f2937;
            color: white;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            padding: 20px;
            transform: translateX(-100%);
            opacity: 0;
            visibility: hidden;
            transition: transform 0.4s ease, opacity 0.1s ease;
            overflow-y: auto;
        }

        .sidebar.show {
            transform: translateX(0);
            opacity: 1;
            visibility: visible;
        }

        /* Highlight menu items on hover */
        .menu-item:hover .menu-text {
            color: #60a5fa;
        }

        /* Custom scrollbar */
        .sidebar::-webkit-scrollbar {
            width: 8px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: #dbd8d8;
            border-radius: 10px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: #6b7280;
        }

        /* Dropdown Styles */
        .dropdown {
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            display: block;
        }

        .dropdown.show {
            max-height: 500px;
            opacity: 1;
        }

        /* Highlight dropdown items on hover */
        .dropdown a:hover {
            background-color: #4b5563;
            color: #ffffff;
        }

        /* Main content styles */
        .content {
            transition: margin-left 0.4s ease;
            margin: 0 auto;
            max-width: 1200px; /* Set a max-width for the content */
            padding: 10px 20px; /* Add padding to the sides */
            margin-top: 15px;
            margin-left: 0; /* Default margin */
        }

        .content.shift {
            margin-left: 260px; /* Adjusted to match sidebar width */
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Sticky Navigation Bar -->
    <nav class="bg-gray-800 p-4 flex justify-between items-center">
        <div class="flex items-center">
            <button class="mr-2 bg-transparent text-white p-2 rounded-md hover:bg-gray-700" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>
            <img src="https://placehold.co/50x50" alt="Blue Chalcedony Quartz logo" class="h-10 w-10 mr-2">
            <span class="text-white text-lg font-semibold">BLUE CHALCEDONY QUARTZ BRANCH</span>
        </div>
        <div class="flex items-center space-x-6">
            <div class="relative">
                <input type="text" placeholder="Search for..." class="p-1 rounded-md text-sm">
                <button class="absolute right-0 top-0 mt-1 mr-2">
                    <i class="fas fa-search text-blue-500"></i>
                </button>
            </div>
            <i class="fas fa-bell text-white px-0"></i>
            <i class="fas fa-user text-white px-2.5"></i>
        </div>
    </nav>
<!-- Sidebar -->
    <div class="sidebar fixed top-18 left-0 w-64 h-[calc(100%-72px)] bg-gray-800 text-white shadow-lg z-50 p-5 transform -translate-x-full opacity-0 visibility-hidden transition-transform duration-400 ease-in-out overflow-y-auto" id="sidebar">
    <ul>
        <li class="menu-item text-white w-full text-left py-1 pb-2">
            <span class="text-yellow-200">Activities</span>
        </li>
        <li class="menu-item">
            <button class="text-white w-full text-left py-1 pb-4" onclick="toggleDropdown('eventsDropdown')">
                <span class="menu-text">Events</span> <i class="fas fa-chevron-down px-2"></i>
            </button>
            <ul class="dropdown max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-out" id="eventsDropdown">
                <li><a href="#" class="block pl-4 py-1">Upcoming Events</a></li>
                <li><a href="#" class="block pl-4 py-1">My Events</a></li>
                <li><a href="#" class="block pl-4 py-1">Event Maintenance</a></li>
            </ul>
        </li>
        <li class="menu-item text-white w-full text-left py-1 pb-2">
            <span class="text-yellow-200">Operations</span>
        </li>
        <li class="menu-item">
            <button class="text-white w-full text-left py-1" onclick="toggleDropdown('leadsDropdown')">
                <span class="menu-text">Leads & Cases</span> <i class="fas fa-chevron-down px-2"></i>
            </button>
            <ul class="dropdown max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-out" id="leadsDropdown">
                <li><a href="#" class="block pl-4 py-1">Submitted Cases</a></li>
                <li><a href="#" class="block pl-4 py-1">Issued Cases</a></li>
                <li><a href="#" class="block pl-4 py-1">Outreq Cases</a></li>
                <li><a href="#" class="block pl-4 py-1">Declined/Postponed Cases</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <button class="text-white w-full text-left py-1" onclick="toggleDropdown('newBusinessDropdown')">
                <span class="menu-text">New Business</span> <i class="fas fa-chevron-down px-2"></i>
            </button>
            <ul class="dropdown max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-out" id="newBusinessDropdown">
                <li><a href="#" class="block pl-4 py-1">Submission Approval</a></li>
                <li><a href="#" class="block pl-4 py-1">New Business Maintenance</a></li>
                <li><a href="#" class="block pl-4 py-1">Issued Cases</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <button class="text-white w-full text-left py-1" onclick="toggleDropdown('reportsDropdown')">
                <span class="menu-text">Reports</span> <i class="fas fa-chevron-down px-2"></i>
            </button>
            <ul class="dropdown max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-out" id="reportsDropdown">
                <li><a href="#" class="block pl-4 py-1">Agent MTD</a></li>
                <li><a href="#" class="block pl-4 py-1">Agent YTD</a></li>
                <li><a href="#" class="block pl-4 py-1">Sub-Unit Summary</a></li>
                <li><a href="#" class="block pl-4 py-1">Unit Summary</a></li>
                <li><a href="#" class="block pl-4 py-1">Branch Summary</a></li>
                <li><a href="#" class="block pl-4 py-1">Branch Honor Rolls</a></li>
                <li><a href="#" class="block pl-4 py-1">Unit Honor Rolls</a></li>
                <li><a href="#" class="block pl-4 py-1">Custom Group</a></li>
                <li><a href="#" class="block pl-4 py-1">Personal To Go's (BETA)</a></li>
                <li><a href="#" class="block pl-4 py-1">Qualifiers (BETA)</a></li>
                <li><a href="#" class="block pl-4 py-1">MDRT Tracker</a></li>
                <li><a href="#" class="block pl-4 py-1">Easy Reports</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <button class="text-white w-full text-left py-1" onclick="toggleDropdown('marketingDropdown')">
                <span class="menu-text">Marketing</span> <i class="fas fa-chevron-down px-2"></i>
            </button>
            <ul class="dropdown max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-out" id="marketingDropdown">
                <li><a href="#" class="block pl-4 py-1">Poster Templates</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <button class="text-white w-full text-left py-1" onclick="toggleDropdown('proposalBankDropdown')">
                <span class="menu-text">Proposal Bank</span> <i class="fas fa-chevron-down px-2"></i>
            </button>
            <ul class="dropdown max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-out" id="proposalBankDropdown">
                <li><a href="#" class="block pl-4 py-1">Proposal Search</a></li>
                <li><a href="#" class="block pl-4 py-1">Proposal List</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <button class="text-white w-full text-left py-1" onclick="toggleDropdown('recruitmentDropdown')">
                <span class="menu-text">Recruitment</span> <i class="fas fa-chevron-down px-2"></i>
            </button>
            <ul class="dropdown max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-out" id="recruitmentDropdown">
                <li><a href="#" class="block pl-4 py-1">Recruit</a></li>
                <li><a href="#" class="block pl-4 py-1">Recruitment Process</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <button class="text-white w-full text-left py-1" onclick="toggleDropdown('appointmentsDropdown')">
                <span class="menu-text">Appointments</span>
            </button>
        </li>
        <li class="menu-item">
            <button class="text-white w-full text-left py-1" onclick="toggleDropdown('bcmsDropdown')">
                <span class="menu-text">BCMS Maintenance</span> <i class="fas fa-chevron-down px-2"></i>
            </button>
            <ul class="dropdown max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-out" id="bcmsDropdown">
                <li><a href="#" class="block pl-4 py-1">Poster Template Maintenance</a></li>
                <li><a href="#" class="block pl-4 py-1">Poster Maintenance</a></li>
                <li><a href="#" class="block pl-4 py-1">Agent Maintenance</a></li>
                <li><a href="#" class="block pl-4 py-1">Unit Maintenance</a></li>
                <li><a href="#" class="block pl-4 py-1">Sub-Unit Maintenance</a></li>
                <li><a href="#" class="block pl-4 py-1">Digital Card Maintenance</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <button class="text-white w-full text-left py-1" onclick="toggleDropdown('branchOperationsDropdown')">
                <span class="menu-text">Branch Operations Utility</span> <i class="fas fa-chevron-down px-2"></i>
            </button>
            <ul class="dropdown max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-out" id="branchOperationsDropdown">
                <li><a href="#" class="block pl-4 py-1">Upload Issued</a></li>
                <li><a href="#" class="block pl-4 py-1">Upload NAP</a></li>
                <li><a href="#" class="block pl-4 py-1">Upload Due List</a></ li>
                <li><a href="#" class="block pl-4 py-1">Upload Batch Photos</a></li>
                <li><a href="#" class="block pl-4 py-1">Update Submission/Policy Record</a></li>
            </ul>
        </li>
    </ul>
</div>

    <!-- Main Content -->
    <div class="container w-full p-8 content" id="main-content">

        <div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-4xl font-semibold mb-4">Agent Group Maintenance</h2>

        <!-- Personal Monitoring Section -->
        <div class="mb-4 p-4 bg-blue-900 rounded-md flex justify-between items-center">
            <h2 class="text-lg font-semibold text-yellow-300">Personal Monitoring</h2>
            <a class="px-3 py-1 bg-white text-gray-700 rounded-md hover:bg-yellow-300 hover:text-white text-sm font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-6">
                    <path d="M12 5v14M5 12h14"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
            </a>
        </div>

        <!-- Table Section -->
        <div class="p-3 bg-white rounded-md shadow-md">
            <div class="mb-4 flex items-center justify-between">
                <!-- Entries Dropdown -->
                <div class="flex items-center">
                    <label for="entries" class="mr-2 text-sm text-gray-600 py-1">Show entries:</label>
                    <select id="entries" class="border border-gray-300 rounded-md p-2 px-1 py-1">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <!-- Search Input -->
                <div class="flex items-center">
                    <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
                    <input type="text" id="search" class="px-4 py-1 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
                </div>
            </div>

            <!-- Data Table -->
            <div class="overflow-x-auto">
                <table id="dataTable" class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200 text-black text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Group Name</th>
                            <th class="py-3 px-6 text-left">Tracking Start</th>
                            <th class="py-3 px-6 text-left">Tracking End</th>
                            <th class="py-3 px-6 text-left">Action</th>
                        </tr>
                    </thead>

                    <tbody id="tableBody" class="text-gray-600 text-sm font-light">
                        <!-- Dynamic content will be inserted here -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination Section -->
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

    <script>
        // Example data, replace this with your actual data source
        const data = [];
        const tableBody = document.getElementById('tableBody');

        // Check if data exists
        if (data.length === 0) {
            tableBody.innerHTML = `<tr><td colspan="4" class="py-3 px-6 text-center">No data available</td></tr>`;
        } else {
            // Populate table with actual data if it exists
            data.forEach(item => {
                const row = document.createElement('tr');
                row.classList.add('border-b', 'border-gray-300', 'hover:bg-gray-100');

                row.innerHTML = `
                    <td class="py-3 px-6">${item.groupName}</td>
                    <td class="py-3 px-6">${item.trackingStart}</td>
                    <td class="py-3 px-6">${item.trackingEnd}</td>
                    <td class="py-3 px-6">${item.action}</td>
                `;
                tableBody.appendChild(row);
            });
        }
    </script>

    <script>
        function calculateTotalsAndAverages() {
            const table = document.getElementById('dataTable');
            const rows = table.querySelectorAll('tbody tr');

            let totalIssued = 0, totalPending = 0, totalAmount = 0, totalAA = 0, totalMP = 0, totalAR = 0, totalCC = 0, totalCP = 0, totalAVE_CS = 0, totalAVE_SA = 0, totalNR = 0;
            const rowCount = rows.length;

            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                totalIssued += parseFloat(cells[2].textContent.replace(/,/g, '')) || 0;
                totalPending += parseFloat(cells[3].textContent.replace(/,/g, '')) || 0;
                totalAmount += parseFloat(cells[4].textContent.replace(/,/g, '')) || 0;
                totalAA += parseFloat(cells[5].textContent) || 0;
                totalMP += parseFloat(cells[6].textContent) || 0;
                totalAR += parseFloat(cells[7].textContent.replace('%', '')) || 0;
                totalCC += parseFloat(cells[8].textContent) || 0;
                totalCP += parseFloat(cells[9].textContent) || 0;
                totalAVE_CS += parseFloat(cells[10].textContent.replace(/,/g, '')) || 0;
                totalAVE_SA += parseFloat(cells[11].textContent.replace(/,/g, '')) || 0;
                totalNR += parseFloat(cells[12].textContent) || 0;
            });

            // Calculate Averages
            const avgIssued = totalIssued / rowCount;
            const avgPending = totalPending / rowCount;
            const avgAmount = totalAmount / rowCount;
            const avgAA = totalAA / rowCount;
            const avgMP = totalMP / rowCount;
            const avgAR = totalAR / rowCount;
            const avgCC = totalCC / rowCount;
            const avgCP = totalCP / rowCount;
            const avgAVE_CS = totalAVE_CS / rowCount;
            const avgAVE_SA = totalAVE_SA / rowCount;
            const avgNR = totalNR / rowCount;

            // Insert totals and averages into the table
            document.getElementById('totalIssued').textContent = totalIssued.toLocaleString();
            document.getElementById('totalPending').textContent = totalPending.toLocaleString();
            document.getElementById('totalAmount').textContent = totalAmount.toLocaleString();
            document.getElementById('totalAA').textContent = totalAA.toFixed(2);
            document.getElementById('totalMP').textContent = totalMP.toFixed(2);
            document.getElementById('totalAR').textContent = totalAR.toFixed(2) + '%';
            document.getElementById('totalCC').textContent = totalCC.toFixed(2);
            document.getElementById('totalCP').textContent = totalCP.toFixed(2);
            document.getElementById('totalAVE_CS').textContent = totalAVE_CS.toLocaleString();
            document.getElementById('totalAVE_SA').textContent = totalAVE_SA.toLocaleString();
            document.getElementById('totalNR').textContent = totalNR.toFixed(2);

            document.getElementById('averageIssued').textContent = avgIssued.toLocaleString();
            document.getElementById('averagePending').textContent = avgPending.toLocaleString();
            document.getElementById('averageAmount').textContent = avgAmount.toLocaleString();
            document.getElementById('averageAA').textContent = avgAA.toFixed(2);
            document.getElementById('averageMP').textContent = avgMP.toFixed(2);
            document.getElementById('averageAR').textContent = avgAR.toFixed(2) + '%';
            document.getElementById('averageCC').textContent = avgCC.toFixed(2);
            document.getElementById('averageCP').textContent = avgCP.toFixed(2);
            document.getElementById('averageAVE_CS').textContent = avgAVE_CS.toLocaleString();
            document.getElementById('averageAVE_SA').textContent = avgAVE_SA.toLocaleString();
            document.getElementById('averageNR').textContent = avgNR.toFixed(2);
        }

        // Run the calculation when the page is loaded
        window.onload = calculateTotalsAndAverages;
    </script>

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

   

    <script>
        // Function to toggle the sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const content = document.getElementById("main-content");
            sidebar.classList.toggle("show"); // Show or hide the sidebar
            content.classList.toggle("shift"); // Shift content when sidebar is visible
        }

        let currentOpenDropdown = null;

        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
// Close the currently open dropdown if it's not the one being clicked
            if (currentOpenDropdown && currentOpenDropdown !== dropdown) {
                currentOpenDropdown.classList.remove('show');
                currentOpenDropdown.style.maxHeight = '0'; // Reset max-height
                currentOpenDropdown.style.opacity = '0'; // Reset opacity
            }

            // Toggle the clicked dropdown
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
                dropdown.style.maxHeight = '0'; // Reset max-height
                dropdown.style.opacity = '0'; // Reset opacity
            } else {
                dropdown.classList.add('show');
                dropdown.style.maxHeight = '500px'; // Set max-height to allow transition
                dropdown.style.opacity = '1'; // Set opacity to allow transition
            }

            // Update the current open dropdown reference
            currentOpenDropdown = dropdown.classList.contains('show') ? dropdown : null;
        }
    </script>
</body>
</html>