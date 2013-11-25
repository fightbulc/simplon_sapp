<?php

    namespace Test;

    use Codeception\TestCase\Test;

    class SampleTest extends Test
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