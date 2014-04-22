<?php
/**
 * This file is part of tomkyle/emails
 *
 * @author  Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Emails;

interface EmailInterface
{
    public function __toString();
	public function setAddress ( $address );
	public function getAddress ( );
}
