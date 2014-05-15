<?php
 
namespace Project\UserBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User extends BaseUser
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
   
    public function __construct()
    {
        parent::__construct();
        // tu propia lógica
    }

    /**
     * Agrega un rol al usuario.
     * @throws Exception
     * @param Rol $rol 
     */
    public function addRole( $rol )
    {
	if($rol == 1) {
	  array_push($this->roles, 'ROLE_ADMIN');
	}
	else if($rol == 2) {
	  array_push($this->roles, 'ROLE_USER');
	}
    }

}
