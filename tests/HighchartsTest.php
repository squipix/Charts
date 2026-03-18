<?php

use ConsoleTVs\Charts\Classes\Highcharts\Chart as HighchartsChart;
use ConsoleTVs\Charts\Classes\Highcharts\Dataset as HighchartsDataset;

test('HighchartsChart can be instantiated', function () {
    $chart = new HighchartsChart();
    expect($chart)->toBeInstanceOf(HighchartsChart::class);
});

test('HighchartsDataset can be instantiated and formatted', function () {
    $dataset = new HighchartsDataset('Test', 'pie', [1,2,3]);
    $formatted = $dataset->format(['A','B','C']);
    expect($formatted['name'])->toBe('Test');
    expect($formatted['type'])->toBe('pie');
});
