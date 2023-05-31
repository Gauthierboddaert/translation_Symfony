<?php

namespace App\Controller;

use App\Entity\Lang;
use App\langEnum;
use App\Service\TranslatorManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class translatorController extends AbstractController
{
    public function __construct(
        private TranslatorManager $translator,
        private readonly EntityManagerInterface $entityManager
    )
    {
    }

    #[Route('/translator')]
    public function index(): Response
    {
        $translate = $this->translator->translate('test.id');

        $this->entityManager->persist($lang);
        $this->entityManager->flush();

        return new Response($translate);
    }

}