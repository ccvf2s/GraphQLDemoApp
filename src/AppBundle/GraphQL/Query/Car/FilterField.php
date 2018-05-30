<?php

namespace AppBundle\GraphQL\Query\Car;

use AppBundle\GraphQL\Type\CarType;
use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQLBundle\Field\AbstractContainerAwareField;

/**
 * Class FilterMakeField
 * @package AppBundle\GraphQL\Query\Car
 * @author Dominick Makome <makomedominick@gmail.com>
 */
class FilterField extends AbstractContainerAwareField
{

	const FILTER_NAME = 'field';
	const FILTER_VALUE = 'value';

	/**
	 * @inheritdoc
	 */
	public function build(FieldConfig $config)
	{
		$config->addArguments([
			self::FILTER_NAME => new NonNullType(new StringType()),
			self::FILTER_VALUE => new NonNullType(new StringType()),
		]);
	}

	/**
	 * @param $value
	 * @param array $args
	 * @param ResolveInfo $info
	 * @return array|mixed|null
	 * @throws \Exception
	 */
	public function resolve($value, array $args, ResolveInfo $info)
	{
		return $this->container->get('resolver.car_api')->filter($args[self::FILTER_NAME], $args[self::FILTER_VALUE]);
	}

	/**
	 * @inheritdoc
	 */
	public function getType()
	{
		return new ListType(new CarType());
	}

}
