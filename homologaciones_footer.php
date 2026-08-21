<?php
$page = basename($_SERVER['PHP_SELF']);
$uri = str_replace('\\', '/', isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '');
$isEnDir = (strpos($uri, '/en/') !== false);
$englishPages = array(
    'main.php',
    'news.php',
    'products.php',
    'automation.php',
    'workforus.php',
    'contact.php',
    'electrical.php',
    'industry.php',
    'training.php',
    'maintenance.php',
    'networking.php',
    'projects.php'
);
$isEnglish = $isEnDir || in_array($page, $englishPages);
$img = $isEnDir ? '../images/slider/' : 'images/slider/';
$title = $isEnglish ? 'HOMOLOGATIONS' : 'HOMOLOGACIONES';
$sgsHref = $isEnglish ? 'news.php?_notice=3' : 'noticias.php?_notice=3';
$bureauHref = $isEnglish ? 'news.php?_notice=4' : 'noticias.php?_notice=4';
$sgsAlt = $isEnglish ? 'SGS Homologation' : 'SGS Homologado';
$bureauAlt = $isEnglish ? 'Bureau Veritas Approved Company' : 'Bureau Veritas Empresa Homologada';
$eagleAlt = $isEnglish ? 'Eagle Consulting Homologated Company' : 'Eagle Consulting Empresa Homologada';
?>
            <div class="row homologaciones-section" style="margin-bottom: 10px;">
                <div class="col-sm-12 widget">
                    <h4 class="sectionTitle"><?php echo $title; ?></h4>
                    <div class="row partnersSlide">
                        <div class="owl-carousel homologacionesSlider">
                            <div class="item"><img src="<?php echo $img; ?>ho_2.png" onclick="location.href ='<?php echo $sgsHref; ?>'" width="200" height="120" alt="<?php echo $sgsAlt; ?>"></div>
                            <div class="item"><img src="<?php echo $img; ?>ho_3.png" onclick="location.href ='<?php echo $bureauHref; ?>'" width="200" height="120" alt="<?php echo $bureauAlt; ?>"></div>
                            <div class="item"><img src="<?php echo $img; ?>ho_eagle.png" width="200" height="120" alt="<?php echo $eagleAlt; ?>"></div>
                        </div>
                    </div>
                </div>
            </div>
