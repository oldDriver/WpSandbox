<?php
namespace Sandbox\Includes;

use Sandbox\Lib\Page;

class Spy extends Page
{
    /**
     * @param string $message
     * @return string
     */
    public function sayHello($message = 'Alex')
    {
        // some logic could be here
        return $this->render('spy.htpl', ['message' => $message]);
    }
}
