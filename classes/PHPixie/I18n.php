<?php
namespace PHPixie;

class I18n {

	public $pixie;
	private $dictionary;

	public function __construct($pixie, $lang=null) {
		$this->pixie = $pixie;
		$this->dictionary = $this->pixie->config->get("lang-{$lang}");
	}

	public function t($text) {
		return isset($this->dictionary[$text])
			? $this->dictionary[$text]
			: $text;
	}

}
