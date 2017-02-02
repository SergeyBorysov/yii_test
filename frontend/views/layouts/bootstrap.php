<?php
\frontend\assets\MainAsset::register($this);

use yii\helpers\Html;
use yii\bootstrap\Nav;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>La Casa - Real Estate HTML5 Home Page Template</title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="author" content="pixelhint.com">
    <meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<section class="hero">
    <header>
        <div class="wrapper">
            <a href="#"><img src="source/img/logo.png" class="logo" alt="" titl=""/></a>
            <a href="#" class="hamburger"></a>
            <nav>
                <ul>
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Sell</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <a href="#" class="login_btn">Login</a>
            </nav>
        </div>
    </header><!--  end header section  -->

    <section class="listings">
        <div class="wrapper">
            <ul class="properties_list">
                <li>
                    <a href="#">
                        <img src="source/img/property_1.jpg" alt="" title="" class="property_img"/>
                    </a>
                    <span class="price">$2500</span>
                    <div class="property_details">
                        <h1>
                            <a href="#">Fuisque dictum tortor at purus libero</a>
                        </h1>
                        <h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="source/img/property_2.jpg" alt="" title="" class="property_img"/>
                    </a>
                    <span class="price">$1000</span>
                    <div class="property_details">
                        <h1>
                            <a href="#">Fuisque dictum tortor at purus libero</a>
                        </h1>
                        <h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="source/img/property_3.jpg" alt="" title="" class="property_img"/>
                    </a>
                    <span class="price">$500</span>
                    <div class="property_details">
                        <h1>
                            <a href="#">Fuisque dictum tortor at purus libero</a>
                        </h1>
                        <h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="source/img/property_1.jpg" alt="" title="" class="property_img"/>
                    </a>
                    <span class="price">$2500</span>
                    <div class="property_details">
                        <h1>
                            <a href="#">Fuisque dictum tortor at purus libero</a>
                        </h1>
                        <h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="source/img/property_2.jpg" alt="" title="" class="property_img"/>
                    </a>
                    <span class="price">$1000</span>
                    <div class="property_details">
                        <h1>
                            <a href="#">Fuisque dictum tortor at purus libero</a>
                        </h1>
                        <h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="source/img/property_3.jpg" alt="" title="" class="property_img"/>
                    </a>
                    <span class="price">$500</span>
                    <div class="property_details">
                        <h1>
                            <a href="#">Fuisque dictum tortor at purus libero</a>
                        </h1>
                        <h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="source/img/property_1.jpg" alt="" title="" class="property_img"/>
                    </a>
                    <span class="price">$2500</span>
                    <div class="property_details">
                        <h1>
                            <a href="#">Fuisque dictum tortor at purus libero</a>
                        </h1>
                        <h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="source/img/property_2.jpg" alt="" title="" class="property_img"/>
                    </a>
                    <span class="price">$1000</span>
                    <div class="property_details">
                        <h1>
                            <a href="#">Fuisque dictum tortor at purus libero</a>
                        </h1>
                        <h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="source/img/property_3.jpg" alt="" title="" class="property_img"/>
                    </a>
                    <span class="price">$500</span>
                    <div class="property_details">
                        <h1>
                            <a href="#">Fuisque dictum tortor at purus libero</a>
                        </h1>
                        <h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>
                    </div>
                </li>
            </ul>
            <div class="more_listing">
                <a href="#" class="more_listing_btn">View More Listings</a>
            </div>
        </div>
    </section>	<!--  end listing section  -->

    <footer>
        <div class="wrapper footer">
            <ul>
                <li class="links">
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>

                <li class="links">
                    <ul>
                        <li><a href="#">Appartements</a></li>
                        <li><a href="#">Houses</a></li>
                        <li><a href="#">Villas</a></li>
                        <li><a href="#">Mansions</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </li>

                <li class="links">
                    <ul>
                        <li><a href="#">New York</a></li>
                        <li><a href="#">Los Anglos</a></li>
                        <li><a href="#">Miami</a></li>
                        <li><a href="#">Washington</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </li>

                <li class="about">
                    <p>La Casa is real estate minimal html5 website template, designed and coded by pixelhint, tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum</p>
                    <ul>
                        <li><a href="http://facebook.com/pixelhint" class="facebook" target="_blank"></a></li>
                        <li><a href="http://twitter.com/pixelhint" class="twitter" target="_blank"></a></li>
                        <li><a href="http://plus.google.com/+Pixelhint" class="google" target="_blank"></a></li>
                        <li><a href="#" class="skype"></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="copyrights wrapper">
            Copyright © 2015 <a href="http://pixelhint.com" target="_blank" class="ph_link" title="Download more free Templates">Pixelhint.com</a>. All Rights Reserved.
        </div>
    </footer><!--  end footer  -->
</section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>