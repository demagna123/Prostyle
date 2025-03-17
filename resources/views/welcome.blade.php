<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Harmoniel</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.css?v=2">



</head>
<body>
  <!-- Header -->
 @include('navbar')

  <!-- Carousel -->
  <div class="carousel" id="acceuil">
    <!-- List item -->
    <div class="list">
      <div class="item">
        <img src="{{ 'assets/image/sensi1.jpg' }}" alt="Slide 1" />
        <div class="content">
          <div class="author">Bienvenue sur Prostyle</div>
          <div class="title">Votre image , notre savoir faire</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits menstruels réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="{{ 'assets/image/img17.jpg' }}" alt="Slide 2" />
        <div class="content">
          <div class="author">Bienvenue sur Prostyle</div>
          <div class="title">Votre image , notre savoir faire</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits menstruels réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="{{ 'assets/image/img18.jpg' }}" alt="Slide 3" />
        <div class="content">
          <div class="author">Bienvenue sur Prostyle</div>
          <div class="title">Votre image , notre savoir faire</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits  réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="{{ 'assets/image/img19.jpg' }}" alt="Slide 4" />
        <div class="content">
          <div class="author">Bienvenue sur Prostyle</div>
          <div class="title">Votre image , notre savoir faire</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits  réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="{{ 'assets/image/img20.jpg' }}" alt="Slide 5" />
        <div class="content">
          <div class="author">Bienvenue sur Prostyle</div>
          <div class="title">Votre image , notre savoir faire</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits  réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="{{ 'assets/image/img21.jpg' }}" alt="Slide 6" />
        <div class="content">
          <div class="author">Bienvenue sur Prostyle</div>
          <div class="title">Votre image , notre savoir faire</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits  réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Thumbnails -->
    <div class="thumbnail">
      <div class="item">
        <img src="{{ 'assets/image/img22.jpg' }}" alt="Thumbnail 1" />
        <div class="content">
          <div class="title">Harmoniel</div>
        </div>
      </div>
      <div class="item">
        <img src="{{ 'assets/image/img17.jpg' }}" alt="Thumbnail 2" />
        <div class="content">
          <div class="title">Prostyle</div>
        </div>
      </div>
      <div class="item">
        <img src="{{ 'assets/image/img3.jpg' }}" alt="Thumbnail 3" />
        <div class="content">
          <div class="title">Prostyle</div>
        </div>
      </div>
      <div class="item">
        <img src="{{ 'assets/image/img4.jpg' }}" alt="Thumbnail 4" />
        <div class="content">
          <div class="title">Prostyle</div>
        </div>
      </div>
      <div class="item">
        <img src="{{ 'assets/image/img5.jpg' }}" alt="Thumbnail 5" />
        <div class="content">
          <div class="title">Prostyle</div>
        </div>
      </div>
      <div class="item">
        <img src="{{ 'assets/image/img6.jpg' }}" alt="Thumbnail 6" />
        <div class="content">
          <div class="title">Prostyle</div>
        </div>
      </div>
    </div>

    <!-- Next and Previous Buttons -->
    <div class="arrows">
      <button id="prev"><</button>
      <button id="next">></button>
    </div>

    <!-- Time Running -->
    <div class="time"></div>
  </div>

  <!-- Section Nos Produits -->
  <section class="nos-produits" id="produits">
    <h2>Nos Produits</h2>
    <p>Découvrez notre gamme de produits de qualité et confortables.</p>
    <div class="carousel-container">
      <button id="prev-product" class="carousel-arrow"><i class="fa-solid fa-arrow-left"></i></button>
      <div class="product-carousel">
        <div class="product-item">
          <img src="{{ 'assets/image/img5.jpg' }}" alt="Produit 1" />
          <h3>Blouse de Cuisine Professionnelle - Élégance et Confort</h3>
          <p>Adoptez un style professionnel avec notre blouse de cuisine 
            conçue pour allier confort et résistance. Fabriquée en tissu respirant, elle offre
             une liberté de mouvement optimale pour un service impeccable.</p>
          <button class="voir-plus"><a href="{{ route('produit') }}">Voir Plus</a></button>
        </div>
        <div class="product-item">
          <img src="{{ 'assets/image/img6.jpg' }}" alt="Produit 2" />
          <h3>Blouse de Chef - Résistante et Facile d'Entretien</h3>
          <p>Cette blouse de chef est idéale pour les cuisines exigeantes ! 
            Son tissu robuste et anti-tâches vous garantit une tenue impeccable même après plusieurs lavages.
             Look élégant et pratique, elle deviendra votre meilleure alliée.</p>
          <button class="voir-plus"><a  href="{{ route('produit') }}">Voir Plus</a></button>
        </div>
        <div class="product-item">
          <img src="{{ 'assets/image/img2.jpg' }}" alt="Produit 3" />
          <h3>Blouse Blanche pour Soignants - Professionnalisme et Durabilité</h3>
          <p> Un incontournable pour les professionnels de santé ! Cette blouse blanche
             est conçue avec un tissu résistant et respirant, parfait pour affronter les 
             longues journées à l’hôpital ou en cabinet.</p>
          <button class="voir-plus"><a  href="{{ route('produit') }}">Voir Plus</a></button>
        </div>
        <div class="product-item">
          <img src="{{ 'assets/image/img21.jpg' }}" alt="Produit 4" />
          <h3>Blouse Médicale Unisexe - Confort et Hygiène</h3>
          <p> Conçue pour les professionnels de santé, cette blouse 
            allie légèreté et praticité. Son tissu respirant et facile
             à entretenir assure un confort
             optimal tout au long de la journée.</p>
          <button class="voir-plus"><a  href="{{ route('produit')  }}">Voir Plus</a></button>
        </div>
      </div>
      <button id="next-product" class="carousel-arrow"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </section>

  <!-- Section Éducation et Sensibilisation -->
  <section class="education" id="education">
    <div class="container">
      <h2>Éducation et Sensibilisation</h2>
      <p>
        Découvrez nos articles et ressources pour mieux comprendre l'impact de l'hygiène intime féminine sur la santé.
        Explorez des sujets sur les menstruations.
      </p>
      <a href="#" class="btn-blog">Lire les articles</a>
    </div>
  </section>

  <!-- Section À Propos -->
  <section class="about-us" id="apropos">
    <div class="about">
      <div class="inner-section">
        <h1>À Propos de Nous</h1>
        <p class="text">
          Chez ProStyle, nous concevons et fabriquons des vêtements professionnels adaptés aux exigences des différents corps de métier.

          Que vous soyez dans l’artisanat, l’industrie, la restauration, la santé ou tout autre secteur nécessitant des tenues spécifiques, nous mettons notre savoir-faire au service de votre image institutionnelle.  
         
         Notre mission est de proposer des vêtements professionnels, élégant et de qualité, pour garantir à chaque professionnel une tenue adaptée à son environnement de travail.
         
          
         
         Chez ProStyle, chaque tenue est pensée pour refléter l’identité de votre profession tout en alliant praticité et élégance. Nous offrons également des options de personnalisation (logos, broderies, couleurs spécifiques) pour renforcer l’image de marque de nos clients.  
         
         Faites confiance à notre expertise pour habiller vos équipes avec des tenues professionnelles à la hauteur de leur engagement.
         
         ProStyle, 
         Votre image, notre savoir-faire !
        </p>
        <div class="skills">
          <button><a href="lire.html">Lire Plus</a></button>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Témoignages -->
<section class="temoignage" id="temoignage">
  <h2>Témoignages</h2>
  <p class="sous-titre">Ce que nos clients disent de nous</p>
  <div class="temoignage-container">
    <!-- Témoignage 1 -->
    <div class="temoignage-item">
      <div class="client-info">
        <img src="{{ 'assets/image/tem1.jpg' }}"  alt="Client 1" class="client-photo" />
        <div class="client-details">
          <h3>Marie D.</h3>
          <p>Utilisatrice depuis 6 mois</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "Les produits Prostyles ont changé ma vie ! Ils sont confortables, écologiques et économiques.
          Je recommande à toutes les femmes de passer au réutilisable."
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>
    </div>

    <!-- Témoignage 2 -->
    <div class="temoignage-item">
      <div class="client-info">
        <img src="{{ 'assets/image/tem2.jpg' }}"alt="Client 2" class="client-photo" />
        <div class="client-details">
          <h3>Sophie L.</h3>
          <p>Utilisatrice depuis 1 an</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "Je suis ravie de mes achats chez Prostyles. Les produits sont de haute qualité et respectent
          mon corps et la planète. Un grand merci !"
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>
    </div>

    <!-- Témoignage 3 -->
    <div class="temoignage-item">
      <div class="client-info">
        <img src="{{ 'assets/image/tem3.jpg' }}"alt="Client 3" class="client-photo" />
        <div class="client-details">
          <h3>Julie M.</h3>
          <p>Nouvelle utilisatrice</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "J'ai découvert Prostyles grâce à une amie, et je ne regrette pas ! Les produits sont faciles
          à utiliser et très pratiques. Merci pour cette belle initiative !"
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>
    </div>
    <!-- TEMOIGNAGE 4 -->
    <div class="temoignage-item">
      <div class="client-info">
        <img src="{{ 'assets/image/tem1.jpg' }}"alt="Client 3" class="client-photo" />
        <div class="client-details">
          <h3>Julie M.</h3>
          <p>Nouvelle utilisatrice</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "J'ai découvert Prostyles grâce à une amie, et je ne regrette pas ! Les produits sont faciles
          à utiliser et très pratiques. Merci pour cette belle initiative !"
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>

    </div>
    <div class="temoignage-item">
      <div class="client-info">
        <img src="{{ 'assets/image/tem2.jpg' }}"alt="Client 3" class="client-photo" />
        <div class="client-details">
          <h3>Julie M.</h3>
          <p>Nouvelle utilisatrice</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "J'ai découvert Prostyles grâce à une amie, et je ne regrette pas ! Les produits sont faciles
          à utiliser et très pratiques. Merci pour cette belle initiative !"
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>
    </div>
    <div class="temoignage-item">
      <div class="client-info">
        <img src="{{ 'assets/image/tem3.jpg' }}"alt="Client 3" class="client-photo" />
        <div class="client-details">
          <h3>Julie M.</h3>
          <p>Nouvelle utilisatrice</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "J'ai découvert Prostyles grâce à une amie, et je ne regrette pas ! Les produits sont faciles
          à utiliser et très pratiques. Merci pour cette belle initiative !"
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Contact -->
<section class="contact" id="contact">
  <div class="contact-container">
    <h2>Contactez-nous</h2>
    <p class="sous-titre">Nous sommes à votre écoute pour toute question ou demande.</p>

    <div class="contact-content">
      <!-- Formulaire de contact -->
      <div class="contact-form">
        <form action="#" method="POST">
          <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Votre nom" required />
          </div>
          <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Votre email" required />
          </div>
          <div class="form-group">
            <textarea name="message" id="message" rows="5" placeholder="Votre message" required></textarea>
          </div>
          <button type="submit" class="btn-submit">Envoyer</button>
        </form>
      </div>

      <!-- Informations de contact -->
      <div class="contact-info">
        <div class="info-item">
          <i class="fas fa-map-marker-alt"></i>
          <p>TOGO, Lomé</p>
        </div>
        <div class="info-item">
          <i class="fas fa-phone"></i>
          <p>+228 93 53 29 31</p>
        </div>
        <div class="info-item">
          <i class="fas fa-envelope"></i>
          <p>contactprostyle@gmail.com</p>
        </div>

        <!-- Réseaux sociaux -->
        <div class="social-links">
          <a href="#" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>