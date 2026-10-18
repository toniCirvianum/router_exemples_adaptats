<?php
namespace App\Core;

class Controller
{
    protected function render($path, $params = [], $layout = 'main')
    {
        extract($params);

        ob_start();
        require __DIR__ . '/../Views/' . $path . '.view.php';
        $content = ob_get_clean();
        require __DIR__ . '/../Views/layouts/' . $layout . '.layout.php';
    }
}
