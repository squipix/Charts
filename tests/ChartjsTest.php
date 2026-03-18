<?php

use ConsoleTVs\Charts\Classes\Chartjs\Chart as ChartjsChart;
use ConsoleTVs\Charts\Classes\Chartjs\Dataset as ChartjsDataset;

test('ChartjsChart can be instantiated', function () {
    $chart = new ChartjsChart();
    expect($chart)->toBeInstanceOf(ChartjsChart::class);
});

test('ChartjsDataset can be instantiated and formatted', function () {
    $dataset = new ChartjsDataset('Test', 'bar', [1,2,3]);
    $formatted = $dataset->format();
    expect($formatted['data'])->toBe([1,2,3]);
    expect($formatted['label'])->toBe('Test');
});
