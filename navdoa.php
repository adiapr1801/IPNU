<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Beranda Administrator | IPPNU</title>
    <?php include("section/css.php"); ?>
</head>

<body class="homepage">
<header id="header" style="background:#00CC33;">
        <?php
			include("section/header.php");
		?>		
</header>


	<section id="recent-works">
        <?php
			include("section/doa.php");
		?>
    </section>

    <section id="content" style="background:#CCCCCC;">
        <?php
			include("section/content.php");
		?>
    </section>

    <section id="partner" style="background:#fff; margin:auto; border-top:#006600 solid 2px; border-bottom:#006600 solid 2px;">
        <?php
			include("section/partner.php");
		?>
    </section>

    <section id="conatcat-info">
         <?php
			include("section/contact-info.php");
		?>  
    </section>

    <section id="bottom">
        <?php
			include("section/bottom.php");
		?>  
    </section>

    <footer id="footer" class="midnight-blue" style="background:#006600;">
        <?php
			include("section/footer.php");
		?>
    </footer>
	<?php include("section/javascript.php");?>
</body>
</html>