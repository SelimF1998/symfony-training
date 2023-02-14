<?php
    // src/Controller/LuckyController.php
namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;





class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */
    public function number(int $max,  LoggerInterface $logger): Response
    {
        $logger->info('We are logging!');

        $number = random_int(0, $max);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}