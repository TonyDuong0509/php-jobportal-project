<?php

namespace Utils;

use Cocur\Slugify\Slugify;
use DateTime;
use DateTimeZone;

class Helper
{
    public function getDateTime()
    {
        $date = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
        return $date->format('Y-m-d H:i:s');
    }

    public function slugifyString($string)
    {
        $slugify = new Slugify();
        return $slugify->slugify($string);
    }
}
