<?php

namespace AppBundle\GraphQL\Query;

use AppBundle\GraphQL\Query\Car\CarsField;
use Youshido\GraphQL\Config\Object\ObjectTypeConfig;
use Youshido\GraphQL\Type\Object\AbstractObjectType;

/**
 * Class QueryType
 * @package AppBundle\GraphQL\Query
 * @author Dominick Makome <makomedominick@gmail.com>
 */
class QueryType extends AbstractObjectType
{

    /**
     * @param ObjectTypeConfig $config
     *
     * @return mixed
     */
    public function build($config)
    {
        $config->addFields([new CarsField()]);
    }

}
