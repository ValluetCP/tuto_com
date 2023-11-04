<?php
    if (isset($_GET['dino'])) {
        $dino= $_GET['dino'];
       switch ($dino) {
        case 'albertosaurus':
            $titre = 'Albertosaurus';
            $texte ="<h1>Albertosaurus</h1>
            <p><img class=\"photo\" src=\"img/albertosaurus.jpg\" /></p>
            <p>Albertosaurus (dont le nom signifie « lézard de l'Alberta ») est un genre éteint de dinosaures théropodes appartenant à la famille des Tyrannosauridae et à la sous-famille (biologie) des Albertosaurinae. Il a vécu dans l'Ouest de l'Amérique du Nord au début du Maastrichtien (fin du Crétacé supérieur, il y a environ 70 millions d'années). </p>
            <p>L'espèce type, Albertosaurus sarcophagus, décrite par Osborn en 1905, semble n'avoir vécu que dans l'actuelle province canadienne de l'Alberta qui lui a donné son nom. Les scientifiques sont en désaccord sur les espèces appartenant au genre Albertosaurus puisque certains d'entre eux considèrent que l'espèce Gorgosaurus libratus décrite par Lawrence Lambe en 1914 n'est autre qu'une seconde espèce d'Albertosaurus. </p>
            <p>Tout comme les autres tyrannosauridés, Albertosaurus était un prédateur bipède muni de membres antérieurs atrophiés terminés par deux doigts griffus ainsi qu'une large tête portant des dents pointues particulièrement massives. Ce dinosaure carnivore semble avoir été au sommet de la chaîne alimentaire dans son écosystème local, néanmoins, et bien que de taille relativement importante pour un théropode de son époque, Albertosaurus était beaucoup plus petit et plus léger que le plus célèbre de ses cousins, Tyrannosaurus rex, puisque des estimations lui donnent une taille d'environ 9 mètres pour un poids de moins de deux tonnes. </p>
            <p>Depuis les premières découvertes d'ossements d'Albertosaurus en 1884, des fossiles de plus d'une trentaine d'individus ont été mis au jour, permettant ainsi aux scientifiques d'avoir une connaissance approfondie de son anatomie qui reste dès lors l'une des mieux connues au sein du clade des Tyrannosauridae. La découverte de 22 individus sur un même site, qui semble par ailleurs fournir une bonne indication d'un mode de chasse en groupe, a également permis de réaliser des études ontogénétiques et paléoécologiques qui restent rares et difficiles à entreprendre sur les dinosaures.</p>";

            break;
        case 'allosaure':
            $titre = 'Allosaure';
            $texte ="<h1>Allosaure</h1>
            <p><img class=\"photo\" src=\"img/allosaure.jpg\" /></p>
            <p>Allosaurus (lézard différent) est un genre de dinosaures théropodes ayant vécu il y a 155 à 145 millions d’années environ, au Kimméridgien et au Tithonien (Jurassique supérieur) dans ce qui est actuellement l’Amérique du Nord et l’Europe. Allosaurus est nommé par Othniel Charles Marsh en 1877 sur base de matériel post-crâniens fragmentaires. Il compte parmi les premiers dinosaures théropodes découverts et reste un des dinosaures les plus étudiés et les mieux connus. Son nom est également bien connu du public puisqu'il est l’un des dinosaures les plus représentés dans les films et les documentaires. </p>
            <p>Classé parmi les théropodes Tetanurae dans le clade des Allosauroidea, ce genre possède une taxinomie complexe et comprend un certain nombre d'espèces, la mieux connue étant A. fragilis. Les restes d’Allosaurus ont été majoritairement découverts dans la Formation de Morrison d'Amérique du Nord datée du Jurassique supérieur, d’autres ayant été également trouvés dans une formation contemporaine du Portugal. Le genre Allosaurus a été considéré à plusieurs reprises comme un synonyme junior d’Antrodemus (Antrodemus valens), mais ce dernier taxon ne reposant que sur un reste de vertèbre caudale, la majorité des paléontologues voient le genre Antrodemus comme un nomen dubium. </p>
            <p>Allosaurus était, comme un grand nombre de dinosaures théropodes, un prédateur bipède muni d'une longue queue servant de balancier au corps puissant armé de larges bras à trois doigts griffus. Le cou en « S » de ce dinosaure supportait une tête massive et relativement étroite dont les mâchoires étaient munies d'une rangée de dents pointues en forme de lame. Ce dinosaure se distingue néanmoins de ses proches parents par une série de caractères anatomiques précis dont, entre autres, une corne au niveau de l'os lacrymal, une ouverture dorsale au niveau de l'antre maxillaire et un foramen mandibulaire interne sur la marge caudo-ventrale du préarticulaire. Des estimations donnent à Allosaurus une longueur moyenne de 8,5 mètres mais des restes fragmentaires de grande taille semblent démontrer que ce dinosaure pouvait atteindre 12 mètres de longueur, ce qui fait de lui un des plus grands théropodes de son époque. Relativement plus gracile que son contemporain Torvosaurus qui partageait le même biotope, Allosaurus se situait avec ce dernier au sommet de la chaîne alimentaire et se nourrissait de dinosaures herbivores de très grandes tailles dont le Stegosauridae Stegosaurus et le sauropode Camarasaurus, comme en témoignent des marques de morsures laissées par Allosaurus sur les os de ces deux dinosaures. </p>
            <p>Certains paléontologues pensent qu’Allosaurus avait un comportement social complexe, chassant en meute, tandis que d’autres estiment qu’il était agressif envers ses congénères et que les rassemblements de squelettes d’Allosaurus seraient le résultat de regroupements d’individus isolés se nourrissant des mêmes proies. Il pourrait avoir attaqué d’imposantes proies en embuscade en s’aidant de sa mâchoire supérieure comme d’une hache.</p>";
            break;
        case 'tyranosaure':
            $titre = 'Tyranosaure';
            $texte ="<h1>Tyrannosaure</h1>
            <p><img class=\"photo\" src=\"img/tyrannosaure.jpg\" /></p>
            <p>Tyrannosaurus rex est l'un des plus grands carnivores terrestres de tous les temps. Le plus grand spécimen complet (mais pas le plus grand spécimen) découvert à ce jour, répertorié sous le code FMNH PR2081 et surnommé « Sue », du nom de la paléontologue Sue Hendrickson, mesure 12,8 mètres de long et 4 mètres de haut au niveau des hanches. Les différentes estimations de la masse du Tyrannosaurus rex ont grandement varié au cours des années, allant selon les auteurs de plus de 7,2 tonnes11 à moins de 4,5 tonnes avec d'après les estimations les plus récentes une fourchette allant de 5,8 à 6,9 tonnes. </p>
            <p>Si Tyrannosaurus rex était plus grand qu'Allosaurus, un autre théropode bien connu du Jurassique, il était peut-être légèrement moins imposant que Spinosaurus et Giganotosaurus, deux carnivores du Crétacé. </p>
            <p>Comme chez les autres théropodes, le cou du T. rex forme une courbe en forme de « S » afin de maintenir la tête au-dessus du corps, mais il est particulièrement court et musculeux afin de supporter la tête massive. Les bras sont courts et se terminent par deux doigts. En 2007, un spécimen possédant trois doigts à chaque main a été découvert dans la formation de Hell Creek dans le Montana, suggérant la possible présence d'un troisième doigt vestigial chez Tyrannosaurus, hypothèse restant à confirmer. Proportionnellement à la taille du corps, les jambes du T. rex sont parmi les plus longues de tous les théropodes. La queue est longue et massive, constituée parfois de plus de quarante vertèbres, agissant comme un balancier permettant d'équilibrer la lourde tête et le torse. Afin d'alléger l'animal et de lui permettre de se mouvoir suffisamment rapidement, de nombreux os sont creux, réduisant la masse sans perte significative de solidité. </p>
            <p>Le plus grand crâne de T. rex mesure 1,535 mètre (5 pieds) de longueur. De larges cavités aériennes permettaient de réduire la masse du crâne, et laissaient la place aux attaches des muscles de la mâchoire, comme chez tous les théropodes carnivores. Mais, sur d'autres aspects, le crâne de Tyrannosaurus est significativement différent de celui des autres grands théropodes. Extrêmement large à l'arrière et muni d'un museau étroit, il permet une très bonne vision stéréoscopique. </p>
            <p>Les os du crâne sont massifs et certains os de la face dont l'os nasal sont fusionnés, empêchant tout mouvement. Beaucoup sont pneumatisés (constitués d'une structure en nid d'abeilles de petites poches d'air) ce qui a pour conséquence de les rendre plus souples et plus légers. Ces caractéristiques du crâne des tyrannosauridés leur aurait donné une morsure très puissante dépassant largement celle de tous les non-tyrannosauridés. Cependant, et malgré le cliché véhiculé par la saga des films Jurassic Park, T. rex ne pouvait pas tirer la langue, cette dernière étant supposée collée au fond de la gueule comme chez l'alligator. La conclusion est aussi valable pour la plupart des dinosaures. </p>
            <p>L'extrémité de la mâchoire supérieure est en forme de « U » (alors qu'elle est en forme de « V » chez la plupart des carnivores en dehors de la super-famille des Tyrannosauroidea), ce qui augmente la quantité de chair et d'os pouvant être arrachée à chaque bouchée, tout en augmentant l'effort exercé sur les dents frontales. L'étude des dents de Tyrannosaurus rex montrent une importante hétérodontie, c'est-à-dire la présence de dents de morphologies différentes. </p>
            <p>Les prémaxillaires à l'avant de la mâchoire supérieure sont resserrés, avec des crêtes de renforcement sur la surface arrière, en forme d'incisive recourbée vers l'arrière, réduisant ainsi le risque que les dents ne s'arrachent quand Tyrannosaurus mordait et tirait. Les autres dents sont robustes, plus largement espacées et également renforcées par des crêtes33. Les dents de la mâchoire supérieure sont plus grandes que toutes les autres. La plus grande trouvée à ce jour est estimée à 30 cm de long, racine comprise, ce qui en fait la plus grande dent de dinosaure carnivore. </p>
            <p>Dans les premiers temps, les paléontologues pensaient qu'il se tenait presque verticalement à cause de sa bipédie. Mais à la suite de la découverte de nouveaux squelettes et à des études biomécaniques, il s'avère qu'il se serait tenu à l'horizontale car c'est la seule manière pour que ses vertèbres supportent son poids. Le tyrannosaure ne devait donc pas dépasser 6 mètres de hauteur. </p>
            <p>Il se tenait sur ses deux pattes arrière. Ses membres postérieurs, terminés par un pied à trois orteils griffus, étaient particulièrement puissants. Sa vision frontale lui permettait d'évaluer efficacement les distances. Afin de pouvoir soutenir son immense tête, ses membres antérieurs étaient atrophiés (« miniaturisés »). Ses bras avaient néanmoins des muscles développés et ils disposaient de deux doigts avec des griffes acérées. Ils servaient sans doute à maintenir la nourriture, mais étaient trop courts (comparables à ceux d'un homme) pour pouvoir la ramasser au sol. Le tyrannosaure était donc obligé de se pencher pour ronger les carcasses de ses proies. Certaines de ses dents, particulièrement impressionnantes (atteignant 18 cm de long), étaient crénelées comme des couteaux à viande. On suppose qu'il pouvait déplacer l'un de ses maxillaires vers l'arrière. D'autre part, l'usure des dents fossilisées indique qu'il mâchait des aliments relativement durs. </p>
            <p>La mâchoire du tyrannosaure était d'une puissance phénoménale. Selon une étude publiée en 2012, elle pouvait appliquer sur une seule dent postérieure une force estimée entre 35 000 et 57 000 N, soit une pression équivalente d'environ 3,5 à 5,7 tonnes, à comparer aux 1 000 N environ d'un être humain, ou à la force 8 fois moins importante d'un alligator. Elle est considérée comme plus puissante de tout le règne animal vivant ou éteint : il était ainsi capable d'arracher des kilogrammes de chair d'un seul coup. </p>
            <p>Il n'est pas exclu que le tyrannosaure, comme d'autres dinosaures de cette époque, ait été pourvu de plumes. Une équipe de chercheurs a d'ailleurs découvert dans un fémur brisé des tissus mous » (phénomène extrêmement rare). « Les vaisseaux (sanguins) et leur contenu sont similaires à ceux observés dans les os d'autruche », dit la paléontologue Mary Schweitzer.</p>";
            break;
        case 'velociraptor':
            $titre = 'Velociraptor';
            $texte ="<h1>Velociraptor</h1>
            <p><img class=\"photo\" src=\"img/velociraptor.jpg\" /></p>
            <p>Le vélociraptor possède de puissantes mâchoires portant environ 80 dents acérées. Le vélociraptor mesurait, de la tête à la queue, environ 1,5 à 2 mètres pour une hauteur de 75 centimètres. Son poids avoisinait 15 à 20 kilogrammes2,3. Ses membres postérieurs sont pourvus d'une griffe rétractile, capable de se positionner presque à la verticale pour poignarder la peau de sa proie. Sa queue, rigidifiée par des tendons osseux, l'aide à s'équilibrer lorsqu'il se dresse pour harponner sa proie. Cette technique de chasse a été confirmée par la découverte d'un fossile de vélociraptor dont cette fameuse griffe se trouvait à l'emplacement du cou d'un protoceratops. On suppose que le prédateur et sa proie ont été brusquement ensevelis par un glissement de terrain en plein combat. <br>
            Le premier squelette de vélociraptor a été découvert par Henry Fairfield Osborn (1857-1935) en 1924 en Mongolie. Depuis, les scientifiques disposent d'au moins six squelettes identifiés, complets ou partiels, provenant de Mongolie ou de Chine. L'habitat du vélociraptor se situait dans des forêts ou des zones semi-arides. <br>
            </p>
            <p>Crâne de Velociraptor, Crétacé supérieur de 78 à 65 millions d'années (Djadochta, Mongolie), Musée d'Histoire Naturelle d'Aix-en-Provence<br>
            Le vélociraptor se distingue des autres droméosauridés par sa tête très étroite et aplatie. En revanche, le volume de son cerveau est relativement important proportionnellement à sa taille. Sa morphologie laisse à penser qu'il disposait de la vision tridimensionnelle. Le vélociraptor se nourrissait sans doute de tylocephales, d'oviraptors, de protocératops, de gallimimus et de petits mammifères. </p>";
            break;
        default:
            $titre = 'Erreur';
            $texte = "Ce dinosaure n'existe pas dans nos données";

        
       }
    } else {
        $titre = 'Les carnivores';
        $texte =
            // s'il n'y a pas la variable dino dans l'URL alors, écrire par défaut
            '<h1>Liste des carnivores</h1>
            <ol type="I">
                <li><a class="lien" href="?dino=albertosaurus">Albertosaurus</a></li>
                <li><a class="lien" href="?dino=allosaure">Allosaure</a></li>
                <li><a class="lien" href="?dino=tyranosaure">Tyranosaure</a></li>
                <li><a class="lien" href="?dino=velociraptor">Velociraptor</a></li>
            </ol>
            <p><img src="./img/dino.jpg" alt="" class="photo"></p>';
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les dinosaures</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="site">
    <?php
        include ('./include/header.php');
        include ('./include/nav.php'); 
    ?>
    <section>
        <article>
        <p><a href="./dinosaures.php" class="lien">Liste des carnivores </a>/ <?= $titre; ?></p>
        <p class="separateur"></p>
            <?= $texte; ?>
        </article>
    </section>
    <?php
        include ('./include/footer.php');
        ?>
    </div>
</body>
</html>