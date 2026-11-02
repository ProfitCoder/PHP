<?php
namespace Lib;
class Pages
{
    public function render(string $pageName, array $params = []): void
    {
        foreach ($params as $name => $value) { $$name = $value; }
        $viewsDir = __DIR__ . '/../../Views/';
        require $viewsDir . 'Layout/header.php';
        require $viewsDir . $pageName . '.php';
        require $viewsDir . 'Layout/footer.php';
    }
}
