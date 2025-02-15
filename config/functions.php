<?php
function view($view, $data = []) {
    extract($data);
    ob_start();

    $viewPath = VIEW_PATH . str_replace('.', '/', $view) . ".php";
    
    // Verifica que la vista exista antes de intentar incluirla
    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        die("Vista no encontrada: {$viewPath}");
    }

    // Captura la salida del contenido de la vista
    $content = ob_get_clean();

    // Carga el layout y pasamos el contenido
    $layoutPath = VIEW_PATH . "layout.php";
    if (file_exists($layoutPath)) {
        require $layoutPath;
    } else {
        die("Layout no encontrado: {$layoutPath}");
    }
}
