<?php

namespace App\Entity;

use App\Repository\UserAdminRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserAdminRepository::class)]
class UserAdmin extends User
{

}
