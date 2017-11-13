<?php

namespace App\Library;


use Illuminate\Support\Facades\URL;

class Parser
{
    public static function parse(string $url)
    {
        if (!URL::isValidUrl($url))
            throw new \Exception(sprintf("Invalid url [%s] provided!", $url));

        $csv = [];
        $rows = array_map("str_getcsv", file($url));

        if (count($rows) >= 2) {
            $headers = array_shift($rows);
            foreach ($rows as $row)
                $csv[] = array_combine($headers, $row);
        }
        return $csv;
    }
}