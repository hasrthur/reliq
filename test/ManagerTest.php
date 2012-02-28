<?php

    require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' .
                 DIRECTORY_SEPARATOR . 'reliq'
                 . DIRECTORY_SEPARATOR
                 . 'autoload.php';

    /**
     * Test class for Manager.
     * Generated by PHPUnit on 2011-08-12 at 13:17:22.
     */
    class ManagerTest extends PHPUnit_Framework_TestCase {
        /**
         * @var Manager
         */
        protected $manager;

        /**
         * Sets up the fixture, for example, opens a network connections.
         * This method is called before a test is executed.
         */
        protected function setUp() {
            $this->manager = new Reliq\Managers\Manager;
        }

        /**
         * @expectedException Reliq\Exceptions\WrongNodeTypeException
         */
        public function testWhere() {
            $this->manager->where('test');
        }

        /**
         * @expectedException Reliq\Exceptions\WrongLimitException
         */
        public function testLimit() {
            $this->manager->limit(-1);
        }
    }

?>