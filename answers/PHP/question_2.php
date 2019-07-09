<?php
    $products = array(
        array('productID' => 1,
            'productName' => "Produit 1",
            'productCategorie' => 1),
        array('productID' => 2,
            'productName' => "Produit 2",
            'productCategorie' => 2),
        array('productID' => 3,
            'productName' => "Produit 3",
            'productCategorie' => 2),
        array('productID' => 4,
            'productName' => "Produit 4",
            'productCategorie' => 2),
        array('productID' => 5,
            'productName' => "Produit 5",
            'productCategorie' => 3),
        array('productID' => 6,
            'productName' => "Produit 6",
            'productCategorie' => 3)
    );
    $categories = array ("Catégorie 1", "Catégorie 2", "Catégorie 3");

    /*
     * code here to output like this
     *
     * - Catégorie 1 : Produit 1
     * - Catégorie 2 : Produit 2, Produit 3, Produit 4
     * - Catégorie 3 : Produit 5, Produit 6
     */

