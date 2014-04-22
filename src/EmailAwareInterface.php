<?php
/**
 * This file is part of tomkyle/emails
 *
 * @author  Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Emails;

interface EmailAwareInterface
{
	public function setEmail ( EmailInterface $email );
	public function getEmail ( );
}
