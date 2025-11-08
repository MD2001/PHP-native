<?php

use Core\Container;

test('the coniner is containg and resolve ', function () {
    $continer = new Container();

    $continer->bind("foo", fn() => 'cat');

    $result = $continer->resolve("foo");

    expect($result)->toEqual("cat");
});
