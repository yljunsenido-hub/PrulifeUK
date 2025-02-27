<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCQ AGENTS PORTAL</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex flex-col min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/background.png')}}');">


    <div class="flex-grow flex items-center justify-center">
        <div class="h-100 bg-white shadow-xl rounded-lg p-8 w-full max-w-sm border-2">

        <div class="flex justify-center mb-4">
            <img src="images/bcdqlogo.png" alt="bcdq logo" class="w-20 h-30 rounded-lg">
        </div>
        <form>
                <h2 class="text-blue-900 text-2xl font-bold text-center mb-6">BLUE CHALCEDONY QUARTZ AGENTS PORTAL</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="email">Agent Code</label>
                    <input name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Agent Code" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="password">Password</label>
                    <input name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password" required>
                </div>
                <div class="flex justify-center">
                    <button class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 w-full rounded focus:outline-none focus:shadow-outline" type="submit">
                        Login
                    </button>
                </div>
        </form>
        
            
            <p class="mt-4 text-gray-600 text-sm text-center">
                <a href="#" class="text-blue-900 hover:text-blue-700">Forgot Password?</a>
            </p>
        </div>
    </div>
     

    <footer class="bg-blue-900 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-5">
            <div class="text-left text-sm">
                <p>Copyright</p>
            </div>
            <div class="text-center text-sm">
                <p></p>
            </div>
            <div class="text-right text-sm">
                <p>Terms & Conditions</p>
            </div>
        </div>
    </footer>

</body>
</html>