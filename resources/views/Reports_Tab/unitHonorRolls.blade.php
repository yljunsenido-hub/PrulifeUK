<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>BLUE CHALCEDONY MANAGEMENT SYSTEM</title>
</head>

<body class="bg-gray-100 p-6 border border-gray-300">
    <div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-4xl font-semibold mb-4">UNIT TOP AGENTS MONTH TO DATE REPORT</h2>
        
        <div class="container mx-auto rounded-md shadow-sm bg-white border pl-3 pr-3 pt-3 pb-3 mb-2 flex flex-col space-y-5">

        <h1 class="container mx-auto max-w-8xl bg-blue-900 p-3 rounded-l rounded-r shadow-md mb-2">
        <p class="ml-2 text-yellow-300 hover:underline hover:text-white">Switch to YTD</p> </h1>

        <div class="container mx-auto max-w-8xl bg-white-300 p-4 rounded-l shadow-md">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Rank</th>
                            <th class="py-3 px-6 text-left">Branch</th>
                            <th class="py-3 px-6 text-left">Unit</th>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">APE</th>
                            <th class="py-3 px-6 text-left">CC</th>
                            <th class="py-3 px-6 text-left">AVE. SA</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="py-3 px-6">1</td>
                            <td class="py-3 px-6">A001</td>
                            <td class="py-3 px-6">Finance</td>
                            <td class="py-3 px-6">Accounting</td>
                            <td class="py-3 px-6">Payroll</td>
                            <td class="py-3 px-6">John Doe</td>
                            <td class="py-3 px-6">Jane Smith</td>
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="py-3 px-6">2</td>
                            <td class="py-3 px-6">A002</td>
                            <td class="py-3 px-6">HR</td>
                            <td class="py-3 px-6">Recruitment</td>
                            <td class="py-3 px-6">Talent Acquisition</td>
                            <td class="py-3 px-6">Jane Smith</td>
                            <td class="py-3 px-6">Jane Smith</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
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
    
</body>
</html>