<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Localization </title>
</head>

<body>
    <h1>{{ __('local.page') }}</h1>
    <ul>
        <li>{{ __('local.home') }}</li>
        <li>{{ __('local.about') }}</li>
        <li>{{ __('local.contact') }}</li>
    </ul>
    <h2>{{ __('local.welcome', ['name' => ' Neha']) }}</h2>
</body>

</html>
