<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jura
 * Date: 27.09.13
 * Time: 15:57
 * To change this template use File | Settings | File Templates.
 */

namespace GuestBook\Controller;

class Index extends \Core\Controller
{
    public function index_get()
    {
        header('Location: /GuestBook/guestbook');
    }
}
