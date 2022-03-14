<?php
require_once('model/Article.php');
require_once('model/Category.php');


    
$categories=array (new Category('Football'),new Category('Running'),
new Category('Natation'),new Category('Ski'),
new Category('Randonne'),new Category('Trail'),
new Category('Box'),new Category('Trainig'),
new Category('Basket-Ball'));

$articles=array(new Article( 'Sneakers homme Air Max Limited 3',45,55.0,'Superbe Chaussures',5,'//media.intersport.fr/is/image/intersportfr/BV1171_FH3_Q1',1),
new Article('Sneakers homme Puma Wired Run',130.30,120.30,"Superbes chaussures",5,'//media.intersport.fr/is/image/intersportfr/373015_HLD_Q1',0),
new Article('Survêtement homme Flc',130.30,0,"Superbes chaussures",3,"//media.intersport.fr/is/image/intersportfr/BV3017_W99_Q1",1),
new Article('Sweatshirt femme GFX',69.90,100,"Superbe sweatshirt",4,"//media.intersport.fr/is/image/intersportfr/GU8891_K7E_FA",0),
new Article('Sneakers femme Air Max Vg-R',150,200,"Superbe Sneakers",5,"//media.intersport.fr/is/image/intersportfr/CT1730_PM9_PR",1),
new Article ('Legging femme GFX',200,300, "Superbe Legging",3,"https://media.intersport.fr/is/image/intersportfr/H55223_K7E_FA",0),
new Article('Sweatshirt zippé à capuche garçon B AR 3S HOOD',200,250,"superbe Sweatshirt",5,"https://media.intersport.fr/is/image/intersportfr/GT9416_K86_FA",1),
new Article('Sneakers enfant Ps Courtflex V2',550,500,'superbe Sneakers',4,"//media.intersport.fr/is/image/intersportfr/371543_118_Q1",0));


include('views/accueil.php');








?>
