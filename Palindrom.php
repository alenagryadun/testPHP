<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $word_length = strlen($word);
        if ($word_length < 2 ) return 'Error. It is not a word';
        $word = strtolower($word);
        $word_array = str_split($word);
        
        if($word_length % 2 == 1) {
            $middle_index = floor($word_length / 2);
            array_splice($word_array, $middle_index, 1);
        }

        $middle_index = count($word_array) / 2 - 1;
        $left_path = '';
        $right_path = '';
        foreach($word_array as $key => $letter){
            if($key <= $middle_index) $left_path.= $letter;
            else $right_path.= $letter;
        }

        if($left_path != strrev($right_path)) return 'false';
        return 'true';
    }

    public static function isPalindrome_2($word) {

        if (strlen($word) < 2 ) return 'Error. It is not a word';
        $word = strtolower($word);
        $word_array = str_split($word);
        $reverse_word_array = array_reverse($word_array);

        for ($i = 0; $i < count($word_array); $i++) {
            if ($word_array[$i] != $reverse_word_array[$i]) return 'false';
        }

        return 'true';
    }
}
echo Palindrome::isPalindrome('Deleveled'); 