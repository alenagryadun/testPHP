<?php
class Thesaurus {
    private $thesaurus;

    function __construct($thesaurus) {
        $this->thesaurus = $thesaurus;
    }
    
    public function getSynonyms($word) {
        $synonyms = (!empty($this->thesaurus[$word]) ? $this->thesaurus[$word] : array());
        return json_encode(array('word'=> $word, 'synonyms'=>$synonyms));
    }
}

$thesaurus = new Thesaurus(
 array
 (
 "buy" => array("purchase"),
 "big" => array("great", "large")
 ));
echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast"); 