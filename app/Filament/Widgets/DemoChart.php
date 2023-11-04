<?php

namespace App\Filament\Widgets;

use Filament\Support\Colors\Color;
use Filament\Widgets\ChartWidget;

class DemoChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static ?string $pollingInterval = null;
    protected int | string | array $columnSpan = "full";


    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Green',
                    'data' => $this->getRandomNumbers(),
                    "backgroundColor" => "green",
                    'borderColor' => "green"
                ],
                [
                    'label' => 'Blue',
                    'data' => $this->getRandomNumbers(),
                    "backgroundColor" => "blue",
                    'borderColor' => "blue"
                ],
                [
                    'label' => 'Red',
                    'data' => $this->getRandomNumbers(),
                    "backgroundColor" => "red",
                    'borderColor' => "red"
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }


    protected function getType(): string
    {
        return 'line';
    }


    private function getRandomNumbers(): array
    {
        $start = 0;
        $end = 25;
        $quantity = 12;

        $numbers = array();
        for ($i=0; $i<$quantity/($end-$start); $i++)
            $numbers = array_merge($numbers, range($start, $end));
        shuffle($numbers);

        return array_slice($numbers,0,$quantity);
    }
}
