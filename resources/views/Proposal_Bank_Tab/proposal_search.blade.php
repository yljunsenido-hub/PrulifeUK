<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>BLUE CHALCEDONY MANAGEMENT SYSTEM</title>
</head>
<body class="bg-gray-100 p-6 border border-gray-300">
    <div class="container mx-auto max-w-8xl bg-white p-6 rounded-lg shadow-md mb-3">
        <p class="text-4xl font-semibold mb-4">Proposal Search</p>

        <div class="bg-white p-6 flex space-x-6">
        <div class="bg-white p-6 rounded-lg shadow-lg flex-1 border-2 border-slate-500">
            <div class="bg-gray-200 p-3 rounded-md mb-4">
                <h2 class="text-lg font-semibold">Client Information</h2>
            </div>
                
            <div class="flex items-center mb-4">
                <label for="client-name" class="block text-lg font-medium text-gray-700 w-1/3 ">Name</label>
                <input type="text" id="client-name" placeholder="Client's Name" class="mt-1 block w-2/3 border border-gray-300 rounded-md p-2" />
            </div>
                
                <div class="flex items-center mb-4">
                <label for="client-email" class="block text-lg font-medium text-gray-700 w-1/3">Email</label>
                <input type="email" id="client-email" placeholder="Client's Email" class="mt-1 block w-2/3 border border-gray-300 rounded-md p-2" />
            </div>
                
            <div class="flex items-center mb-4">
                <label for="client-contact" class="block text-lg font-medium text-gray-700 w-1/3">Contact No.</label>
                <input type="tel" id="client-contact" placeholder="Contact No." class="mt-1 block w-2/3 border border-gray-300 rounded-md p-2" />
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg flex-1 border-2 border-slate-500">
            <div class="bg-gray-200 p-3 rounded-md mb-4">
                <h2 class="text-lg font-semibold">Proposal Information</h2>
            </div>
                
            <div class="flex items-center mb-4">
                <label for="client-age" class="block text-lg font-medium text-gray-700 w-1/3">Age</label>
                <select id="client-age" class="mt-1 block w-2/3 border border-gray-300 rounded-md p-2">
                    <option value="" disabled selected>Select Age</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    <option value="47">47</option>
                    <option value="48">48</option>
                    <option value="49">49</option>
                    <option value="50">50</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
                
            <div class="flex items-center mb-4">
                <label for="min-budget" class="block text-lg font-medium text-gray-700 w-1/3">Minimum Budget</label>
                <input type="text" id="min-budget" placeholder="Minimum Budget" class="mt-1 block w-2/3 border border-gray-300 rounded-md p-2" />
            </div>
                
            <div class="flex items-center mb-4">
                <label for="max-budget" class="block text-lg font-medium text-gray-700 w-1/3">Maximum Budget</label>
                <input type="text" id="max-budget" placeholder="Maximum Budget" class="mt-1 block w-2/3 border border-gray-300 rounded-md p-2" />
            </div>
        </div>  
    </div>

        <div class="p-1 rounded-lg flex justify-center  ">
            <button type="button" class="w-full h-12 text-lg text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-normal rounded-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
        </div>

    <div class=" p-4 border-2 border-gray-300 bg-gray-200 font-medium mt-3 text-blue-600 rounded-tr-xl rounded-tl-xl">
        <p>Sample Proposal</p>
    </div>
    <div class="overflow-x-auto">
            <table class="min-w-full bg-white border-2 border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Product</th>
                        <th class="py-3 px-6 text-left">Term</th>
                        <th class="py-3 px-6 text-left">Premium</th>
                        <th class="py-3 px-6 text-left">Sum Assured</th>
                        <th class="py-3 px-6 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-semibold">
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6"></td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
    
    
</body>
</html>