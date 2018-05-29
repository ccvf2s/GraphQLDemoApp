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
		return [
			[
				'make'	=> "make here",
				'model'	=> "kdkd",
				'trim'	=> "dmzlq",
				'year'	=> "apizk",
				'tco'	=> "dkldk",
			],
			[
				'make'	=> "make test",
				'model'	=> "kdkd",
				'trim'	=> "dmzlq",
				'year'	=> "apizk",
				'tco'	=> "dkldk",
			],
			[
				'make'	=> "make second",
				'model'	=> "kdkd",
				'trim'	=> "dmzlq",
				'year'	=> "apizk",
				'tco'	=> "dkldk",
			],
		];
	}

}
