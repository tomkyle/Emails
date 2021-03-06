<?php
/**
 * This file is part of tomkyle/emails
 *
 * @author  Carsten Witt <tomkyle@posteo.de>
 */
namespace tomkyle\Emails;


class Email extends EmailAbstract implements EmailInterface
{


/**
 * @param string|null $address
 */
	public function __construct($address = null)
	{
		if (!is_null($address)) {
			$this->setAddress($address);
		}

	}




/**
 * @param  string|null $address
 * @throws AddressNotAcceptableException
 */
	public function setAddress ( $address )
	{
		try {
	    	if (is_string( $address )
	    	and !preg_match('/@.+\./', $address)) {
	    		throw new AddressNotAcceptableException;
	    	}
			parent::setAddress( $address );
			return $this;
		}
		catch ( \InvalidArgumentException $e ) {}
		throw new AddressNotAcceptableException;

	}



}
