<?php

namespace AppBundle\Resolver;

/**
 * Class CarApiResolver
 * @package AppBundle\Resolver
 * @author Dominick Makome <makomedominick@gmail.com>
 */
class CarApiResolver extends AbstractResolver
{

	public function all()
	{
		return $this->csvReader->getCsvData();
	}

}
