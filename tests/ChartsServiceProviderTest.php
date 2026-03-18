<?php

test('ChartsServiceProvider can be instantiated with null', function () {
    $provider = new \ConsoleTVs\Charts\ChartsServiceProvider(null);
    expect($provider)->toBeInstanceOf(\ConsoleTVs\Charts\ChartsServiceProvider::class);
});
