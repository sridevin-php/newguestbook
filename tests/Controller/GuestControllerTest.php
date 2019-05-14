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
		 $Guest = $this->getMockBuilder('GuestBook')->getMock();
        $this->assertInstanceOf('GuestBook', $Guest);
		 
		 
        $Guest
            ->expects($this->once())
            ->method('testNew')
            ->will($this->returnValue($this->createMock(Routing\RequestContext::class)))
        ;
        $controllerResolver = $this->getMockBuilder(ControllerResolverInterface::class)->getMock();
        $argumentResolver = $this->getMockBuilder(ArgumentResolverInterface::class)->getMock();
		//$this->assertInstanceOf('Guest', $controllerResolver);
        return new Framework($Guest, $controllerResolver, $argumentResolver);
         
    }
	 
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
	 

}
