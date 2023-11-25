<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <title>login</title>
</head>
<body class="overflow-hidden">
    <main class="pt-28 pb-32">
        <div class="container">
            <div class="max-w-xl mx-auto rounded-xl bg-[#2d323a]">
                <div class="mx-auto w-[120px] relative z-10 bottom-16 flex pb-0">
                <img src="image/klipartz.com.png" alt="">
                </div>
                <div class="w-full mx-auto text-center mb-16 relative bottom-10">
                    <h1 class="text-lg mb-2 dark:font-bold md:text-2xl font-bold text-white">Login Admin</h1>
                </div>
                <form action="sesi.php" method="post">
                    <div class="w-full px-14 lg:mx-auto relative bottom-10">
                        <div class="w-full mb-8">
                        <label for="" class="text-base font-bold text-white">Name :</label>
                            <input type="text" name="username" class="w-full  bg-white text-dark p-3 rounded-md focus:outline-none focus:ring-blue-700 focus:ring-2 focus:border-bluering-blue-700">
                        </div>
                        <div class="w-full mb-3">
                            <label for="" class="text-base font-bold text-white">Password :</label>
                            <input type="password" name="password" id="" class="w-full mb-2 bg-white text-dark p-3 rounded-md focus:outline-none focus:ring-blue-700 focus:ring-2 focus:border-blue-700"/>
                            <p class="text-sm text-red-500 invisible">Username atau Password salah*</p>
                        </div>
                        <div class="w-full pb-6">
                            <input type="submit" name="login" value="login" class="text-base font-semibold text-white bg-blue-600 py-3 px-8  rounded-md w-full hover:shadow-lg hover:opacity-80 transition duration-500 ease-in-out">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
        
