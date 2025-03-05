<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Chalcedony Quartz Branch</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        /* Sticky Navbar */
        nav {
            position: sticky; /* Stick the navbar to the top of the page */
            top: 0; /* Position it at the top */
            z-index: 1000; /* Ensure it's on top of other content */
        }

        /* Sidebar Style */
        .sidebar {
            position: fixed;
            top: 72px; /* Position below the navigation bar (adjust based on your navbar height) */
            left: 0; /* Position from the left */
            width: 260px;
            height: calc(100% - 72px); /* Full height minus navbar height (adjusted for the 72px navbar) */
            background-color: #1f2937; /* Dark grayish-blue color */
            color: white; /* Text color for better contrast */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            padding: 20px;
            transform: translateX(-100%); /* Start hidden off-screen */
            opacity: 0; /* Start hidden */
            visibility: hidden; /* Start hidden */
            transition: transform 0.4s ease, opacity 0.1s ease; /* Smooth transition */
            overflow-y: auto; /* Enable vertical scrolling */
        }

        .sidebar.show {
            transform: translateX(0); /* Slide in */
            opacity: 1; /* Fade in */
            visibility: visible; /* Make it visible */
        }

        /* Highlight menu items on hover */
        .menu-item:hover .menu-text {
            color: #60a5fa; /* Change text color on hover */
        }

        /* Custom scrollbar */
        .sidebar::-webkit-scrollbar {
            width: 8px; /* Width of the scrollbar */
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: #dbd8d8; /* Color of the scrollbar thumb */
            border-radius: 10px; /* Rounded corners for the scrollbar thumb */
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: #6b7280; /* Color of the scrollbar thumb on hover */
        }

        /* Dropdown Styles */
        .dropdown {
            display: none; /* Hide dropdowns by default */
        }

        .dropdown.show {
            display: block; /* Show dropdown when active */
        }

        /* Highlight dropdown items on hover */
        .dropdown a:hover {
            background-color: #4b5563; /* Darker gray for dropdown items on hover */
            color: #ffffff; /* Change text color to white for better contrast */
        }

        /* Main content styles */
        .content {
            transition: margin-left 0.4s ease, margin-right 0.4s ease; /* Smooth transition for content */
            margin: 0 auto; /* Center horizontally */
            max-width: 1500px; /* Set a max-width for the content */
            padding: 0px; /* Padding inside the content */
            margin-top: 15px; /* Push content below the navbar */
            margin-left: 20px; /* Add left margin */
            margin-right: 20px;
            
        }

        .content.shift {
            margin-left: 290px; /* Shift content to the right when sidebar is open */
            margin-right: 20px; /* Adjust right margin */
            
        }

        /* Carousel Styles */
        .carousel {
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            width: %;
            height: 200px; /* Adjust height as needed */
            margin-top: 20px; /* Space above the carousel */
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
            width: 300%; /* 100% for each image */
        }

        .carousel-item {
            width: 100%; /* Each item takes full width */
            flex: 0 0 100%; /* Prevent flex items from shrinking */
        }

        .carousel img {
            width: 100%; /* Make images responsive */
            height: auto; /* Maintain aspect ratio */
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
                <i class="fas fa-bars"></i> <!-- Sidebar icon -->
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
    <div class="sidebar" id="sidebar">
        <ul>
            <li class="menu-item"
                class="text-white w-full text-left py-1 pb-2" >
                    <span class="text-yellow-200">Activities
            </li>

            <li class="menu-item ">
                <button class="text-white w-full text-left py-1 pb-4" onclick="toggleDropdown('eventsDropdown')">
                    <span class="menu-text">Events</span> <i class="fas fa-chevron-down px-2"></i>
                </button>
                <ul class="dropdown" id="eventsDropdown">
                    <li><a href="#" class="block pl-4 py-1">Upcoming Events</a></li>
                    <li><a href="#" class="block pl-4 py-1">My Events</a></li>
                    <li><a href="#" class="block pl-4 py-1">Event Maintenance</a></li>
                </ul>
            </li>

             <li class="menu-item"
                class="text-white w-full text-left py-1 pb-2" >
                    <span class="text-yellow-200">Operations
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
                    <li><a href="#" class="block pl-4 py-1">Upload Issued
</a></li>
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
<<<<<<< HEAD
            <button class="prev absolute left-5 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next absolute right-5 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" onclick="changeSlide(1)">&#10095;</button>
        </div>

         <script>
        let slideIndex = 0; // Start at the first image
        const images = [
            "https://placehold.co/1200x400/ff7f7f/333333?text=Image+1",
            "https://placehold.co/1200x400/7f7fff/333333?text=Image+2",
            "https://placehold.co/1200x400/7fff7f/333333?text=Image+3"
        ];
=======
            <button class="carousel-button left" onclick="prevSlide()">&#10094;</button>
            <button class="carousel-button right" onclick="nextSlide()">&#10095;</button>
        </div>

        <script>
            let currentIndex = 0;

            function showSlide(index) {
                const slides = document.querySelectorAll('.carousel-item');
                const totalSlides = slides.length;
>>>>>>> 79ce315e97cab39368dc94f20505f7abe43662cd

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

            // Function to toggle dropdown menus
            function toggleDropdown(dropdownId) {
                const dropdown = document.getElementById(dropdownId);
                dropdown.classList.toggle("show"); // Show or hide the dropdown
            }
        </script>

        <div class="bg-gray-200 text-center py-2 mt-4">
            Production Month-to-Date as of February 24, 2025
        </div>
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
    </div>
</body>
</html>