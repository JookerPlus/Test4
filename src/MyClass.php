<?php

class MyClass
{
    public static function reverseCharacters(string $str): string
    {
        $final_str = '';
        $punctuation_array = ["!", "?", ",", "'", "...", ":", ";", "-", "."];
        $str_chunk = explode(' ', $str);
        foreach ($str_chunk as $item) {
            if (in_array($item[-1], $punctuation_array)) {
                $current_str = '';
                for ($i = 0; $i < strlen($item) - 1; $i++) {
                    $current_str .= $item[-$i - 2];
                }
                $final_str .= $current_str . $item[-1] . ' ';
            } else {
                $current_str = '';
                for ($i = 0; $i < strlen($item); $i++) {
                    $current_str .= $item[-$i - 1];
                }
                $final_str .= $current_str . ' ';
            }
        }
        return trim($final_str);
    }
}