<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="yaro.css">
</head>
<body>
<body>
<div class="entete">
  <div class="menu">
    <nav>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li class="deroulant1"><a href="#">Formation</a>
          <ul class="niv1">
            <li class="deroulant2"><a href="#">UFR-SDS</a>
              <ul class="niv2">
                <li><a href="#">Licence en Médecine</a>
                <li><a href="#">Licence en Chirurgie Dentaire</a>
                <li><a href="#">Licence en Pharmacie</a>
                <li><a href="#">Licence Professionnelle de Technicien Supérieur en Santé</a>
              </ul>
            </li>
            <li><a href="#">UFR-SEA</a></li>
            <li><a href="#">UFR-SVT</a></li>
            <li><a href="#">UFR-SH</a></li>
          </ul>
        </li>
        <li class="deroulant1"><a href="#">Recherche</a>
          <ul class="niv1">
            <li><a href="#">Ecole doctorale</a></li>
            <li><a href="#">Les Laboratoires de recherche</a></li>
            <li><a href="#">Les publication scientifiques</a></li>
            <li><a href="#">Les centres d'Excellence</a></li>
          </ul>
        </li>
        <li><a href="#">Orientation</a></li>
      </ul>
    </nav>
  </div>
  <div class="version">v1.0</div>
  <div class="profil">
      <img class="logo" src="téléchargement.jpg" alt="">
    <p class="titre">Université Joseph KI-ZERBO</p>
  </div>
</div>
<!-- fin -->
    <h2>Connection/Inscription</h2>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="enreg.php" method="POST">
          <h1>inscrire un Etudiant </h1>
          <span>Veillez remplir le formulaire </span>
          <input type="text" name="nom" placeholder="Nom" />
          <input type="text" name="prenom" placeholder="Prenom" />
          <input type="email" name="email" placeholder="Mail" />
          <input type="date"  name="date_de_naissance"  placeholder="10/02/1980"/>
          <input type="date" name="date_admission" placeholder="10/02/1980"/>
          <input type="text" name="sous_couver" placeholder="Personne a prévenir" />
          <button type="submit" name="submit">inscrire</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="seco.php" method="POST">
          <h1>Connecter vous </h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>connection </span>
          <input type="text"   name="nom" placeholder="Nom" />
          <input type="email"  name="email" placeholder="Email" />
         
          <a href="#">Adresse Email oublier?</a>
          <button type="submit">Se Connecter</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Bienvenu!</h1>
            <p>
          Veillez utilser votre nom et email. <br>
          pour vous connecter 
            </p>
            <button class="ghost" id="signIn">se connecter </button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, L'Ami!</h1>
            <p>Enter vos  données  personnel </p>
            <button class="ghost" id="signUp">Inscription</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const container = document.getElementById("container");

      signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
      });

      signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });
    </script>
    <br>
    <br>


   
<footer class="ng-footer ng-footer-simple">

<section class="ng-footer-contact">

    <div class="ng-footer-links ng-footer-section">

                    <img src="https://static.ccis.edu/sc9/img/logos/primary-white.png" alt="Columbia College logo.">
                    <div>
        <a class="ng-link-standalone" href="https://columbiacollegeapp.force.com/onlineapp/TX_CommunitiesSelfReg">Apply</a>
        <a class="ng-link-standalone" href="https://www.ccis.edu/request-info" >Request info</a>
                    </div>

    </div>

    <div class="ng-footer-address ng-footer-section">
        <ul>

            <li>Rue campus: 1001 Rogers Street</li>

            <li>Ouaga, MO 65216</li>

            <li>(+226) 875-8700 ou (+226) 231-2391</li>

        </ul>

    </div>

    <div class="ng-footer-social-icons ng-footer-section">

        <p>Follow Université Joseph KI-ZERBO
</p>
<a href="https://www.facebook.com/mycolumbiacollege">
    <svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path>
    </svg>
</a>
<a href="https://twitter.com/ColumbiaColg">
    <svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path>
    </svg>
</a>
<a href="https://instagram.com/columbiacollege">
    <svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
    </svg>
</a>
<a href="https://www.linkedin.com/edu/school?id=18692">
    <svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
    </svg>
</a>

    </div>

</section>

</footer>
  </body>

</body>
</html>