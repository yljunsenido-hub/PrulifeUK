<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">

    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-4">Create Account</h1>
        <div class="mb-4">
            <a href="#" class="text-blue-500 hover:underline">Back to list</a>
        </div>

        <form>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Agent Code:</label>
                    <input type="text" class="border border-gray-300 rounded p-2 w-full" />
                </div>
                <div>
                    <label class="block text-gray-700">Recruiter:</label>
                    <input type="text" class="border border-gray-300 rounded p-2 w-full" />
                </div>
                <div>
                    <label class="block text-gray-700">Role:</label>
                    <select class="border border-gray-300 rounded p-2 w-full">
                        <option>Select Role</option>
                        <option>Financial Advisor</option>
                        <option>Manager</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700">Branch:</label>
                    <select class="border border-gray-300 rounded p-2 w-full">
                        <option>Select Branch</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700">Unit:</label>
                    <select class="border border-gray-300 rounded p-2 w-full">
                        <option>Select Unit</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700">SubUnit:</label>
                    <select class="border border-gray-300 rounded p-2 w-full">
                        <option>Select SubUnit</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700">First Name:</label>
                    <input type="text" class="border border-gray-300 rounded p-2 w-full" />
                </div>
                <div>
                    <label class="block text-gray-700">Middle Name:</label>
                    <input type="text" class="border border-gray-300 rounded p-2 w-full" />
                </div>
                <div>
                    <label class="block text-gray-700">Last Name:</label>
                    <input type="text" class="border border-gray-300 rounded p-2 w-full" />
                </div>
                <div>
                    <label class="block text-gray-700">Display Name:</label>
                    <input type="text" class="border border-gray-300 rounded p-2 w-full" />
                </div>
                <div>
                    <label class="block text-gray-700">Email:</label>
                    <input type="email" class="border border-gray-300 rounded p-2 w-full" />
                </div>
                <div>
                    <label class="block text-gray-700">Mobile:</label>
                    <input type="text" class="border border-gray-300 rounded p-2 w-full" />
                </div>
                <div>
                    <label class="block text-gray-700">Coding Date:</label>
                    <input type="date" class="border border-gray-300 rounded p-2 w-full" />
                </div>
                <div>
                    <label class="block text-gray-700">Agent Status:</label>
                    <select class="border border-gray-300 rounded p-2 w-full">
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="mt-6 bg-green-500 text-white px-4 py-2 rounded">Create Agent</button>
        </form>
    </div>

</body>
</html>