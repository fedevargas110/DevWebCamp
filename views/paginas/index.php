<?php include_once __DIR__ . '/conferencias.php'; ?>

<section class="resumen">
    <div class="resumen__grid">
        <div data-aos="<?php AOS(); ?>" class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero"><?php echo $ponentes; ?></p>
            <p class="resumen__texto">Speakers</p>
        </div>

        <div data-aos="<?php AOS(); ?>" class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero"><?php echo $conferencias; ?></p>
            <p class="resumen__texto">Conferencias</p>
        </div>

        <div data-aos="<?php AOS(); ?>" class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero"><?php echo $workshops; ?></p>
            <p class="resumen__texto">Workshops</p>
        </div>

        <div data-aos="<?php AOS(); ?>" class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero">580</p>
            <p class="resumen__texto">Asistentes</p>
        </div>
    </div>
</section>

<section class="speakers">
    <h2 class="speakers__heading">Ponentes</h2>
    <p class="speakers__descripcion">Conoce a nuestros expertos en DevWebCamp</p>

    <div class="speakers__grid">
        <?php foreach ($ponente as $pon) { ?>
            <div data-aos="<?php AOS(); ?>" class="speaker">
                <picture>
                    <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $pon->imagen; ?>.webp" type="image/webp">
                    <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $pon->imagen; ?>.png" type="image/png">
                    <img class="speaker__imagen" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/img/speakers/' . $pon->imagen; ?>.png" alt="Imagen Ponente">
                </picture>

                <div class="speaker__informacion">
                    <h4 class="speaker__nombre"><?php echo $pon->nombre . ' ' . $pon->apellido; ?></h4>
                    <p class="speaker__ubicacion"><?php echo $pon->ciudad . ', ' . $pon->pais; ?></p>

                    <nav class="speaker-sociales">
                        <?php $redes = json_decode($pon->redes); ?>

                        <?php if (!empty($redes->facebook)) { ?>
                            <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->facebook; ?>">
                                <span class="speaker-sociales__ocultar">Facebook</span>
                            </a>
                        <?php } ?>
                        <?php if (!empty($redes->twitter)) { ?>
                            <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->twitter; ?>">
                                <span class="speaker-sociales__ocultar">Twitter</span>
                            </a>
                        <?php } ?>
                        <?php if (!empty($redes->youtube)) { ?>
                            <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->youtube; ?>">
                                <span class="speaker-sociales__ocultar">YouTube</span>
                            </a>
                        <?php } ?>
                        <?php if (!empty($redes->instagram)) { ?>
                            <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->instagram; ?>">
                                <span class="speaker-sociales__ocultar">Instagram</span>
                            </a>
                        <?php } ?>
                        <?php if (!empty($redes->tiktok)) { ?>
                            <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->tiktok; ?>">
                                <span class="speaker-sociales__ocultar">Tiktok</span>
                            </a>
                        <?php } ?>
                        <?php if (!empty($redes->github)) { ?>
                            <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->github; ?>">
                                <span class="speaker-sociales__ocultar">Github</span>
                            </a>
                        <?php } ?>
                    </nav>

                    <ul class="speaker__listado-skills">
                        <?php $tags = explode(',', $pon->tags);
                        foreach ($tags as $tag) { ?>
                            <li class="speaker__skill"> <?php echo $tag; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<div id="mapa" class="mapa"></div>

<section class="boletos">
    <h2 class="boletos__heading">Boletos & Precios</h2>
    <p class="boletos__descripcion">Precios para DevWebCamp</p>

    <div class="boletos__grid">
        <div data-aos="<?php AOS(); ?>" class="boleto boleto--presencial">
            <h4 class="boleto__logo">&lt; DevWebCamp/></h4>
            <p class="boleto__plan">Precensial</p>
            <p class="boleto__precio">$199</p>
        </div>

        <div data-aos="<?php AOS(); ?>" class="boleto boleto--virtual">
            <h4 class="boleto__logo">&lt; DevWebCamp/></h4>
            <p class="boleto__plan">Virtual</p>
            <p class="boleto__precio">$49</p>
        </div>

        <div data-aos="<?php AOS(); ?>" class="boleto boleto--gratis">
            <h4 class="boleto__logo">&lt; DevWebCamp/></h4>
            <p class="boleto__plan">Free</p>
            <p class="boleto__precio">Gratis - $0 </p>
        </div>
    </div>

    <div class="boleto__enlace-contenedor">
        <a href="/paquetes" class="boleto__enlace">Ver Paquetes</a>
    </div>
</section>