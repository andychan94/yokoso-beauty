<?php
/**
 * Created by PhpStorm.
 * User: nodir
 * Date: 2019-02-03
 * Time: 23:02
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CustomController extends AbstractController
{
    public function searchProductAction(Request $request)
    {
        $repo = $this->container->get('sylius.repository.product');

        $criteria = $request->query->get('criteria');
        $q = $criteria['search']['value'];

        $items = $repo->findBySearch($q);

        return new JsonResponse([
            '_embedded' => [
                'items' => $items,
            ]
        ]);
    }
}