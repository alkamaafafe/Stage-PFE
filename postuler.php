<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Batiment</title>
    <link rel="stylesheet" href="style.css">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
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
        <div class="page-header d-flex align-items-center" style="background-image: url('../img/business-job-interview-concept.jpg');">
        <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>ENVOYEZ-NOUS VOTRE CANDIDATURE MAINTENANT !</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-container">
                <div class="contact-form">
                    <h2>Formulaire de demande</h2>
                    <form action="postuler.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Nom et Prénom *</label>
                            <input type="text" id="name" name="name" placeholder="Entrez Votre Nom et Prénom" required>
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
                            <label for="cv">Votre CV *</label>
                            <input type="file" id="cv" name="cv" accept="application/pdf" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Votre Lettre de Motivation *</label>
                            <textarea id="message" name="message" rows="5" placeholder="Entrez Votre Motivation" required></textarea>
                        </div>
                        <button type="submit">Envoyé</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php
    // Configuration de la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stagepfe";

    // Connexion à la base de données
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

        // Vérifiez si un fichier a été téléchargé
        if (!isset($_FILES['cv']) || $_FILES['cv']['error'] != UPLOAD_ERR_OK) {
            switch ($_FILES['cv']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                    echo "The uploaded file exceeds the upload_max_filesize directive in php.ini.";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    echo "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    echo "The uploaded file was only partially uploaded.";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo "No file was uploaded.";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    echo "Missing a temporary folder.";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    echo "Failed to write file to disk.";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    echo "A PHP extension stopped the file upload.";
                    break;
                default:
                    echo "Unknown upload error.";
                    break;
            }
            exit;
        }

        // Gestion du fichier PDF
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }
        $target_file = $target_dir . basename($_FILES["cv"]["name"]);
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Vérifiez si le fichier est un PDF
        if ($fileType != "pdf") {
            echo "Sorry, only PDF files are allowed.";
            exit;
        }

        // Déplacez le fichier téléchargé vers le dossier cible
        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
            // Préparation de la requête SQL
            $stmt = $conn->prepare("INSERT INTO applications (name, email, phone, cv, motivation) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $email, $phone, $target_file, $message);

            // Exécution de la requête
            if ($stmt->execute()) {
                echo "Thank you, $name. Your application has been received.";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Fermeture de la connexion
            $stmt->close();
        } else {
            echo "Sorry, there was an error moving your uploaded file.";
        }
    }

    $conn->close();
    ?>

</body>
</html>
