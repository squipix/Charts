<?php

use ConsoleTVs\Charts\Classes\BaseChart;

test('BaseChart basic usage', function () {
    $chart = new BaseChart();
    $chart->labels(['A', 'B', 'C']);
    $chart->options(['responsive' => true]);
    $chart->type('bar');
    expect($chart->labels)->toBe(['A', 'B', 'C']);
    expect($chart->options['responsive'])->toBeTrue();
    expect($chart->type)->toBe('bar');
});
