<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poster Maintenance</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-semibold mb-4">Poster Maintenance</h1>

        <div class="bg-white shadow rounded p-6">
            <div class="mb-4">
                <a href="#" class="text-blue-500 hover:underline">Back to list</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Template Selection -->
                <div>
                    <label class="block text-lg font-medium">Template</label>
                    <select class="block w-full mt-1 rounded border border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                        <option>Select Template</option>
                    </select>
                </div>
                <div class="col-span-1 md:col-span-2">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Preview" class="border border-gray-300 mt-1" style="height: 150px; width: 200px;">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <!-- Template for Unit -->
                <div>
                    <label class="block text-lg font-medium">Template for your unit <br>(BLUE CHALCEDONY DIRECT)?</label>
                    <label class="inline-flex items-center mt-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500">
                        <span class="ml-2">Yes</span>
                    </label>
                </div>

                <!-- Featured Template -->
                <div>
                    <label class="block text-lg font-medium">Featured Template</label>
                    <label class="inline-flex items-center mt-2">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500">
                        <span class="ml-2">Yes</span>
                    </label>
                </div>

                <!-- Poster Title -->
                <div>
                    <label class="block text-lg font-medium">Poster Title</label>
                    <input type="text" class="block w-full mt-1 rounded border border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <!-- Description -->
                <div class="md:col-span-3">
                    <label class="block text-lg font-medium">Description</label>
                    <textarea class="block w-full mt-1 rounded border border-gray-300 py-2 px-3 focus:outline-none focus:border-blue-500 h-20"></textarea>
                </div>
            </div>

            <!-- File Uploads -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <div>
                    <label class="block text-lg font-medium">Preview (JPG)</label>
                    <label class="block mt-2">
                        <input type="file" class="hidden">
                        <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                        <span class="ml-2 text-gray-500">No file chosen</span>
                    </label>
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded text-sm mt-2">Upload</button>
                </div>

                <div>
                    <label class="block text-lg font-medium">Foreground (PNG)</label>
                    <label class="block mt-2">
                        <input type="file" class="hidden">
                        <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                        <span class="ml-2 text-gray-500">No file chosen</span>
                    </label>
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded text-sm mt-2">Upload</button>
                </div>

                <div>
                    <label class="block text-lg font-medium">Background (JPG)</label>
                    <label class="block mt-2">
                        <input type="file" class="hidden">
                        <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                        <span class="ml-2 text-gray-500">No file chosen</span>
                    </label>
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded text-sm mt-2">Upload</button>
                </div>

                <div>
                    <label class="block text-lg font-medium">Name Font (TTF or OTF)</label>
                    <label class="block mt-2">
                        <input type="file" class="hidden">
                        <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                        <span class="ml-2 text-gray-500">No file chosen</span>
                    </label>
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded text-sm mt-2">Upload</button>
                </div>

                <div>
                    <label class="block text-lg font-medium">Title Font (TTF or OTF)</label>
                    <label class="block mt-2">
                        <input type="file" class="hidden">
                        <span class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded cursor-pointer text-sm">Choose File</span>
                        <span class="ml-2 text-gray-500">No file chosen</span>
                    </label>
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-1 px-2 rounded text-sm mt-2">Upload</button>
                </div>
            </div>
    
            <!-- Action Buttons -->
            <div class="flex justify-end space-x-4 mt-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Render
                </button>
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Preview & Create
                </button>
            </div>
        </div>
    </div>
</body>
</html>