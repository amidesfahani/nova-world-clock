<?php

namespace AmidEsfahani\NovaWorldClock;

use Laravel\Nova\Card;

class NovaWorldClock extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'NovaWorldClock';
    }

    public function timezones($timezones) {

        return $this->withMeta([
            'timezones' => $timezones
        ]);
    }

    public function timeFormat($timeFormat) {

        return $this->withMeta([
            'timeFormat' => $timeFormat
        ]);
    }

    public function updatePeriod($ms = 1000) {
        return $this->withMeta([
            'ms' => $ms
        ]);
    }

    public function showTitle($value = true) {
        return $this->withMeta([
            'showtitle' => $value
        ]);
    }

    public function title($title = '') {
        return $this->withMeta([
            'title' => $title
        ]);
    }
}
