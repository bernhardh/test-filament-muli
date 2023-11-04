<?php

namespace App\Filament\Widgets;

use Filament\Support\Colors\Color;
use Filament\Widgets\ChartWidget;

class DemoBarChart extends DemoChart
{
    protected static ?string $heading = 'Bar Chart';

    protected function getType(): string
    {
        return 'bar';
    }
}
