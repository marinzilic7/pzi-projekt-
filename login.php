<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Firebox</title>
</head>
<body>
    <div data-aos="zoom-in">
        <div class="login-register">
    
        <div class="login" id="log-js">
        
            <form id="ajmo" action="">
             <div class= "h-icon">
                    <h1>FIREBOX</h1>
                    <img src="fire-icon.png" alt="" height="45px" width="45px">
                </div>
        
                <input type="text" name="first_name" placeholder="Ime" required>
                <input type="text" name="last_name" placeholder="Prezime" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button id="reg-but" type="submit">Registriraj se</button>
                <br>

                <p>Aready have an account? Then <a id="a-log" href="login.view.php">Login</a></p>

            </form>
        </div>
    </div>
    

    <script src="app.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>