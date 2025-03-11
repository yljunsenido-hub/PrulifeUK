<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard with Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            top: 72px; /* Height of the navbar */
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
            transition: margin-left 0.4s ease, margin-right 0.4s ease;
            margin: 0 auto;
            max-width: 1500px;
            padding: 0px;
            padding-bottom: 20px;
            margin-top: 15px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .content.shift {
            margin-left: 290px; /* Adjust based on sidebar width */
            margin-right: 20px;
        }
    </style>
</head>
<body>
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
        <input type="text" placeholder="Search..." class="p-1 rounded-md bg-gray-700 text-white pl-2">
        <button class="absolute right-0 top-0 mt-1 mr-2">
            <i class="fas fa-search text-white"></i>
        </button>

            </div>
            <i class="fas fa-bell text-white px-0"></i>
            <i class="fas fa-user text-white px-2.5"></i>
        </div>

        
        <style>
         input::placeholder {
            color: white;
            }
        </style>

    </nav>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <ul>
            <li class="menu-item text-white w-full text-left py-1 pb-2">
                <span class="text-yellow-200">Activities</span>
            </li>
            <li class="menu-item">
                <button class="text-white w-full text-left py-1 pb-4" onclick="toggleDropdown('eventsDropdown')">
                    <span class="menu-text">Events</span> <i class="fas fa-chevron-down px-2"></i>
                </button>
                <ul class="dropdown" id="eventsDropdown">
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
                <ul class="dropdown" id="leadsDropdown">
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
                <ul class="dropdown" id="newBusinessDropdown">
                    <li><a href="#" class="block pl-4 py-1">Submission Approval</a></li>
                    <li><a href="#" class="block pl-4 py-1">New Business Maintenance</a></li>
                    <li><a href="#" class="block pl-4 py-1">Issued Cases</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <button class="text-white w-full text-left py-1" onclick="toggleDropdown('reportsDropdown')">
                    <span class="menu-text">Reports</span> <i class="fas fa-chevron-down px-2"></i>
                </button>
                <ul class="dropdown" id="reportsDropdown">
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
                <ul class="dropdown" id="marketingDropdown">
                    <li><a href="#" class="block pl-4 py-1">Poster Templates</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <button class="text-white w-full text-left py-1" onclick="toggleDropdown('proposalBankDropdown')">
                    <span class="menu-text">Proposal Bank</span> <i class="fas fa-chevron-down px-2"></i>
                </button>
                <ul class="dropdown" id="proposalBankDropdown">
                    <li><a href="#" class="block pl-4 py-1">Proposal Search</a></li>
                    <li><a href="#" class="block pl-4 py-1">Proposal List</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <button class="text-white w-full text-left py-1" onclick="toggleDropdown('recruitmentDropdown')">
                    <span class="menu-text">Recruitment</span> <i class="fas fa-chevron-down px-2"></i>
                </button>
                <ul class="dropdown" id="recruitmentDropdown">
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
                <ul class="dropdown" id="bcmsDropdown">
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
                <ul class="dropdown" id="branchOperationsDropdown">
                    <li><a href="#" class="block pl-4 py-1">Upload Issued</a></li>
                    <li><a href="#" class="block pl-4 py-1">Upload NAP</a></li>
                    <li><a href="#" class="block pl-4 py-1">Upload Due List</a></li>
                    <li><a href="#" class="block pl-4 py-1">Upload Batch Photos</a></li>
                    <li><a href="#" class="block pl-4 py-1">Update Submission/Policy Record</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Main Content Area -->
    <div id="main-content" class="content">

	<div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-4xl font-semibold mb-4">Unit Production Reports</h2>
        
    <div class="container mx-auto rounded-md shadow-sm bg-white border pl-3 pr-3 pt-3 pb-3 mb-5 flex flex-col space-y-5">

    <!-- Year and Month Selection Section -->
    <div class="container mx-auto rounded-md shadow-sm bg-blue-900 border pt-2 pb-2 flex items-center justify-between"> <!-- Added justify-between -->
    <p class="ml-3 text-yellow-300">Year-to-Date</p>
    <div class="flex space-x-5 mr-3"> 
        <select id="yearSelect" class="border border-gray-300 rounded-md p-1 w-40">
            <option value="10">2025</option>
            <option value="25">2024</option>
            <option value="50">2023</option>
            <option value="100">2022</option>
            <option value="10">2021</option>
            <option value="10">2020</option>
            <option value="25">2019</option>
        </select>
        <select id="monthSelect" class="border border-gray-300 rounded-md p-1 w-40">
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
</div>

    <!-- Show Entries and Search Section -->
    <div class="flex items-center justify-between mb-3">
                <div class="flex items-center mr-3">
                    <label for="entries" class="mr-2 pl-1 text-sm text-gray-600">Show entries:</label>
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

    <!-- Data Table Section -->
    <div class="overflow-x-auto px-5 bg-white-100 p-3 rounded-l rounded-r shadow-md mb-5 pb-5">
        <table id="dataTable" class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left border-r border-gray-300">Branch</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">Unit</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">Issued</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">Pending</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">Total</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">AA</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">MP</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">AR</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">CC</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">CP</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">AVE. CS</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">AVE. SA</th>
                    <th class="py-3 px-6 text-left border-r border-gray-300">NR</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border-b border-gray-300 hover:bg-gray-100">
                    <td class="py-3 px-6 border-r border-gray-300">BCDQ</td>
                    <td class="py-3 px-6 border-r border-gray-300">Blue Royals</td>
                    <td class="py-3 px-6 border-r border-gray-300">730,290.52</td>
                    <td class="py-3 px-6 border-r border-gray-300">0.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">730,290.52</td>
                    <td class="py-3 px-6 border-r border-gray-300">9.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">75.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">12.00%</td>
                    <td class="py-3 px-6 border-r border-gray-300">12.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">1.33</td>
                    <td class="py-3 px-6 border-r border-gray-300">60,857.54</td>
                    <td class="py-3 px-6 border-r border-gray-300">1,969,264.17</td>
                    <td class="py-3 px-6 border-r border-gray-300">0.00</td>
                </tr>
                <tr class="border-b border-gray-300 hover:bg-gray-100">
                    <td class="py-3 px-6 border-r border-gray-300">BCDQ</td>
                    <td class="py-3 px-6 border-r border-gray-300">Blue Royals</td>
                    <td class="py-3 px-6 border-r border-gray-300">730,290.52</td>
                    <td class="py-3 px-6 border-r border-gray-300">0.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">730,290.52</td>
                    <td class="py-3 px-6 border-r border-gray-300">9.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">75.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">12.00%</td>
                    <td class="py-3 px-6 border-r border-gray-300">12.00</td>
                    <td class="py-3 px-6 border-r border-gray-300">1.33</td>
                    <td class="py-3 px-6 border-r border-gray-300">60,857.54</td>
                    <td class="py-3 px-6 border-r border-gray-300">1,969,264.17</td>
                    <td class="py-3 px-6 border-r border-gray-300">0.00</td>
                </tr>
            </tbody>
            <tfoot>
                <!-- Total Row -->
                <tr id="totalRow" class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <td class="py-3 px-6 text-left">Total</td>
                    <td class="py-3 px-6 text-left border-r border-gray-300"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalIssued"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalPending"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalAmount"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalAA"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalMP"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalAR"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalCC"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalCP"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalAVE_CS"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalAVE_SA"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="totalNR"></td>
                </tr>
                <!-- Average Row -->
                <tr id="averageRow" class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                    <td class="py-3 px-6 text-left">Average</td>
                    <td class="py-3 px-6 text-left border-r border-gray-300"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageIssued"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averagePending"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageAmount"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageAA"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageMP"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageAR"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageCC"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageCP"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageAVE_CS"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageAVE_SA"></td>
                    <td class="py-3 px-6 text-left border-r border-gray-300" id="averageNR"></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<!-- Pagination Section - Aligned to the Right -->

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

    <!-- Script Section -->
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

            // Insert totals into the table
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

            // Insert averages into the table
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

        window.onload = function() {
            calculateTotalsAndAverages();
        }
    </script>
		           
        </div>
        
    </div>
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