<?php
namespace PHPixie;

class I18n {

	public $pixie;
	private $dictionary;

	public function __construct($pixie) {
		$this->pixie = $pixie;
	}

	public function load($lang=null, $defaultCode=null) {
		if($lang)
			$this->dictionary = $this->pixie->config->get("lang-{$lang}");
	}

	public function t($text) {
		return ($this->dictionary && isset($this->dictionary[$text]))
			? $this->dictionary[$text]
			: $text;
	}

}
