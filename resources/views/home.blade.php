<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Chalcedony Quartz Branch</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    
    <!-- CSS Styles -->
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
            transition: margin-left 0.4s ease, margin-right 0.4s ease;
            margin: 0 auto;
            max-width: 1500px;
            padding: 0px;
            margin-top: 15px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .content.shift {
            margin-left: 290px;
            margin-right: 20px;
        }

        /* Carousel Styles */
        .carousel {
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            height: 200px;
            margin-top: 20px;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
            width: 300%;
        }

        .carousel-item {
            width: 100%;
            flex: 0 0 100%;
        }

        .carousel img {
            width: 100%;
            height: auto;
        }

        /* Navigation buttons */
        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
        }

        .carousel-button.left {
            left: 10px;
        }

        .carousel-button.right {
            right: 10px;
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
                <input type="text" placeholder="Search for..." class="p-2 rounded-md">
                <button class="absolute right-0 top-0 mt-2 mr-2">
                    <i class="fas fa-search text-blue-500"></i>
                </button>
            </div>
            <i class="fas fa-bell text-white px-0"></i>
            <i class="fas fa-user text-white px-2.5"></i>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar w-64 bg-gray-900 text-white" id="sidebar">
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
        <!-- Carousel -->
        <div class="carousel">
            <div class="carousel-inner" id="carousel-inner">
                <div class="carousel-item">
                    <img src="https://picsum.photos/800/300?image=1" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/800/300?image=2" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/800/300?image=3" alt="Image 3">
                </div>
            </div>
            <button class="carousel-button left" onclick="prevSlide()">&#10094;</button>
            <button class="carousel-button right" onclick="nextSlide()">&#10095;</button>
        </div>

        <!-- JavaScript Functions -->
        <script>
            let currentIndex = 0;

            function showSlide(index) {
                const slides = document.querySelectorAll('.carousel-item');
                const totalSlides = slides.length;

                // Wrap around if index is out of bounds
                if (index >= totalSlides) {
                    currentIndex = 0;
                } else if (index < 0) {
                    currentIndex = totalSlides - 1;
                } else {
                    currentIndex = index;
                }

                const carouselInner = document.getElementById('carousel-inner');
                carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            function nextSlide() {
                showSlide(currentIndex + 1);
            }

            function prevSlide() {
                showSlide(currentIndex - 1);
            }

            // Auto slide every 3 seconds
            setInterval(nextSlide, 3000);

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

        <!-- Production Month-to-Date -->
        <div class="bg-gray-200 text-center py-2 mt-4">
            Production Month-to-Date as of February 24, 2025
        </div>
        
        <!-- Statistics Cards -->
        <div class="flex flex-wrap justify-center gap-4 mt-4">
            <div class="flex-1 min-w-[250px] max-w-[300px] bg-green-500 text-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Personal</h2>
                <p>Issued: P 0.00</p>
                <p>NAP: P 0.00</p>
                <p>TOTAL MTD: P 0.00</p>
                <p>YTD: P 0.00</p>
                <p>YTD NON-PULSE CC: 0.00</p>
            </div>
            <div class="flex-1 min-w-[250px] max-w-[300px] bg-teal-500 text-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Sub-Unit</h2>
                <p>Issued: P 352,499.15</p>
                <p>Pending Issuance: P 0.00</p>
                <p>TOTAL MTD: P 352,499.15</p>
            </div>
            <div class="flex-1 min-w-[250px] max-w-[300px] bg-teal-500 text-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Unit</h2>
                <p>Issued: P 352,499.15</p>
                <p>Pending Issuance: P 0.00</p>
                <p>TOTAL MTD: P 352,499.15</p>
            </div>
            <div class="flex-1 min-w-[250px] max-w-[300px] bg-blue-500 text-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Branch</h2>
                <p>Issued: P 2,345,319.39</p>
                <p>Pending Issuance: P 0.00</p>
                <p>TOTAL MTD: P 2,345,319.39</p>
            </div>
        </div>

        <!-- Incentive and Recognition Section -->
        <div class="container mx-auto p-4 mt-8 mb-4">
            <ol class="w-full h-16 bg-gray-200 text-black text-center flex items-center justify-center border border-gray-300 rounded-md mb-4">
                Incentive and Recognition
            </ol>

            <div class="flex space-x-4">
                <div class="w-1/2">
                    <table class="table-auto w-full border border-gray-300 rounded-md shadow-md">
                        <thead>
                            <tr class="bg-gray-300">
                                <th scope="col" colspan="2" class="py-2 text-left px-4">TO-GO's</th>
                            </tr>
                            <tr>
                                <th scope="col" class="py-2 text-left px-4">Incentive</th>
                                <th scope="col" class="py-2 text-left px-4">To-go</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="py-2 px-4">BRANCH ACHIEVER</td>
                                <td class="py-2 px-4">250,000 APE; 8 CC;</td>
                            </tr>
                            <tr class="bg-gray-100 border-b">
                                <td class="py-2 px-4">SECTORAL ACHIEVER</td>
                                <td class="py-2 px-4">500,000 APE; 10 CC;</td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="py-2 px-4">NATIONAL ACHIEVER</td>
                                <td class="py-2 px-4">750,000 APE; 12 CC;</td>
                            </tr>
                            <tr class="bg-gray-100 border-b">
                                <td class="py-2 px-4">SENIOR ACHIEVER</td>
                                <td class="py-2 px-4">1,500,000 APE; 18 CC;</td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="py-2 px-4">ELITE ACHIEVER</td>
                                <td class="py-2 px-4">2,500,000 APE; 21 CC;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="w-1/2">
                    <table class="table-auto w-full border border-gray-300 rounded-md shadow-md">
                        <thead>
                            <tr class="bg-gray-300">
                                <th scope="col" colspan="4" class="py-2 text-left px-4">TOP AGENTS MTD as of MAR. 02 BRANCH WIDE</th>
                            </tr>
                            <tr>
                                <th scope="col" class="py-2 text-left px-4">Rank</th>
                                <th scope="col" class="py-2 text-left px-4">Unit</th>
                                <th scope="col" class="py-2 text-left px-4">Name</th>
                                <th scope="col" class="py-2 text-left px-4">APE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-2 px-4">1</th>
                                <td class="py-2 px-4">BLUE CHALCEDONY DIRECT</td>
                                <td class="py-2 px-4">Christine Mercado &nbsp;&nbsp; == $0</td>
                                <td class="py-2 px-4">26,613.00</td>
                            </tr>
                            <tr class="bg-gray-100 border-b">
                                <th scope="row" class="py-2 px-4">2</th>
                                <td class="py-2 px-4">ANOTHER UNIT</td>
                                <td class="py-2 px-4">John Doe &nbsp;&nbsp; == $0</td>
                                <td class="py-2 px-4">20,000.00</td>
                            </tr>
                        </tbody>                
                    </table>
                </div>
            </div>

            <div class="flex space-x-4 mt-8">
                <div class="w-1/2">
                    <table class="table-auto w-full border border-gray-300 rounded-md shadow-md">
                        <thead>
                            <tr class="bg-gray-300">
                                <th scope="col" colspan="4" class="py-2 text-left px-4">TOP UNIT MTD as of MAR. 02 - BRANCH WIDE</th>
                            </tr>
                            <tr>
                                <th scope="col" class="py-2 text-left px-4">Rank</th>
                                <th scope="col" class="py-2 text-left px-4">Unit</th>
                                <th scope="col" class="py-2 text-left px-4">APE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-2 px-4">1</th>
                                <td class="py-2 px-4">BRANCH ACHIEVER</td>
                                <td class="py-2 px-4">250,000 APE; 8 CC;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="w-1/2">
                    <table class="table-auto w-full border border-gray-300 rounded-md shadow-md">
                        <thead>
                            <tr class="bg-gray-300">
                                <th scope="col" colspan="4" class="py-2 text-left px-4">TOP ROOKIES MTD as of MAR. 02 - BRANCH WIDE</th>
                            </tr>
                            <tr>
                                <th scope="col" class="py-2 text-left px-4">Rank</th>
                                <th scope="col" class="py-2 text-left px-4">Unit</th>
                                <th scope="col" class="py-2 text-left px-4">Name</th>
                                <th scope="col" class="py-2 text-left px-4">APE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-2 px-4">1</th>
                                <td class="py-2 px-4">BLUE CHALCEDONY SAMPLE</td>
                                <td class="py-2 px-4">NAME</td>
                                <td class="py-2 px-4">0</td>
                            </tr>
                            <tr class="bg-gray-100 border-b">
                                <th scope="row" class="py-2 px-4">2</th>
                                <td class="py-2 px-4">ANOTHER UNIT</td>
                                <td class="py-2 px-4">SAMPLE</td>
                                <td class="py-2 px-4">20,000.00</td>
                            </tr>
                        </tbody>                
                    </table>
                </div>
            </div>
        </div>

        <!-- Sales Card -->
        <div class="flex space-x-4 mt-8">
            <div class="w-1/2">
                <div class="max-w-xl w-full bg-white rounded-lg shadow-sm dark:bg-gray-800">
                    <div class="flex justify-between p-4 md:p-6 pb-0 md:pb-0">
                        <div>
                            <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">$12,423</h5>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Sales this year</p>
                        </div>
                        <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                            23%
                            <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div id="labels-chart" class="px-2.5">
                        <canvas id="salesChart" height="100"></canvas>
                    </div>
                    
                    <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-5 p-4 md:p-6 pt-0 md:pt-0">
                        <div class="flex justify-between items-center pt-5">
                            <!-- Button -->
                            <button
                                id="dropdownDefaultButton"
                                data-dropdown-toggle="lastDaysdropdown"
                                data-dropdown-placement="bottom"
                                class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                                type="button">
                                Last 12 months
                                <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last Month</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">This Month</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 12 Months</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 Days</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 Days</a>
                                    </li>
                                </ul>
                            </div>
                            <a
                                href="#"
                                class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500 hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                                Sales Report
                                <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js Library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Sales This Year',
                data: [15000, 20000, 18000, 22000, 25000, 30000, 28000, 32000, 31000, 35000, 40000, 45000],
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: true,
            }]
        };

        const salesChart = new Chart(ctx, {
            type: 'line',
            data: salesData,
            options: {
                responsive : true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Sales Amount ($)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Months'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>