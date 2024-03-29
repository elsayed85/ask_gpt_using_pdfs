<?php

namespace App\Services;


class Md2Json
{
    public static function convertFile($file)
    {
        $hrTagCount = 0;
        $readmoreCount = 0;
        $fp = fopen($file, "r");
        $data = [];
        while ($contents = fgets($fp)) {
            // echo $contents;
            // echo substr($contents, 0, strpos($contents, ":"))."\n";
            $contents = trim($contents);
            if ($contents == '---') {
                $hrTagCount++;
                continue;
            } else {
                if ($hrTagCount < 2) {
                    $arrKey = strval(substr($contents, 0, strpos($contents, ":")));
                    $arrContent = filter_var(strval(str_replace('"', "", substr($contents, strpos($contents, ":")))), FILTER_SANITIZE_STRIPPED);
                } else {
                    if (strtolower($contents) == "readmore") {
                        $readmoreCount++;
                        continue;
                    } elseif ($contents == "") {
                        continue;
                    } else {
                        if ($readmoreCount >= 1) {
                            $arrKey = "content";
                            $contents = str_replace("#", "", $contents);
                            $contents = trim($contents);
                            if (array_key_exists("content", $data)) {
                                $arrContent = $data["content"] . "\n" . $contents;
                            } else {
                                $arrContent = $contents;
                            }
                        } else {
                            $arrKey = "short-content";
                            $arrContent = $contents;
                        }
                    }
                }
                $data[$arrKey] = $arrContent;
            }
        }

        return $data;
    }
}
