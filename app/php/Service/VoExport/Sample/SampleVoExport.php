<?php

    namespace Service\VoExport\Account;

    use Service\Vo\Account\UserLoginVo;
    use Simplon\Helper\VoExportTrait;

    class UserLoginVoExport
    {
        use VoExportTrait;

        /**
         * @param UserLoginVo $userLoginVo
         *
         * @return array
         */
        public static function one(UserLoginVo $userLoginVo)
        {
            return [
                'accessToken' => $userLoginVo->getAccessToken(),
                'userId'      => $userLoginVo->getUserGameVo()->getPublicToken(),
                'isGuest'     => $userLoginVo->getUserVo()->isGuest(),
            ];
        }
    }