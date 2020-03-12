<?php
    $peticionAjax=true;
    require_once "../core/configGeneral.php";
    if (isset($_POST['dni-reg']) || isset($_POST['codigo-del']) || isset($_POST['cuenta-up']) ) {
        require_once "../controladores/administradorControlador.php";
        $insAdmin = new administradorControlador();

        if (isset($_POST['dni-reg']) && isset($_POST['nombre-reg']) && isset($_POST['apellido-reg']) && isset($_POST['usuario-reg']) ) {
            echo $insAdmin->agregar_administrador_controlador();
        }
        if (isset($_POST['codigo-del']) && isset($_POST['privilegio-admin'])) {
            echo $insAdmin->eliminar_administrador_controlador();
        }
        if (isset($_POST['cuenta-up']) && isset($_POST['dni-up'])) {
            echo $insAdmin->actualizar_administrador_controlador();
        }

    } else {
        session_start(['name' => 'SBP']);
        session_destroy();
        echo '<script> window.location.href="'.SERVERURL.'login/" </script>';
    }
    