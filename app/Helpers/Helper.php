<?php

namespace App\Helpers;

class Helper
{
    public static function IDGenerator($model, $trow, $length = 7, $prefix)
    {
        $data = $model::orderBy('kode_periode', 'desc')->first();
        if (!$data) {
            $kd_length = $length;
            $last_number = '';
        } else {
            $code = substr($data->$trow, strlen($prefix) + 1);
            $actial_last_number = ((int)$code / 1) * 1;
            $increment_last_number = $actial_last_number + 1;
            $last_number_length = strlen($increment_last_number);
            $kd_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = "";
        for ($i = 0; $i < $kd_length; $i++) {
            $zeros = "0";
        }
        return $prefix . $zeros . $last_number;
    }
}
