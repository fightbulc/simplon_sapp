<?php

    namespace Service\Vo\Config;

    use Simplon\Helper\VoSetDataFactory;

    class MysqlConfigVo
    {
        protected $_server;
        protected $_database;
        protected $_username;
        protected $_password;

        // ##########################################

        /**
         * @param array $data
         *
         * @return MysqlConfigVo
         */
        public function setData(array $data)
        {
            (new VoSetDataFactory())
                ->setRawData($data)
                ->setConditionByKey('server', function ($val) { $this->setServer($val); })
                ->setConditionByKey('database', function ($val) { $this->setDatabase($val); })
                ->setConditionByKey('username', function ($val) { $this->setUsername($val); })
                ->setConditionByKey('password', function ($val) { $this->setPassword($val); })
                ->run();

            return $this;
        }

        // ######################################

        /**
         * @param mixed $database
         *
         * @return MysqlConfigVo
         */
        public function setDatabase($database)
        {
            $this->_database = $database;

            return $this;
        }

        // ######################################

        /**
         * @return mixed
         */
        public function getDatabase()
        {
            return $this->_database;
        }

        // ######################################

        /**
         * @param mixed $password
         *
         * @return MysqlConfigVo
         */
        public function setPassword($password)
        {
            $this->_password = $password;

            return $this;
        }

        // ######################################

        /**
         * @return mixed
         */
        public function getPassword()
        {
            return $this->_password;
        }

        // ######################################

        /**
         * @param mixed $server
         *
         * @return MysqlConfigVo
         */
        public function setServer($server)
        {
            $this->_server = $server;

            return $this;
        }

        // ######################################

        /**
         * @return mixed
         */
        public function getServer()
        {
            return $this->_server;
        }

        // ######################################

        /**
         * @param mixed $username
         *
         * @return MysqlConfigVo
         */
        public function setUsername($username)
        {
            $this->_username = $username;

            return $this;
        }

        // ######################################

        /**
         * @return mixed
         */
        public function getUsername()
        {
            return $this->_username;
        }
    }
