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
        <h2 class="text-4xl font-semibold mb-4">BRANCH TOP AGENTS MONTH-TO-DATE REPORT</h2>
        
        <h1 class="container mx-auto max-w-8xl bg-blue-900 p-2 rounded-l rounded-r shadow-md mb-3">
        <p class="ml-2 text-yellow-300 hover:underline hover:text-white">Switch to YTD</p> </h1>

        
        <div class="container mx-auto max-w-8xl bg-white-300 p-4 rounded-l shadow-md">
            <select id="month" class="border border-gray-300 rounded-md p-2 w-full">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
        
            <div class="overflow-x-auto py-4">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200 text-black uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Rank</th>
                            <th class="py-3 px-6 text-left">Branch</th>
                            <th class="py-3 px-6 text-left">Unit</th>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">CC</th>
                            <th class="py-3 px-6 text-left">APE</th>
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
                        </tr>
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="py-3 px-6">2</td>
                            <td class="py-3 px-6">A002</td>
                            <td class="py-3 px-6">HR</td>
                            <td class="py-3 px-6">Recruitment</td>
                            <td class="py-3 px-6">Talent Acquisition</td>
                            <td class="py-3 px-6">Jane Smith</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        
    </div>
    
</body>
</html>