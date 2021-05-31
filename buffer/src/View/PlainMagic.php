<?php

namespace Buffer\View;


class PlainMagic
{
    private array $params = [];

    private string $pathToLayout;

    private string $pathToView;

    public function __set($name, $value)
    {
        $this->params[$name] = $value;
    }

    public function __get($property)
    {
        return $this->params[$property];
    }

    public function render(): string
    {
        ob_start();
        require $this->pathToLayout;
        return ob_get_clean();
    }

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

    private function renderView(): string
    {
        ob_start();
        require $this->pathToView;
        return ob_get_clean();
    }
}