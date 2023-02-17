<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de mentions légales</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <img src="https://groupe-echo.fr/wp-content/uploads/2023/01/GroupeEcho-Logo-NEGATIF-RVB-Couleur-Sbase.png" alt="" id="logo">
    <h1>Générateur de mentions légales</h1>
    <form  id="generateur" action="mentions.php" method="post">
        <!-- POUR LA SOCIETE  -->
        <h2>Pour la société</h2>
        <div class="ensemble">
            <!-- Nom de l'entreprise  -->
            <div class="form-group">
                <label for="nom">Nom de l'entreprise</label>
                <input class="form-control form-control-lg" type="text" name="nom" id="nom" required>
            </div>
            <!-- Activité  -->
            <div class="form-group">
                <label for="activite">Activité</label>
                <input class="form-control form-control-lg" type="text" name="activite" id="activite" required>
            </div>
            <!-- Siège social  -->
            <div class="form-group">
                <label for="adresse">Adresse du siège social</label>
                <input class="form-control form-control-lg" type="text" name="adresse" id="adresse" required>
            </div>
            <!-- Forme juridique  -->
            <div class="form-group">
                <label for="forme">Forme juridique</label>
                <input class="form-control form-control-lg" type="text" name="forme" id="forme" required>
            </div>
            <!-- Siren  -->
            <div class="form-group">
                <label for="siren">Siren</label>
                <input class="form-control form-control-lg" type="text" name="siren" id="siren" required>
            </div>
            <!-- Siret  -->
            <div class="form-group">
                <label for="siret">Siret</label>
                <input class="form-control form-control-lg" type="text" name="siret" id="siret" required>
            </div>
    </div>
    <!-- Propriétaire du site  -->
    <h2>Propriétaire du site</h2>
    <div class="ensemble">
        <!-- Nom du propriétaire  -->
        <div class="form-group">
            <label for="nomProprietaire">Nom</label>
            <input class="form-control form-control-lg" type="text" name="nomProprietaire" id="nomProprietaire" required>
        </div>
        <!-- Responsable de la publication -->
        <div class="form-group">
            <label for="responsable">Responsable de la publication</label>
            <input class="form-control form-control-lg" type="text" name="responsable" id="responsable" required>
        </div>
        <!-- Téléphone -->
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input class="form-control form-control-lg" type="text" name="telephone" id="telephone" required>
        </div>
    </div> 
    <div class="ensemble">
        <h2>Couleurs</h2>
        <!-- Couleur n°1 -->
        <div class="form-group">
            <label for="couleur1">Couleur n°1</label>
            <input class="form-control form-control-lg" type="color" name="couleur1" id="couleur1" required>
        <!-- Couleur n°2 -->
            <label for="couleur2">Couleur n°2</label>
            <input class="form-control form-control-lg" type="color" name="couleur2" id="couleur2" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Générer</button>

</form>


       
</body>
</html>