<?php namespace AgilMa\ParagraphDotLine;

use Illuminate\Support\Facades\Facade;

class ParagraphDotLine extends Facade {
	protected static function getFacadeAccessor() 
	{ 
		return 'paragraph-dot-line'; 
	}
}