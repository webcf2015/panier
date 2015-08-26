<?php

// monpanier


$config['jcartPath']              = 'jcart/';

// Path to your checkout page
$config['checkoutPath']           = 'checkout.php';

// The HTML name attributes used in your item forms
$config['item']['id']             = 'idproduit';    // Item id
$config['item']['name']           = 'nomproduit';    // Item name
$config['item']['price']          = 'my-item-price';    // Item price
$config['item']['qty']            = 'my-item-qty';    // Item quantity
$config['item']['url']            = 'my-item-url';    // Item URL (optional)
$config['item']['add']            = 'my-add-button';    // Add to cart button

// ID du marchant Paypal
// Found here: https://www.paypal.com/webapps/customerprofile/summary.view
$config['paypal']['id']           = 'K7XDJ7837U33Q';

////////////////////////////////////////////////////////////////////////////////
// OPTIONAL SETTINGS

// Three-letter currency code, defaults to USD if empty
// See available options here: http://j.mp/agNsTx
$config['currencyCode']           = 'EUR';

// Add a unique token to form posts to prevent CSRF exploits
// Learn more: http://conceptlogic.com/jcart/security.php
$config['csrfToken']              = true;

// Override default cart text
$config['text']['cartTitle']      = 'MonPanier';    // Shopping Cart
$config['text']['singleItem']     = 'Produit';    // Item
$config['text']['multipleItems']  = 'Produits';    // Items
$config['text']['subtotal']       = 'sous-total';    // Subtotal
$config['text']['update']         = 'Mettre à jour';    // update
$config['text']['checkout']       = 'Payer !';    // checkout
$config['text']['checkoutPaypal'] = 'Payer avec Paypal!';    // Checkout with PayPal
$config['text']['removeLink']     = 'Supprimer';    // remove
$config['text']['emptyButton']    = 'Vider';    // empty
$config['text']['emptyMessage']   = 'Votre panier est vide!';    // Your cart is empty!
$config['text']['itemAdded']      = 'Produit ajouté!';    // Item added!
$config['text']['priceError']     = 'Format de prix invalide';    // Invalid price format!
$config['text']['quantityError']  = 'Problème de quantité';    // Item quantities must be whole numbers!
$config['text']['checkoutError']  = 'Problème lors de la finalisation de l\'achat';    // Your order could not be processed!

// Override the default buttons by entering paths to your button images
$config['button']['checkout']     = ''; 
$config['button']['paypal']       = ''; 
$config['button']['update']       = '';
$config['button']['empty']        = '';


////////////////////////////////////////////////////////////////////////////////
// ADVANCED SETTINGS

// Display tooltip after the visitor adds an item to their cart?
$config['tooltip']                = true;

// Allow decimals in item quantities?
$config['decimalQtys']            = false;

// How many decimal places are allowed?
$config['decimalPlaces']          = 1;

// Number format for prices, see: http://php.net/manual/en/function.number-format.php
$config['priceFormat']            = array('decimals' => 2, 'dec_point' => ',', 'thousands_sep' => '.');

// Send visitor to PayPal via HTTPS?
$config['paypal']['https']        = true;

// Use PayPal sandbox?
$config['paypal']['sandbox']      = false;

// The URL a visitor is returned to after completing their PayPal transaction
$config['paypal']['returnUrl']    = '';

// The URL of your PayPal IPN script
$config['paypal']['notifyUrl']    = '';

?>