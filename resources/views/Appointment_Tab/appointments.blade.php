<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
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
            width: 280px;
            height: calc(100% - 72px);
            background-image: linear-gradient(to bottom, #1e3a8a, #1d4ed8);
            color: white;
            box-shadow: 0 5px rgba(0, 0, 0, 0.1), inset 0 4px 8px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            padding: 20px;
            overflow-y: auto;
    
    /* Sidebar is visible by default */
        transform: translateX(0);
         opacity: 1;
         visibility: visible;
        transition: transform 0.4s ease, opacity 0.3s ease, visibility 0.3s ease;
        }

        .sidebar.hide {
            transform: translateX(-100%);
             opacity: 0;
            visibility: hidden;
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

        .sidebar.hide {
            transform: translateX(-100%);
            opacity: 0;
            visibility: hidden;
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
        
        .dropdown li:hover a {
    color: #f8e9a1; /* Change this to your desired hover color */
    background-color: rgba(255, 255, 255, 0.1); /* Optional: Add a background color on hover */
    border-radius: 4px; /* Optional: Add rounded corners */
}

        /* Main content styles */
        .content {
            transition: margin-left 0.4s ease, margin-right 0.4s ease;
            margin: 0 auto;
            max-width: 1500px;
            padding: 20px;
            margin-left: 280px; /* Adjust based on sidebar width */
        }

        .content.shift {
            margin-left: 20px; /* When sidebar is hidden */
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
    <a href="{{ route('home') }}">
            <button>
                <img src="images/bcdqlogo.png" alt="bcdq logo" class="h-10 w-10 mr-4">
            </button>
            
        </a>
        <a href="{{ route('home') }}">
            <button>
                <span class="text-white text-lg font-semibold">BLUE CHALCEDONY QUARTZ BRANCH</span>
            </button>
        </a>
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
        
        <style>
         input::placeholder {
            color: white;
            }
        </style>
    </nav>

     <script>
       function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const content = document.getElementById("main-content");

            if (sidebar.classList.contains("hide")) {
                sidebar.classList.remove("hide");
                content.classList.remove("shift"); // Shift content when sidebar is visible
            } else {
                sidebar.classList.add("hide");
                content.classList.add("shift"); // Shift content when sidebar is hidden
            }
        }

        let currentOpenDropdown = null;

        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);

            if (currentOpenDropdown && currentOpenDropdown !== dropdown) {
                currentOpenDropdown.classList.remove('show');
                currentOpenDropdown.style.maxHeight = '0';
                currentOpenDropdown.style.opacity = '0';
            }

            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
                dropdown.style.maxHeight = '0';
                dropdown.style.opacity = '0';
            } else {
                dropdown.classList.add('show');
                dropdown.style.maxHeight = '500px';
                dropdown.style.opacity = '1';
            }

            currentOpenDropdown = dropdown.classList.contains('show') ? dropdown : null;
        }
        
    </script>



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
                    <li><a href="{{ route('submitted_cases') }}" class="text-md text-gray-300 block pl-8 py-2">Submitted Cases</a></li>
                    <li><a href="{{ route('issued_casesNew') }}" class="text-md text-gray-300 block pl-8 py-2">Issued Cases</a></li>
                    <li><a href="{{ route('outreq_cases') }}" class="text-md text-gray-300 block pl-8 py-2">Outreq Cases</a></li>
                    <li><a href="{{ route('declined_cases') }}" class="text-md text-gray-300 block pl-8 py-2 mb-6">Declined/Postponed Cases</a></li>
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
                    <li><a href="{{ route('submission_Approval') }}" class="text-md text-gray-300 block pl-8 py-2">Submission Approval</a></li>
                    <li><a href="{{ route('new_Business_Maintenance') }}" class="text-md text-gray-300 block pl-8 py-2">New Business Maintenance</a></li>
                    <li><a href="{{ route('business_issued_Cases') }}" class="text-md text-gray-300 block pl-8 py-2 mb-6">Issued Cases</a></li>
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
                    <li><a href="{{ route('agentMTD') }}" class="text-md text-gray-300 block pl-8 py-2">Agent MTD</a></li>
                    <li><a href="{{ route('agentYTD') }}" class="text-md text-gray-300 block pl-8 py-2">Agent YTD</a></li>
                    <li><a href="{{ route('subUnitSummary') }}" class="text-md text-gray-300 block pl-8 py-2">Sub-Unit Summary</a></li>
                    <li><a href="{{ route('unitSummary') }}" class="text-md text-gray-300 block pl-8 py-2">Unit Summary</a></li>
                    <li><a href="{{ route('branchSummary') }}" class="text-md text-gray-300 block pl-8 py-2">Branch Summary</a></li>
                    <li><a href="{{ route('branchHonorRollsMTD') }}" class="text-md text-gray-300 block pl-8 py-2">Branch Honor Rolls</a></li>
                    <li><a href="{{ route('unitHonorRolls') }}" class="text-md text-gray-300 block pl-8 py-2">Unit Honor Rolls</a></li>
                    <li><a href="{{ route('agm') }}" class="text-md text-gray-300 block pl-8 py-2">Custom Group</a></li>
                    <li><a href="{{ route('personaltogo') }}" class="text-md text-gray-300 block pl-8 py-2">Personal To Go's (BETA)</a></li>
                    <li><a href="{{ route('Qualifier') }}" class="text-md text-gray-300 block pl-8 py-2">Qualifiers (BETA)</a></li>
                    <li><a href="{{ route('MDRT') }}" class="text-md text-gray-300 block pl-8 py-2">MDRT Tracker</a></li>
                    <li><a href="{{ route('easyReports') }}" class="text-md text-gray-300 block pl-8 py-2 mb-6">Easy Reports</a></li>
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
                    <li><a href="{{ route('poster_templates') }}" class="text-md text-gray-300 block pl-7 py-3 mb-6">Poster Templates</a></li>
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
                    <li><a href="{{ route('proposal_search') }}" class="text-md text-gray-300 block pl-7 py-3">Proposal Search</a></li>
                    <li><a href="{{ route('proposal_list') }}" class="text-md text-gray-300 block pl-7 py-3 mb-6">Proposal List</a></li>
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
                    <li><a href="{{ route('recmaintenance') }}" class="text-md text-gray-300 block pl-8 py-3">Recruit</a></li>
                    <li><a href="{{ route('recprocess') }}" class="text-md text-gray-300 block pl-8 py-3 mb-6">Recruitment Process</a></li>
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
                    <li><a href="{{ route('poster_template_maintenance') }}" class="text-md text-gray-300 block pl-8 py-3">Poster Template Maintenance</a></li>
                    <li><a href="{{ route('top_poster_maintenance') }}" class="text-md text-gray-300 block pl-8 py-3">Poster Maintenance</a></li>
                    <li><a href="{{ route('agent_maintenance') }}" class="text-md text-gray-300 block pl-8 py-3">Agent Maintenance</a></li>
                    <li><a href="{{ route('unit_maintenance') }}" class="text-md text-gray-300 block pl-8 py-3">Unit Maintenance</a></li>
                    <li><a href="{{ route('sub_unit_maintenance') }}" class="text-md text-gray-300 block pl-8 py-3">Sub-Unit Maintenance</a></li>
                    <li><a href="{{ route('digital_card_maintenance') }}" class="text-md text-gray-300 block pl-8 py-3">Digital Card Maintenance</a></li>
                    <li><a href="{{ route('scheduled_tasks') }}" class="text-md text-gray-300 block pl-8 py-3 mb-6">Scheduled Tasks</a></li>
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
                    <li><a href="{{ route('upload_issued') }}" class="text-md text-gray-300 block pl-8 py-3">Upload Issued</a></li>
                    <li><a href="{{ route('upload_nap') }}" class="text-md text-gray-300 block pl-8 py-3">Upload NAP</a></li>
                    <li><a href="{{ route('upload_due_list') }}" class="text-md text-gray-300 block pl-8 py-3">Upload Due List</a></li>
                    <li><a href="{{ route('upload_batch_photo') }}" class="text-md text-gray-300 block pl-8 py-3">Upload Batch Photos</a></li>
                    <li><a href="{{ route('update_submission_policy_record') }}" class="text-md text-gray-300 block pl-8 py-3 mb-6">Update Submission/Policy Record</a></li>
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
                    <span class="menu-text text-md text-white"><a href="{{ route('appointments') }}">Appointments</a></span>
                </button>
            </li>
            </li>
        </ul>
    </div>

    <!-- Main Content Area -->
    <div id="main-content" class="content">
        <div class="container mx-auto max-w-8xl bg-white p-5 rounded-lg shadow-md mb-5">
            <p class="text-4xl font-semibold mb-5">Appointment Schedule</p>

            <div class="flex flex-wrap justify-center gap-4 w-full">
                <!-- Calendar -->
                
                    <style>

                        

                        header .calendar-navigation {
                            display: flex;
                        }

                        header .calendar-navigation span {
                            height: 38px;
                            width: 38px;
                            margin: 0 1px;
                            cursor: pointer;
                            text-align: center;
                            line-height: 38px;
                            border-radius: 50%;
                            user-select: none;
                            color: #aeabab;
                            font-size: 1.9rem;
                        }

                        .calendar-navigation span:last-child {
                            margin-right: -10px;
                        }

                        header .calendar-navigation span:hover {
                            background: #f2f2f2;
                        }

                        header .calendar-current-date {
                            font-weight: 500;
                            font-size: 1.45rem;
                        }

                        .calendar-body {
                            padding: 20px;
                        }

                        .calendar-body ul {
                            list-style: none;
                            flex-wrap: wrap;
                            display: flex;
                            text-align: center;
                        }

                        .calendar-body .calendar-dates {
                            margin-bottom: 20px;
                        }

                        .calendar-body li {
                            width: calc(100% / 7);
                            font-size: 1.07rem;
                            color: #414141;
                        }

                        .calendar-body .calendar-weekdays li {
                            cursor: default;
                            font-weight: 500;
                        }

                        .calendar-body .calendar-dates li {
                            margin-top: 30px;
                            position: relative;
                            z-index: 1;
                            cursor: pointer;
                        }

                        .calendar-dates li.inactive {
                            color: #aaa;
                        }

                        .calendar-dates li.active {
                            color: #fff;
                        }

                        .calendar-dates li::before {
                            position: absolute;
                            content: "";
                            z-index: -1;
                            top: 50%;
                            left: 50%;
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            transform: translate(-50%, -50%);
                        }

                        .calendar-dates li.active::before {
                            background: #6332c5;
                        }

                        .calendar-dates li:not(.active):hover::before {
                            background: #e4e1e1;
                        }
                    </style>

<script>
       function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const content = document.getElementById("main-content");

            if (sidebar.classList.contains("hide")) {
                sidebar.classList.remove("hide");
                content.classList.remove("shift"); // Shift content when sidebar is visible
            } else {
                sidebar.classList.add("hide");
                content.classList.add("shift"); // Shift content when sidebar is hidden
            }
        }

        let currentOpenDropdown = null;

        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);

            if (currentOpenDropdown && currentOpenDropdown !== dropdown) {
                currentOpenDropdown.classList.remove('show');
                currentOpenDropdown.style.maxHeight = '0';
                currentOpenDropdown.style.opacity = '0';
            }

            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
                dropdown.style.maxHeight = '0';
                dropdown.style.opacity = '0';
            } else {
                dropdown.classList.add('show');
                dropdown.style.maxHeight = '500px';
                dropdown.style.opacity = '1';
            }

            currentOpenDropdown = dropdown.classList.contains('show') ? dropdown : null;
        }
        
    </script>


                    <div class="flex-1 w-1/6">
                        <div class="calendar-container w-full rounded-3xl border-2 border-gray-300 mb-7">
                        <header class="calendar-header bg-blue-900 flex rounded-t-2xl items-center justify-between py-3 px-4 text-yellow-300">
                        <p class="calendar-current-date"></p>   
                        <div class="calendar-navigation flex items-center pr-3">
                            <span id="calendar-prev" class="material-symbols-rounded bg-yellow-400 "> <!-- Added mr-2 for right margin -->
                                <svg class="h-9 w-9 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"/>
                                    <polyline points="15 6 9 12 15 18" />
                                </svg>
                            </span>
                            <span id="calendar-next" class="material-symbols-rounded bg-yellow-400">
                                <svg class="h-9 w-10 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6" />
                                </svg>
                            </span>
                        </div>
                        </header>

                                <div class="calendar-body border bg-white border-gray-400 ml-4 mb-4 mt-4 mr-4 rounded-lg">
                                    <ul class="calendar-weekdays">
                                        <li>Sun</li>
                                        <li>Mon</li>
                                        <li>Tue</li>
                                        <li>Wed</li>
                                        <li>Thu</li>
                                        <li>Fri</li>
                                        <li>Sat</li>
                                    </ul>
                                    <ul class="calendar-dates"></ul>
                                </div>
                            </div>

                    <script> 
                        let date = new Date();
                        let year = date.getFullYear();
                        let month = date.getMonth();

                        const day = document.querySelector(".calendar-dates");

                        const currdate = document
                            .querySelector(".calendar-current-date");

                        const prenexIcons = document
                            .querySelectorAll(".calendar-navigation span");

                        // Array of month names
                        const months = [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                            "August",
                            "September",
                            "October",
                            "November",
                            "December"
                        ];

                        // Function to generate the calendar
                        const manipulate = () => {

                            // Get the first day of the month
                            let dayone = new Date(year, month, 1).getDay();

                            // Get the last date of the month
                            let lastdate = new Date(year, month + 1, 0).getDate();

                            // Get the day of the last date of the month
                            let dayend = new Date(year, month, lastdate).getDay();

                            // Get the last date of the previous month
                            let monthlastdate = new Date(year, month, 0).getDate();

                            // Variable to store the generated calendar HTML
                            let lit = "";

                            // Loop to add the last dates of the previous month
                            for (let i = dayone; i > 0; i--) {
                                lit +=
                                    `<li class="inactive">${monthlastdate - i + 1}</li>`;
                            }

                            // Loop to add the dates of the current month
                            for (let i = 1; i <= lastdate; i++) {

                                // Check if the current date is today
                                let isToday = i === date.getDate()
                                    && month === new Date().getMonth()
                                    && year === new Date().getFullYear()
                                    ? "active"
                                    : "";
                                lit += `<li class="${isToday}">${i}</li>`;
                            }

                            // Loop to add the first dates of the next month
                            for (let i = dayend; i < 6; i++) {
                                lit += `<li class="inactive">${i - dayend + 1}</li>`
                            }

                            // Update the text of the current date element 
                            // with the formatted current month and year
                            currdate.innerText = `${months[month]} ${year}`;

                            // update the HTML of the dates element 
                            // with the generated calendar
                            day.innerHTML = lit;
                        }

                        manipulate();

                        // Attach a click event listener to each icon
                        prenexIcons.forEach(icon => {

                            // When an icon is clicked
                            icon.addEventListener("click", () => {

                                // Check if the icon is "calendar-prev"
                                // or "calendar-next"
                                month = icon.id === "calendar-prev" ? month - 1 : month + 1;

                                // Check if the month is out of range
                                if (month < 0 || month > 11) {

                                    // Set the date to the first day of the 
                                    // month with the new year
                                    date = new Date(year, month, new Date().getDate());

                                    // Set the year to the new year
                                    year = date.getFullYear();

                                    // Set the month to the new month
                                    month = date.getMonth();
                                }

                                else {

                                    // Set the date to the current date
                                    date = new Date();
                                }

                                // Call the manipulate function to 
                                // update the calendar display
                                manipulate();
                            });
                        });

                    </script>


                    <div class="mt-3 flex space-x-3">
                        <div class="bg-blue-900 rounded-xl w-1/2 p-1 flex items-center justify-between px-3 py-2">
                            <p class="text-lg text-white font-semibold">Time Slots</p>
                            <button class="flex items-center justify-center w-10 h-10 bg-yellow-400 text-white rounded-md hover:bg-yellow-600 transition duration-200">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2a1 1 0 011 1v8h8a1 1 0 110 2h-8v8a1 1 0 11-2 0v-8H3a1 1 0 110-2h8V3a1 1 0 011-1z" />
                                </svg>
                            </button>
                        </div>
                        <div class="bg-blue-900 rounded-xl w-1/2 p-1 flex items-center justify-between px-3 py-2    ">
                            <p class="text-lg text-white font-semibold">Appointment Schedule</p>
                            <button class="flex items-center justify-center w-10 h-10 bg-yellow-400 text-white rounded-md hover:bg-yellow-600 transition duration-200">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2a1 1 0 011 1v8h8a1 1 0 110 2h-8v8a1 1 0 11-2 0v-8H3a1 1 0 110-2h8V3a1 1 0 011-1z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- table -->
                <div class="flex-1 w-5/6 mb-4 p-5 bg-white rounded-md shadow-md border border-gray-300">
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
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">ID</th>
                                    <th class="py-3 px-6 text-left">DATE TIME</th>
                                    <th class="py-3 px-6 text-left">NAMES</th>
                                    <th class="py-3 px-6 text-left">EMAIL</th>
                                    <th class="py-3 px-6 text-left">CONTACT NO.-unit</th>
                                    <th class="py-3 px-6 text-left">ACTION</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                <tr class="border-b border-gray-300 hover:bg-gray-100 ">
                                    <td class="py-3 px-6 border-r">1</td>
                                    <td class="py-3 px-6 border-r">A001</td>
                                    <td class="py-3 px-6 border-r">Finance</td>
                                    <td class="py-3 px-6 border-r">Accounting</td>
                                    <td class="py-3 px-6 border-r">Payroll</td>
                                    <td class="py-3 px-6 border-r">John Doe</td>
                                </tr>
                                <tr class="border-b border-gray-300 hover:bg-gray-100 ">
                                    <td class="py-3 px-6 border-r">1</td>
                                    <td class="py-3 px-6 border-r">A001</td>
                                    <td class="py-3 px-6 border-r">Finance</td>
                                    <td class="py-3 px-6 border-r">Accounting</td>
                                    <td class="py-3 px-6 border-r">Payroll</td>
                                    <td class="py-3 px-6 border-r">John Doe</td>
                                </tr>
                                <tr class="border-b border-gray-300 hover:bg-gray-100 ">
                                    <td class="py-3 px-6 border-r">1</td>
                                    <td class="py-3 px-6 border-r">A001</td>
                                    <td class="py-3 px-6 border-r">Finance</td>
                                    <td class="py-3 px-6 border-r">Accounting</td>
                                    <td class="py-3 px-6 border-r">Payroll</td>
                                    <td class="py-3 px-6 border-r">John Doe</td>
                                </tr>
                                <tr class="border-b border-gray-300 hover:bg-gray-100 ">
                                    <td class="py-3 px-6 border-r">1</td>
                                    <td class="py-3 px-6 border-r">A001</td>
                                    <td class="py-3 px-6 border-r">Finance</td>
                                    <td class="py-3 px-6 border-r">Accounting</td>
                                    <td class="py-3 px-6 border-r">Payroll</td>
                                    <td class="py-3 px-6 border-r">John Doe</td>
                                </tr>
                                <tr class="border-b border-gray-300 hover:bg-gray-100 ">
                                    <td class="py-3 px-6 border-r">1</td>
                                    <td class="py-3 px-6 border-r">A001</td>
                                    <td class="py-3 px-6 border-r">Finance</td>
                                    <td class="py-3 px-6 border-r">Accounting</td>
                                    <td class="py-3 px-6 border-r">Payroll</td>
                                    <td class="py-3 px-6 border-r">John Doe</td>
                                </tr>
                                <tr class="border-b border-gray-300 hover:bg-gray-100 ">
                                    <td class="py-3 px-6 border-r">1</td>
                                    <td class="py-3 px-6 border-r">A001</td>
                                    <td class="py-3 px-6 border-r">Finance</td>
                                    <td class="py-3 px-6 border-r">Accounting</td>
                                    <td class="py-3 px-6 border-r">Payroll</td>
                                    <td class="py-3 px-6 border-r">John Doe</td>
                                </tr>
                                <tr class="border-b border-gray-300 hover:bg-gray-100 ">
                                    <td class="py-3 px-6 border-r">1</td>
                                    <td class="py-3 px-6 border-r">A001</td>
                                    <td class="py-3 px-6 border-r">Finance</td>
                                    <td class="py-3 px-6 border-r">Accounting</td>
                                    <td class="py-3 px-6 border-r">Payroll</td>
                                    <td class="py-3 px-6 border-r">John Doe</td>
                                </tr>
                                <tr class="border-b border-gray-300 hover:bg-gray-100 ">
                                    <td class="py-3 px-6 border-r">1</td>
                                    <td class="py-3 px-6 border-r">A001</td>
                                    <td class="py-3 px-6 border-r">Finance</td>
                                    <td class="py-3 px-6 border-r">Accounting</td>
                                    <td class="py-3 px-6 border-r">Payroll</td>
                                    <td class="py-3 px-6 border-r">John Doe</td>
                                </tr>

                                <tr class="border-b border-gray-300 hover:bg-gray-100">
                                    <td class="py-3 px-6 border-r">2</td>
                                    <td class="py-3 px-6 border-r">A002</td>
                                    <td class="py-3 px-6 border-r">HR</td>
                                    <td class="py-3 px-6 border-r">Recruitment</td>
                                    <td class="py-3 px-6 border-r">Talent Acquisition</td>
                                    <td class="py-3 px-6 border-r">Jane Smith</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

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
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>