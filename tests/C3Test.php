<?php

use ConsoleTVs\Charts\Classes\C3\Chart as C3Chart;
use ConsoleTVs\Charts\Classes\C3\Dataset as C3Dataset;

test('C3Chart can be instantiated', function () {
    $chart = new C3Chart();
    expect($chart)->toBeInstanceOf(C3Chart::class);
});

test('C3Dataset can be instantiated and formatted', function () {
    $dataset = new C3Dataset('Test', 'line', [1,2,3]);
    $formatted = $dataset->format();
    expect($formatted[0])->toBe('Test');
    expect($formatted[1])->toBe(1);
});
