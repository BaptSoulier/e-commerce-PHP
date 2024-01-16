<!-- update_cart.php -->

<?php
session_start();

if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $product_id = $_GET['id'];

    // Vérifier si le panier existe dans la session
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    } else {
        $cart = array();
    }

    // TODO: Implémenter les actions d'ajout, de mise à jour ou de suppression du panier
    if ($action === 'add') {
        // Ajouter un produit au panier
        // TODO: Récupérer les informations du produit depuis la base de données
        $product = array(
            'id' => $product_id,
            'name' => 'Nom du Produit',  // Remplace par la véritable information de la base de données
            'price' => 20.00,  // Remplace par la véritable information de la base de données
            'quantity' => 1,
            'total' => 20.00
        );
        $cart[] = $product;
    } elseif ($action === 'update') {
        // Mettre à jour la quantité d'un produit dans le panier
        // TODO: Implémenter la mise à jour du panier
    } elseif ($action === 'remove') {
        // Supprimer un produit du panier
        // TODO: Implémenter la suppression du produit du panier
    }

    // Mettre à jour le panier dans la session
    $_SESSION['cart'] = $cart;
}

// Rediriger vers la page du panier
header('Location: cart.php');
exit();
?>
