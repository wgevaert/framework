<?php

/**
 * @copyright Frederic G. Østby
 * @license   http://www.makoframework.com/license
 */

namespace mako\cli\output\helpers\traits;

use function mb_strwidth;

/**
 * Helper trait.
 *
 * @author Frederic G. Østby
 *
 * @property \mako\cli\output\formatter\FormatterInterface|null $formatter
 */
trait HelperTrait
{
	/**
	 * Returns the width of the string without formatting.
	 *
	 * @param  string $string String to strip
	 * @return int
	 */
	protected function stringWidthWithoutFormatting(string $string): int
	{
		return (int) mb_strwidth($this->formatter !== null ? $this->formatter->stripTags($string) : $string);
	}
}
