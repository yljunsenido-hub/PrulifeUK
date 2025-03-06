<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Branch Operations</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Function to handle file input and update the "No file chosen" text
    document.addEventListener('DOMContentLoaded', function() {
      const fileInput = document.getElementById('file-upload');
      const fileNameDisplay = document.getElementById('file-name');
      const imagePreview = document.getElementById('image-preview');

      fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
          const fileName = file.name;
          fileNameDisplay.textContent = fileName;

          // Create a URL for the selected image and set it as the src of the image preview
          const reader = new FileReader();
          reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.classList.remove('hidden'); // Show the image preview
          };
          reader.readAsDataURL(file);
        } else {
          fileNameDisplay.textContent = 'No file chosen';
          imagePreview.classList.add('hidden'); // Hide the image preview if no file is chosen
        }
      });
    });

    // Function to confirm before uploading
    function confirmUpload() {
      const fileInput = document.getElementById('file-upload');
      if (fileInput.files.length > 0) {
        const fileName = fileInput.files[0].name;
        document.getElementById('modal-message').textContent = `Are you sure you want to upload the image: ${fileName}?`;
        document.getElementById('modal').classList.remove('hidden');
      } else {
        document.getElementById('upload-success').classList.add('hidden'); // Hide success message if no file
        document.getElementById('modal-message').textContent = "Please choose an image to upload.";
        document.getElementById('modal').classList.remove('hidden');
      }
    }

    // Function to handle the confirmation of the upload
    function handleUploadConfirmation(isConfirmed) {
      const modal = document.getElementById('modal');
      if (isConfirmed) {
        // Show success message
        document.getElementById('upload-success').classList.remove('hidden'); // Show success message
      }
      modal.classList.add('hidden'); // Close the modal
    }
  </script>
</head>
<body class="bg-gray-100 py-10 px-4">
  <div class="max-w-4xl mx-auto bg-white p-8 shadow-lg rounded-lg">
    <h2 class="text-4xl font-bold mb-4 text-center text-gray-800">Branch Operations</h2>
    <p class="text-2xl text-gray-600 mb-6 text-center">Upload Batch Photos</p>

    <!-- File upload section -->
    <div class="space-y-6">
      <!-- File input -->
      <div class="flex flex-col md:flex-row items-center md:space-x-4">
        <input type="file" id="file-upload" class="border border-gray-300 p-3 rounded-md w-full md:w-auto focus:outline-none focus:ring-2 focus:ring-blue-500 text-center" accept=".jpeg, .jpg, .png">
      </div>

      <!-- File Name Display -->
      <p id="file-name" class="text-gray-700 text-sm text-center">No file chosen</p>

      <!-- Image Preview -->
      <img id="image-preview" class="hidden mx-auto mt-4 max-w-full h-auto rounded-md shadow-md" alt="Image Preview">

      <!-- Upload Button with Confirmation -->
      <button onclick="confirmUpload()" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition duration-300 text-center">
        UPLOAD IMAGE
      </button>

      <!-- Success Message -->
      <div id="upload-success" class="hidden text-green-600 text-center mt-4">
        <p>Image uploaded successfully!</p>
      </div>
    </div>
  </div>

  <!-- Confirmation Modal -->
  <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-6 w-11/12 md:w-1/3">
      <h3 class="text-lg font-semibold mb-4" id="modal-message">Are you sure you want to upload this image?</h3>
      <div class="flex justify-end">
        <button onclick="handleUploadConfirmation(true)" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">Yes</button>
        <button onclick="handleUploadConfirmation(false)" class="ml-2 bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition duration-300">No</button>
      </div>
    </div>
  </div>
</body>
</html>