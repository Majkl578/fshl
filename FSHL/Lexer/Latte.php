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

namespace FSHL\Lexer;

use FSHL, FSHL\Generator;

/**
 * Nette Framework's Latte lexer.
 *
 * This class is basically an extension Html lexer.
 * It might (or might not) be extracted when it is finished.
 * @see Html
 *
 * @copyright Copyright (c) 2012 Michael Moravec
 * @license http://fshl.kukulich.cz/#license
 */
class Latte implements FSHL\Lexer
{
	/**
	 * Returns language name.
	 * @return string
	 */
	public function getLanguage()
	{
		return 'Latte';
	}

	/**
	 * Returns initial state.
	 * @return string
	 */
	public function getInitialState()
	{
		return 'OUT';
	}

	/**
	 * Returns keywords.
	 * @return array
	 */
	public function getStates()
	{
		return array(
			'OUT' => array(
				array(
					'<!--' => array('COMMENT', Generator::NEXT),
					'PHP' => array('PHP', Generator::NEXT),
					'<?' => array(Generator::STATE_SELF, Generator::CURRENT),
					'<' => array('TAG', Generator::NEXT),
					'&' => array('ENTITY', Generator::NEXT),
					'LATTE' => array('LATTE', Generator::NEXT), // Latte
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
					'TAB' => array(Generator::STATE_SELF, Generator::NEXT)
				),
				Generator::STATE_FLAG_NONE,
				NULL,
				NULL
			),
			'ENTITY' => array(
				array(
					';' => array('OUT', Generator::CURRENT),
					'&' => array('OUT', Generator::CURRENT),
					'SPACE' => array('OUT', Generator::CURRENT)
				),
				Generator::STATE_FLAG_NONE,
				'html-entity',
				NULL
			),
			'TAG' => array(
				array(
					'>' => array('OUT', Generator::CURRENT),
					'SPACE' => array('TAGIN', Generator::NEXT),
					'style' => array('STYLE', Generator::CURRENT),
					'STYLE' => array('STYLE', Generator::CURRENT),
					'script' => array('SCRIPT', Generator::CURRENT),
					'SCRIPT' => array('SCRIPT', Generator::CURRENT),
					'PHP' => array('PHP', Generator::NEXT),
					'LATTE' => array('LATTE', Generator::NEXT), // Latte
				),
				Generator::STATE_FLAG_NONE,
				'html-tag',
				NULL
			),
			'TAGIN' => array(
				array(
					'"' => array('QUOTE_DOUBLE', Generator::NEXT),
					'\'' => array('QUOTE_SINGLE', Generator::NEXT),
					'/>' => array('TAG', Generator::BACK),
					'>' => array('TAG', Generator::BACK),
					'PHP' => array('PHP', Generator::NEXT),
					'LATTE' => array('LATTE', Generator::NEXT),
					'n:' => array('LATTE_NATTR', Generator::NEXT), // Latte
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
					'TAB' => array(Generator::STATE_SELF, Generator::NEXT)
				),
				Generator::STATE_FLAG_NONE,
				'html-tagin',
				NULL
			),
			'STYLE' => array(
				array(
					'"' => array('QUOTE_DOUBLE', Generator::NEXT),
					'\'' => array('QUOTE_SINGLE', Generator::NEXT),
					'>' => array('CSS', Generator::NEXT),
					'PHP' => array('PHP', Generator::NEXT),
					'LATTE' => array('LATTE', Generator::NEXT), // Latte
					'LINE' => array('TAGIN', Generator::NEXT),
					'TAB' => array('TAGIN', Generator::NEXT)
				),
				Generator::STATE_FLAG_NONE,
				'html-tagin',
				NULL
			),
			'CSS' => array(
				array(
					'>' => array(Generator::STATE_RETURN, Generator::CURRENT)
				),
				Generator::STATE_FLAG_NEWLEXER,
				'html-tag',
				'Css'
			),
			'SCRIPT' => array(
				array(
					'"' => array('QUOTE_DOUBLE', Generator::NEXT),
					'\'' => array('QUOTE_SINGLE', Generator::NEXT),
					'>' => array('JAVASCRIPT', Generator::NEXT),
					'PHP' => array('PHP', Generator::NEXT),
					'LINE' => array('TAGIN', Generator::NEXT),
					'TAB' => array('TAGIN', Generator::NEXT)
				),
				Generator::STATE_FLAG_NONE,
				'html-tagin',
				NULL
			),
			'JAVASCRIPT' => array(
				array(
					'>' => array(Generator::STATE_RETURN, Generator::CURRENT)
				),
				Generator::STATE_FLAG_NEWLEXER,
				'html-tag',
				'Javascript'
			),
			'QUOTE_DOUBLE' => array(
				array(
					'"' => array(Generator::STATE_RETURN, Generator::CURRENT),
					'PHP' => array('PHP', Generator::NEXT),
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
					'TAB' => array(Generator::STATE_SELF, Generator::NEXT)
				),
				Generator::STATE_FLAG_RECURSION,
				'html-quote',
				NULL
			),
			'QUOTE_SINGLE' => array(
				array(
					'\'' => array(Generator::STATE_RETURN, Generator::CURRENT),
					'PHP' => array('PHP', Generator::NEXT),
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
					'TAB' => array(Generator::STATE_SELF, Generator::NEXT)
				),
				Generator::STATE_FLAG_RECURSION,
				'html-quote',
				NULL
			),
			'COMMENT' => array(
				array(
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
					'TAB' => array(Generator::STATE_SELF, Generator::NEXT),
					'-->' => array('OUT', Generator::CURRENT),
					'PHP' => array('PHP', Generator::NEXT),
					'LATTE' => array('LATTE', Generator::NEXT), // Latte
				),
				Generator::STATE_FLAG_NONE,
				'html-comment',
				NULL
			),
			'PHP' => array(
				NULL,
				Generator::STATE_FLAG_NEWLEXER,
				'xlang',
				'Php'
			),
			'LATTE' => array(
				array(
					'SPACE' => array(Generator::STATE_RETURN, Generator::CURRENT),
					'LATTE_MACRO' => array('LATTE_MACRO', Generator::NEXT),
					'}' => array(Generator::STATE_RETURN, Generator::CURRENT),
					'*' => array('LATTE_COMMENT', Generator::NEXT),
					'$' => array('LATTE_MACRO_VALUE', Generator::NEXT),
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
				),
				Generator::STATE_FLAG_NONE,
				'latte-tag',
				NULL,
			),
			'LATTE_MACRO' => array(
				array(
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
					'$' => array('LATTE_MACRO_VALUE', Generator::NEXT),
					'}' => array('LATTE', Generator::BACK),
					'ALL' => array('LATTE_MACRO_VALUE', Generator::NEXT),
				),
				Generator::STATE_FLAG_NONE,
				'latte-macro',
				NULL,
			),
			'LATTE_MACRO_VALUE' => array(
				array(
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
					'|' => array('LATTE_MACRO_MODIFIERS_DELIM', Generator::NEXT),
					'}' => array('LATTE', Generator::BACK),
				),
				Generator::STATE_FLAG_NONE,
				'latte-macro-value',
				NULL,
			),
			'LATTE_MACRO_MODIFIERS_DELIM' => array(
				array(
					'ALL' => array('LATTE_MACRO_MODIFIERS', Generator::NEXT),
				),
				Generator::STATE_FLAG_NONE,
				'latte-macro-modifiers-delim',
				NULL,
			),
			'LATTE_MACRO_MODIFIERS' => array(
				array(
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
					'}' => array('LATTE', Generator::BACK),
				),
				Generator::STATE_FLAG_NONE,
				'latte-macro-modifiers',
				NULL,
			),
			'LATTE_COMMENT' => array(
				array(
					'LATTE_COMMENT_END' => array('LATTE', Generator::CURRENT),
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
				),
				Generator::STATE_FLAG_NONE,
				'latte-comment',
				NULL,
			),
			'LATTE_NATTR' => array(
				array(
					'"' => array('LATTE_NATTR_VALUE_DOUBLE_QUOTE', Generator::NEXT),
					"'" => array('LATTE_NATTR_VALUE_SINGLE_QUOTE', Generator::NEXT),
					"SPACE" => array('TAGIN', Generator::BACK),
					'>' => array('TAG', Generator::BACK),
				),
				Generator::STATE_FLAG_NONE,
				'latte-nattr',
				NULL,
			),
			'LATTE_NATTR_VALUE_DOUBLE_QUOTE' => array(
				array(
					'"' => array(Generator::STATE_RETURN, Generator::CURRENT),
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
					'TAB' => array(Generator::STATE_SELF, Generator::NEXT),
				),
				Generator::STATE_FLAG_RECURSION,
				'latte-nattr-in',
				NULL,
			),
			'LATTE_NATTR_VALUE_SINGLE_QUOTE' => array(
				array(
					"'" => array(Generator::STATE_RETURN, Generator::CURRENT),
					'LINE' => array(Generator::STATE_SELF, Generator::NEXT),
					'TAB' => array(Generator::STATE_SELF, Generator::NEXT),
				),
				Generator::STATE_FLAG_RECURSION,
				'latte-nattr-in',
				NULL,
			),
		);
	}

	/**
	 * Returns special delimiters.
	 * @return array
	 */
	public function getDelimiters()
	{
		return array(
			'PHP' => 'preg_match(\'~<\\\\?(php|=|(?!xml))~A\', $text, $matches, 0, $textPos)',
			'LATTE' => 'preg_match(\'~\\\\{(?!\s|\\\\{((\\\\?|/?[a-z]\\\\w*+(?:[.:]\\\\w+)*+(?!::|\\\\())|!?/?[=\\\\~#%^&_]?))~A\', $text, $matches, 0, $textPos)',
			'LATTE_COMMENT_END' => 'preg_match(\'~\\\\*(?=\\\\})~A\', $text, $matches, 0, $textPos)',
			'LATTE_MACRO' => 'preg_match(\'~(\\\\?|/?[a-z]\\\\w*+(?:[.:]\\\\w+)*+(?!::|\\\\())|!/?[=\\\\~#%^&_]?|!?/?[=\\\\~#%^&_]~A\', $text, $matches, 0, $textPos)',
		);
	}

	/**
	 * Returns keywords.
	 * @return array
	 */
	public function getKeywords()
	{
		return array();
	}
}
