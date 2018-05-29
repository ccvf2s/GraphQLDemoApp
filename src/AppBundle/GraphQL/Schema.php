<?php

namespace AppBundle\GraphQL;

use AppBundle\GraphQL\Mutation\MutationType;
use AppBundle\GraphQL\Query\QueryType;
use Youshido\GraphQL\Schema\AbstractSchema;
use Youshido\GraphQL\Config\Schema\SchemaConfig;

/**
 * Class Schema
 * @package AppBundle\GraphQL
 * @author Dominick Makome <makomedominick@gmail.com>
 */
class Schema extends AbstractSchema
{

	/**
	 * @inheritdoc
	 */
    public function build(SchemaConfig $config)
    {
        $config
            ->setMutation(new MutationType())
            ->setQuery(new QueryType());
    }

}

