<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <!-- Bootstrap plugin -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- logo -->
        <link rel="icon" href="../Images/logo.png">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="style.css" rel="stylesheet" type="text/css">
        
        <style>
            body {background-color: white;}
            h1   {color: black;
                  text-align: center;}
            p    {color: white;}
            a    {color: black;
                  text-decoration: none;}
            hr   {color: black;}
            td   {text-align: center;
                  min-width:300px;}
            body {font-family: Arial, Helvetica, sans-serif;}
            * {box-sizing: border-box;}

            .input-container {
              display: -ms-flexbox; /* IE10 */
              display: flex;
              width: 100%;
              margin-bottom: 15px;
            }

            .icon {
              padding: 10px;
              background: dodgerblue;
              color: white;
              min-width: 50px;
              text-align: center;
            }

            .input-field {
              width: 100%;
              padding: 10px;
              outline: none;
            }

            .input-field:focus {
              border: 2px solid dodgerblue;
            }

            /* Set a style for the submit button */
            .btn {
              background-color: dodgerblue;
              color: white;
              padding: 15px 20px;
              border: none;
              cursor: pointer;
              width: 100%;
              opacity: 0.9;
            }

            .btn:hover {
              opacity: 1;
            }
            
            /* width */
            ::-webkit-scrollbar {
              width: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
              background: #f1f1f1;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
              background: #888;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
              background: #555;
            }

        </style>
        
        <title>Register</title>
    </head>
    <body>
        <header>
            
        </header>
        
        <br>
        <br>

	<div class="register">
            <h1>Register (Authorized Personnel Only)</h1>
            <form action="signup_auth.php" method="post" autocomplete="off">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <label for="email">
                    <i class="fas fa-envelope"></i>
                </label>
                <input type="email" name="email" placeholder="Email" id="email" required>
                <input type="submit" value="Register">
            </form>
	</div>
        
        
    </body>
    
    
    
</html>    



