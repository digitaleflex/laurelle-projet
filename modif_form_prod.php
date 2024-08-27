<?php
    include('connexion.php');
    $matprod = $_GET['id'];
    $req = "SELECT * FROM produits where idProduit= $matprod";
    $reponse = $bdd -> query($req);
    $donnee = $reponse -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/form_prod.css"> -->
    <title>Modification des produits</title>
    <style>
        .ajout{
            margin-top: 60px;
            color: #0d6efd;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include 'navbar/en_tete.php'; ?>

    <section class="container my-5 flex-grow-1">
        <h1 class="ajout text-center mb-4">Modification d'un produit</h1>
        <form action="valider_modif_form.php" method="post">
            <fieldset class="border p-4 rounded">
                <legend class="fw-bold">Produit</legend>

                <?php foreach($donnee as $liste){ ?>
                    <div class="mb-3">
                        <label for="s_numero" class="form-label">Matricule Produit :</label>
                        <input type="text" id="s_numero" name="s_numero" class="form-control" value="<?= $liste['idProduit'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="s_nomproduit" class="form-label">Nom du Produit :</label>
                        <input type="text" id="s_nomproduit" name="s_nomproduit" class="form-control" value="<?= $liste['NomProduit'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="s_descriptionproduit" class="form-label">Description du Produit :</label>
                        <input type="text" id="s_descriptionproduit" name="s_descriptionproduit" class="form-control" value="<?= $liste['DescriptionProduit'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="s_prixvente" class="form-label">Prix de vente :</label>
                        <input type="text" id="s_prixvente" name="s_prixvente" class="form-control" value="<?= $liste['PrixVente'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="s_coutunit" class="form-label">Coût unitaire :</label>
                        <input type="text" id="s_coutunit" name="s_coutunit" class="form-control" value="<?= $liste['CoutUnitaire'] ?>">
                    </div>
                <?php } ?>
            </fieldset>
            
            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
    </section>

    <footer class="footer bg-dark text-white text-center py-4">
        <p class="mb-0 ">Copyright © 2024 Homechip's Laure | Tous droits réservés</p>
        <p class="mb-0 ">Design by: <a href="https://ari-luxury.com" class="text-white text-decoration-none">Ari-Luxury</a></p>
    </footer>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>