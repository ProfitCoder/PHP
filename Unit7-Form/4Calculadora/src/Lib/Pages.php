<?php
declare(strict_types=1);
namespace Lib;
class Pages
{
    private const VIEWS_DIR = __DIR__ . '/../../Views/';
    public function render(string $pageName, array $params = []): void
    {
        foreach ($params as $name => $value) {
            $$name = $value;
        }
        require self::VIEWS_DIR . 'Layout/header.php';
        require self::VIEWS_DIR . $pageName . '.php';
        require self::VIEWS_DIR . 'Layout/footer.php';
    }
}
