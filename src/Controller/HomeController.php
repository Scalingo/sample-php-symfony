<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
  /**
   * @Route("/")
   */
  public function number()
  {
      return $this->render('index.html.twig');
  }
}
