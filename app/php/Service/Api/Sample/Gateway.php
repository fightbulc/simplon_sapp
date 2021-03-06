<?php

    namespace Service\Api\Sample;

    use Simplon\Jr\Interfaces\InterfaceGateway;

    class Gateway extends \Simplon\Jr\Gateway implements InterfaceGateway
    {
        /**
         * @return bool
         */
        public function isEnabled()
        {
            return TRUE;
        }

        // ##########################################

        /**
         * @return bool|string
         */
        public function getNamespace()
        {
            return __NAMESPACE__;
        }

        // ##########################################

        /**
         * @return bool
         */
        public function hasAuth()
        {
            return FALSE;
        }

        // ##########################################

        /**
         * @return array|bool
         */
        public function getValidServices()
        {
            return [
                'Sample.Foos.barMethod',
            ];
        }
    }