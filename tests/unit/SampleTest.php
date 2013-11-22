<?php

    namespace Test;

    class SampleTest extends \Codeception\TestCase\Test
    {
        /**
         * @var \Test\CodeGuy
         */
        protected $codeGuy;

        // ######################################

        protected function _before()
        {
        }

        // ######################################

        protected function _after()
        {
        }

        // ######################################

        /**
         * @return \Test\CodeGuy
         */
        public function getCodeGuy()
        {
            return $this->codeGuy;
        }

        // ######################################

        public function testFoo()
        {
        }
    }