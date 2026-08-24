<?php
$page = basename(isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '');
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
$prefix = $isEnDir ? '../' : '';
$lang = $isEnglish ? 'en' : 'es';

$certs = array(
    array(
        'code' => '14001',
        'img' => $prefix . 'images/certs/iso-14001.png',
        'pdf' => $prefix . 'pdf_files/certs/iso-14001-' . $lang . '.pdf',
        'alt' => 'ISO 14001 Certified',
        'title' => $isEnglish ? 'ISO 14001 Certificate' : 'Certificado ISO 14001'
    ),
    array(
        'code' => '45001',
        'img' => $prefix . 'images/certs/iso-45001.png',
        'pdf' => $prefix . 'pdf_files/certs/iso-45001-' . $lang . '.pdf',
        'alt' => 'ISO 45001 Certified',
        'title' => $isEnglish ? 'ISO 45001 Certificate' : 'Certificado ISO 45001'
    ),
    array(
        'code' => '9001',
        'img' => $prefix . 'images/certs/iso-9001.png',
        'pdf' => $prefix . 'pdf_files/certs/iso-9001-' . $lang . '.pdf',
        'alt' => 'ISO 9001 Certified',
        'title' => $isEnglish ? 'ISO 9001 Certificate' : 'Certificado ISO 9001'
    )
);

$openLabel = $isEnglish ? 'Open certificate' : 'Ver certificado';
$closeLabel = $isEnglish ? 'Close' : 'Cerrar';
?>
<div class="isoCertsWrap">
    <?php foreach ($certs as $cert) { ?>
    <a href="<?php echo htmlspecialchars($cert['pdf']); ?>"
       class="iso-cert-open"
       data-pdf="<?php echo htmlspecialchars($cert['pdf']); ?>"
       data-title="<?php echo htmlspecialchars($cert['title']); ?>"
       title="<?php echo htmlspecialchars($openLabel . ': ' . $cert['title']); ?>">
        <img src="<?php echo htmlspecialchars($cert['img']); ?>"
             alt="<?php echo htmlspecialchars($cert['alt']); ?>">
    </a>
    <?php } ?>
</div>

<div class="modal fade" id="isoCertModal" tabindex="-1" role="dialog" aria-labelledby="isoCertModalTitle">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#316262; color:#fff;">
                <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo htmlspecialchars($closeLabel); ?>" style="color:#fff; opacity:1;">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="isoCertModalTitle"></h4>
            </div>
            <div class="modal-body" style="padding:0; background:#f4f4f4;">
                <iframe id="isoCertFrame" src="about:blank" title="ISO certificate"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="background:#316262; border-color:#316262;">
                    <?php echo htmlspecialchars($closeLabel); ?>
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
(function () {
    function initIsoCerts() {
        if (typeof jQuery === 'undefined') {
            return;
        }
        var $ = jQuery;
        if ($('#isoCertModal').length) {
            $('#isoCertModal').appendTo('body');
        }
        $(document).off('click.isoCert', '.iso-cert-open').on('click.isoCert', '.iso-cert-open', function (e) {
            e.preventDefault();
            var pdf = $(this).attr('data-pdf');
            var title = $(this).attr('data-title') || '';
            $('#isoCertModalTitle').text(title);
            $('#isoCertFrame').attr('src', pdf);
            $('#isoCertModal').modal('show');
        });
        $('#isoCertModal').off('hidden.bs.modal.isoCert').on('hidden.bs.modal.isoCert', function () {
            $('#isoCertFrame').attr('src', 'about:blank');
        });
    }
    if (window.jQuery) {
        jQuery(initIsoCerts);
    } else {
        window.addEventListener('load', initIsoCerts);
    }
})();
</script>
