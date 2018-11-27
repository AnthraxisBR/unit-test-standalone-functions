<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/27/2018
 * Time: 9:36 PM
 */

declare(strict_types=1);

use  AnthraxisBR\UnitStandaloneTest\functionTestCase;

final class EmailTest extends functionTestCase
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
        $this->setFunction('');
        parent::__construct($name, $data, $dataName);
    }

    /**
     * 
     */
    public function Testar(): void
    {
        $this->assertEquals(
            $this->functionResult(),
            'aaa'
        );
    }
}