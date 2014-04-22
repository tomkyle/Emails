<?php
namespace Tests;

use \tomkyle\Emails\Email;

class EmailTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider provideValidCtorParameters
     */
    public function testInstantiationWithValidStringParameters( $address )
    {
        $email = new Email( $address );
        $this->assertInstanceOf('\tomkyle\Emails\Email', $email);
    }


    /**
     * @dataProvider provideInvalidStringParameters
     * @expectedException \tomkyle\Emails\AddressNotAcceptableException
     */
    public function testInstantiationWithInvalidStringParameters( $address )
    {
        $email = new Email( $address );
    }


    /**
     * @dataProvider provideInvalidNonStringParameters
     * @expectedException \tomkyle\Emails\AddressNotAcceptableException
     */
    public function testInstantiationWithInvalidNonStringParameters( $address )
    {
        $email = new Email( $address );
    }



    public function testInstantiationWithoutParameters( )
    {
        $email = new Email( );
        $this->assertInstanceOf('\tomkyle\Emails\Email', $email);
    }


    /**
     * @dataProvider provideValidCtorParameters
     */
    public function testGetAddressInterceptor( $address )
    {
        $email = new Email( $address );
        $this->assertEquals($address, $email->getAddress());
    }


    /**
     * @dataProvider provideValidCtorParameters
     */
    public function testSetAddressInterceptorReturnsFluentInterface( $address )
    {
        $email = new Email( );
        $fluent = $email->setAddress( $address );
        $this->assertInstanceOf('\tomkyle\Emails\Email', $fluent);
    }


    /**
     * @dataProvider provideValidCtorParameters
     */
    public function testAddressInterceptorsBackAndForth( $address )
    {
        $email = new Email( );
        $address2 = $email->setAddress( $address )->getAddress();
        $this->assertEquals( $address, $address2);
    }












    public function provideValidCtorParameters()
    {
        return array(
            array( null ),
            array("test@foo.com"),
            array("info@test.de"),
            array("contact@test.com")
        );
    }


    public function provideInvalidStringParameters()
    {
        return array(
            array("invalid@foocom"),
            array("info.de"),
            array("contact")
        );
    }

    public function provideInvalidNonStringParameters()
    {
        return array(
            array( 22 ),
            array( 0.4 ),
            array( new \StdClass ),
            array( new \DateTime("now") ),
            array( array("foo", "bar") )
        );
    }


}
