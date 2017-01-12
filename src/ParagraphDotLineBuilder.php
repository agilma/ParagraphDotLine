<?php namespace AgilMa\ParagraphDotLine;

class ParagraphDotLineBuilder {
	private static $file_js 	= '/paragraph-dot-line/js/paragraph-dot-line.js';

	public static function include_js()
	{
		return self::tag_js(asset(self::$file_js));
	}

	private static function tag_js($path) {
		return '<script src="'.$path.'"></script>';
	}
}