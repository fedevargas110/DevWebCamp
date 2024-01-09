<main class="auth"> 
    <h2 class="auth__heading"><?php echo $titulo;?></h2>
    <p class="auth__texto">Coloca tu nueva contraseña</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <?php if($token_valido) { ?>

    <form method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Nueva Contraseña</label>
            <input 
                type="password"
                class="formulario__input"
                placeholder="Contraseña Nueva"
                id="password"
                name="password"
            />
        </div>

        <input type="submit" class="formulario__submit" value="Guardar Contraseña">

    </form>

    <?php } ?>

</main>