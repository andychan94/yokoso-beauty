<?php
namespace App\Entity;

use Sylius\Component\Core\Model\Customer as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Customer
 * @package App\Entity
 * @ORM\Table(name="sylius_customer")
 * @ORM\Entity
 */
class Customer extends BaseUser
{
    /**
     * @var string|null
     * @ORM\Column(name="telegram_username", type="string", length=255, nullable=true)
     */
    protected $telegramUsername;

    /**
     * @return null|string
     */
    public function getTelegramUsername(): ?string
    {
        return $this->telegramUsername;
    }

    /**
     * @param null|string $telegramUsername
     */
    public function setTelegramUsername(?string $telegramUsername): void
    {
        $this->telegramUsername = $telegramUsername;
    }
}
