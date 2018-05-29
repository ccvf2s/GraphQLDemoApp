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

	/**
	 * @return array
	 */
	public function getCsvData()
	{
		$handle = fopen($this->pathFile, "r");
		$row = 1;
		$csvData = [];
		$keys = [];

		if (false !== $handle) {
			while (($line = fgetcsv($handle)) !== FALSE) {
				if ($row === 1) {
					$keys = $line;
					$row++;
					continue;
				}

				$csvData[] = array_combine($keys, $line);
				$row++;
			}
			fclose($handle);
		}
		return $csvData;
	}

}
