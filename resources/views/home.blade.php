<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Chalcedony Quartz Branch</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        /* Sticky Navbar */
        nav {
            position: sticky; /* Stick the navbar to the top of the page */
            top: 0; /* Position it at the top */
            z-index: 1000; /* Ensure it's on top of other content */
        }

        .slide {
            min-width: 100%; /* Ensure each slide takes full width */
            transition: transform 1s ease-in-out; /* Smooth transition for sliding effect */
        }

        .slideshow-container {
            display: flex; /* Use flexbox to arrange slides in a row */
            position: relative; /* Position relative for absolute positioning of slides */
        }

        /* Sidebar Style */
        .sidebar {
            position: fixed;
            top: 72px; /* Position below the navigation bar (adjust based on your navbar height) */
            left: 0; /* Position from the left */
            width: 250px;
            height: calc(100% - 72px); /* Full height minus navbar height (adjusted for the 72px navbar) */
            background-color: #1f2937; /* Dark grayish-blue color */
            color: white; /* Text color for better contrast */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            padding: 20px;
            transform: translateX(-100%); /* Start hidden off-screen */
            opacity: 0; /* Start hidden */
            visibility: hidden; /* Start hidden */
            transition: transform 0.4s ease, opacity 0.1s ease; /* Smooth transition */
        }

        .sidebar.show {
            transform: translateX(0); /* Slide in */
            opacity: 1; /* Fade in */
            visibility: visible; /* Make it visible */
        }

        /* Main content styles */
        .content {
            transition: margin-left 0.4s ease, margin-right 0.4s ease; /* Smooth transition for content */
            margin: 0 auto; /* Center horizontally */
            max-width: 1500px; /* Set a max-width for the content */
            padding: 20px; /* Padding inside the content */
            margin-top: 32px; /* Push content below the navbar */
        }

        .content.shift {
            margin-left: 250px; /* Shift content to the right when sidebar is open */
            margin-right: 20px; /* Adjust right margin */
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Sticky Navigation Bar -->
    <nav class="bg-gray-800 p-4 flex justify-between items-center">
        <div class="flex items-center">
            <button class="mr-2 bg-transparent text-white p-2 rounded-md hover:bg-gray-700" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i> <!-- Sidebar icon -->
            </button>
            <img src="https://placehold.co/50x50" alt="Blue Chalcedony Quartz logo" class="h-10 w-10 mr-2">
            <span class="text-white text-lg font-semibold">BLUE CHALCEDONY QUARTZ BRANCH</span>
        </div>
        <div class="relative">
            <input type="text" placeholder="Search for..." class="p-2 rounded-md">
            <button class="absolute right-0 top-0 mt-2 mr-2">
                <i class="fas fa-search text-blue-500"></i>
            </button>
        </div>
        <div class="flex items-center space-x-10">
            <i class="btn fas fa-bell text-white hover:bg-primary transition ease-out duration-500"></i>
            <i class="fas fa-user text-white transition ease-out duration-500 "></i>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h2 class="text-lg font-semibold">Sidebar Content</h2>
        <div id="sidebar-content">Loading...</div>
    </div>

    <!-- Main Content -->
    <div class="content mx-auto mt-4" id="main-content">
        <div class="bg-white shadow-md rounded-lg overflow-hidden relative">
            <div class="slideshow-container">
                <!-- Images will be injected here by JavaScript -->
            </div>
            <button class="prev absolute left-5 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next absolute right-5 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white hover:on-mouse p-2 rounded-full" onclick="changeSlide(1)">&#10095;</button>
        </div>

        

         <script>
        let slideIndex = 0; // Start at the first image
        const images = [
            "https://placehold.co/1200x400/ff7f7f/333333?text=Image+1",
            "https://placehold.co/1200x400/7f7fff/333333?text=Image+2",
            "https://placehold.co/1200x400/7fff7f/333333?text=Image+3"
        ];

        // Function to load images into the slideshow
        function loadImages() {
            const slideshowContainer = document.querySelector('.slideshow-container');
            images.forEach((image) => {
                const img = document.createElement('img');
                img.src = image;
                img.alt = "Slideshow Image";
                img.className = "slide w-full";
                slideshowContainer.appendChild(img);
            });
            showSlides(); // Start the slideshow after loading images
        }

        // Function to show slides
        function showSlides() {
            const slides = document.getElementsByClassName("slide");
            const totalSlides = slides.length;

            // Fade out the current slide
            slides[slideIndex].classList.remove("active"); // Fade out current slide

            // Move to the next slide
            slideIndex++;
            if (slideIndex >= totalSlides) {
                slideIndex = 0; // Loop back to the first image
            }

            // Apply unique transitions
            slides[slideIndex].classList.add("active"); // Fade in next slide

            // Update the transform property to slide the images
            const slideshowContainer = document.querySelector('.slideshow-container');
            slideshowContainer.style.transform = `translateX(-${slideIndex * 100}%)`;

            setTimeout(showSlides, 3000); // Change slides every 3 seconds
        }

        // Change the slide based on user navigation
        function changeSlide(n) {
            slideIndex += n;
            const totalSlides = document.getElementsByClassName("slide").length;

            if (slideIndex < 0) {
                slideIndex = totalSlides - 1;
            }
            if (slideIndex >= totalSlides) {
                slideIndex = 0;
            }

            // Apply transition for sliding images
            document.querySelector('.slideshow-container').style.transform = `translateX(-${slideIndex * 100}%)`;
        }

        // Function to toggle the sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const content = document.getElementById("main-content");
            sidebar.classList.toggle("show"); // Show or hide the sidebar
            content.classList.toggle("shift"); // Shift content when sidebar is visible
        }

        // Load images when the page loads
        window.onload = loadImages;
    </script>



        <div class="bg-gray-200 text-center py-2 mt-4">
    Production Month-to-Date as of February 24, 2025
</div>
<div class="flex flex-compress justify-center gap-4 mt-4">
    <div class="flex-1 min-w-[250px] max-w-[300px] bg-green-500 text-white p-4 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold">Personal</h2>
        <p>Issued: P 0.00</p>
        <p>NAP: P 0.00</p>
        <p>TOTAL MTD: P 0.00</p>
        <p>YTD: P 0.00</p>
        <p>YTD NON-PULSE CC: 0.00</p>
    </div>
    <div class="flex-1 min-w-[250px] max-w-[300px] bg-teal-500 text-white p-4 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold">Sub-Unit</h2>
        <p>Issued: P 352,499.15</p>
        <p>Pending Issuance: P 0.00</p>
        <p>TOTAL MTD: P 352,499.15</p>
    </div>
    <div class="flex-1 min-w-[250px] max-w-[300px] bg-teal-500 text-white p-4 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold">Unit</h2>
        <p>Issued: P 352,499.15</p>
        <p>Pending Issuance: P 0.00</p>
        <p>TOTAL MTD: P 352,499.15</p>
    </div>
    <div class="flex-1 min-w-[250px] max-w-[300px] bg-blue-500 text-white p-4 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold">Branch</h2>
        <p>Issued: P 2,345,319.39</p>
        <p>Pending Issuance: P 0.00</p>
        <p>TOTAL MTD: P 2,345,319.39</p>
    </div>
</div>

   
</body>
</html>
