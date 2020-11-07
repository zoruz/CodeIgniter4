<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CodeIgniter\Exceptions;

use RuntimeException;

/**
 * Class FrameworkException
 *
 * A collection of exceptions thrown by the framework
 * that can only be determined at run time.
 */
class FrameworkException extends RuntimeException implements ExceptionInterface
{
	public static function forEnabledZlibOutputCompression()
	{
		return new static(lang('Core.enabledZlibOutputCompression'));
	}

	public static function forInvalidFile(string $path)
	{
		return new static(lang('Core.invalidFile', [$path]));
	}

	public static function forCopyError(string $path)
	{
		return new static(lang('Core.copyError', [$path]));
	}

	public static function forMissingExtension(string $extension)
	{
		return new static(lang('Core.missingExtension', [$extension]));
	}

	public static function forNoHandlers(string $class)
	{
		return new static(lang('Core.noHandlers', [$class]));
	}
}
