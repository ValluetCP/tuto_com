<?php
$histoire = "<p>Le Moyen Âge est une période de l'histoire de l'Europe, s'étendant du Ve siècle au XVe siècle, qui débuta avec le déclin de l'Empire romain d'Occident et se termina par la Renaissance et les Grandes découvertes. Située entre l'Antiquité et l'époque moderne, la période est subdivisée entre le haut Moyen Âge (VIe–Xe siècle), le Moyen Âge central (XIe–XIIIe siècle) et le Moyen Âge tardif (XIVe–XVe siècle). </p>
<p><em>Nous vous proposons ici de découvrir l'histoire de trois grands rois de France.</em></p>";
if(isset($_GET['rois'])) {
$rois = $_GET['rois'];
switch($rois) {
	case 1:
		$histoire = "<h1>François 1er</h1>
        <img src=\"media/francois-1.jpg\" class=\"imgRoi\" />
		<p>François Ier (né sous le nom de François d'Orléans le 12 septembre 1494 à Cognac et mort le 31 mars 1547 à Rambouillet) est sacré roi de France le 25 janvier 1515 dans la cathédrale de Reims. Il règne jusqu’à sa mort en 1547. Fils de Charles d'Orléans et de Louise de Savoie, il appartient à la branche de Valois-Angoulême de la dynastie capétienne. </p>
<p>François Ier est considéré comme le roi emblématique de la période de la Renaissance française1. Son règne permet un développement important des arts et des lettres en France. Sur le plan militaire et politique, le règne de François Ier est ponctué de guerres et d’importants faits diplomatiques. </p>
<p>Il possède un puissant rival en la personne de Charles Quint et doit compter sur les intérêts diplomatiques du roi Henri VIII d'Angleterre toujours désireux de se placer en allié de l’un ou l’autre camp. François Ier enregistre succès et défaites mais interdit à son ennemi impérial de concrétiser ses rêves, dont la réalisation toucherait l’intégrité du royaume. </p>
<p>L'antagonisme des deux souverains catholiques entraîne de lourdes conséquences pour l’Occident chrétien : il facilite la diffusion de la Réforme naissante et surtout permet à l'Empire ottoman de s'installer aux portes de Vienne en s'emparant de la quasi-totalité du royaume de Hongrie. </p> 
<p>Sur le plan intérieur, son règne coïncide en effet avec l'accélération de la diffusion des idées de la Réforme. La constitution de la monarchie absolue et les besoins financiers liés à la guerre et au développement des arts induisent la nécessité de contrôler et optimiser la gestion de l'État et du territoire. François Ier introduit une série de réformes touchant à l'administration du pouvoir et en particulier à l'amélioration du rendement de l'impôt, réformes mises en œuvre et poursuivies sous le règne de son successeur Henri II. </p>";
		break;
	case 2:
		$histoire = "<h1>Charles IX</h1>
        <img src=\"media/charles-9.jpg\" class=\"imgRoi\" />
		<p>Né Charles-Maximilien de France, il est le cinquième des dix enfants et le troisième fils d'Henri II et de Catherine de Médicis. D'abord titré duc d'Angoulême, il est titré duc d'Orléans (1550 à 1560), après la mort de son frère Louis. Il est baptisé dans la religion catholique et reçoit pour parrains le roi Henri II de Navarre et Maximilien II, empereur du Saint-Empire romain germanique, et pour marraine la duchesse de Ferrare, Renée de France (fille du roi de France Louis XII et d'Anne de Bretagne) sa grand-tante. </p>
<p>Il accède au trône de France après la mort prématurée de son frère François II. Il est alors âgé de 10 ans. La régence est confiée à sa mère jusqu'à sa majorité. Charles est sacré roi de France dans la cathédrale de Reims le 5 mai 1561. Il préside du 13 décembre 1560 au 31 janvier 1561, les États généraux rassemblés à Orléans. Le premier prince du sang Antoine de Bourbon est nommé lieutenant général du royaume. </p>
<p>En montant sur le trône, Charles hérite d'un royaume en train de se diviser entre catholiques et protestants. Lors du colloque de Poissy, organisé le 9 septembre 1561, la reine-mère espère trouver un chemin d'entente entre le parti catholique représenté par le cardinal de Lorraine et le parti protestant représenté par Théodore de Bèze, mais aucun accord n'est accepté. Les incidents se multiplient en province, entre actes iconoclastes et violences physiques. Le 16 novembre 1561, le massacre de Cahors, qui fait près de trente morts protestants, confirme cet échec. Le 17 janvier 1562, l'édit de Saint-Germain-en-Laye permet aux protestants de pratiquer leur culte dans les campagnes et les faubourgs urbains. </p>
<p>Néanmoins, après le massacre de Wassy le 1er mars 1562, les protestants prennent les armes, avec, à leur tête, le prince de Condé. De nombreuses villes tombent temporairement entre leurs mains. Ils sont battus à Dreux par le duc de Guise le 19 décembre 1562. Tandis que Louis de Condé est fait prisonnier, le chef de l'armée catholique, Montmorency, est capturé par les protestants. Le 4 février 1563, François de Guise met le siège devant Orléans, et y meurt le 24 février de trois coups de pistolet dans le dos. Le 19 mars, avec le traité d'Amboise, une première paix fragile est établie. Le 19 août de la même année, Charles IX est déclaré majeur mais la reine-mère continue d'exercer le pouvoir en son nom. </p>";
		break;	
	case 3:
		$histoire = "<h1>Louis XIV</h1>
        <img src=\"media/louis-14.jpg\" class=\"imgRoi\" />
        <p>Louis XIV, dit « le Grand » et « le Roi-Soleil », né le 5 septembre 1638 au château Neuf de Saint-Germain-en-Laye et mort le 1er septembre 1715 à Versailles, est un roi de France et de Navarre. Il règne sur le royaume de France et de Navarre du 14 mai 1643 (officiellement le 7 septembre 1651) à sa mort. 
Né Louis, surnommé « Dieudonné »2, il monte sur le trône de France au décès de son père Louis XIII, quelques mois avant son cinquième anniversaire. Il est le 64e roi de France, le 44e roi de Navarre et le troisième roi de France issu de la dynastie des Bourbons. Son règne de 72 ans est l’un des plus longs de l'histoire d'Europe, et le plus long de l'Histoire de France.</p> 
<p>Il marque l'apogée de la construction séculaire d'un absolutisme de droit divin. Après une minorité troublée par la Fronde de 1648 à 1653, Louis XIV assume personnellement le gouvernement à la mort du cardinal Mazarin en 1661 en ne prenant plus de ministre principal. Son autorité se déploie avec la fin des grandes révoltes nobiliaires, parlementaires, protestantes et paysannes qui avaient marqué les décennies précédentes. Le monarque impose l'obéissance à tous les ordres et contrôle les courants d'opinion (y compris littéraires ou religieux), parmi lesquels le jansénisme à partir de 1660 et le protestantisme au travers de la révocation de l'édit de Nantes en 1685. Louis XIV construit un État centralisé, où son rôle direct est encore accentué après le décès des ministres Colbert en 1683 et Louvois en 1691.</p> 
<p>Par la diplomatie et la guerre, il accroît sa puissance en Europe, en particulier contre les Habsbourg. Sa politique du « pré carré » cherche à agrandir et rationaliser les frontières du pays, protégée par la « ceinture de fer » de Vauban qui fortifie les villes conquises. Pour obtenir une prédominance économique, un effort de développement commercial et colonial est conduit, notamment par son ministre Colbert.</p> 
<p>À partir de 1682, Louis XIV dirige son royaume depuis le vaste château de Versailles, modèle architectural de nombreux palais européens et dont il a dirigé la construction. Sa cour soumet la noblesse, étroitement surveillée, à une étiquette très élaborée. Le prestige culturel s'y affirme grâce au mécénat royal en faveur d'artistes tels que Molière, Racine, Boileau, Lully, Le Brun et Le Nôtre, ce qui favorise l'apogée du classicisme français, qualifié, dès son vivant, de « Grand Siècle », voire de « Siècle Louis XIV ». </p>
<p>Sa difficile fin de règne est marquée par l'exode des protestants persécutés, par des revers militaires, par les deux famines de 1693 et de 1709 qui font près de deux millions de morts, par la révolte des Camisards et par les nombreux décès de ses héritiers royaux. Tous ses enfants et petits-enfants dynastes sont morts, et son successeur, son arrière-petit-fils Louis XV, n'a que cinq ans à la mort du roi, et pourtant, même après la régence assez libérale de Philippe d'Orléans, l'absolutisme perdure, attestant ainsi de la solidité du régime construit par Louis XIV. </p>
<p>Habité par l'idée de sa gloire et de son droit divin, soucieux d'accomplir en permanence son « métier de roi », Louis XIV est devenu l'archétype du monarque absolu aux yeux du monde. </p>";
		break;		
}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rois de France</title>
<link rel="stylesheet" href="style.css" />
</head>

<body>

<div id="site">
	<header>Les rois de France</header>
    <nav>
    	<div class="navRoi">
        	<a href="?rois=1">
        		<img src="media/francois-1.jpg" class="avatar" />
            </a>
        	<h2>François 1er</h2>
            1494 - 1547
        </div>
        <div class="navRoi">
        	<a href="?rois=2">
        		<img src="media/charles-9.jpg" class="avatar" />
            </a>    
        	<h2>Charles IX</h2>
            1550 - 1574
        </div>
        <div class="navRoi">
        	<a href="?rois=3">
        		<img src="media/louis-14.jpg" class="avatar" />
            </a>    
        	<h2>Louis XIV</h2>
            1638 - 1715
        </div>
    </nav>
    <article>
    	<?= $histoire; ?>
    </article>
    <footer>Histoire de France</footer>
</div>

</body>
</html>