<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\ApiService;

class HomeController extends AbstractController
{
    /**
     * @Route("/",name="app_homepage")
     */
    public function homepage(Environment $twigEnviroment, ApiService $apiService)
    {
        $apiUrl ="https://dog.ceo/api/breeds/image/random";
        $data = $apiService->getApiData($apiUrl);

        $urlImage = "";
        if($data['status'] == 'success' ){
            $urlImage = $data['message'];
        }
        
        return $this->render('homepage.html.twig', [
            'urlImage' => $urlImage
        ]);
    }
}

?>