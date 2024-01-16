<!-- cart.php -->

<?php
session_start();

// Vérifier si le panier existe dans la session
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = array();
}

// Inclure le header, le menu ou d'autres éléments communs
include('header.php');
?>

<div class="container">
    <h2>Mon Panier</h2>
    
    <?php
    // Vérifier si le panier est vide
    if (empty($cart)) {
        echo "<p>Votre panier est vide.</p>";
    } else {
        echo "<table>";
        echo "<tr><th>Produit</th><th>Prix</th><th>Quantité</th><th>Total</th><th>Actions</th></tr>";

        // TODO: Afficher les produits du panier avec les informations de la base de données
        foreach ($cart as $product) {
            echo "<tr>";
            echo "<td>{$product['name']}</td>";
            echo "<td>{$product['price']} €</td>";
            echo "<td>{$product['quantity']}</td>";
            echo "<td>{$product['total']} €</td>";
            echo "<td><a href='update_cart.php?action=remove&id={$product['id']}'>Supprimer</a></td>";
            echo "</tr>";
        }

        // TODO: Calculer et afficher le prix total
        $total_price = 0;
        foreach ($cart as $product) {
            $total_price += $product['total'];
        }
        echo "<tr><td colspan='3'>Total</td><td>{$total_price} €</td><td></td></tr>";

        echo "</table>";

        // TODO: Ajout d'un bouton pour passer à la caisse
        echo "<a href='checkout.php'>Payer</a>";
    }
    ?>

</div>

<?php
include('footer.php');
?>