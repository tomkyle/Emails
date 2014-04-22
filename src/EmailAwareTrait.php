<?php
/**
 * This file is part of tomkyle/emails
 *
 * @author  Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Emails;

trait EmailAwareTrait
{


    protected $email;

/**
 * @param  string $email
 * @return object Fluent Interface
 * @uses   $email
 */
    public function setEmail(EmailInterface $email)
    {
        $this->email = $email;
        return $this;
    }


/**
 * @uses $email
 */
    public function getEmail()
    {
        return $this->email;
    }


}
