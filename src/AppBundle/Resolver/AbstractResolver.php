<?php

namespace AppBundle\Resolver;

use AppBundle\Helper\CsvReader;

/**
 * Class AbstractResolver
 * @package AppBundle\Resolver
 * @author Dominick Makome <makomedominick@gmail.com>
 */
abstract class AbstractResolver
{

	/**
	 * @var \AppBundle\Helper\CsvReader
	 */
	protected $csvReader;

	/**
	 * AbstractResolver constructor.
	 * @param \AppBundle\Helper\CsvReader $csvReader
	 */
	public function __construct(CsvReader $csvReader)
	{
		$this->csvReader = $csvReader;
	}

}
