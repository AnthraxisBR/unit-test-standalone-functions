<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/27/2018
 * Time: 9:36 PM
 */

namespace Tests;

include 'c:\xampp\htdocs\VHJ\vendor\autoload.php';

use  AnthraxisBR\UnitStandaloneTest\functionTestCase;


final class TestCase extends functionTestCase
{
    /**
     * Define a função e o arquivo
     * @param null|string $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        /**
         * O arquivo sempre deve vir primeiro
         * Se houver necessidade de mais de um arquivo, apenas use a função consecutivamente.
         */
        /**
         * A função deve existir no arquivo informado
         */
        $this->setFile( 'c:\xampp\htdocs\VHJ\public\index.php');

        $this->setFunction('testar');

        parent::__construct($name, $data, $dataName);
    }

    /**
     *
     */
    public function testTestar(): void
    {
        $this->assertEquals(
            $this->functionResult(),
            'aaa'
        );
    }
}
