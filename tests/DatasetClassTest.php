<?php

use ConsoleTVs\Charts\Classes\DatasetClass;

test('DatasetClass basic usage', function () {
    $dataset = new DatasetClass('Test', 'line', [1,2,3]);
    $dataset->type('bar');
    $dataset->values([4,5,6]);
    $dataset->options(['color' => 'red']);
    expect($dataset->name)->toBe('Test');
    expect($dataset->type)->toBe('bar');
    expect($dataset->values)->toBe([4,5,6]);
    expect($dataset->options['color'])->toBe('red');
});
