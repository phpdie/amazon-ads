<?php

namespace AmazonAdsApi;

class Helper
{
    public static function saveReportFile(string $url, string $save_directory = '')
    {
        if ($save_directory) {
            $save_directory = $save_directory . DIRECTORY_SEPARATOR;
        }
        $target = $save_directory . pathinfo($url, PATHINFO_FILENAME) . '.gz';
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_FILE => fopen($target, 'w+'),
        ]);
        curl_exec($curl);
        curl_close($curl);
        return $target;
    }

    public static function readReportFile(string $file_path)
    {
        $buffer_size = 20480;
        $file = gzopen($file_path, 'r');
        $str = '';
        while ($file && !gzeof($file)) {
            $str .= gzread($file, $buffer_size);
        }
        gzclose($file);
        return $str ? json_decode($str, true) : [];
    }

    public static function getReportDataFromUrl(string $url)
    {
        $target = self::saveReportFile($url, sys_get_temp_dir());
        $context = self::readReportFile($target);
        @unlink($target);
        return $context;
    }
}
