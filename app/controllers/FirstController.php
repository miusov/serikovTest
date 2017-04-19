<?php

namespace app\controllers;

class FirstController extends AppController
{
    public function indexAction()
    {
        $file = file(dirname(__FILE__).'/login.txt');
        if (isset($_POST['login']))
        {
            if (trim($_POST['log']) == trim($file[0]) && trim($_POST['pass']) == trim($file[1]))
            {
                $_SESSION['user'] = trim($file[0]);
                $file[2] = 0;
                file_put_contents(dirname(__FILE__).'/login.txt', join('', $file));
                header('Location: /first/user');
            }
            else
            {
                if ($_POST['log'] != '' && $_POST['pass'] != '')
                {
                    $file[2] = $file[2] + 1;
                    file_put_contents(dirname(__FILE__).'/login.txt', join('', $file));
                }
                if ($file[2] > 2)
                {
                    header('Location: /first/danger');
                }

                echo "<div class='alert-danger text-center'>Не верные данные.</div>";

            }

        }
    }

    public function userAction()
    {

    }

    public function exitAction()
    {
        unset($_SESSION['user']);
        header('Location: /first');
    }

    public function dangerAction()
    {

    }

}