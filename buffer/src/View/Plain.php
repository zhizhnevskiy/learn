<?php

namespace Buffer\View;

class Plain
{
    private array $parameters = [];

    private string $pathToLayout;

    private string $pathToView;

    public function setLayout(string $pathToLayout): self
    {
        $this->pathToLayout = PROJECT_DIR . '/views/layouts/' . $pathToLayout . '.php';

        return $this;
    }

    public function setView(string $pathToView = ''): self
    {
        $this->pathToView = PROJECT_DIR . '/views/' . $pathToView . '.php';

        return $this;
    }

    public function render(array $parameters = []): string
    {
        $this->parameters = $parameters;

        extract($parameters);

        ob_start();

        require $this->pathToLayout;

        return ob_get_clean();
    }

    private function renderView(): string
    {
        extract($this->parameters);

        ob_start();

        require $this->pathToView;

        return ob_get_clean();
    }
}
