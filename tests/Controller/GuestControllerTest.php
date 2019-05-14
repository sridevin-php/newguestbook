<?php

namespace App\Tests\Controller;

use App\Controller\GuestController;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\Guest;
use App\Form\Guest1Type;
use App\Repository\GuestRepository; 
use Simplex\Framework;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
 

 
 
/**
 * @Route("/guest")
 */
class GuestControllerTest extends TestCase
{
	
	public function testNotFoundHandling()
    {
        $framework = $this->getFrameworkForException(new ResourceNotFoundException());

        $response = $framework->handle(new Request());

        $this->assertEquals(404, $response->getStatusCode());
    }
   public function getFrameworkForException($exception)
    {
		// $Guest = $this->createMock( Guest::class);
		 $Guest = $this->getMockBuilder('Guest')->getMock();
		  $this->assertInstanceOf('GuestBook', $o);
		 $this->assertCount(
            1,
             ['guest'],
            'The Guets Home page displays with right Guest book entry'
        );
		$Guest
            ->expects($this->once())
            ->method('testShow')
            ->will($this->returnValue($this->createMock(Routing\RequestContext::class)))
        ;
        $Guest
            ->expects($this->once())
            ->method('testNew')
            ->will($this->returnValue($this->createMock(Routing\RequestContext::class)))
        ;
        $controllerResolver = $this->getMockBuilder(ControllerResolverInterface::class)->getMock();
        $argumentResolver = $this->getMockBuilder(ArgumentResolverInterface::class)->getMock();
		$this->assertInstanceOf('Guest', $controllerResolver);
        return new Framework($Guest, $controllerResolver, $argumentResolver);
         
    }
	/**
     * @Route("/new", name="guest_new", methods={"GET","POST"})
     */
    public function testNew() 
    {
		 
        $guest = new Guest();
        // $objectToCompare will retrieve data from the form submission; pass it as the second argument
      $formData = [
            'comment' => 'test',
            'user_id' => '23',
            'guest' => '/guest',
            'is_approved' => '1',
        ];  
        $this->assertCount(
            4,
             $formData,
            'check on mandates'
        );
		$this->assertSame('/guest',$formData['guest'] );
		 
    }
	/**
     * @Route("/show", name="guest_show", methods={"GET","POST"})
     */
	public function testShow(){
		 $this->assertCount(
           1,
             'guest/',
            'Listing Guest entry'
        );
	}
 
	 /*
    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', '/user/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /user/");
        $crawler = $client->click($crawler->selectLink('Create a new entry')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
            'custom_bookbundle_user[field_name]'  => 'Test',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('td:contains("Test")')->count(), 'Missing element td:contains("Test")');

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Update')->form(array(
            'custom_bookbundle_user[field_name]'  => 'Foo',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertGreaterThan(0, $crawler->filter('[value="Foo"]')->count(), 'Missing element [value="Foo"]');

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    }

    */

}
