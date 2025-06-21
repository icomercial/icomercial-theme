<?php
/*
Template Name: Contacto
*/
get_header(); ?>
<section>
    <div class="container">
        <h1>Contacto</h1>
        <p>Escríbenos a <a href="mailto:info@icomercial.cl">info@icomercial.cl</a> o al WhatsApp <a href="https://wa.me/56912345678">+56 9 1234 5678</a>.</p>
        <form>
            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre"><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="mensaje">Mensaje</label><br>
            <textarea id="mensaje" name="mensaje"></textarea><br>
            <button type="submit" class="btn">Enviar</button>
        </form>
    </div>
</section>
<?php get_footer(); ?>
