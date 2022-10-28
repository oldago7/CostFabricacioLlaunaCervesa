<?php

        require 'CostFabricacioLlaunaCervesa.php';
        use \PHPUnit\Framework\TestCase;

        class CostFabricacioLlaunaCervesaTest extends PHPUnit\Framework\TestCase {

                private $llauna_test;

                protected function setUp(): void{
                        $this->llauna_test = new llauna();
                }

                protected function tearDown(): void{
                        $this->llauna_test = NULL;
                }

                public function testVolum(){
                        $result = $this->llauna_test->volum(1, 1);
                        $this->assertEquals(M_PI, $result);
                        $result = $this->llauna_test->volum(0, 1);
                        $this->assertEquals(0, $result);
                }

                public function testCost(){
                        $result = $this->llauna_test->cost(1, 1);
                        $this->assertEquals(1, $result);
                        $result = $this->llauna_test->cost(0, 1);
                        $this->assertEquals(0, $result);
                }
        }
?>