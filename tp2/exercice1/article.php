
    <?php
        if (isset($_GET["reference"])&&isset($_GET["libelle"])&&isset($_GET["fournisseur"])&&isset($_GET["point_de_vente"])&&isset($_GET["prix"])
        &&isset($_GET["quantite_en_stock"])) 
    {

    
        $reference = $_GET["reference"];
        $libelle = $_GET["libelle"];
        $fournisseur = $_GET["fournisseur"];
        $point_de_vente = $_GET["point_de_vente"] ; 
        $prix = $_GET["prix"];
        $quantite_en_stock = $_GET["quantite_en_stock"];
        
$list f="" ; 
        echo "<p>Référence : $reference</p>";
        echo "<p>Libellé : $libelle</p>";
        echo "<p>Fournisseur : $fournisseur</p>";
        echo "<p>Point de vente : $point_de_vente</p>";
        echo "<p>Prix : $prix</p>";
        echo "<p>Quantité en stock : $quantite_en_stock</p>";
        echo "<p>liste des fournisseurs <ul>" ; 
        foreach($f as $x ) {
            "<li>$x</li>"';
            $listf
        }
    } else {
        echo "<p>Aucune donnée reçue.</p>";
    }
    ?>

