<?php
declare(strict_types=1);

class Thesaurus
{
	private $thesaurus;

	function __construct($thesaurus)
	{
		$this->thesaurus = $thesaurus;
	}

	public function getSynonyms(string $word): string
	{
		$result = [
			'word' => $word,
			'synonyms' => $this->thesaurus[$word] ?? []
		];
		return json_encode($result);
	}
}

$thesaurus = new Thesaurus(
	array
	(
		"buy" => array("purchase"),
		"big" => array("great", "large")
	)
);
echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");