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
            width: 280px;
            height: calc(100% - 72px);
            background-image: linear-gradient(to bottom, #1e3a8a, #1d4ed8);
            color: white;
            box-shadow: 0 5px rgba(0, 0, 0, 0.1), inset 0 4px 8px rgba(0, 0, 0, 0.3); /* Added inner shadow */
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
            color: #f8e9a1;
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
            color: white;
        }

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
            margin-left: 295px; /* Adjust based on sidebar width */
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
<body>
    <!-- Sticky Navigation Bar -->
    <nav class="bg-gradient-to-r from-blue-900 to-blue-700 p-4 flex justify-between items-center">
        <div class="flex items-center">
        <button class="mr-3 bg-transparent text-white p-2 rounded-md relative hover:bg-blue-800" onclick="toggleSidebar()">
        <i class="fas fa-bars text-white hover:text-white"></i>
    </button>
            <img src="images/bcdqlogo.png" alt="bcdq log" class="h-10 w-10 mr-4">
            <span class="text-white text-lg font-semibold">BLUE CHALCEDONY QUARTZ BRANCH</span>
        </div>

        <div class="flex items-center space-x-6">
    <div class="relative">
        <input type="text" placeholder="Search..." class="p-1 rounded-md bg-blue-900 text-white pl-2">
        <button class="absolute right-0 top-0 mt-1 mr-2">
            <i class="fas fa-search text-white"></i>
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
                <span class="text-yellow-300 font-bold text-xs">ACTIVITIES</span>
            </li>
            <li class="menu-item">
                <button class="text-gray-400 w-full text-left py-1 pb-2" onclick="toggleDropdown('eventsDropdown')">
                    <svg class="w-3 h-3 text-white dark:text-white inline-block mr-2 mb-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                    <span class="menu-text text-md text-white">Events</span> 
                    <i class="fas fa-chevron-down px-1 mb-custom-mb-1 mr-1 text-xs"></i>
                </button>
                <ul class="dropdown" id="eventsDropdown">
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Upcoming Events</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">My Events</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2 mb-6">Event Maintenance</a></li>
                </ul>
            </li>
            <li class="menu-item text-white w-full text-left py-1 pb-2">
                <span class="text-yellow-300 font-bold text-xs">OPERATIONS</span>
            </li>
            <li class="menu-item">
                <button class="text-gray-400 w-full text-left py-1 pb-2" 
                onclick="toggleDropdown('leadsDropdown')">
                    <svg class="w-3  h-3 text-white dark:text-white inline-block mr-2 mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                        <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
                    </svg>
                    <span class="menu-text text-md text-white">Leads & Cases</span> 
                    <i class="fas fa-chevron-down px-1 mb-custom-mb-1 mr-1 text-xs"></i>
                </button>
                <ul class="dropdown" id="leadsDropdown">
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Submitted Cases</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Issued Cases</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Outreq Cases</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2 mb-6">Declined/Postponed Cases</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <button class="text-gray-400 w-full text-left py-1 pb-3" 
                onclick="toggleDropdown('newBusinessDropdown')">
                    <svg class="w-3 h-3 text-white dark:text-white inline-block mr-2 mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M19.728 10.686c-2.38 2.256-6.153 3.381-9.875 3.381-3.722 0-7.4-1.126-9.571-3.371L0 10.437V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-7.6l-.272.286Z"/>
                        <path d="m.135 7.847 1.542 1.417c3.6 3.712 12.747 3.7 16.635.01L19.605 7.9A.98.98 0 0 1 20 7.652V6a2 2 0 0 0-2-2h-3V3a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v1H2a2 2 0 0 0-2 2v1.765c.047.024.092.051.135.082ZM10 10.25a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5ZM7 3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1H7V3Z"/>
                    </svg>
                    <span class="menu-text text-md text-white">New Business</span> 
                    <i class="fas fa-chevron-down px-1 mb-custom-mb-1 mr-1 text-xs"></i>
                </button>
                <ul class="dropdown" id="newBusinessDropdown">
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Submission Approval</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">New Business Maintenance</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2 mb-6">Issued Cases</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <button class="text-gray-400 w-full text-left py-1 pb-3" 
                onclick="toggleDropdown('reportsDropdown')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4 text-white dark:text-white inline-block mr-1 mb-2">
                        <path d="M19 3h-4.5L13 1H5c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V7l-5-4zm0 18H5V2h7v5h5v14zM8 10h8v2H8zm0 4h8v2H8zm0 4h8v2H8z"/>
                    </svg>
                    <span class="menu-text text-md text-white">Reports</span> 
                    <i class="fas fa-chevron-down px-1 mb-custom-mb-1 mr-1 text-xs"></i>
                </button>
                <ul class="dropdown" id="reportsDropdown">
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Agent MTD</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Agent YTD</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Sub-Unit Summary</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Unit Summary</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Branch Summary</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Branch Honor Rolls</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Unit Honor Rolls</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Custom Group</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Personal To Go's (BETA)</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">Qualifiers (BETA)</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2">MDRT Tracker</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-2 mb-6">Easy Reports</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <button class="text-gray-400 w-full text-left py-1 pb-3" 
                onclick="toggleDropdown('marketingDropdown')">
                    <svg class="w-4 h-4 text-white dark:text-white inline-block mr-1 mb-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                        <path d="M15 1.943v12.114a1 1 0 0 1-1.581.814L8 11V5l5.419-3.871A1 1 0 0 1 15 1.943ZM7 4H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2v5a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2V4ZM4 17v-5h1v5H4ZM16 5.183v5.634a2.984 2.984 0 0 0 0-5.634Z"/>
                    </svg>
                    <span class="menu-text text-md text-white">Marketing</span> 
                    <i class="fas fa-chevron-down px-1 mb-custom-mb-1 mr-1 text-xs"></i>
                </button>
                <ul class="dropdown" id="marketingDropdown">
                    <li><a href="#" class="text-md text-gray-300 block pl-7 py-3 mb-6">Poster Templates</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <button class="text-gray-400 w-full text-left py-1 pb-3" 
                onclick="toggleDropdown('proposalBankDropdown')">
                    <svg class="w-4 h-4 text-white inline-block mb-2 mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <line x1="3" y1="21" x2="21" y2="21" />
                        <line x1="3" y1="10" x2="21" y2="10" />
                        <polyline points="5 6 12 3 19 6" />
                        <line x1="4" y1="10" x2="4" y2="21" />
                        <line x1="20" y1="10" x2="20" y2="21" />
                        <line x1="8" y1="14" x2="8" y2="17" />
                        <line x1="12" y1="14" x2="12" y2="17" />
                        <line x1="16" y1="14" x2="16" y2="17" />
                    </svg>
                    <span class="menu-text text-md text-white">Proposal Bank</span> 
                    <i class="fas fa-chevron-down px-1 mb-custom-mb-1 mr-1 text-xs"></i>
                </button>
                <ul class="dropdown" id="proposalBankDropdown">
                    <li><a href="#" class="text-md text-gray-300 block pl-7 py-3">Proposal Search</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-7 py-3 mb-6">Proposal List</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <button class="text-gray-400 w-full text-left py-1 pb-3" 
                onclick="toggleDropdown('recruitmentDropdown')">
                    <svg class="w-4 h-4 text-white inline-block mr-1 mb-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    <span class="menu-text text-md text-white">Recruitment</span> 
                    <i class="fas fa-chevron-down px-1 mb-custom-mb-1 mr-1 text-xs"></i>
                </button>
                <ul class="dropdown" id="recruitmentDropdown">
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3">Recruit</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3 mb-6">Recruitment Process</a></li>
                </ul>
            </li>
            
            <li class="menu-item">
                <button class="text-gray-400 w-full text-left py-1 pb-3" 
                onclick="toggleDropdown('bcmsDropdown')">
                    <svg class="w-4 h-4 text-white inline-block mr-1 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span class="menu-text text-md text-white">BCMS Maintenance</span> 
                    <i class="fas fa-chevron-down px-1 mb-custom-mb-1 mr-1 text-xs"></i>
                </button>
                <ul class="dropdown" id="bcmsDropdown">
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3">Poster Template Maintenance</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3">Poster Maintenance</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3">Agent Maintenance</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3">Unit Maintenance</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3">Sub-Unit Maintenance</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3 mb-6">Digital Card Maintenance</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <button class="text-gray-400 w-full text-left py-1 pb-1" 
                onclick="toggleDropdown('branchOperationsDropdown')">
                    <svg class="w-4 h-4 text-white inline-block mr-1 mb-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path d="M7 18a4.6 4.4 0 0 1 0 -9h0a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />
                        <polyline points="9 15 12 12 15 15" />
                        <line x1="12" y1="12" x2="12" y2="21" />
                    </svg>
                    <span class="menu-text text-md text-white">Branch Operations Utility</span> 
                    <i class="fas fa-chevron-down px-1 mb-custom-mb-1 mr-1 text-xs"></i>
                </button>
                <ul class="dropdown" id="branchOperationsDropdown">
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3">Upload Issued</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3">Upload NAP</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3">Upload Due List</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3">Upload Batch Photos</a></li>
                    <li><a href="#" class="text-md text-gray-300 block pl-8 py-3 mb-6">Update Submission/Policy Record</a></li>
                </ul>
                <li class="menu-item">
                <button class="text-gray-400 w-full text-left py-1 pb-3" 
                onclick="toggleDropdown('appointmentsDropdown')">
                    <svg class="w-4 h-4 text-white inline-block mr-1 mb-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <rect x="4" y="5" width="16" height="16" rx="2" />
                        <line x1="16" y1="3" x2="16" y2="7" />
                        <line x1="8" y1="3" x2="8" y2="7" />
                        <line x1="4" y1="11" x2="20" y2="11" />
                        <line x1="11" y1="15" x2="12" y2="15" />
                        <line x1="12" y1="15" x2="12" y2="18" />
                    </svg>
                    <span class="menu-text text-md text-white">Appointments</span>
                </button>
            </li>
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
            <button class="carousel-button left rounded-xl shadow-md" onclick="prevSlide()">&#10094;</button>
            <button class="carousel-button right rounded-xl" onclick="nextSlide()">&#10095;</button>
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
        <div class="bg-blue-900 text-white text-center py-4 mt-4 rounded-md">
            Production Month-to-Date as of February 24, 2025
        </div>
        
        <!-- Statistics Cards -->
        <div class="flex flex-wrap justify-center gap-4 mt-4">

    <!-- First Row -->
    <div class="flex flex-wrap justify-center gap-4 w-full">
        <div class="flex-1 w-1/2 bg-gradient-to-b from-[rgb(180,215,243)] to-[rgb(217,228,237)] rounded-xl shadow-xl p-8 border-[rgb(0,133,235)] border-b-8 flex items-center">
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
        <div class="mx-auto mt-12 mb-4 rounded-xl border border-gray-300">
            <div class="bg-blue-900 text-white uppercase text-center p-4 text-md rounded-xl mx-2 my-2">
                Incentive and Recognition
            </div>

            <div class="flex space-x-4 p-3">
        <div class="w-1/2 overflow-hidden">
            <table class="table-auto w-full border border-gray-300 rounded-xl shadow-md">
                <thead>
                    <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                        <th scope="col" colspan="2" class="px-3 py-3 text-left border-b border-gray-400">TO-GO's</th>
                    </tr>
                    <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                        <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Incentive</th>
                        <th scope="col" class="py-3 text-left px-3 border-b border-gray-400">To-go</th>
                    </tr>
                </thead>
                <tbody class="bg-white border-b">
                    <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">BRANCH ACHIEVER</td>
                        <td class="py-3 px-3 border-b border-gray-300">250,000 APE; 8 CC;</td>
                    </tr>
                    <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">SECTORAL ACHIEVER</td>
                        <td class="py-3 px-3 border-b border-gray-300">500,000 APE; 10 CC;</td>
                    </tr>
                    <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">NATIONAL ACHIEVER</td>
                        <td class="py-3 px-3 border-b border-gray-300">750,000 APE; 12 CC;</td>
                    </tr>
                    <tr class="border-b border-gray-300 hover:bg-gray-100 hover:text-blue-900">
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">SENIOR ACHIEVER</td>
                        <td class="py-3 px-3 border-b border-gray-300">1,500,000 APE; 18 CC;</td>
                    </tr>
                    <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-100 hover:text-blue-900"> <!-- Changed here -->
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">ELITE ACHIEVER</td>
                        <td class="py-3 px-3 border-b border-gray-300">2,500,000 APE; 21 CC;</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="w-1/2 overflow-hidden">
            <table class="table-auto w-full border border-gray-300 rounded-xl shadow-md">
                <thead>
                    <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                        <th scope="col" colspan="4" class="py-3 px-3 text-left">TOP AGENTS MTD as of MAR. 02 BRANCH WIDE</th>
                    </tr>
                    <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                        <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Rank</th>
                        <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Unit</th>
                        <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Name</th>
                        <th scope="col" class="py-3 text-left px-3 border-b border-gray-400">APE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-200 hover:text-blue-900">
                        <th scope="row" class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">1</th>
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">BLUE CHALCEDONY DIRECT</td>
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">Christine Mercado &nbsp;&nbsp; == $0</td>
                        <td class="py-3 px-3 border-b border-gray-300 ">26,613.00</td>
                    </tr>
                    <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-100 hover:text-blue-900">
                        <th scope="row" class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">2</th>
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">ANOTHER UNIT</td>
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">John Doe &nbsp;&nbsp; == $0</td>
                        <td class="py-3 px-3 border-b border-gray-300">20,000.00</td>
                    </tr>
                </tbody>                
            </table>
        </div>
    </div>

    <div class="flex space-x-4 p-3">
        <div class="w-1/2 overflow-hidden">
            <table class="table-auto w-full border border-gray-300 rounded-xl shadow-md">
                <thead>
                    <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                        <th scope="col" colspan="4" class="py-3 text-left px-6">TOP UNIT MTD as of MAR. 02 - BRANCH WIDE</th>
                    </tr>
                    <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                        <th scope="col" class="py-3 px-3 border-b border-gray-400 border-r border-gray-400 ">Rank</th>
                        <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Unit</th>
                        <th scope="col" class="py-3 text-left px-3 border-b border-gray-400">APE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-200 hover:text-blue-900">
                        <th scope="row" class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">1</th>
                        <td class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">BRANCH ACHIEVER</td>
                        <td class="py-3 text-left px-3 border-b border-gray-400">250,000 APE; 8 CC;</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="w-1/2 overflow-hidden">
            <table class="table-auto w-full border border-gray-300 rounded-xl shadow-md">
                <thead>
                    <tr class="bg-blue-900 text-white uppercase text-sm leading-normal">
                        <th scope="col" colspan="4" class="py-3 text-left px-3">TOP ROOKIES MTD as of MAR. 02 - BRANCH WIDE</th>
                    </tr>
                    <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                        <th scope="col" class="py-3 px-3 text-left border-b border-gray-400 border-r border-gray-400">Rank</th>
                        <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Unit</th>
                        <th scope="col" class="py-3 text-left px-3 border-b border-gray-400 border-r border-gray-400">Name</th>
                        <th scope="col" class="py-3 text-left px-3 border-b border-gray-400">APE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-200 hover:text-blue-900">
                        <th scope="row" class="py-3 px-3 text-left border-b border-gray-200 border-r border-gray-300">1</th>
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">BLUE CHALCEDONY SAMPLE</td>
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">NAME</td>
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">0</td>
                    </tr>
                    <tr class="border-b border-blue-900 border-b-4 hover:bg-gray-200 hover:text-blue-900">
                        <th scope="row" class="py-3 px-3 text-left border-b border-gray-300 border-r border-gray-300">2</th>
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">ANOTHER UNIT</td>
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300 border-r border-gray-300">SAMPLE</td>
                        <td class="py-3 px-3 border-b border-gray-300 border-r border-gray-300">20,000.00</td>
                    </tr>
                </tbody>                
            </table>
        </div>
    </div>
</div>

    <!-- Chart -->
    <div class="border border-gray-300 text-white uppercase text-center text-md rounded-xl">
        <div class="bg-blue-900 text-white uppercase text-center p-4 text-md rounded-xl mx-2 my-2">
            Production Year-to-Date 2025
        </div>
            
        <div class="flex space-x-4 mb-4 p-3">
            <div class="w-1/2 bg-white">
                <div class="bg-white text-center bg-blue-900 py-3 text-black rounded-t-2xl border-2 border-black">Branch Monthly Production</div>
                <div class="w-full bg-gray-200 rounded-b-2xl p-5 border border-gray-400">
                    <canvas id="myChart1"></canvas>
                </div>
            </div>
                
            <div class="w-1/2 bg-blue-900">
                <div class="bg-white text-center bg-blue-900 py-3 text-white rounded-t-2xl border-2 border-black">Unit Monthly Production</div>
                <div class="w-full bg-gray-200 rounded-b-2xl p-5 border border-gray-400">
                    <canvas id="myChart2" ></canvas>
                </div>
            </div>
        </div>

        <div class="flex space-x-4 p-3">
            <div class="w-1/2 bg-blue-900">
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