<?php
/**
 * Created by Rubikin Team.
 * Date: 6/12/13
 * Time: 10:48 AM
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nilead\WebBundle\Menu;


use Symfony\Component\HttpFoundation\Request;

class FrontendMenuBuilder extends MenuBuilder
{
    /**
     * Create user account menu
     *
     * @param Request $request
     * @return mixed
     */
    public function createUserAccountMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('index', array('route' => 'nilead.frontend.account.index'));

        return $menu;
    }
}