<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreModuleZF2 main content type.
 *
 * @ORM\Entity
 */
class Page
{

    /**
    * Primary key.
    *
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;

    /**
     * The category.
     *
     * @ORM\Column(type="string")
     */
    protected $category;

    /**
     * Is the front page.
     *
     * @ORM\Column(type="boolean")
     */
    protected $isFront;

    /**
     * Is published.
     *
     * @ORM\Column(type="boolean")
     */
    protected $published;

    /**
     * Comma separated values.
     *
     * @ORM\Column(type="string")
     */
    protected $permissions;

    /**
     * Unix time stamp.
     *
     * @ORM\Column(type="bigint")
     */
    protected $created;

    /**
     * Unix time stamp.
     *
     * @ORM\Column(type="bigint")
     */
    protected $lastEdit;

    /**
     * The uri of the page.
     *
     * @ORM\Column(type="string")
     */
    protected $slug;

    /**
     * Page title.
     *
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * Main body content.
     *
     * @ORM\Column(type="text")
     */
    protected $body;

    /**
     * The template of the page.
     *
     * @ORM\Column(type="string")
     */
    protected $template;

    /**
     * Magic getter to expose protected properties.
     *
     * @param string $property
     * @return mixed
     */
    public function __get($property)
    {
        return $this->$property;
    }

    /**
     * Magic setter to save protected properties.
     *
     * @param string $property
     * @param mixed $value
     */
    public function __set($property, $value)
    {
        $this->$property = $value;
    }

}
