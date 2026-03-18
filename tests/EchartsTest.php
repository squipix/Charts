<?php

use ConsoleTVs\Charts\Classes\Echarts\Chart as EchartsChart;
use ConsoleTVs\Charts\Classes\Echarts\Dataset as EchartsDataset;

test('EchartsChart can be instantiated', function () {
    $chart = new EchartsChart();
    expect($chart)->toBeInstanceOf(EchartsChart::class);
});

test('EchartsDataset can be instantiated and formatted', function () {
    $dataset = new EchartsDataset('Test', 'pie', [1,2,3]);
    $formatted = $dataset->format(['A','B','C']);
    expect($formatted['name'])->toBe('Test');
    expect($formatted['type'])->toBe('pie');
});
