<?php

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $newSubmenu = $menu
            ->addChild('new')
            ->setLabel('Custom')
        ;

        $newSubmenu
            ->addChild('new',['route' => 'app_admin_feedbacks_index'])
            ->setLabel('Website Reviews')
            ->setLabelAttribute('icon', 'star')
        ;
    }
}