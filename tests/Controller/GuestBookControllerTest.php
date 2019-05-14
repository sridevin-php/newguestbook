<?php

namespace App\Tests\Controller;


use App\Controller\GuestBookController;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Guest;
use App\Form\GuestType;
use Symfony\Component\HttpFoundation\Request;

class GuestBookControllerTest extends TestCase
{
    /**
     * @Route("/guest/book", name="guest_book")
     */
    public function testindex()
    {
		 
        $guest = new Guest();
        // $objectToCompare will retrieve data from the form submission; pass it as the second argument
      $formData = [
            'comment' => 'This is new comment added by user a s guest book entry',
            'user_id' => '346',
            'guest' => '/guest/book'
            
        ];  
        $this->assertCount(
            3,
             $formData,
            'check on mandates'
        );
		$this->assertSame('/guest/book',$formData['guest'] );
    }
	
	public function testClassThatDoesNotExistCanBeDoubledUsingMockBuilder()
    {
       // $o = $this->createMock('GuestBookController');
		$o = $this->getMockBuilder('GuestBook')->getMock();
        $this->assertInstanceOf('GuestBook', $o);
    }
}
