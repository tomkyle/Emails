<?php
/**
 * This file is part of tomkyle/emails
 *
 * @author  Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Emails;

abstract class EmailAbstract implements EmailInterface
{


/**
 * @var string
 */
    protected $address;


/**
 * @uses $this->getAddress()
 */
    public function __toString()
    {
        return $this->getAddress() ?: '';
    }

/**
 * @param   string|null $address
 * @uses    $address
 * @return  EmailAbstract Fluent Interface
 */
    public function setAddress ( $address )
    {
        if (is_null(    $address )
        or (is_string(  $address )
        and filter_var( $address, \FILTER_VALIDATE_EMAIL ))) {
            $this->address = $address;
            return $this;
        }
        throw new \InvalidArgumentException("String or `null` expected");
    }


/**
 * return string|null
 * @uses  $address
 */
    public function getAddress ()
    {
        return $this->address;
    }

}
