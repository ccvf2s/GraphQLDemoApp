<?php

namespace AppBundle\Helper;

/**
 * Class CsvReader
 * @package AppBundle\Helper
 * @author Dominick Makome <makomedominick@gmail.com>
 */
class CsvReader
{
	/**
	 * @var string
	 */
	private $pathFile;

	/**
	 * CsvReader constructor.
	 * @param string $pathFile
	 */
	public function __construct(string $pathFile)
	{
		$this->pathFile = $pathFile;
	}

}
