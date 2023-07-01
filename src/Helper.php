<?php

namespace AmazonAdsApi;

class Helper
{
    public static function saveReportFile(string $url, string $save_directory)
    {
        $opts = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peername' => false
            ],
        ];
        $context = stream_context_create($opts);
        $target = $save_directory . DIRECTORY_SEPARATOR . pathinfo($url, PATHINFO_FILENAME) . '.gz';
        return file_put_contents($target, file_get_contents($url, false, $context));
    }

    public static function readReportFile(string $file_path)
    {
        $buffer_size = 4096;
        $file = gzopen($file_path, 'r');
        $str = '';
        while (!gzeof($file)) {
            $str .= gzread($file, $buffer_size);
        }
        gzclose($file);
        return json_decode($str, true);
    }
}
