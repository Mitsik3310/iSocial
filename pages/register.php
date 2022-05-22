<?php

    session_start();

    include("connection.php");
    include("functions.php");
           
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $OK=true;

        $firstname 		= $_POST['firstname'];
        $lastname 		= $_POST['lastname'];
        $email 			= $_POST['email'];
        $user_name	    = $_POST['user_name'];
        $password 		= $_POST['password'];
		$password2      = $_POST['password2'];

		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
        

        if ((strlen($user_name)<3) || (strlen($user_name)>20))
		{
			$OK=false;
			$_SESSION['e_user_name']="Nazwa użytkownika musi posiadać od 4 do 20 znaków!";
		}
		
		if (ctype_alnum($user_name)==false)
		{
			$OK=false;
			$_SESSION['e_user_name']="Nazwa użytkownika może składać się tylko z liter i cyfr";
		}

        if ((strlen($password)<9) || (strlen($password)>20))
		{
			$OK=false;
			$_SESSION['e_password']="Hasło musi posiadać od 10 do 20 znaków!";
		}
		
		if ($password!=$password2)
		{
			$OK=false;
			$_SESSION['e_password2']="Podane hasła nie są identyczne!";
		}	

        if ($OK==true)
            {
                $user_id = random_num(10);
                $query = "insert into users (user_id,user_name,password,email,firstname,lastname) values ('$user_id','$user_name','$password','$email','$firstname','$lastname')";
                
                mysqli_query($con, $query);

                $query = "select * from users where user_name = '$user_name' limit 1";
                $result = mysqli_query($con, $query);
                $user_data = mysqli_fetch_assoc($result);
                $_SESSION['user_id'] = $user_data['user_id'];

                header("Location: more_info.php");
                die;
            }
        else
            {
                
            }

    }
        

?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>I social - Rejestracja</title>
        <meta name="description" content="Najpopularniejszy portal społecznościowy. Załóż konto i stań się członkiem już dziś." />
        <meta name="keywords" content="iSocial, isocial, social, register" />
        <link rel="shortcut icon" href="../media/logo_rounded.png" />
        <link rel="stylesheet" href="../styles/register_styles.css" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

        <script src="../scripts/typing.js" async></script>
        <script src="../scripts/valregister.js" async></script>
    </head>

    <body>
        <div class="container">
            <div class="title">Zarejestruj się!</div>
            <form name="form" action="register.php" method="post">
                <div class="user_info">
                    <div class="input">
                        <label for="firstname" class="text_above_fill">Imię</label>
                        <input type="text" placeholder="Podaj swoje imię." id="firstname" name="firstname" required />
                    </div>
                    <div class="input">
                        <label for="lastname" class="text_above_fill">Nazwisko.</label>
                        <input type="text" placeholder="Podaj swoje nazwisko." id="lastname" name="lastname" required />
                    </div>
                    <div class="input">
                        <label for="email" class="text_above_fill">Email</label>
                        <input type="email" placeholder="Podaj swój email." id="email" name="email"/>
                    </div>
                        <?php
                            if (isset($_SESSION['e_email']))
                            {
                                echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                                unset($_SESSION['e_email']);
                            }
                        ?>
                    <div class="input">
                        <label for="user_name" class="text_above_fill">Nazwa użytkownika</label>
                        <input type="text" placeholder="Podaj nazwę użytkownika." id="user_name" name="user_name" required />
                    </div>

                        <?php
                            if (isset($_SESSION['e_user_name']))
                            {
                            echo '<div class="error">'.$_SESSION['e_user_name'].'</div>';
                            unset($_SESSION['e_user_name']);
                            }
                        ?>

                    <div class="input">
                        <label for="password" class="text_above_fill">Hasło</label>
                        <input type="password" placeholder="Podaj swoje hasło." id="password" name="password" required />
                    </div>

                        <?php
                            if (isset($_SESSION['e_password']))
                            {
                                echo '<div class="error">'.$_SESSION['e_password'].'</div>';
                                unset($_SESSION['e_password']);
                            }
		                ?>		
                    <div class="input">
                        <span class="text_above_fill">Potwierdź hasło *</span>
                        <input type="password" placeholder="Powtórz swoje hasło." id="password2" name="password2" required/>
                    </div>

                        <?php
                            if (isset($_SESSION['e_password2']))
                            {
                                echo '<div class="error">'.$_SESSION['e_password2'].'</div>';
                                unset($_SESSION['e_password2']);
                            }
		                ?>	

                </div>
                <div class="submit">
                  <input name="create" class="button" id="button" type="submit" value="Zarejestruj się."><br><br>
                </div>
                <div class="acc">Masz już konto? <a href="login.php">Zaloguj się teraz.</a></div>
            </form>
        </div>

        <div class="text">
            <p>iSocial jest:&nbsp;</p>
            <span class="word midnight">bezpieczny.</span>
            <span class="word wisteria">nowoczesny.</span>
            <span class="word belize">darmowy.</span>
            <span class="word green">inteligentny.</span>
            <span class="word wisteria">stylowy.</span>
            <span class="word pomegranate">niezwykły.</span>
        </div>
    </body>
</html>
