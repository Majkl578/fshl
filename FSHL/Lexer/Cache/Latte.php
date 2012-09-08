<?php

/**
 * FSHL 2.0.1                                  | Fast Syntax HighLighter |
 * -----------------------------------------------------------------------
 *
 * LICENSE
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

namespace FSHL\Lexer\Cache;

/**
 * Optimized and cached Latte lexer.
 *
 * This file is generated. All changes made in this file will be lost.
 *
 * @copyright Copyright (c) 2002-2005 Juraj 'hvge' Durech
 * @copyright Copyright (c) 2011 Jaroslav Hanslík
 * @license http://fshl.kukulich.cz/#license
 * @see \FSHL\Generator
 * @see \FSHL\Lexer\Latte
 */
class Latte
{
	/**
	 * Language name.
	 *
	 * @var array
	 */
	public $language;

	/**
	 * Transitions table.
	 *
	 * @var array
	 */
	public $trans;

	/**
	 * Id of the initial state.
	 *
	 * @var integer
	 */
	public $initialState;

	/**
	 * Id of the return state.
	 *
	 * @var integer
	 */
	public $returnState;

	/**
	 * Id of the quit state.
	 *
	 * @var integer
	 */
	public $quitState;

	/**
	 * List of flags for all states.
	 *
	 * @var array
	 */
	public $flags;

	/**
	 * Data for all states.
	 *
	 * @var array
	 */
	public $data;

	/**
	 * List of CSS classes.
	 *
	 * @var array
	 */
	public $classes;

	/**
	 * List of keywords.
	 *
	 * @var array
	 */
	public $keywords;

	/**
	 * Initializes the lexer.
	 */
	public function __construct()
	{
		$this->language = 'Latte';
		$this->trans = array(
			0 => array(
				0 => array(
					0 => 10, 1 => 1
				), 1 => array(
					0 => 11, 1 => 1
				), 2 => array(
					0 => 0, 1 => 0
				), 3 => array(
					0 => 2, 1 => 1
				), 4 => array(
					0 => 1, 1 => 1
				), 5 => array(
					0 => 12, 1 => 1
				), 6 => array(
					0 => 0, 1 => 1
				), 7 => array(
					0 => 0, 1 => 1
				)
			), 1 => array(
				0 => array(
					0 => 0, 1 => 0
				), 1 => array(
					0 => 0, 1 => 0
				), 2 => array(
					0 => 0, 1 => 0
				)
			), 2 => array(
				0 => array(
					0 => 0, 1 => 0
				), 1 => array(
					0 => 3, 1 => 1
				), 2 => array(
					0 => 4, 1 => 0
				), 3 => array(
					0 => 4, 1 => 0
				), 4 => array(
					0 => 6, 1 => 0
				), 5 => array(
					0 => 6, 1 => 0
				), 6 => array(
					0 => 11, 1 => 1
				), 7 => array(
					0 => 12, 1 => 1
				)
			), 3 => array(
				0 => array(
					0 => 8, 1 => 1
				), 1 => array(
					0 => 9, 1 => 1
				), 2 => array(
					0 => 2, 1 => -1
				), 3 => array(
					0 => 2, 1 => -1
				), 4 => array(
					0 => 11, 1 => 1
				), 5 => array(
					0 => 12, 1 => 1
				), 6 => array(
					0 => 18, 1 => 1
				), 7 => array(
					0 => 3, 1 => 1
				), 8 => array(
					0 => 3, 1 => 1
				)
			), 4 => array(
				0 => array(
					0 => 8, 1 => 1
				), 1 => array(
					0 => 9, 1 => 1
				), 2 => array(
					0 => 5, 1 => 1
				), 3 => array(
					0 => 11, 1 => 1
				), 4 => array(
					0 => 12, 1 => 1
				), 5 => array(
					0 => 3, 1 => 1
				), 6 => array(
					0 => 3, 1 => 1
				)
			), 5 => array(
				0 => array(
					0 => 21, 1 => 0
				)
			), 6 => array(
				0 => array(
					0 => 8, 1 => 1
				), 1 => array(
					0 => 9, 1 => 1
				), 2 => array(
					0 => 7, 1 => 1
				), 3 => array(
					0 => 11, 1 => 1
				), 4 => array(
					0 => 3, 1 => 1
				), 5 => array(
					0 => 3, 1 => 1
				)
			), 7 => array(
				0 => array(
					0 => 21, 1 => 0
				)
			), 8 => array(
				0 => array(
					0 => 21, 1 => 0
				), 1 => array(
					0 => 11, 1 => 1
				), 2 => array(
					0 => 8, 1 => 1
				), 3 => array(
					0 => 8, 1 => 1
				)
			), 9 => array(
				0 => array(
					0 => 21, 1 => 0
				), 1 => array(
					0 => 11, 1 => 1
				), 2 => array(
					0 => 9, 1 => 1
				), 3 => array(
					0 => 9, 1 => 1
				)
			), 10 => array(
				0 => array(
					0 => 10, 1 => 1
				), 1 => array(
					0 => 10, 1 => 1
				), 2 => array(
					0 => 0, 1 => 0
				), 3 => array(
					0 => 11, 1 => 1
				), 4 => array(
					0 => 12, 1 => 1
				)
			), 11 => NULL, 12 => array(
				0 => array(
					0 => 21, 1 => 0
				), 1 => array(
					0 => 13, 1 => 1
				), 2 => array(
					0 => 21, 1 => 0
				), 3 => array(
					0 => 17, 1 => 1
				), 4 => array(
					0 => 14, 1 => 1
				), 5 => array(
					0 => 12, 1 => 1
				)
			), 13 => array(
				0 => array(
					0 => 13, 1 => 1
				), 1 => array(
					0 => 14, 1 => 1
				), 2 => array(
					0 => 12, 1 => -1
				), 3 => array(
					0 => 14, 1 => 1
				)
			), 14 => array(
				0 => array(
					0 => 14, 1 => 1
				), 1 => array(
					0 => 15, 1 => 1
				), 2 => array(
					0 => 12, 1 => -1
				)
			), 15 => array(
				0 => array(
					0 => 16, 1 => 1
				)
			), 16 => array(
				0 => array(
					0 => 16, 1 => 1
				), 1 => array(
					0 => 12, 1 => -1
				)
			), 17 => array(
				0 => array(
					0 => 12, 1 => 0
				), 1 => array(
					0 => 17, 1 => 1
				)
			), 18 => array(
				0 => array(
					0 => 19, 1 => 1
				), 1 => array(
					0 => 20, 1 => 1
				), 2 => array(
					0 => 3, 1 => -1
				), 3 => array(
					0 => 2, 1 => -1
				)
			), 19 => array(
				0 => array(
					0 => 21, 1 => 0
				), 1 => array(
					0 => 19, 1 => 1
				), 2 => array(
					0 => 19, 1 => 1
				)
			), 20 => array(
				0 => array(
					0 => 21, 1 => 0
				), 1 => array(
					0 => 20, 1 => 1
				), 2 => array(
					0 => 20, 1 => 1
				)
			)
		);
		$this->initialState = 0;
		$this->returnState = 21;
		$this->quitState = 22;
		$this->flags = array(
			0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 8, 6 => 0, 7 => 8, 8 => 4, 9 => 4, 10 => 0, 11 => 8, 12 => 0, 13 => 0, 14 => 0, 15 => 0, 16 => 0, 17 => 0, 18 => 0, 19 => 4, 20 => 4
		);
		$this->data = array(
			0 => NULL, 1 => NULL, 2 => NULL, 3 => NULL, 4 => NULL, 5 => 'Css', 6 => NULL, 7 => 'Javascript', 8 => NULL, 9 => NULL, 10 => NULL, 11 => 'Php', 12 => NULL, 13 => NULL, 14 => NULL, 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL, 20 => NULL
		);
		$this->classes = array(
			0 => NULL, 1 => 'html-entity', 2 => 'html-tag', 3 => 'html-tagin', 4 => 'html-tagin', 5 => 'html-tag', 6 => 'html-tagin', 7 => 'html-tag', 8 => 'html-quote', 9 => 'html-quote', 10 => 'html-comment', 11 => 'xlang', 12 => 'latte-tag', 13 => 'latte-macro', 14 => 'latte-macro-value', 15 => 'latte-macro-modifiers-delim', 16 => 'latte-macro-modifiers', 17 => 'latte-comment', 18 => 'latte-nattr', 19 => 'latte-nattr-in', 20 => 'latte-nattr-in'
		);
		$this->keywords = array(
			
		);

	}

	/**
	 * Finds a delimiter for state OUT.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter0($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '<!--', 2 => '<?', 3 => '<', 4 => '&', 6 => "\n", 7 => "\t"
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if (0 === strpos($part, $delimiters[0])) {
				return array(0, $delimiters[0], $buffer);
			}
			if (preg_match('~<\\?(php|=|(?!xml))~A', $text, $matches, 0, $textPos)) {
				return array(1, $matches[0], $buffer);
			}
			if (0 === strpos($part, $delimiters[2])) {
				return array(2, $delimiters[2], $buffer);
			}
			if ($delimiters[3] === $letter) {
				return array(3, $delimiters[3], $buffer);
			}
			if ($delimiters[4] === $letter) {
				return array(4, $delimiters[4], $buffer);
			}
			if (preg_match('~\\{(?!\s|\\{((\\?|/?[a-z]\\w*+(?:[.:]\\w+)*+(?!::|\\())|!?/?[=\\~#%^&_]?))~A', $text, $matches, 0, $textPos)) {
				return array(5, $matches[0], $buffer);
			}
			if ($delimiters[6] === $letter) {
				return array(6, $delimiters[6], $buffer);
			}
			if ($delimiters[7] === $letter) {
				return array(7, $delimiters[7], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state ENTITY.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter1($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => ';', 1 => '&'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if (preg_match('~^\s+~', $part, $matches)) {
				return array(2, $matches[0], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state TAG.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter2($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '>', 2 => 'style', 3 => 'STYLE', 4 => 'script', 5 => 'SCRIPT'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if (preg_match('~^\s+~', $part, $matches)) {
				return array(1, $matches[0], $buffer);
			}
			if (0 === strpos($part, $delimiters[2])) {
				return array(2, $delimiters[2], $buffer);
			}
			if (0 === strpos($part, $delimiters[3])) {
				return array(3, $delimiters[3], $buffer);
			}
			if (0 === strpos($part, $delimiters[4])) {
				return array(4, $delimiters[4], $buffer);
			}
			if (0 === strpos($part, $delimiters[5])) {
				return array(5, $delimiters[5], $buffer);
			}
			if (preg_match('~<\\?(php|=|(?!xml))~A', $text, $matches, 0, $textPos)) {
				return array(6, $matches[0], $buffer);
			}
			if (preg_match('~\\{(?!\s|\\{((\\?|/?[a-z]\\w*+(?:[.:]\\w+)*+(?!::|\\())|!?/?[=\\~#%^&_]?))~A', $text, $matches, 0, $textPos)) {
				return array(7, $matches[0], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state TAGIN.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter3($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '"', 1 => '\'', 2 => '/>', 3 => '>', 6 => 'n:', 7 => "\n", 8 => "\t"
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if (0 === strpos($part, $delimiters[2])) {
				return array(2, $delimiters[2], $buffer);
			}
			if ($delimiters[3] === $letter) {
				return array(3, $delimiters[3], $buffer);
			}
			if (preg_match('~<\\?(php|=|(?!xml))~A', $text, $matches, 0, $textPos)) {
				return array(4, $matches[0], $buffer);
			}
			if (preg_match('~\\{(?!\s|\\{((\\?|/?[a-z]\\w*+(?:[.:]\\w+)*+(?!::|\\())|!?/?[=\\~#%^&_]?))~A', $text, $matches, 0, $textPos)) {
				return array(5, $matches[0], $buffer);
			}
			if (0 === strpos($part, $delimiters[6])) {
				return array(6, $delimiters[6], $buffer);
			}
			if ($delimiters[7] === $letter) {
				return array(7, $delimiters[7], $buffer);
			}
			if ($delimiters[8] === $letter) {
				return array(8, $delimiters[8], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state STYLE.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter4($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '"', 1 => '\'', 2 => '>', 5 => "\n", 6 => "\t"
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			if (preg_match('~<\\?(php|=|(?!xml))~A', $text, $matches, 0, $textPos)) {
				return array(3, $matches[0], $buffer);
			}
			if (preg_match('~\\{(?!\s|\\{((\\?|/?[a-z]\\w*+(?:[.:]\\w+)*+(?!::|\\())|!?/?[=\\~#%^&_]?))~A', $text, $matches, 0, $textPos)) {
				return array(4, $matches[0], $buffer);
			}
			if ($delimiters[5] === $letter) {
				return array(5, $delimiters[5], $buffer);
			}
			if ($delimiters[6] === $letter) {
				return array(6, $delimiters[6], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state CSS.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter5($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '>'
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state SCRIPT.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter6($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '"', 1 => '\'', 2 => '>', 4 => "\n", 5 => "\t"
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			if (preg_match('~<\\?(php|=|(?!xml))~A', $text, $matches, 0, $textPos)) {
				return array(3, $matches[0], $buffer);
			}
			if ($delimiters[4] === $letter) {
				return array(4, $delimiters[4], $buffer);
			}
			if ($delimiters[5] === $letter) {
				return array(5, $delimiters[5], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state JAVASCRIPT.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter7($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '>'
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state QUOTE_DOUBLE.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter8($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '"', 2 => "\n", 3 => "\t"
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if (preg_match('~<\\?(php|=|(?!xml))~A', $text, $matches, 0, $textPos)) {
				return array(1, $matches[0], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			if ($delimiters[3] === $letter) {
				return array(3, $delimiters[3], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state QUOTE_SINGLE.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter9($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '\'', 2 => "\n", 3 => "\t"
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if (preg_match('~<\\?(php|=|(?!xml))~A', $text, $matches, 0, $textPos)) {
				return array(1, $matches[0], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			if ($delimiters[3] === $letter) {
				return array(3, $delimiters[3], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state COMMENT.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter10($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => "\n", 1 => "\t", 2 => '-->'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if (0 === strpos($part, $delimiters[2])) {
				return array(2, $delimiters[2], $buffer);
			}
			if (preg_match('~<\\?(php|=|(?!xml))~A', $text, $matches, 0, $textPos)) {
				return array(3, $matches[0], $buffer);
			}
			if (preg_match('~\\{(?!\s|\\{((\\?|/?[a-z]\\w*+(?:[.:]\\w+)*+(?!::|\\())|!?/?[=\\~#%^&_]?))~A', $text, $matches, 0, $textPos)) {
				return array(4, $matches[0], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state LATTE.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter12($text, $textLength, $textPos)
	{
		static $delimiters = array(
			2 => '}', 3 => '*', 4 => '$', 5 => "\n"
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if (preg_match('~^\s+~', $part, $matches)) {
				return array(0, $matches[0], $buffer);
			}
			if (preg_match('~(\\?|/?[a-z]\\w*+(?:[.:]\\w+)*+(?!::|\\())|!/?[=\\~#%^&_]?|!?/?[=\\~#%^&_]~A', $text, $matches, 0, $textPos)) {
				return array(1, $matches[0], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			if ($delimiters[3] === $letter) {
				return array(3, $delimiters[3], $buffer);
			}
			if ($delimiters[4] === $letter) {
				return array(4, $delimiters[4], $buffer);
			}
			if ($delimiters[5] === $letter) {
				return array(5, $delimiters[5], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state LATTE_MACRO.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter13($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => "\n", 1 => '$', 2 => '}'
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			return array(3, $letter, $buffer);
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state LATTE_MACRO_VALUE.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter14($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => "\n", 1 => '|', 2 => '}'
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state LATTE_MACRO_MODIFIERS_DELIM.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter15($text, $textLength, $textPos)
	{

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			return array(0, $letter, $buffer);
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state LATTE_MACRO_MODIFIERS.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter16($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => "\n", 1 => '}'
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state LATTE_COMMENT.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter17($text, $textLength, $textPos)
	{
		static $delimiters = array(
			1 => "\n"
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if (preg_match('~\\*(?=\\})~A', $text, $matches, 0, $textPos)) {
				return array(0, $matches[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state LATTE_NATTR.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter18($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '"', 1 => '\'', 3 => '>'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if (preg_match('~^\s+~', $part, $matches)) {
				return array(2, $matches[0], $buffer);
			}
			if ($delimiters[3] === $letter) {
				return array(3, $delimiters[3], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state LATTE_NATTR_VALUE_DOUBLE_QUOTE.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter19($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '"', 1 => "\n", 2 => "\t"
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state LATTE_NATTR_VALUE_SINGLE_QUOTE.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter20($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '\'', 1 => "\n", 2 => "\t"
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

}