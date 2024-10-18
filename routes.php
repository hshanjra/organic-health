<?php
require_once __DIR__ . '/router.php';

get('/', 'views/index.php');

get('/about', 'views/about.php');
get('/contact', 'views/contact.php');
get('/distributorship', 'views/distributorship.php');
get('/clients', 'views/clients.php');
get('/daily-essentials', 'views/daily-essentials.php');

// Blogs Route
// TODO: bind the slug with blogs
get('/blogs/how-product-design-and-label-design-increase-sales', 'views/blogs/how-product-design-and-label-design-increase-sales.php');

// Capabilities route
get('/capabilities', 'views/manufacturing.php');
get('/capabilities/manufacturing', 'views/manufacturing.php');

// Products Routes
get('/products', 'views/products/gym-supplement.php');
get('/products/gym-supplement', 'views/products/gym-supplement.php');
get('/products/immunity', 'views/products/immunity.php');
get('/products/blood-clotting', 'views/products/blood-clotting.php');
get('/products/essential-oils', 'views/products/essential-oils.php');
get('/products/diabetic-care', 'views/products/diabetic-care.php');
get('/products/fmcg', 'views/products/fmcg.php');
get('/products/energy-drink', 'views/products/energy-drink.php');
get('/products/antioxidants', 'views/products/antioxidants.php');
get('/products/gastrointestinal', 'views/products/gastrointestinal.php');
get('/products/general-wellness', 'views/products/general-wellness.php');
get('/products/sprays', 'views/products/sprays.php');
get('/products/heart-care', 'views/products/heart-care.php');
get('/products/joint-care', 'views/products/joint-care.php');
get('/products/herbal-supplement', 'views/products/herbal-supplement.php');
get('/products/kids-supplement', 'views/products/kids-supplement.php');
get('/products/infant-milk-formula', 'views/products/infant-milk-formula.php');
get('/products/pregnancy-care', 'views/products/pregnancy-care.php');
get('/products/malnutrition', 'views/products/malnutrition.php');
get('/products/probiotics', 'views/products/probiotics.php');
get('/products/protein-powder', 'views/products/protein-powder.php');
get('/products/kidney-care', 'views/products/kidney-care.php');
get('/products/skin-care', 'views/products/skin-care.php');
get('/products/multivitamin', 'views/products/multivitamin.php');
get('/products/sexual-wellness', 'views/products/sexual-wellness.php');
get('/products/stress-relief', 'views/products/stress-relief.php');
get('/products/recovery-supplement', 'views/products/recovery-supplement.php');
get('/products/supplement-for-sports-person', 'views/products/supplement-for-sports-person.php');
get('/products/vitamin-and-minerals', 'views/products/vitamin-and-minerals.php');
get('/products/weight-loss', 'views/products/weight-loss.php');
get('/products/effervescent-tablets', 'views/products/effervescent-tablets.php');

// Premixes Route
get('/premixes', 'views/premixes/vitamin-mineral-premix.php');
get('/premixes/fortification-premix', 'views/premixes/fortification-premix.php');
get('/premixes/pre-pro-biotic-premix', 'views/premixes/pre-pro-biotic-premix.php');
get('/premixes/premix-for-beverage', 'views/premixes/premix-for-beverage.php');
get('/premixes/protein-amino-acid-premix', 'views/premixes/protein-amino-acid-premix.php');
get('/premixes/vitamin-mineral-premix', 'views/premixes/vitamin-mineral-premix.php');




/* API Routes */
post('/contact', 'views/contact.php');
post('/distributorship', 'views/distributorship.php');


// 404 Route
any('/404', 'views/404');
