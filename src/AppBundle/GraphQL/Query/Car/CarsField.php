<?php

namespace AppBundle\GraphQL\Query\Car;

use AppBundle\GraphQL\Type\CarType;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQLBundle\Field\AbstractContainerAwareField;

/**
 * Class CarsField
 * @package AppBundle\GraphQL\Query\Car
 * @author Dominick Makome <makomedominick@gmail.com>
 */
class CarsField extends AbstractContainerAwareField
{

	/**
	 * @inheritdoc
	 */
	public function resolve($value, array $args, ResolveInfo $info)
	{
		return $this->container->get('resolver.car_api')->all();
	}

	/**
	 * @inheritdoc
	 */
	public function getType()
	{
		return new ListType(new CarType());
	}

}
