@props(['selected' => $selected])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="@vite('/resources/css/app.css')">
    <title>Document</title>
</head>

<x-navbar-top>

</x-navbar-top>
<x-nav-menu-buttom :selected="$selected">

</x-nav-menu-buttom>
