<?php

class CabinetController
{

    /**
     * Action для страницы "Кабинет пользователя"
     */
    public function actionIndex()
    {

    	 // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        
        // Подключаем вид
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }
     public function actionBanner()
    {

         // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        
        // Подключаем вид
        require_once(ROOT . '/views/banner/index.php');
        return true;
    }
}