<?php

namespace AppBundle\GraphQL\Type;

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;

/**
 * Class CarType
 * @package AppBundle\GraphQL\Type
 * @author Dominick Makome <makomedominick@gmail.com>
 */
class CarType extends AbstractObjectType
{

	/**
	 * @inheritdoc
	 */
	public function build($config)
	{
		$config->addFields([
			'make'        => new StringType(),
			'model'     => new StringType(),
			'trim' => new StringType(),
			'year' => new StringType(),
			'tco' => new StringType(),
		]);
	}

}
