<?php
/**
 * SidebarSetupMenuDemoListener.php
 * avanzu-admin
 * Date: 23.02.14
 */

namespace AppBundle\EventListener;


use Avanzu\AdminThemeBundle\Event\SidebarMenuEvent;
use Avanzu\AdminThemeBundle\Model\MenuItemModel;
use Symfony\Component\HttpFoundation\Request;

class SidebarSetupMenuListener
{

    public function onSetupMenu(SidebarMenuEvent $event)
    {
        $request = $event->getRequest();

        foreach ($this->getMenu($request) as $item) {
            $event->addItem($item);
        }

    }

    protected function getMenu(Request $request)
    {
        $earg      = array();
        $rootItems = array(
            $dash = new MenuItemModel('dashboard', 'Dashboard', 'avanzu_admin_dash_demo', $earg, 'fa fa-dashboard'),
            $form = new MenuItemModel('lists', 'Lists', 'app_quest_listing', $earg, 'fa fa-edit'),
        );
        return $this->activateByRoute($request->get('_route'), $rootItems);

    }

    protected function activateByRoute($route, $items) {

        foreach($items as $item) { /** @var $item MenuItemModel */
            if($item->hasChildren()) {
                $this->activateByRoute($route, $item->getChildren());
            }
            else {
                if($item->getRoute() == $route) {
                    $item->setIsActive(true);
                }
            }
        }

        return $items;
    }


}