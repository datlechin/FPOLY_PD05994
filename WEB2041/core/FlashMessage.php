<?php

class FlashMessage
{
    private $messages = array();
    private $now = false;

    private function __construct()
    {
        $this->messages = $_SESSION['flash_messages'] ?? [];

        $_SESSION['flash_messages'] = array();
    }

    public static function instance(): ?FlashMessage
    {
        static $instance = null;
        if ($instance === null)
            $instance = new FlashMessage();

        return $instance;
    }

    public function __call($name, $args)
    {
        $message = $args[0];
        $this->message($name, $message);
    }

    public function message($name, $message): void
    {
        if ($this->now) {
            $this->messages[] = array(
                'name' => $name,
                'message' => $message
            );
            $this->now = false;
        } else
            $_SESSION['flash_messages'][] = array(
                'name' => $name,
                'message' => $message
            );
    }

    public function each($callback = null)
    {
        if ($callback === null) {
            $callback = function ($name, $message) {
                echo '<div class="alert alert-'. $name .'" id="flash_' . $name . '">' . $message . '</div>';
            };
        }

        foreach ($this->messages as $flash) {
            echo $callback($flash['name'], $flash['message']);
        }
    }

    public function now(): static
    {
        $this->now = true;
        return $this;
    }

    public function any(): bool
    {
        return count($this->messages) !== 0;
    }
}