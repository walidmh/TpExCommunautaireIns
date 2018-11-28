<?php
/**
 * Created by PhpStorm.
 * User: Tounsi
 * Date: 28/11/2018
 * Time: 11:03
 */

namespace App\Entity\Traits;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false, hardDelete=true)
 */
Trait SoftDeletedTrait
{
    /**
     *
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     *
     */
    private $deletedAt;

    /**
     * @return mixed
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @param mixed $deletedAt
     */
    public function setDeletedAt($deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }
}