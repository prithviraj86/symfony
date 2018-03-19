<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Roauting\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VariantsController extends Controller
{
  public function index()
  {
    /**
    *@Route("/index")
    */
    return $this->render("index.php.twig",array('string'=>"Hello prithviraj"));
  }
}
