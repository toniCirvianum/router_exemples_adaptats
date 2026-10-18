<?php
namespace App\Core;

class Controller
{
    protected function render($path, $params = [], $layout = 'main')
    {
        extract($params);

        ob_start();
        $path2= __DIR__ . '/../Views/' . $path . '.view.php';
        require __DIR__ . '/../Views/' . $path . '.view.php';
        $content = ob_get_clean();
        $path3=__DIR__ . '/../Views/layouts/' . $layout . '.layout.php';
        require __DIR__ . '/../Views/layouts/' . $layout . '.layout.php';
    }
}
