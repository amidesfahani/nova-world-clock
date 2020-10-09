<?php

namespace AmidEsfahani\NovaWorldClock\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class WorldClockController
{
    public function getTimes(Request $request)
    {
        if (!$request->timeFormat){
            $request->timeFormat = 'H:i:s';
        }
        $times = [];
        foreach ($request->timezones as $timezone){
            $time = Carbon::now($timezone);
            $night = (int) $time->format('H') > 17;
            $name = explode('/',$time->getTimezone()->getName())[1];
            $name = str_replace('_',' ',$name);
            array_push($times,[
                'name'=> __(ucwords($name)),
                'time'=> $time->format($request->timeFormat),
                'night'=> $night
            ]);
        }
        return $times;
    }
}
