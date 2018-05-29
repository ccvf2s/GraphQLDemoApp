<?php

namespace AppBundle\Resolver;

/**
 * Class CarApiResolver
 * @package AppBundle\Resolver
 * @author Dominick Makome <makomedominick@gmail.com>
 */
class CarApiResolver extends AbstractResolver
{

	/**
	 * @return array
	 */
	public function all()
	{
		return $this->csvReader->getCsvData();
	}

	/**
	 * @param string $field
	 * @param string $value
	 *
	 * @throws \Exception
	 *
	 * @return array
	 */
	public function filter(string $field, string $value)
	{
		$data = $this->all();
		if (!in_array($field, ['make', 'model', 'trim', 'year', 'tco'])) {
			throw new \Exception("The field {$field} doesn't exist.");
		}

		$colums = array_column($data, $field);
		$result = array_filter($colums, function($v) use ($value) { return $v == $value;});
		$keys = array_keys($result);


		return array_filter($data, function ($key) use ($keys) { return in_array($key, $keys);}, ARRAY_FILTER_USE_KEY);
	}

}
