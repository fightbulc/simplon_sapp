<?php

    namespace Service;

    use Service\Constants\SetupConstants;
    use Service\Vo\Config\MysqlConfigVo;
    use Simplon\Config\Config;
    use Simplon\Db\DbInstance;
    use Simplon\Helper\SingletonTrait;

    class ServiceContext
    {
        use SingletonTrait;

        protected $_environment;
        protected $_mysqlConfigVoMany = [];

        // ##########################################

        /**
         * @param array $keys
         *
         * @return array|mixed
         */
        public function getConfigByKeys(array $keys)
        {
            return Config::getInstance()
                ->setConfigPath(__DIR__ . SetupConstants::PATH_CONFIG)
                ->getConfigByKeys($keys);
        }

        // ##########################################

        /**
         * @return string
         */
        public function getEnvironment()
        {
            if (!$this->_environment)
            {
                $this->_environment = $this->getConfigByKeys(['environment']);
                $this->_environment = (string)strtolower($this->_environment);
            }

            return $this->_environment;
        }

        // ##########################################

        /**
         * @return bool
         */
        public function isProductionEnvironment()
        {
            return $this->getEnvironment() === SetupConstants::ENV_PRODUCTION ? TRUE : FALSE;
        }

        // ##########################################

        /**
         * @param string $serverId
         *
         * @return MysqlConfigVo
         */
        public function getMysqlConfigVoMany($serverId = 'localhost')
        {
            if (!isset($this->_mysqlConfigVoMany[$serverId]))
            {
                $config = $this->getConfigByKeys(['database', 'mysql', $serverId]);
                $this->_mysqlConfigVoMany[$serverId] = (new MysqlConfigVo())->setData($config);
            }

            return $this->_mysqlConfigVoMany[$serverId];
        }

        // ##########################################

        /**
         * @param string $serverId
         *
         * @return \Simplon\Db\Library\Mysql
         */
        public function getMysqlInstance($serverId = 'localhost')
        {
            $configVo = $this->getMysqlConfigVoMany($serverId);

            return DbInstance::MySQL(
                $configVo->getServer(),
                $configVo->getDatabase(),
                $configVo->getUsername(),
                $configVo->getPassword()
            );
        }
    }