<?php

    namespace Service\Api\Sample\Service;

    use Service\Managers\Samples\FoosManager;

    class FoosService
    {
        public function barMethod($name)
        {
            return FoosManager::getInstance()
                ->doSomething($name);
        }
    }