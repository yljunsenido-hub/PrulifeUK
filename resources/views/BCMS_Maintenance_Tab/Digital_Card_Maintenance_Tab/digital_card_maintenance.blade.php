<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Maintenance</title>
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

        /* Main content styles */
        .content {
            transition: margin-left 0.4s ease;
            margin: 0 auto;
            max-width: 1500px;
            padding: 0px;
            margin-top: 15px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .content.shift {
            margin-left: 280px; /* Adjusted to match sidebar width */
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

    <!-- Main Content -->
    <div class="content" id="main-content">
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
    </div>

    <script>
        let currentOpenDropdown = null;

        // Function to toggle the sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const content = document.getElementById("main-content");
            sidebar.classList.toggle("show"); // Show or hide the sidebar
            content.classList.toggle("shift"); // Shift content when sidebar is visible
        }

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