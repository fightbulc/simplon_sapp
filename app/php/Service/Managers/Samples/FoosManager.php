<?php

    namespace Service\Managers\Samples;

    use Simplon\Helper\SingletonTrait;

    class FoosManager
    {
        use SingletonTrait;

        // ######################################

        /**
         * @param $name
         *
         * @return string
         */
        public function doSomething($name)
        {
            return "Hello {$name}";
        }
    } 