<?php
/**
 * Created by PhpStorm.
 * User: nodir
 * Date: 2019-02-10
 * Time: 16:55
 */

namespace App\Entity;

use Sylius\Component\Core\Model\ProductVariant as BaseProductVariant;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 * @package App\Entity
 * @ORM\Table(name="sylius_product_variant")
 * @ORM\Entity
 */
class ProductVariant extends BaseProductVariant
{
    /**
     * @var string|null
     * @ORM\Column(name="link_to_original", type="string", length=255, nullable=true)
     */
    private $linkToOriginal;

    /**
     * @return string
     */
    public function getLinkToOriginal(): string
    {
        return $this->linkToOriginal? $this->linkToOriginal: "";
    }

    /**
     * @param string $linkToOriginal
     */
    public function setLinkToOriginal(string $linkToOriginal): void
    {
        $this->linkToOriginal = $linkToOriginal;
    }
}