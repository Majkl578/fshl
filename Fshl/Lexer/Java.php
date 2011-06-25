<?php

/**
 * FastSHL                              | Universal Syntax HighLighter |
 * ---------------------------------------------------------------------
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
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 */

/**
 * Java lexer.
 *
 * @category Fshl
 * @package Fshl
 * @subpackage Lexer
 * @copyright Copyright (c) 2002-2005 Juraj 'hvge' Durech
 * @copyright Copyright (c) 2011 Jaroslav Hanslík
 * @license https://github.com/kukulich/fshl/blob/master/!LICENSE.txt
 */
class Fshl_Lexer_Java implements Fshl_Lexer
{
	/**
	 * Returns version.
	 *
	 * @return string
	 */
	public function getVersion()
	{
		return '1.2';
	}

	/**
	 * Returns initial state.
	 *
	 * @return string
	 */
	public function getInitialState()
	{
		return 'OUT';
	}

	/**
	 * Returns states.
	 *
	 * @return array
	 */
	public function getStates()
	{
		return array(
			'OUT' => array(
				array(
					'ALPHA' => array('KEYWORD', -1),
					'NUMBER' => array('NUM', 0),
					'"' => array('QUOTE1', 0),
					'\'' => array('QUOTE2', 0),
					'/*' => array('COMMENT1', 0),
					'//' => array('COMMENT2', 0),
					'_COUNTAB' => array('OUT', 0)
				),
				Fshl_Generator::STATE_FLAG_NONE,
				null,
				null
			),
			// Keyword
			'KEYWORD' => array(
				array(
					'!SAFECHAR' => array(Fshl_Generator::STATE_RETURN, 0)
				),
				Fshl_Generator::STATE_FLAG_KEYWORD | Fshl_Generator::STATE_FLAG_RECURSION,
				null,
				null
			),
			// Numbers
			'NUM' => array(
				array(
					'x' => array('HEX_NUM', 0),
					'.' => array('DEC_NUM', 0),
					'NUMBER' => array('DEC_NUM', 0),
					'!NUMBER' => array(Fshl_Generator::STATE_RETURN, 1)
				),
				Fshl_Generator::STATE_FLAG_RECURSION,
				'java-num',
				null
			),
			'DEC_NUM' => array(
				array(
					'.' => array('DEC_NUM', 0),
					'!NUMBER' => array(Fshl_Generator::STATE_RETURN, 1)
				),
				Fshl_Generator::STATE_FLAG_NONE,
				'java-num',
				null
			),
			'HEX_NUM' => array(
				array(
					'!HEXNUM' => array(Fshl_Generator::STATE_RETURN, 1)
				),
				Fshl_Generator::STATE_FLAG_NONE,
				'java-num',
				null
			),
			// Quotes BF definition
			'QUOTE1' => array(
				array(
					'\\\\' => array('QUOTE1', 0),
					'\\"' => array('QUOTE1', 0),
					'_COUNTAB' => array('QUOTE1', 0),
					'"' => array(Fshl_Generator::STATE_RETURN, 0)
				),
				Fshl_Generator::STATE_FLAG_RECURSION,
				'java-quote',
				null
			),
			'QUOTE2' => array(
				array(
					'\\\\' => array('QUOTE2', 0),
					'\\\''  => array('QUOTE2', 0),
					'_COUNTAB' => array('QUOTE2', 0),
					'\'' => array(Fshl_Generator::STATE_RETURN, 0)
				),
				Fshl_Generator::STATE_FLAG_RECURSION,
				'java-quote',
				null
			),
			// Comments
			'COMMENT1' => array(
				array(
					'*/' => array(Fshl_Generator::STATE_RETURN, 0),
					'_COUNTAB' => array('COMMENT1', 0)
				),
				Fshl_Generator::STATE_FLAG_RECURSION,
				'java-comment',
				null
			),
			'COMMENT2' => array(
				array(
					"\n" => array(Fshl_Generator::STATE_RETURN, 0),
					"\t" => array('COMMENT2', 0)
				),
				Fshl_Generator::STATE_FLAG_RECURSION,
				'java-comment',
				null
			)
		);
	}

	/**
	 * Returns keywords.
	 *
	 * @return array
	 */
	public function getKeywords()
	{
		return array(
			'java-keywords',
			array(
				'abstract' => 1,
				'double' => 1,
				'int' => 1,
				'strictfp' => 1,
				'boolean' => 1,
				'else' => 1,
				'interface' => 1,
				'super' => 1,
				'break' => 1,
				'extends' => 1,
				'long' => 1,
				'switch' => 1,
				'byte' => 1,
				'final' => 1,
				'native' => 1,
				'synchronized' => 1,
				'case' => 1,
				'finally' => 1,
				'new' => 1,
				'this' => 1,
				'catch' => 1,
				'float' => 1,
				'package' => 1,
				'throw' => 1,
				'char' => 1,
				'for' => 1,
				'private' => 1,
				'throws' => 1,
				'class' => 1,
				'goto' => 1,
				'protected' => 1,
				'transient' => 1,
				'const' => 1,
				'if' => 1,
				'public' => 1,
				'try' => 1,
				'continue' => 1,
				'implements' => 1,
				'return' => 1,
				'void' => 1,
				'default' => 1,
				'import' => 1,
				'short' => 1,
				'volatile' => 1,
				'do' => 1,
				'instanceof' => 1,
				'static' => 1,
				'while' => 1
			),
			Fshl_Generator::CASE_SENSITIVE
		);
	}
}