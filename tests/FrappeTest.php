<?php

use ConsoleTVs\Charts\Classes\Frappe\Chart as FrappeChart;
use ConsoleTVs\Charts\Classes\Frappe\Dataset as FrappeDataset;

test('FrappeChart can be instantiated', function () {
    $chart = new FrappeChart();
    expect($chart)->toBeInstanceOf(FrappeChart::class);
});

test('FrappeDataset can be instantiated and formatted', function () {
    $dataset = new FrappeDataset('Test', 'bar', [1,2,3]);
    $formatted = $dataset->format();
    expect($formatted['name'])->toBe('Test');
    expect($formatted['values'])->toBe([1,2,3]);
});
