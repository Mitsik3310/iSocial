<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <title>I social - Uzupełnij profil</title>
      <meta name="description" content="Najpopularniejszy portal społecznościowy. Uzupełnij swój profil" />
      <meta name="keywords" content="iSocial, isocial, social" />
      <link rel="shortcut icon" href="../media/logo_rounded.png" />
      <link rel="stylesheet" href="../styles/more_info_styles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">

      <script src="../scripts/alert.js" async></script>
   </head>
   <body>
      <div id="container">
         <div id="left_part">
            <img src="../media/awatar.png" id="awatar">
            <p id="name">Witaj <?php echo $user_data['firstname'],' ', $user_data['lastname']; ?></p>
            <div class="input_photo">
               <span class="text_above_fill">Wybierz zdjęcie profilowe:</span>
               <button class="setPicture" style="display:block;width:120px; height:30px;" onclick="document.getElementById('getFile').click()">prześlij zdjęcie</button>
            </div>
         </div>
         <div id="right_part">
            <p id="upper">Uzupełnij swój profil informacjami, które ułatwią znalezienie Cię przez twoich znajomych, oraz umożliwią nam dobieranie grup lepiej dobranych do Twoich zainteresowań.</p>
            <p id="upperlow">* Widoczność tych elementów możesz dostosować później w panelu prywatności</p>
            <form name="form2">
            <div class="input">
               <span class="text_above_fill">Data twojego urodzenia. *</span> </br>
               <label class="select2">
                  <select required="required" name="year">
                     <option disabled="disabled" selected="selected">Rok</option>
                     <option>1950</option>
                     <option>1951</option>
                     <option>1952</option>
                     <option>1953</option>
                     <option>1954</option>
                     <option>1955</option>
                     <option>1956</option>
                     <option>1957</option>
                     <option>1958</option>
                     <option>1959</option>
                     <option>1960</option>
                     <option>1961</option>
                     <option>1962</option>
                     <option>1963</option>
                     <option>1964</option>
                     <option>1965</option>
                     <option>1966</option>
                     <option>1967</option>
                     <option>1968</option>
                     <option>1969</option>
                     <option>1970</option>
                     <option>1971</option>
                     <option>1972</option>
                     <option>1973</option>
                     <option>1974</option>
                     <option>1975</option>
                     <option>1976</option>
                     <option>1977</option>
                     <option>1978</option>
                     <option>1979</option>
                     <option>1980</option>
                     <option>1981</option>
                     <option>1982</option>
                     <option>1983</option>
                     <option>1984</option>
                     <option>1985</option>
                     <option>1986</option>
                     <option>1987</option>
                     <option>1988</option>
                     <option>1989</option>
                     <option>1990</option>
                     <option>1991</option>
                     <option>1992</option>
                     <option>1993</option>
                     <option>1994</option>
                     <option>1995</option>
                     <option>1996</option>
                     <option>1997</option>
                     <option>1998</option>
                     <option>1999</option>
                     <option>2000</option>
                     <option>2001</option>
                     <option>2002</option>
                     <option>2003</option>
                     <option>2004</option>
                     <option>2005</option>
                     <option>2006</option>
                     <option>2007</option>
                     <option>2008</option>
                     <option>2009</option>
                     <option>2010</option>
                     <option>2011</option>
                     <option>2012</option>
                     <option>2013</option>
                     <option>2014</option>
                     <option>2015</option>
                     <option>2016</option>
                     <option>2017</option>
                     <option>2018</option>
                     <option>2019</option>
                     <option>2020</option>
                     <option>2021</option>
                     <option>2022</option>
                  </select>
                  <svg>
                     <use xlink:href="#select-arrow-down"></use>
                  </svg>
               </label>
               <svg class="sprites">
                  <symbol id="select-arrow-down" viewbox="0 0 10 6">
                     <polyline points="1 1 5 5 9 1"></polyline>
                  </symbol>
               </svg>
               <label class="select2">
                  <select required="required">
                     <option disabled="disabled" selected="selected">Miesiąc</option>
                     <option>Styczeń</option>
                     <option>Luty</option>
                     <option>Marzec</option>
                     <option>Kwiecień</option>
                     <option>Maj</option>
                     <option>Czerwiec</option>
                     <option>Lipiec</option>
                     <option>Sierpień</option>
                     <option>Wrzesień</option>
                     <option>Październik</option>
                     <option>Listopad</option>
                     <option>Grudzień</option>
                  </select>
                  <svg>
                     <use xlink:href="#select-arrow-down"></use>
                  </svg>
               </label>
               <svg class="sprites">
                  <symbol id="select-arrow-down" viewbox="0 0 10 6">
                     <polyline points="1 1 5 5 9 1"></polyline>
                  </symbol>
               </svg>
               <label class="select2">
                  <select required="required">
                     <option disabled="disabled" selected="selected">Dzień</option>
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                     <option>6</option>
                     <option>7</option>
                     <option>8</option>
                     <option>9</option>
                     <option>10</option>
                     <option>11</option>
                     <option>12</option>
                     <option>13</option>
                     <option>14</option>
                     <option>15</option>
                     <option>16</option>
                     <option>17</option>
                     <option>18</option>
                     <option>19</option>
                     <option>20</option>
                     <option>21</option>
                     <option>22</option>
                     <option>23</option>
                     <option>24</option>
                     <option>25</option>
                     <option>26</option>
                     <option>27</option>
                     <option>28</option>
                     <option>29</option>
                     <option>30</option>
                     <option>31</option>
                  </select>
                  <svg>
                     <use xlink:href="#select-arrow-down"></use>
                  </svg>
               </label>
               <svg class="sprites">
                  <symbol id="select-arrow-down" viewbox="0 0 10 6">
                     <polyline points="1 1 5 5 9 1"></polyline>
                  </symbol>
               </svg>
            </div>
            <br>
            <div class="input">
               <span class="text_above_fill">Wybierz miejsce zamieszkania. *</span> </br>
               <label class="select">
                  <select required="required">
                     <option disabled="disabled" selected="selected">Wybierz województwo:</option>
                     <option>Województwo dolnośląskie</option>
                     <option>Województwo kujawsko-pomorskie</option>
                     <option>Województwo lubelskie</option>
                     <option>Województwo lubuskie</option>
                     <option>Województwo łódzkie</option>
                     <option>Województwo małopolskie</option>
                     <option>Województwo mazowieckie</option>
                     <option>Województwo opolskie</option>
                     <option>Województwo podkarpackie</option>
                     <option>Województwo podlaskie</option>
                     <option>Województwo pomorskie</option>
                     <option>Województwo śląskie</option>
                     <option>Województwo świętokrzyskie</option>
                     <option>Województwo warmińsko-mazurskie</option>
                     <option>Województwo wielkopolskie</option>
                     <option>Województwo zachodniopomorskie</option>
                  </select>
                  <svg>
                     <use xlink:href="#select-arrow-down"></use>
                  </svg>
               </label>
               <svg class="sprites">
                  <symbol id="select-arrow-down" viewbox="0 0 10 6">
                     <polyline points="1 1 5 5 9 1"></polyline>
                  </symbol>
               </svg>
            </div>
            <br>
            <div class="input">
               <span class="text_above_fill">Wybierz wykształcenie *</span> </br>
               <label class="select">
                  <select required="required">
                     <option disabled="disabled" selected="selected">Moje wykształcenie:</option>
                     <option>Podstawowe</option>
                     <option>Gimnazjalne</option>
                     <option>Zasadnicze zawodowe</option>
                     <option>Zasadnicze branżowe</option>
                     <option>Średnie branżowe</option>
                     <option>Średnie</option>
                     <option>Wyższe</option>
                  </select>
                  <svg>
                     <use xlink:href="#select-arrow-down"></use>
                  </svg>
               </label>
               <svg class="sprites">
                  <symbol id="select-arrow-down" viewbox="0 0 10 6">
                     <polyline points="1 1 5 5 9 1"></polyline>
                  </symbol>
               </svg>
            </div>
            <br>
            <div class="input">
               <span class="text_above_fill">Stan cywilny *</span> </br>
               <label class="select">
                  <select>
                     <option disabled="disabled" selected="selected">Mój stan cywilny:</option>
                     <option>Wolny</option>
                     <option>W związku</option>
                     <option>Zaręczony</option>
                     <option>Po ślubie</option>
                     <option>W związku partnerskim</option>
                     <option>To skomplikowane</option>
                     <option>Wdowiec</option>
                  </select>
                  <svg>
                     <use xlink:href="#select-arrow-down"></use>
                  </svg>
               </label>
               <svg class="sprites">
                  <symbol id="select-arrow-down" viewbox="0 0 10 6">
                     <polyline points="1 1 5 5 9 1"></polyline>
                  </symbol>
               </svg>
            </div>
            <br>
            <div class="other">
               <span class="text_above_fill">Twój biogram </span> <br>
               <input type="text" placeholder="&nbsp Opowiedz coś o sobie..."> 
            </div>
            <br>
            <div class="input" id="gender">
               <span class="text_above_fill">Wybierz swoją płeć. *</span> </br>
               Mężczyzna <input type="radio" class="sex" value="f"/>
               Kobieta   <input type="radio" class="sex" value="m" />
               Inna      <input type="radio" class="sex" value="undefined"/>
            </div>
            </br>
         </div>
         <input type="submit" name="submit" value="Zapisz zmiany." class="button" onclick="showAlert();"/>
      </div>
      <div id="hidden">
         <input type="file" id="getFile">
      </div>
   </body>
</html>