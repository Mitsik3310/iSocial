<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			};
		}else
		{
		}
	}

?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Isocial - Zaloguj</title>
  <link rel="stylesheet" href="../styles/login_styless.css">
  <meta name="description" content="Najpopularniejszy portal społecznościowy. Zaloguj się na nowym urządzeniu."/>
  <meta name="keywords" content = "iSocial, isocial, social, login"/> 
  <link rel="shortcut icon" href="../media/logo_rounded.png"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="all" href="../fonts/css/fontello.css" />

  <script src="../scripts/typing.js" async></script>
</head>

<body>
  <div class="container">
    <form method="post">

      <div class="title">Zaloguj się!</div>

      <div class="input">
        <input type="text" placeholder="Podaj nazwę użytkownika." id="text" name="user_name" required />
    </div>
      <div class="input">
        <input type="password" placeholder="Podaj swoje hasło." id="text" name="password" required />
      </div>

      <div class="submit">
          <input class="button" id="button" type="submit" value="Zaloguj się."><br><br>
      </div>
		</form>

    <div id="under">
      <div class="acc">Lub zaloguj się przez Google.</div>
      <div class="google">
        <a href="https://google.com">Zaloguj się przez Google<i class="demo-icon icon-google"></i></a>
      </div>
      <div class="acc">
        Nie masz konta? <a href="register.php">Zarejestruj się teraz.</a>
      </div>
  </div>
  </div>
  <div class="text">
    <p>iSocial jest:&nbsp;</p>
    <span class="word midnight">bezpieczny.</span>
    <span class="word wisteria">nowoczesny.</span>
    <span class="word belize">darmowy.</span>
    <span class="word green">inteligenty.</span>
    <span class="word wisteria">stylowy.</span>
  </div>
</body>

</html>