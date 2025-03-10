<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            position: relative;
            overflow: hidden;
            height: 273px;
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

        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            border-radius: 4pxpx;
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
<body class="bg-white">
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
        <div class="bg-gray-300 text-center py-4 mt-4">
            Production Month-to-Date as of February 24, 2025
        </div>
        
        <!-- Statistics Cards -->
        <div class="flex flex-wrap justify-center gap-4 mt-4">

    <!-- First Row -->
    <div class="flex flex-wrap justify-center gap-4 w-full">
        <div class="flex-1 w-1/2 bg-gradient-to-b from-[rgb(133,191,236)] to-[rgb(217,228,237)] rounded-xl shadow-xl p-8 border-[rgb(0,133,235)] border-b-8 flex items-center">
            <div class="flex items-center justify-center bg-[rgb(0,133,235)] w-32 h-32 rounded-full" style="background-image: url('{{ asset('images/personal_white.png')}}'); background-size: 50%; background-repeat: no-repeat; background-position: center;"></div>
            <div class="flex flex-col ml-6"> <!-- Added flex and margin-left -->
                <div>    
                    <p class="text-3xl font-bold">Personal</p>
                </div>
                <div class="mt-2 flex">
                    <div>
                        <p class="font-medium text-gray-800 mt-2">Issued</p>
                        <p class="font-medium text-gray-800">NAP</p>
                        <p class="font-bold">TOTAL MTD</p>
                        <p class="font-bold">YTD</p>
                        <p class="font-bold">YTD-NON-PULSE CC</p>
                        <p class="font-bold">YTD PULSE CC</p>
                    </div>   
                    <div class="ml-16">
                        <p class="font-bold mt-2">₱ <span class="font-normal">00.00</span></p>
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        <p class="font-bold"><span class="font-normal">00.00</span></p>
                        <p class="font-bold"><span class="font-normal">00.00</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-1 w-1/2 bg-gradient-to-b from-[rgb(152,242,236)] to-[rgb(234,244,243)] rounded-xl shadow-xl p-8 border-[rgb(7,190,178)] border-b-8 flex items-center">
            <div class="flex items-center justify-center bg-[rgb(7,190,178)]  w-32 h-32 rounded-full" style="background-image: url('{{ asset('images/Sub-unit_white.png')}}'); background-size: 50%; background-repeat: no-repeat; background-position: center;"></div>
            <div class="flex flex-col ml-6"> <!-- Added flex and margin-left -->
                <div >
                    <p class="text-3xl font-bold">Sub-Unit</p>
                </div>
                <div class="mt-2 h-24 flex">
                    <div>
                        <p class="font-medium text-gray-800">Issued</p>
                        <p class="font-medium text-gray-800">Pending Issuance</p>
                        <p class="font-bold">TOTAL MTD</p>
                    </div>
                    <div class="ml-16">
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <!-- Second Row -->
    <div class="flex flex-wrap justify-center gap-4 w-full mt">
        <div class="flex-1 w-1/2 bg-gradient-to-b from-[rgb(129,180,216)] to-[rgb(230,235,238)] rounded-xl shadow-xl p-8 border-[rgb(25,138,219)] border-b-8 flex items-center">
            <div class="flex items-center justify-center bg-[rgb(25,138,219)]  w-32 h-32 rounded-full" style="background-image: url('{{ asset('images/Unit_white.png')}}'); background-size: 50%; background-repeat: no-repeat; background-position: center;"></div>
            <div class="flex flex-col ml-6"> <!-- Added flex and margin-left -->
                <div class="mb-2">
                    <p class="text-3xl font-bold">Unit</p>
                </div>
                <div class="mt-2 h-24 flex">
                    <div>
                        <p class="font-medium text-gray-800">Issued</p>
                        <p class="font-medium text-gray-800">Pending Issuance</p>
                        <p class="font-bold">TOTAL MTD</p>
                    </div>
                    <div class="ml-16">
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                    </div>
                </div>
            </div>  
        </div>
        <div class="flex-1 w-1/2 bg-gradient-to-b from-[rgb(121,198,204)] to-[rgb(255,255,255)] rounded-xl shadow-xl p-8 border-[rgb(7,167,178)] border-b-8 flex items-center">
            <div class="flex items-center justify-center bg-[rgb(7,167,178)]  w-32 h-32 rounded-full" style="background-image: url('{{ asset('images/branch_white.png')}}'); background-size: 50%; background-repeat: no-repeat; background-position: center;"></div> 
            <div class="flex flex-col ml-6"> <!-- Added flex and margin-left -->
                <div  class="mb-2">
                    <p class="text-3xl font-bold">Branch</p>
                </div>
                <div class="mt-2 h-24 flex">
                    <div>
                        <p class="font-medium text-gray-800">Issued</p>
                        <p class="font-medium text-gray-800">Pending Issuance</p>
                        <p class="font-bold">TOTAL MTD</p>
                    </div>
                    <div class="ml-16">
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                        <p class="font-bold">₱ <span class="font-normal">00.00</span></p>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>

        <!-- Incentive and Recognition Section -->
        <div class="mx-auto mt-12 mb-4 bg-gray-100 rounded-t-2xl border border-gray-400">
            <div class="bg-gray-300 text-center py-5 text-xl rounded-t-2xl mb-4">
                Incentive and Recognition
            </div>

            <div class="flex space-x-4 p-3">
                <div class="w-1/2 rounded-t-2xl overflow-hidden">
                    <table class="table-auto w-full border border-gray-300 rounded-t-2xl shadow-md">
                        <thead>
                            <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                                <th scope="col" colspan="2" class="py-3 text-left px-6 border-b border-gray-400">TO-GO's</th>
                            </tr>
                            <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                                <th scope="col" class="py-3 text-left px-6 border-b border-gray-400 border-r border-gray-400">Incentive</th>
                                <th scope="col" class="py-3 text-left px-6 border-b border-gray-400">To-go</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white border-b">
                            <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">BRANCH ACHIEVER</td>
                                <td class="py-3 px-6 border-b border-gray-300">250,000 APE; 8 CC;</td>
                            </tr>
                            <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">SECTORAL ACHIEVER</td>
                                <td class="py-3 px-6 border-b border-gray-300">500,000 APE; 10 CC;</td>
                            </tr>
                            <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">NATIONAL ACHIEVER</td>
                                <td class="py-3 px-6 border-b border-gray-300">750,000 APE; 12 CC;</td>
                            </tr>
                            <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">SENIOR ACHIEVER</td>
                                <td class="py-3 px-6 border-b border-gray-300">1,500,000 APE; 18 CC;</td>
                            </tr>
                            <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-100 hover:text-blue-900"> <!-- Changed here -->
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">ELITE ACHIEVER</td>
                                <td class="py-3 px-6 border-b border-gray-300">2,500,000 APE; 21 CC;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="w-1/2 rounded-t-2xl overflow-hidden">
                    <table class="table-auto w-full border border-gray-300 rounded-t-2xl shadow-md">
                        <thead>
                            <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                                <th scope="col" colspan="4" class="py-3 text-left px-6">TOP AGENTS MTD as of MAR. 02 BRANCH WIDE</th>
                            </tr>
                            <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                                <th scope="col" class="py-3 text-left px-6 border-b border-gray-400 border-r border-gray-400">Rank</th>
                                <th scope="col" class="py-3 text-left px-6 border-b border-gray-400 border-r border-gray-400">Unit</th>
                                <th scope="col" class="py-3 text-left px-6 border-b border-gray-400 border-r border-gray-400">Name</th>
                                <th scope="col" class="py-3 text-left px-6 border-b border-gray-400">APE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-100 hover:text-blue-900">
                                <th scope="row" class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">1</th>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">BLUE CHALCEDONY DIRECT</td>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">Christine Mercado &nbsp;&nbsp; == $0</td>
                                <td class="py-3 px-6 border-b border-gray-300 ">26,613.00</td>
                            </tr>
                            <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-100 hover:text-blue-900">
                                <th scope="row" class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">2</th>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">ANOTHER UNIT</td>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">John Doe &nbsp;&nbsp; == $0</td>
                                <td class="py-3 px-6 border-b border-gray-300">20,000.00</td>
                            </tr>
                        </tbody>                
                    </table>
                </div>
            </div>

            <div class="flex space-x-4 mt-8 p-3">
                <div class="w-1/2 rounded-t-2xl overflow-hidden">
                    <table class="table-auto w-full border border-gray-300 rounded-t-2xl shadow-md">
                        <thead>
                            <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                                <th scope="col" colspan="4" class="py-3 text-left px-6">TOP UNIT MTD as of MAR. 02 - BRANCH WIDE</th>
                            </tr>
                            <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                                <th scope="col" class="py-3 px-6 border-b border-gray-400 border-r border-gray-400 ">Rank</th>
                                <th scope="col" class="py-3 text-left px-6 border-b border-gray-400 border-r border-gray-400">Unit</th>
                                <th scope="col" class="py-3 text-left px-6 border-b border-gray-400">APE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-100 hover:text-blue-900">
                                <th scope="row" class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">1</th>
                                <td class="py-3 text-left px-6 border-b border-gray-400 border-r border-gray-400">BRANCH ACHIEVER</td>
                                <td class="py-3 text-left px-6 border-b border-gray-400">250,000 APE; 8 CC;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="w-1/2 rounded-t-2xl overflow-hidden">
                    <table class="table-auto w-full border border-gray-300 rounded-t-2xl shadow-md">
                        <thead>
                            <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                                <th scope="col" colspan="4" class="py-3 text-left px-6">TOP ROOKIES MTD as of MAR. 02 - BRANCH WIDE</th>
                            </tr>
                            <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                                <th scope="col" class="py-3 px-6 border-b border-gray-400 border-r border-gray-400">Rank</th>
                                <th scope="col" class="py-3 text-left px-6 border-b border-gray-400 border-r border-gray-400">Unit</th>
                                <th scope="col" class="py-3 text-left px-6 border-b border-gray-400 border-r border-gray-400">Name</th>
                                <th scope="col" class="py-3 text-left px-6 border-b border-gray-400">APE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-100 hover:text-blue-900">
                                <th scope="row" class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">1</th>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">BLUE CHALCEDONY SAMPLE</td>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">NAME</td>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">0</td>
                            </tr>
                            <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-100 hover:text-blue-900">
                                <th scope="row" class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">2</th>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">ANOTHER UNIT</td>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">SAMPLE</td>
                                <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300">20,000.00</td>
                            </tr>
                        </tbody>                
                    </table>
                </div>
            </div>
        </div>

        <!-- Chart -->

        <div class="bg-gray-300 text-center py-5 text-xl mt-12 rounded-t-2xl mb-4">
            Production Year-to-Date 2025
        </div>
            
        <div class="flex space-x-4 mb-4">
            <div class="w-1/2 bg-white">
                <div class="bg-white text-center bg-blue-900 py-3 text-white rounded-t-2xl border-2 border-black">Branch Monthly Production</div>
                <div class="w-full bg-gray-200 rounded-b-2xl p-5 border border-gray-400">
                    <canvas id="myChart1"></canvas>
                </div>
            </div>
                
            <div class="w-1/2 bg-white">
                <div class="bg-white text-center bg-blue-900 py-3 text-white rounded-t-2xl border-2 border-black">Unit Monthly Production</div>
                <div class="w-full bg-gray-200 rounded-b-2xl p-5 border border-gray-400">
                    <canvas id="myChart2" ></canvas>
                </div>
            </div>
        </div>

        <div class="flex space-x-4">
            <div class="w-1/2 bg-white">
                <div class="bg-white text-center bg-blue-900 py-3 text-white rounded-t-2xl border-2 border-black">Branch Monthly Production</div>
                <div class="w-full bg-gray-200 rounded-b-2xl p-5 border border-gray-400">
                    <canvas id="myChart3"></canvas>
                </div>
            </div>

            <div class="w-1/2 bg-white">
                <div class="bg-white text-center bg-blue-900 py-3 text-white rounded-t-2xl border-2 border-black">Branch Monthly Production</div>
                <div class="w-full bg-gray-200 rounded-b-2xl p-5 border border-gray-400">
                    <canvas id="myChart4"></canvas>
                </div>
            </div>
        </div>

        <!-- Production Summary -->

        <div class="bg-gray-300 text-center py-5 text-xl mt-12 rounded-t-2xl">
            Production Summary
        </div>

        <div class="container bg-gray-100 mx-auto w-8xl p-4 mb-10 border border-gray-400">
            <div class="p-5 bg-blue-900 text-white text-center font-bold border-b border-gray-400 rounded-t-2xl">
                ISSUED
            </div>
            <table class="table-auto w-full border border-gray-300 rounded-t-2xl shadow-md">
                <thead>
                    <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 font-bold">MONTH</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 font-bold">TOTAL APE</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 font-bold">NAP</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 font-bold">TOTAL CC</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 font-bold">TOTAL PULSE CASE</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-100 hover:text-blue-900">
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">250,000.00</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">50,000.00</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 bg-white">10</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 hover:text-blue-900">
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">150</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">300,000.00</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">75,000.00</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 bg-white">15</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 hover:text-blue-900">
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">200</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">500,000.00</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100,000.00</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 bg-white">20</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 hover:text-blue-900">
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">250</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">100</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">600,000.00</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300 bg-white">125,000.00</td>
                        <td class="py-3 px-6 border-b border-gray-300 border-r border-gray-300 bg-white">25</td>
                    </tr>
                </tbody>
            </table>
        </div>


  <script>
    function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)]; // Changed to 16 to include all hex digits
    }
    return color;
}

    // Function to randomize bar colors
    function randomizeBarColors(chart) {
        chart.data.datasets[0].backgroundColor = Array.from({ length: 6 }, () => getRandomColor());
        chart.update(); // Update the chart to reflect the new colors
    }

        // First Bar Chart Data
        const ctx1 = document.getElementById('myChart1').getContext('2d');
        const myChart1 = new Chart(ctx1, {
            type: 'bar', // Changed to 'bar'
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Sales in USD',
                    data: [654, 434, 800, 500, 343, 765, 234, 423, 654, 876, 543, 765],
                    borderColor: 'black',
                    borderWidth: 1,
                    backgroundColor: Array.from({ length: 12 }, () => getRandomColor()), // Random colors for bars
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Call the function to randomize colors once
        randomizeBarColors(myChart1);



    // Second Line Chart Data
        const ctx2 = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'bar', // Changed to 'bar'
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Sales in USD',
                    data: [232, 434, 600, 500, 343, 765, 554, 423, 654, 876, 522, 765],
                    borderColor: 'black',
                    borderWidth: 1,
                    backgroundColor: Array.from({ length: 12 }, () => getRandomColor()), // Random colors for bars
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Call the function to randomize colors once
        randomizeBarColors(myChart2);

    // third Line Chart Data
    const ctx3 = document.getElementById('myChart3').getContext('2d');
        const myChart3 = new Chart(ctx3, {
            type: 'bar', // Changed to 'bar'
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Sales in USD',
                    data: [232, 434, 600, 500, 343, 765, 554, 423, 654, 876, 522, 765],
                    borderColor: 'black',
                    borderWidth: 1,
                    backgroundColor: Array.from({ length: 12 }, () => getRandomColor()), // Random colors for bars
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Call the function to randomize colors once
        randomizeBarColors(myChart3);

    // fourth Line Chart Data
    const ctx4 = document.getElementById('myChart4').getContext('2d');
        const myChart4 = new Chart(ctx4, {
            type: 'bar', // Changed to 'bar'
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Sales in USD',
                    data: [232, 434, 600, 500, 343, 765, 554, 423, 654, 876, 522, 765],
                    borderColor: 'black',
                    borderWidth: 1,
                    backgroundColor: Array.from({ length: 12 }, () => getRandomColor()), // Random colors for bars
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Call the function to randomize colors once
        randomizeBarColors(myChart4);
  </script>
    </div>

    

    
</body>
</html>