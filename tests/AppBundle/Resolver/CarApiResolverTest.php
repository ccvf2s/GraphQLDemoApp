<?php

namespace Tests\AppBundle\Resolver;

use AppBundle\Helper\CsvReader;
use AppBundle\Resolver\CarApiResolver;
use PHPUnit\Framework\TestCase;

class CarApiResolverTest extends TestCase
{

    public function testFilterException()
    {
        $this->setExpectedException(\Exception::class);
        $csvReader = $this->getMockBuilder(CsvReader::class)->disableOriginalConstructor()->getMock();
        $csvReader
            ->method('getCsvData')
            ->willReturn([]);

        $carApiResolver = new CarApiResolver($csvReader);
        $carApiResolver->filter('test', 'data');
    }


    public function testFilterByFieldOK()
    {
        $csvReader = $this->getMockBuilder(CsvReader::class)->disableOriginalConstructor()->getMock();
        $csvReader
            ->method('getCsvData')
            ->willReturn($this->getCsvData());

        $carApiResolver = new CarApiResolver($csvReader);

        $data = $carApiResolver->filter('make', 'Citroen');
        $this->assertCount(4, $data);

        $data = $carApiResolver->filter('model', 'C4');
        $this->assertCount(2, $data);

        $data = $carApiResolver->filter('year', '2004');
        $this->assertCount(2, $data);
    }

    /**
     * @return array
     */
    private function getCsvData()
    {
        return [
            [
                'make' => "Citroen",
                'model' => "C3",
                'trim' => "The car",
                'year' => "2004",
                'tco' => "400058"
            ],
            [
                'make' => "Citroen",
                'model' => "C2",
                'trim' => " blaalalal",
                'year' => "2004",
                'tco' => "400059"
            ],
            [
                'make' => "Citroen",
                'model' => "C4",
                'trim' => " blaalalal",
                'year' => "2003",
                'tco' => "50015"
            ],
            [
                'make' => "Citroen",
                'model' => "C4",
                'trim' => " blaalalal",
                'year' => "2018",
                'tco' => "400058"
            ]
        ];
    }

}