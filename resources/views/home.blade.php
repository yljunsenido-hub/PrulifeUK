<html>
<head>
    <title>Blue Chalcedony Quartz Branch</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
   <style>
        .slide {
            min-width: 100%; /* Ensure each slide takes full width */
            transition: transform 1s ease-in-out; /* Smooth transition for sliding effect */
        }
        .slideshow-container {
            display: flex; /* Use flexbox to arrange slides in a row */
            transition: transform 1s ease-in-out; /* Smooth transition for sliding effect */
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-4">
        <div class="bg-white shadow-md rounded-lg overflow-hidden relative">
            <div class="slideshow-container">
                <!-- Images will be injected here by JavaScript -->
            </div>
            <button class="prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" onclick="changeSlide(1)">&#10095;</button>
        </div>
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
        }

        // Function to show slides
        function showSlides() {
            const slides = document.getElementsByClassName("slide");
            const totalSlides = slides.length;

            // Update the transform property to slide the images
            const slideshowContainer = document.querySelector('.slideshow-container');
            slideshowContainer.style.transform = `translateX(-${slideIndex * 100}%)`;

            // Move to the next slide
            slideIndex++;
            if (slideIndex >= totalSlides) {
                slideIndex = 0; // Loop back to the first image
            }

            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }

        function changeSlide(n) {
            const slides = document.getElementsByClassName("slide");
            const totalSlides = slides.length;

            // Only allow forward navigation
            if (n === 1) {
                slideIndex++;
                if (slideIndex >= totalSlides) {
                    slideIndex = 0; // Loop back to the first image
                }
            }

            // Update the transform property to slide the images
            const slideshowContainer = document.querySelector('.slideshow-container');
            slideshowContainer.style.transform = `translateX(-${slideIndex * 100}%)`;
        }

        // Load images and start the slideshow
        loadImages();
        showSlides();
    </script>


        <div class="bg-gray-200 text-center py-2 mt-4">
            Production Month-to-Date as of February 24, 2025
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">
            <div class="bg-green-500 text-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Personal</h2>
                <p>Issued: P 0.00</p>
                <p>NAP: P 0.00</p>
                <p>TOTAL MTD: P 0.00</p>
                <p>YTD: P 0.00</p>
                <p>YTD NON-PULSE CC: 0.00</p>
            </div>
            <div class="bg-teal-500 text-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Sub-Unit</h2>
                <p>Issued: P 352,499.15</p>
                <p>Pending Issuance: P 0.00</p>
                <p>TOTAL MTD: P 352,499.15</p>
            </div>
            <div class="bg-teal-500 text-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Unit</h2>
                <p>Issued: P 352,499.15</p>
                <p>Pending Issuance: P 0.00</p>
                <p>TOTAL MTD: P 352,499.15</p>
            </div>
            <div class="bg-blue-500 text-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Branch</h2>
                <p>Issued: P 2,345,319.39</p>
                <p>Pending Issuance: P 0.00</p>
                <p>TOTAL MTD: P 2,345,319.39</p>
            </div>
        </div>
    </div>

