<?php

use ConsoleTVs\Charts\Classes\Fusioncharts\Chart as FusionchartsChart;
use ConsoleTVs\Charts\Classes\Fusioncharts\Dataset as FusionchartsDataset;

test('FusionchartsChart can be instantiated', function () {
    $chart = new FusionchartsChart();
    expect($chart)->toBeInstanceOf(FusionchartsChart::class);
});

test('FusionchartsDataset can be instantiated and formatted', function () {
    $dataset = new FusionchartsDataset('Test', 'pie2d', [1,2,3]);
    $formatted = $dataset->format(['A','B','C']);
    expect($formatted['seriesName'])->toBe('Test');
    expect($formatted['renderAs'])->toBe('pie2d');
});
