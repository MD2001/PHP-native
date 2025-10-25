<?php

namespace Core\Midllware;

class Midllware
{

    const Map = [
        "guest" => Guest::class,
        "auth" => Auth::class,
    ];
}
