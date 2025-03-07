<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Card Maintenance</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-6">
    <h2 class="text-xl font-semibold mb-4">Digital Card Maintenance</h2>
    <h4 class="text-lg mb-2">Add Agent Detail</h4>

    <form id="agentForm" onsubmit="return validateForm()" class="bg-white p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <label for="digitalCardId" class="block text-sm font-medium text-gray-700">Digital Card ID</label>
            <input type="text" id="digitalCardId" name="digitalCardId" required class="mt-1 block w-1/2 border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-500" />
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Agent</label>
            <div class="flex flex-col space-y-2">
                <input type="text" id="agentCode" name="agentCode" placeholder="Agent Code" required class="block w-1/3 border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-500" />
                <input type="text" id="agentName" name="agentName" placeholder="Agent Name" required class="block w-1/3 border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-500" />
            </div>
        </div>

        <div class="flex justify-between">
            <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600">Link</button>
            <button type="button" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600" onclick="goBack()">Back</button>
        </div>
    </form>
</div>

<script>
    function validateForm() {
        const digitalCardId = document.getElementById('digitalCardId').value;
        const agentCode = document.getElementById('agentCode').value;
        const agentName = document.getElementById('agentName').value;

        if (!digitalCardId || !agentCode || !agentName) {
            alert('All fields are required!');
            return false;
        }
        alert('Agent linked successfully!');
        return true; // Form will be submitted
    }

    function goBack() {
        window.history.back();
    }
</script>

</body>
</html>