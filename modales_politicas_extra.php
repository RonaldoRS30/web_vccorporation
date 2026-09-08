<?php
$page = basename(isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '');
$uri = str_replace('\\', '/', isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '');
$isEnglish = (strpos($uri, '/en/') !== false) || in_array($page, array(
    'main.php', 'news.php', 'products.php', 'automation.php', 'workforus.php',
    'contact.php', 'electrical.php', 'industry.php', 'training.php',
    'maintenance.php', 'networking.php', 'projects.php'
));
$closeLabel = $isEnglish ? 'Close' : 'Cerrar';
$labelCode = $isEnglish ? 'Code' : 'Código';
$labelVersion = $isEnglish ? 'Version' : 'Versión';
$labelDate = $isEnglish ? 'Date' : 'Fecha';
$labelPage = $isEnglish ? 'Page' : 'Página';
$labelPageOf = $isEnglish ? '1 of 1' : '1 de 1';
?>
    <!-- MODAL POLÍTICA RESPONSABILIDAD SOCIAL -->
    <div id="modalRespSocial" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalRespSocialLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-color: #ffffff; border-radius: 8px; border: none;">
                <div class="modal-header" style="background-color:#00A39C; color:#ffffff; border-bottom: none; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#ffffff; opacity:1; text-shadow:none;">&times;</button>
                    <h4 class="modal-title" id="modalRespSocialLabel" style="color:#ffffff; font-weight: 600;"><i class="fa fa-file-text-o"></i> POLÍTICA DE RESPONSABILIDAD SOCIAL</h4>
                </div>
                <div class="modal-body" style="padding: 30px; background-color:#ffffff; color:#333333;">
                    <div style="padding: 20px; background: #ffffff;">
                        <div class="row" style="border-bottom: 2px solid #00A39C; padding-bottom: 15px; margin-bottom: 25px;">
                            <div class="col-sm-8">
                                <h3 style="margin:0; color:#00A39C; font-weight:bold;">V & C CORPORATION S.A.C.</h3>
                                <h5 style="margin-top:5px; color:#555555; font-weight:600;">POLÍTICA DE RESPONSABILIDAD SOCIAL</h5>
                            </div>
                            <div class="col-sm-4 text-right" style="font-size: 13px; color: #555555; line-height: 1.5;">
                                <strong><?php echo $labelCode; ?>:</strong> SIG.DO.014 <br>
                                <strong><?php echo $labelVersion; ?>:</strong> 02 <br>
                                <strong><?php echo $labelDate; ?>:</strong> 25/03/2026 <br>
                                <strong><?php echo $labelPage; ?>:</strong> <?php echo $labelPageOf; ?>
                            </div>
                        </div>

                        <p style="text-align: justify; font-size: 15px; line-height: 1.6; color: #444444;"><strong>V&C Corporation</strong>, empresa especializada en automatización y optimización de procesos industriales, asume el compromiso de desarrollar sus actividades de manera ética, responsable y sostenible, promoviendo el bienestar de sus colaboradores, la protección del medio ambiente y la generación de valor para la sociedad.</p>
                        <p style="text-align: justify; font-size: 15px; line-height: 1.6; color: #444444; margin-bottom: 20px;">Para ello, establece los siguientes lineamientos:</p>

                        <ul style="text-align: justify; font-size: 14.5px; padding-left: 20px; line-height: 1.7; color: #444444;">
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Respeto a los derechos humanos y no discriminación.</strong> Garantizar un entorno laboral inclusivo, equitativo y libre de discriminación en todos los procesos de gestión del recurso humano, respetando la dignidad de las personas y promoviendo la igualdad de oportunidades.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Prohibición del trabajo infantil y forzoso.</strong> Rechazar de manera absoluta el trabajo infantil y cualquier forma de trabajo forzoso u obligatorio, asegurando que todas las relaciones laborales sean voluntarias y conforme a la legislación vigente, prohibiendo el maltrato físico y psicológico hacia el colaborador.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Ambiente laboral respetuoso.</strong> Prohibir cualquier tipo de acoso, abuso o maltrato físico, psicológico o verbal, promoviendo una cultura organizacional basada en el respeto y la integridad.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Comunicación, participación y consulta.</strong> Garantizar canales de comunicación abiertos, confidenciales y accesibles, que permitan a los colaboradores expresar inquietudes, sugerencias o reclamos sin temor a represalias, asegurando su gestión oportuna.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Compromiso con la comunidad.</strong> Desarrollar iniciativas de responsabilidad social que contribuyan al bienestar de la comunidad, incluyendo programas de donación, voluntariado corporativo y participación en actividades de impacto social.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Cumplimiento legal y otros compromisos.</strong> Cumplir con la normativa legal vigente aplicable, así como con otros requisitos asumidos voluntariamente por la organización en materia laboral, calidad, medio ambiente, seguridad y responsabilidad social.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Condiciones seguras, saludables y ambientales.</strong> Gestionar de manera integrada los aspectos y riesgos derivados de nuestras actividades, asegurando condiciones de trabajo seguras y saludables, previniendo lesiones y enfermedades ocupacionales, así como la prevención de la contaminación y el uso eficiente de los recursos, en concordancia con lo establecido en la Política del Sistema Integrado de Gestión.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Mejora continua del sistema de gestión.</strong> Promover la mejora continua del desempeño organizacional mediante la evaluación periódica de objetivos, indicadores y procesos, asegurando la integración y coherencia con los sistemas de gestión implementados.</li>
                        </ul>

                        <div style="margin-top: 40px; text-align: right; padding-right: 20px;">
                            <div style="display: inline-block; text-align: center; color: #444444;">
                                <p style="margin-bottom: 25px; text-align: right; font-size: 14px; color: #333333;">25 de Marzo del 2026</p>
                                <p style="margin: 0; font-size: 15px; color: #00A39C; font-family: serif; font-weight: bold;">V&amp;C CORPORATION SAC</p>
                                <div style="margin-top: 20px;">
                                    <p style="margin: 0; font-weight: bold; font-size: 13px; color: #333333;">CRISTINA SILVA MARTINEZ</p>
                                    <p style="margin: 0; font-size: 13px; color: #555555;">Gerente General</p>
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 50px; border-top: 2px solid #00A39C; padding-top: 8px; text-align: center;">
                            <p style="font-size: 11px; margin: 0; color: #555555; font-family: 'Times New Roman', serif;"><strong>Confidencial</strong> - No debe ser fotocopiado o impreso excepto con permiso de la gerencia de SIG – V&amp;C CORPORATION S.A.C.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background-color:#f9f9f9; border-top: 1px solid #eeeeee; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                    <button type="button" class="btn" data-dismiss="modal" style="background-image: none; background-color:#00A39C; color:#ffffff; border:none; border-radius: 4px; padding: 8px 20px; font-weight: 600; text-shadow: none; box-shadow: none;"><?php echo htmlspecialchars($closeLabel); ?></button>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN MODAL POLÍTICA RESPONSABILIDAD SOCIAL -->

    <!-- MODAL POLÍTICA PREVENCIÓN DE DELITOS -->
    <div id="modalPrevDelitos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalPrevDelitosLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-color: #ffffff; border-radius: 8px; border: none;">
                <div class="modal-header" style="background-color:#00A39C; color:#ffffff; border-bottom: none; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#ffffff; opacity:1; text-shadow:none;">&times;</button>
                    <h4 class="modal-title" id="modalPrevDelitosLabel" style="color:#ffffff; font-weight: 600;"><i class="fa fa-file-text-o"></i> POLÍTICA DEL MODELO DE PREVENCIÓN DE DELITOS</h4>
                </div>
                <div class="modal-body" style="padding: 30px; background-color:#ffffff; color:#333333;">
                    <div style="padding: 20px; background: #ffffff;">
                        <div class="row" style="border-bottom: 2px solid #00A39C; padding-bottom: 15px; margin-bottom: 25px;">
                            <div class="col-sm-8">
                                <h3 style="margin:0; color:#00A39C; font-weight:bold;">V & C CORPORATION S.A.C.</h3>
                                <h5 style="margin-top:5px; color:#555555; font-weight:600;">POLÍTICA DEL MODELO DE PREVENCIÓN DE DELITOS</h5>
                            </div>
                            <div class="col-sm-4 text-right" style="font-size: 13px; color: #555555; line-height: 1.5;">
                                <strong><?php echo $labelCode; ?>:</strong> GA.DO.002.PD <br>
                                <strong><?php echo $labelVersion; ?>:</strong> 01 <br>
                                <strong><?php echo $labelDate; ?>:</strong> 15/04/2026 <br>
                                <strong><?php echo $labelPage; ?>:</strong> <?php echo $labelPageOf; ?>
                            </div>
                        </div>

                        <p style="text-align: justify; font-size: 15px; line-height: 1.6; color: #444444;">La Gerencia General de <strong>V &amp; C CORPORATION S.A.C.</strong> tiene un profundo compromiso por la prevención de actividades ilícitas, es por ello que la empresa ha decidido establecer un modelo de prevención, de modo claro, visible y accesible. Así mismo la empresa manifiesta el rechazo hacia la comisión de los delitos. La presente política es aplicable a los socios comerciales y a las partes interesadas internas y externas, quienes deben ser debidamente informados sobre el compromiso de prohibir cualquier delito, buscando su adhesión a dicho compromiso.</p>
                        <p style="text-align: justify; font-size: 15px; line-height: 1.6; color: #444444; margin-bottom: 20px;">Como parte de nuestro compromiso tenemos los siguientes lineamientos:</p>

                        <ul style="text-align: justify; font-size: 14.5px; padding-left: 20px; line-height: 1.7; color: #444444;">
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">No tolerar cualquier intento o acto delictivo.</strong> En ese sentido, se aprueba la presente política a fin de brindar un marco de referencia para su cumplimiento y prevenir delitos.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Mantener el firme compromiso</strong> del rechazo frente a la identificación de delitos.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Mantener el liderazgo</strong> del modelo de prevención de actividades ilícitas.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Implementar y aprobar el código de conducta</strong> en que se asuma el compromiso de todos los miembros de la organización de no incurrir en la comisión de los delitos y de coadyuvar al buen funcionamiento del modelo de prevención.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Cumplir con los requisitos legales</strong> asociados a la prevención de actividades ilícitas y otros requisitos que se suscriban.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Implementar y aprobar lineamientos y/o mecanismos</strong> que reconozcan y promuevan la comunicación oportuna de cualquier indicio sobre la posible comisión de un delito, bajo condiciones de confidencialidad, seguridad y protección a los denunciantes.</li>
                            <li style="margin-bottom: 12px;"><strong style="color: #00A39C;">Mejorar continuamente el modelo de prevención</strong> a fin de garantizar prevención de delitos y/o actividades ilícitas.</li>
                        </ul>

                        <p style="text-align: justify; font-size: 15px; line-height: 1.6; color: #444444; margin-top: 20px;">Los trabajadores de <strong>V &amp; C CORPORATION S.A.C.</strong> tienen la obligación de informar y/o reportar cualquier actuación, conducta, información o evidencia que pueda vulnerar la Política de Sistema de Prevención del Delito. Por ello, V &amp; C CORPORATION S.A.C. promueve el planteamiento de inquietudes de buena fe (consultas o denuncias) ante hechos o conductas sospechosas y garantiza la confidencialidad de las mismas, así como la protección de cualquier tipo de amenaza.</p>
                        <p style="text-align: justify; font-size: 15px; line-height: 1.6; color: #444444;">La presente política es aplicable a todos los trabajadores de V &amp; C CORPORATION S.A.C., así como a todas las partes interesadas y relacionadas con nosotros, es decir: clientes, proveedores, accionistas, contratistas, socios comerciales y en general a todos aquellos con quienes de manera directa o indirectamente se establezca alguna relación comercial.</p>

                        <div style="margin-top: 40px; text-align: right; padding-right: 20px;">
                            <div style="display: inline-block; text-align: center; color: #444444;">
                                <p style="margin-bottom: 25px; text-align: right; font-size: 14px; color: #333333;">15 de Abril del 2026</p>
                                <p style="margin: 0; font-size: 15px; color: #00A39C; font-family: serif; font-weight: bold;">V&amp;C CORPORATION SAC</p>
                                <div style="margin-top: 20px;">
                                    <p style="margin: 0; font-weight: bold; font-size: 13px; color: #333333;">CRISTINA SILVA MARTINEZ</p>
                                    <p style="margin: 0; font-size: 13px; color: #555555;">Gerente General</p>
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 50px; border-top: 2px solid #00A39C; padding-top: 8px; text-align: center;">
                            <p style="font-size: 11px; margin: 0; color: #555555; font-family: 'Times New Roman', serif;"><strong>Confidencial</strong> - No debe ser fotocopiado o impreso excepto con permiso de la gerencia de SIG – V&amp;C CORPORATION S.A.C.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background-color:#f9f9f9; border-top: 1px solid #eeeeee; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                    <button type="button" class="btn" data-dismiss="modal" style="background-image: none; background-color:#00A39C; color:#ffffff; border:none; border-radius: 4px; padding: 8px 20px; font-weight: 600; text-shadow: none; box-shadow: none;"><?php echo htmlspecialchars($closeLabel); ?></button>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN MODAL POLÍTICA PREVENCIÓN DE DELITOS -->
