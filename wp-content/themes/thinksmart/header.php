<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thinksmart
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header> 
    <div class="header-menu">
        <div class="container">
            <div class="h-menu">
                <ul>
                    <li><div class="logo"><a href="index.php"><img src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid" alt=""></a></div></li>
                    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <li><a href="about.php">Giới thiệu</a></li>
                    <li><a href="category.php">Tư vấn - Hỏi đáp</a></li>
                    <li><a href="category.php">Dịch vụ luật sư</a></li>
                    <li><a href="notece.php">Nhật ký luật sư</a></li>
                    <li><a href="contact.php">Liên hệ </a></li>
                </ul>
            </div>
        </div>
    </div>  
    <div class="menu-mobile" style="display: none;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-6">
                    <div class="logo"> 
                        <a title="" href="index.php"><img alt="" src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid avarta-logo" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="btn-menu text-right"><a title="" href="#menu"><i class="fa fa-bars"></i></a></div>
                </div>
            </div>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="about.php">Giới thiệu</a></li>
                <li><a href="category.php">Tư vấn - Hỏi đáp</a></li>
                <li><a href="category.php">Dịch vụ luật sư</a></li>
                <li><a href="notece.php">Nhật ký luật sư</a></li>
                <li><a href="contact.php">Liên hệ </a></li>
            </ul>
        </nav>
    </div>  
</header>
