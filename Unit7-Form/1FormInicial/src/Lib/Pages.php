<?php
    declare(strict_types=1);

    namespace Lib;

    class Pages
    {
        private const string VIEWS_DIR = __DIR__ . '/../../views/';

        //Como usar en los parametros en vez de ?array usar una variable de variables es decir ($$name = $value)

        public function render(string $pageName, ?array $params = null): void
        {
            if($params !== null) {
                foreach ($params as $name => $value) {
                    $$name = $value;
                }
            }
            require self::VIEWS_DIR . 'Layout/header.php';
            require self::VIEWS_DIR . $pageName . '.php';
            require self::VIEWS_DIR . 'Layout/footer.php';
        }

    }