<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>ISocial - strona główna</title>
      <link rel="stylesheet" href="../styles/main.css">
      <meta name="description" content="Najpopularniejszy portal społecznościowy. Zaloguj się na nowym urządzeniu."/>
      <meta name="keywords" content = "iSocial, isocial, social"/>
      <link rel="shortcut icon" href="../media/logo_rounded.png"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
      <link rel="stylesheet" type="text/css" media="all" href="../fonts/css/fontello.css" />
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

      <script src="../scripts/scrolltotop.js" async></script>
      <script src="../scripts/navbartop.js" async></script>
   </head>
   <body>
      <div id="container">
         <div id="topbar">
            <div id="lefttop">
              <img src="../media/logo_rounded.png" id="lefttoplogo">
                <div class="search_box">
                  <i class="fa fa-magnifying-glass"></i></i> <input type="text" class="input_search" placeholder="Czego szukasz <?php echo $user_data['firstname']?>?">
                </div>
            </div>
            <div id="righttop">
               <div class="navbar">
                  <ul>
                    <li class="active">
                      <a href="#">
                        <i class='bx bx-home icon'></i>
                        <i class='bx bxs-home activeIcon'></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class='bx bx-user icon'></i>
                        <i class='bx bxs-user activeIcon'></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class='bx bx-heart icon'></i>
                        <i class='bx bxs-heart activeIcon'></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class='bx bx-folder icon'></i>
                        <i class='bx bxs-folder activeIcon'></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class='bx bx-cog icon'></i>
                        <i class='bx bxs-cog activeIcon'></i>
                      </a>
                    </li>
                    <div class="indicator"></div>
                  </ul>
                </div>
            </div>
         <div id="leftbar">
            <div id="topleft">
            </div>
            <div id="footerorsth">
            </div>
         </div>
         <div id="rightbar">

         </div>
         <div id="main">
            <div id="createpost">
              <p id="editable" contenteditable="true">Utwórz post, dodaj zdjęcie, podziel się filmem, i wiele więcej...</p>
              <div id="tiles">
                <button class="tile">
                  <p>Dodaj zdjęcie</p>
                  <i class="fas fa-image"></i>
                </button>
                <button class="tile">
                  <p>Dodaj film</p>
                  <i class="fas fa-video"></i>
                </button>
                <button class="tile">
                  <p>Opublikuj</p>
                  <i class="fas fa-paper-plane"></i>
                </button>
              </div>
            </div>
            <div class="post">
            </div>
            <div class="post">
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>d
            </div>
            <div class="post">
            </div>
         </div>
         <div id="end">
         </div>
      </div>
      <!-- <a href="#" class="notification">
      <span>Inbox</span>
      <span class="badge">3</span>
      </a> -->
      <button onclick="topFunction()" id="totop" title="Przewiń na górę strony">&uarr;</button>
   </body>

   <!-- <script>
      const button = document.querySelector("button"),
        toast = document.querySelector(".toast")
        closeIcon = document.querySelector(".close"),
        progress = document.querySelector(".progress");
      
        let timer1, timer2;
      
        button.addEventListener("click", () => {
          toast.classList.add("active");
          progress.classList.add("active");
      
          timer1 = setTimeout(() => {
              toast.classList.remove("active");
          }, 5000); //1s = 1000 milliseconds
      
          timer2 = setTimeout(() => {
            progress.classList.remove("active");
          }, 5300);
        });
        
        closeIcon.addEventListener("click", () => {
          toast.classList.remove("active");
          
          setTimeout(() => {
            progress.classList.remove("active");
          }, 300);
      
          clearTimeout(timer1);
          clearTimeout(timer2);
        });
      
      </script> -->
   <!-- <div class="toast">
      <div class="toast-content">
          <i class="fas fa-solid fa-check check"></i>
      
          <div class="message">
              <span class="text text-1">Success</span>
              <span class="text text-2">Your changes has been saved</span>
          </div>
      </div>
      <i class="fa-solid fa-xmark close"></i>
      
      <div class="progress"></div>
      </div>
      
      <button>Show Toast</button> -->
         </script>
       
</html>