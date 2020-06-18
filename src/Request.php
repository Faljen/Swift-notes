<?php

declare(strict_types=1);

namespace App;

class Request
{

    private array $get = [];
    private array $post = [];

    public function getGet(string $name, $default = null)
    {
        return $this->get[$name] ?? $default;
    }

    public function getPost(string $name, $default = null)
    {
        return $this->post[$name] ?? $default;
    }

    public function hasPost(): bool
    {
        return !empty($this->post);
    }

    public function __construct(array $get, array $post)
    {
        $this->get = $get;
        $this->post = $post;
    }

}