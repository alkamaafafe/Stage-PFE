<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    

    <!-- End Bootstrap CSS -->

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Batiment</title>
    <link rel="stylesheet" href="style.css">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="..\Stage PFE\img\new logo.png" alt="">
            <h1>Socchi</h1>
        </div>
        <ul class="menu">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="about.html">A propos</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="projets.html">Projets</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="postuler.php">Postuler</a></li>
        </ul>
        
        <div class="small_menu">
            <span>
                <div></div>
                <div></div>
            </span>
            <span>
                <div></div>
                <div></div>
            </span>
        </div>
    </header>

<main>
    
    <div class="breadcrumbs">
        <div class="containerR">
            <div class="map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.3693180169625!2d-7.691018084797086!3d33.55627358075125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62cad4086bb1d%3A0x666810d292207309!2sSocchi!5e0!3m2!1sen!2sma!4v1685291763528!5m2!1sen!2sma" 
                    width="1515" 
                    height="500" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="index.html">Accueil</a></li>
              <li>Contact</li>
            </ol>
          </div>
        </nav>
      </div>

    <div class="contact-container">
        <div class="contact-info">
            <h2>Contact </h2>
            <div class="info-item">
                <span class="icon">📍</span>
                <p>Visitez notre entreprise à<br>Addresse: Quartier wifak 2 Rue 14, Casablanca 20230</p>
            </div>
            <div class="info-item">
                <span class="icon">📞</span>
                <p>Avez-vous des questions? Appelez-nous<br>+212-522907019</p>
            </div>
            <div class="info-item">
                <span class="icon">🕒</span>
                <p>Temps de travail<br>Notre support disponible pour vous aider 24 heures sur 24, sept jours sur sept.<br>Du lundi au vendredi : de 8h00 à 18h00<br>Samedi : de 8h00 à 13h00<br>Dimanche : fermé</p>
            </div>
            <div class="info-item">
                <span class="icon">✉️</span>
                <p>En contact avec vous<br>E-mail: socchi06@gmail.com</p>
            </div>
        </div>
        <div class="contact-form">
    <h2>Formulaire de commentaires</h2>
    <p>Si vous souhaitez une consultation gratuite, veuillez commencer par remplir le formulaire:</p>
    <form action="contact.php" method="post">
        <div class="form-group">
            <label for="name">Nom *</label>
            <input type="text" id="name" name="name" placeholder="Entrez Votre Nom" required>
        </div>
        <div class="form-group">
            <label for="email">E-Mail *</label>
            <input type="email" id="email" name="email" placeholder="Entrez Votre E-mail" required>
        </div>
        <div class="form-group">
            <label for="phone">Téléphone *</label>
            <input type="tel" id="phone" name="phone" placeholder="Entrez Votre Numéro" required>
        </div>
        <div class="form-group">
            <label for="service">Type de Service *</label>
            <select id="service" name="service" required>
                <option value="">Sélectionnez votre service</option>
                <option value="service1">Architecture</option>
                <option value="service2">Planification</option>
                <option value="service3">Construction</option>
                <option value="service4">Conception</option> 
                <option value="service5">Ingénierie</option>
                <option value="service6">Rénovation</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Votre Message *</label>
            <textarea id="message" name="message" rows="5" placeholder="Entrez Votre Message" required></textarea>
        </div>
        <button type="submit">Envoyé Message</button>
    </form>
</div>


    
    <?php
// Configuration de la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stagepfe";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $service = $conn->real_escape_string($_POST['service']);
    $message = $conn->real_escape_string($_POST['message']);

    // Validation des données (simple exemple)
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($service) && !empty($message)) {
        // Insérer les données dans la table
        $sql = "INSERT INTO submissions (name, email, phone, service, message)
                VALUES ('$name', '$email', '$phone', '$service', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Message envoyé avec succès.";
        } else {
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Veuillez remplir tous les champs obligatoires.";
    }
}

// Fermer la connexion
$conn->close();
?>


</main>
    
</body>
</html>