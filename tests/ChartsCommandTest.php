<?php

test('ChartsCommand can be instantiated', function () {
    $mock = $this->getMockBuilder(\ConsoleTVs\Charts\Commands\ChartsCommand::class)
        ->disableOriginalConstructor()
        ->getMock();
    expect($mock)->toBeInstanceOf(\ConsoleTVs\Charts\Commands\ChartsCommand::class);
});
