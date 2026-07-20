<?php
header("Content-Type: application/xml; charset=utf-8");

$baseURL = "https://masterera.in/";

$pages = [
    "index.php",
    "services.php",
    "pricing.php",
    "about.php",
    "portfolio.php",
    "contact.php",
    "feedback.php"
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<?php foreach($pages as $page): ?>

<url>
    <loc><?php echo $baseURL . $page; ?></loc>
    <lastmod><?php echo date("Y-m-d"); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>
        <?php echo ($page == "index.php") ? "1.0" : "0.8"; ?>
    </priority>
</url>

<?php endforeach; ?>

</urlset>