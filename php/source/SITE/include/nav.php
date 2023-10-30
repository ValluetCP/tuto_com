<?php
if(preg_match("#dinosaures#", $_SERVER['REQUEST_URI'])) {
	$class1 = '';
	$class2 = 'on';
	$class3 = '';
} elseif(preg_match("#extinction#", $_SERVER['REQUEST_URI'])) {
	$class1 = '';
	$class2 = '';
	$class3 = 'on';	
} else {
	$class1 = 'on';
	$class2 = '';
	$class3 = '';		
}
?>
    <nav>
    	<ul>
         <li class="<?= $class1; ?>"><a href="index.php"><h4>Accueil</h4><span>Homme du site</span></a></li>
         <li class="<?= $class2; ?>"><a href="dinosaures.php"><h4>Dinosaures</h4><span>Les carnivores</span></a></li>
         <li class="<?= $class3; ?>"><a href="extinction.php"><h4>Extinction</h4><span>Fin des dinosaures</span></a></li>
        </ul>
    </nav>