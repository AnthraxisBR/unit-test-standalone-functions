<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 11/27/2018
 * Time: 9:30 PM
 */
declare(strict_types=1);

namespace AnthraxisBR\UnitStandaloneTest;

use PHPUnit\Framework\TestCase;

class functionTestCase extends TestCase
{

    public $function;

    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->setFile( getenv('TEST_PATH') .'\\'. getenv('TEST_FILE'));

        $this->isAvailable();
    }

    public function setFile(string $file)
    {
        try{
            require_once $file;
        }catch (\Exception $e)
        {
            throw new  \Exception('Arquivo não encontrado','0001');
        }
    }

    public function setFunction(string $function)
    {
        if(is_callable($function)){
            $this->function = $function;
            return true;
        }
        throw new \Exception('Não é possível definir esta função','0002');
    }

    public function isAvailable()
    {
        if(isset($this->function) and $this->function !== '')
        {
            return true;
        }
        throw new \Exception('Não é possível iniciar um teste sem um função declarada','0003');

    }

    function functionResult()
    {
        $function = $this->function;
        dd($function);
        return $function();
    }
}