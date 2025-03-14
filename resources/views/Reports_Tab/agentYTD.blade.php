<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agents Production Reports</title>
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
            margin-left: 295px; /* Adjust based on sidebar width */
            margin-right: 20px;
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
                    <li><a href="{{ route('agentMTD') }}" class="text-md text-gray-300 block pl-8 py-3">Poster Maintenance</a></li>
                    <li><a href="{{ route('agent_maintenance') }}" class="text-md text-gray-300 block pl-8 py-3">Agent Maintenance</a></li>
                    <li><a href="{{ route('unit_maintenance') }}" class="text-md text-gray-300 block pl-8 py-3">Unit Maintenance</a></li>
                    <li><a href="{{ route('sub_unit_maintenance') }}" class="text-md text-gray-300 block pl-8 py-3">Sub-Unit Maintenance</a></li>
                    <li><a href="{{ route('digital_card_maintenance') }}" class="text-md text-gray-300 block pl-8 py-3 mb-6">Digital Card Maintenance</a></li>
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
                    <li><a href="{{ route('agentMTD') }}" class="text-md text-gray-300 block pl-8 py-3">Upload Issued</a></li>
                    <li><a href="{{ route('agentMTD') }}" class="text-md text-gray-300 block pl-8 py-3">Upload NAP</a></li>
                    <li><a href="{{ route('agentMTD') }}" class="text-md text-gray-300 block pl-8 py-3">Upload Due List</a></li>
                    <li><a href="{{ route('agentMTD') }}" class="text-md text-gray-300 block pl-8 py-3">Upload Batch Photos</a></li>
                    <li><a href="{{ route('agentMTD') }}" class="text-md text-gray-300 block pl-8 py-3 mb-6">Update Submission/Policy Record</a></li>
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

<div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md mb-3">
        <p class="text-4xl font-semibold mb-4">Agents Production Reports</p>
    
    <div class="container shadow-md mb-3 mb-4 p-2 bg-blue-900 rounded-md flex justify-between items-center">
        <h1 class="pl-2 text-l text-yellow-300 font-semibold ">Year-to-date</h1>
</div>
        
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

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Rank</th>
                        <th class="py-3 px-6 text-left">Code</th>
                        <th class="py-3 px-6 text-left">Branch</th>
                        <th class="py-3 px-6 text-left">Unit</th>
                        <th class="py-3 px-6 text-left">Sub-unit</th>
                        <th class="py-3 px-6 text-left">Coding</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">NAP</th>
                        <th class="py-3 px-6 text-left">Issued</th>
                        <th class="py-3 px-6 text-left">Pending</th>
                        <th class="py-3 px-6 text-left">Total</th>
                        <th class="py-3 px-6 text-left">CC</th>
                        <th class="py-3 px-6 text-left">Ave. SA</th>
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
                        <td class="py-3 px-6 border-r">100</td>
                        <td class="py-3 px-6 border-r">20</td>
                        <td class="py-3 px-6 border-r">120</td>
                        <td class="py-3 px-6 border-r">CC1</td>
                        <td class="py-3 px-6 border-r">75%</td>
                        <td class="py-3 px-6 border-r">75%</td>
                        <td class="py-3 px-6 border-r">75%</td>
                    </tr>
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6 border-r">2</td>
                        <td class="py-3 px-6 border-r">A002</td>
                        <td class="py-3 px-6 border-r">HR</td>
                        <td class="py-3 px-6 border-r">Recruitment</td>
                        <td class="py-3 px-6 border-r">Talent Acquisition</td>
                        <td class="py-3 px-6 border-r">Jane Smith</td>
                        <td class="py-3 px-6 border-r">80</td>
                        <td class="py-3 px-6 border-r">10</td>
                        <td class="py-3 px-6 border-r">90</td>
                        <td class="py-3 px-6 border-r">CC2</td>
                        <td class="py-3 px-6 border-r">88%</td>
                        <td class="py-3 px-6 border-r">75%</td>
                        <td class="py-3 px-6 border-r">75%</td>
                    </tr>
                    <!-- Overall summary row -->
                    <tr class="bg-gray-200 text-black font-semibold">
                        <td class="py-3 px-6" colspan="7">Overall</td>
                        <td class="py-3 px-6">180</td>
                        <td class="py-3 px-6">30</td>
                        <td class="py-3 px-6">210</td>
                        <td class="py-3 px-6">-</td>
                        <td class="py-3 px-6">81.5%</td>
                        <td class="py-3 px-6">75%</td>
                    </tr>
                </tbody>
            </table>
        </div>
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