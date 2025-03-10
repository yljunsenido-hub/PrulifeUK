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
            padding: 0 20px; /* Add padding to the sides */
            margin-top: 15px;
            margin-left: 20px; /* Default margin */
        }

        .content.shift {
            margin-left: 280px; /* Adjusted to match sidebar width */
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
    <div class="container mx-auto p-8 content" id="main-content">
        <h1 class="text-3xl font-semibold mb-4">Poster Maintenance</h1>

        <div class="bg-white shadow rounded p-6">
            <div class="mb-4">
                <a href="#" class="text-blue-500 hover:underline">Back to list</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Template Selection -->
                <div>
                    <label class="block text-lg font-medium">Template</label>
                    <select class="block w-full mt-1 rounded border border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                        <option>Select Template</option>
                    </select>
                </div>
                <div class="col-span-1 md:col-span-2">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Preview" class="border border-gray-300 mt-1" style="height: 150px; width: 200px;">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <!-- Template for Unit -->
                <div>
                    <label class="block text-lg font-medium">Template for your unit <br>(BLUE CHALCEDONY DIRECT)?</label>
                    <label class="inline-flex items-center mt-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500">
                        <span class="ml-2">Yes</span>
                    </label>
                </div>

                <!-- Featured Template -->
                <div>
                    <label class="block text-lg font-medium">Featured Template</label>
                    <label class="inline-flex items-center mt-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500">
                        <span class="ml-2">Yes</span>
                    </label>
                </div>

                <!-- Poster Title -->
                <div>
                    <label class="block text-lg font-medium">Poster Title</label>
                    <input type="text" class="block w-full mt-1 rounded border border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <!-- Description -->
                <div class="md:col-span-3">
                    <label class="block text-lg font-medium">Description</label>
                    <textarea class="block w-full mt-1 rounded border border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500 h-20"></textarea>
                </div>
            </div>

            <!-- File Uploads -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <div>
                    <label class="block text-lg font-medium">Preview (JPG)</label>
                    <label class="block mt-2">
                        <input type="file" class="hidden">
                        <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                        <span class="ml-2 text-gray-500">No file chosen</span>
                    </label>
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded text-sm mt-2">Upload</button>
                </div>

                <div>
                    <label class="block text-lg font-medium">Foreground (PNG)</label>
                    <label class="block mt-2">
                        <input type="file" class="hidden">
                        <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                        <span class="ml-2 text-gray-500">No file chosen</span>
                    </label>
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded text-sm mt-2">Upload</button>
                </div>

                <div>
                    <label class="block text-lg font-medium">Background (JPG)</label>
                    <label class="block mt-2">
                        <input type="file" class="hidden">
                        <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                        <span class="ml-2 text-gray-500">No file chosen</span>
                    </label>
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded text-sm mt-2">Upload</button>
                </div>

                <div>
                    <label class="block text-lg font-medium">Name Font (TTF or OTF)</label>
                    <label class="block mt-2">
                        <input type="file" class="hidden">
                        <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                        <span class="ml-2 text-gray-500">No file chosen</span>
                    </label>
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded text-sm mt-2">Upload</button>
                </div>

                <div>
                    <label class="block text-lg font-medium">Title Font (TTF or OTF)</label>
                    <label class="block mt-2">
                        <input type="file" class="hidden">
                        <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                        <span class="ml-2 text-gray-500">No file chosen</span>
                    </label>
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded text-sm mt-2">Upload</button>
                </div>
            </div>
    
            <!-- Action Buttons -->
            <div class="flex justify-end space-x-4 mt-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Render
                </button>
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Preview & Create
                </button>
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