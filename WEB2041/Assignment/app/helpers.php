<?php

function app_path($path = ''): string
{
    return ROOT . '/app/' . $path;
}

function view_path($path = ''): string
{
    return app_path('views/' . $path);
}

function asset($path = ''): string
{
    return '/' . $path;
}