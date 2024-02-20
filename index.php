<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="logo">Garage V.Parrot</h1>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="nos.php">Nos Services</a></li>
            <li><a href="voi.php">Nos Voitures</a></li>
            <li><a href="contact.php">Contactez nous</a></li>
        </ul>
        <a class="butt1" href="connexion.php">Connexion</a>
    </div>
<div class="he">
<h1 class="pre">« Qui sommes-nous ? »</h1><br>
            <h2 class=" pre1">Garage V.Parrot ouvert depuis 2021,  à votre disposition pour l’entretien et la réparation de vos véhicules toutes marques à Toulouse. Nos garagistes effectuent la réparation et l'entretien des véhicules de tourisme, véhicules utilitaires ou camping-car.</h2>
</div>
    <div class="picservice">
        <div class="grid">
        <img src="pic/540x400-0.jpg" alt="">
        <h3 class="drive">Rendez votre conduite plus fluide</h3>
        </div>
        <div class="grid">
        <img src="pic/540x400.jpg" alt="">
        <h3 class="drive">Rendez votre conduite plus fluide</h3>
        </div>
    </div>

    <div class="content">    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Your Website Name</p>
            <div class="time">
            <p id="current-time"></p>
            <p><span>Lundi </span> 9:00 AM -  6:00 PM</p>
            <p><span>Mardi </span> 9:00 AM -  6:00 PM</p>
            <p><span>Mercredi </span> 9:00 AM -  6:00 PM</p>
            <p><span>jeudi </span> 9:00 AM -  6:00 PM</p>
            <p><span>vendredi </span> 9:00 AM -  6:00 PM</p>
            <p><span>Samedi </span> 9:00 AM -  12:00 PM</p>
            <p><span>Dimanche </span>Ferme</p>
            </div>
            <div class="icons">
                <p class="hh1">trouvez nous</p>
          <a href="#"><i class="fa-brands fa-facebook"> </i></a>
          <a href="#"><i class="fa-brands fa-instagram"> </i></a>
          <a href="#"><i class="fa-brands fa-twitter"> </i></a>
          <a href="#"><i class="fa-brands fa-google-plus"> </i></a>
          <a href="#"><i class="fa-brands fa-youtube"> </i></a>
        </div>
        </div>
    </footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    updateCurrentTime();
    setInterval(updateCurrentTime, 1000);
});

function updateCurrentTime() {
    var currentTimeElement = document.getElementById('current-time');
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    
   
    hours = (hours < 10) ? '0' + hours : hours;
    minutes = (minutes < 10) ? '0' + minutes : minutes;
    seconds = (seconds < 10) ? '0' + seconds : seconds;

    var formattedTime = hours + ':' + minutes + ':' + seconds;
    currentTimeElement.textContent = 'Current Time: ' + formattedTime;
}

</script>
    <script src="script.js"></script>
</body>
</html>