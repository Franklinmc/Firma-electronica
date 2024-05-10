<h1 class="nombre-pagina">Firma tus Documentos</h1>

<div id="paso-1" class="seccion">
    <h2>Tus datos</h2>
    <p class="text-center" >Sube tu documento para poder firmarlo</p>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <div class="campo">
            <label for="nombre">Nombre</label>
            <input 
            id="nombre"
            type="text"
            placeholder="Tu nombre"
            value="<?php echo $nombre; ?>"
            disabled            
            />            
        </div>
        <input type="file" name="file">
        <input type="submit" class="boton" value="Subir" name="btnfirmar">
    </form>
</div>