<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Month-to-date Table</title>
</head>
<body class="bg-gray-100 p-6 border border-gray-300">
    <div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md mb-3">
        <p class="text-4xl font-semibold mb-4">Agents Production Reports</p>
    </div>
    <div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Month-to-date</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Rank</th>
                        <th class="py-3 px-6 text-left">Code</th>
                        <th class="py-3 px-6 text-left">Branch</th>
                        <th class="py-3 px-6 text-left">Unit</th>
                        <th class="py-3 px-6 text-left">Sub-unit</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Issued</th>
                        <th class="py-3 px-6 text-left">Pending</th>
                        <th class="py-3 px-6 text-left">Total</th>
                        <th class="py-3 px-6 text-left">CC</th>
                        <th class="py-3 px-6 text-left">Ave. SA</th>
                        <th class="py-3 px-6 text-left">Total</th>
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
                        <td class="py-3 px-6">100</td>
                        <td class="py-3 px-6">20</td>
                        <td class="py-3 px-6">120</td>
                        <td class="py-3 px-6">CC1</td>
                        <td class="py-3 px-6">75%</td>
                    </tr>
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6">2</td>
                        <td class="py-3 px-6">A002</td>
                        <td class="py-3 px-6">HR</td>
                        <td class="py-3 px-6">Recruitment</td>
                        <td class="py-3 px-6">Talent Acquisition</td>
                        <td class="py-3 px-6">Jane Smith</td>
                        <td class="py-3 px-6">80</td>
                        <td class="py-3 px-6">10</td>
                        <td class="py-3 px-6">90</td>
                        <td class="py-3 px-6">CC2</td>
                        <td class="py-3 px-6">88%</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>