<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rafly</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bg-loader">
        <div class="loader"></div>
    </div>
    
    <section></section>
    
   <div class="container">
        <form action="../send.php" method="post">
            <h1>Give Your Feedback</h1>
            <div class="id">
                <input type="text" name="name" placeholder="Username">
                <i class="far fa-user"></i>
            </div>
            <div class="id">
                <input type="email" name="email"  placeholder="Email Address">
                <i class="far fa-envelope"></i>
            </div>
            <textarea cols="15" rows="5" name="message" placeholder="Enter Your Opinions Here.."></textarea>
            <input type="submit" name="submit">
        </form>
   </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".bg-loader").hide();
        })
    </script>
</body>
</html>