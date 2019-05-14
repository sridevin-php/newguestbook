<?php

namespace App\Tests\Controller;

use App\Controller\GuestController;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\Guest;
use App\Form\Guest1Type;
use App\Repository\GuestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

 

 
 
/**
 * @Route("/guest")
 */
class GuestControllerTest extends TestCase
{
   public function testIndex()
    {
		
		 $this->assertCount(
            1,
             ['guest'],
            'The Guets Home page displays with right Guest book entry'
        );
         
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
