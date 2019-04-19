<?php
namespace Sandbox\Includes;

use Sandbox\Lib\Page;

class Dolly extends Page
{
    private static $text = "Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
I feel the room swayin'
While the band's playin'
One of our old favorite songs from way back when
So, take her wrap, fellas
Dolly, never go away again
Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
I feel the room swayin'
While the band's playin'
One of our old favorite songs from way back when
So, golly, gee, fellas
Have a little faith in me, fellas
Dolly, never go away
Promise, you'll never go away
Dolly'll never go away again";

    /**
     * @return string
     */
    public function hello()
    {
        $x = is_rtl() ? 'left' : 'right';
        return $this->render(
            'dolly.htpl',
            [
                'line' => $this->prepareLine(),
                'x' => $x
            ]
        );
    }

    /**
     * @return string
     */
    private function prepareLine()
    {
        $text = explode("\n", self::$text);
        return wptexturize( $text[ mt_rand( 0, count( $text ) - 1 ) ] );
    }
}