<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Agent Group Maintenance</title>
</head>
<body class="bg-gray-100 p-6 border border-gray-300">
    <div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Agent Group Maintenance</h2>

        <div class="mb-4 p-4 bg-gray-500 rounded-md flex justify-between items-center">
    <h3 class="text-lg font-semibold text-white">Groups</h3>
    <button class="px-3 py-1 bg-white text-gray-700 rounded-md hover:bg-gray-200 text-sm font-bold" id="AddButton">✚</button>
</div>

        <div class="mb-4 flex items-center justify-between">
    <div class="flex items-center">
        <label for="entries" class="mr-2 text-sm text-gray-600">Show entries:</label>
        <select id="entries" class="border border-gray-300 rounded-md p-2">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>

    <div class="flex items-center">
        <label for="search" class="mr-2 text-sm text-gray-600">Search:</label>
        <input type="text" id="search" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm" placeholder="Search...">
    </div>
    
</div>

        <div class="overflow-x-auto">
    <table id="dataTable" class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-500 text-white text-sm leading-normal">
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

    // Run the calculation when the page is loaded
    window.onload = calculateTotalsAndAverages;
</script>


                </tbody>
            </table>
        </div>

<div class="flex justify-end items-center mt-4 space-x-2">

    <div class="ml-4 flex space-x-2">
        <!-- Previous Button -->
        <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 text-sm" id="previousBtn">Previous</button>

    <!-- Page Numbers (Clickable) -->
    <div class="mr-1 flex items-center space-x-2">
        <span class="text-xs text-gray-600"></span>
        <div id="pageNumbers" class="flex space-x-1">
            <!-- Page numbers will be dynamically inserted here -->
        </div>
        
        <span class="ml-1 text-xs text-gray-600"></span> <!-- Update dynamically -->
    </div>

        <!-- Next Button -->
        <button class="px-3 py-1 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 text-sm" id="nextBtn">Next</button>
    </div>
</div>


<script>
    let currentPage = 1;
    const totalPages = 3;  // Total number of pages (can be updated dynamically)
    const previousBtn = document.getElementById('previousBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageNumbersContainer = document.getElementById('pageNumbers');

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

    // Initialize page numbers and update info
    generatePageNumbers();
    updatePageInfo();
</script>



    </div>

    
</body>
</html>