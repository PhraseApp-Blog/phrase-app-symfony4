<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Intl\Intl;


class DefaultController extends AbstractController
{
    /**
     * @Route({
        "el": "/giasas",
     *  "en": "/hello"
     * }, name="homepage")
     */
    public function index(TranslatorInterface $translator, $locales, $defaultLocale)
    {
//        $entityManager = $this->getDoctrine()->getManager();
//        $product = new \App\Entity\Product();
//        $product->setId(1000);
//        $product->setPrice(1000);
//        $product->translate('de')->setName('Schuhe');
//        $product->translate('de')->setDescription('Schuhe');
//        $product->translate('en')->setName('Shoes');
//        $product->translate('en')->setDescription('Shoes');
//        $entityManager->persist($product);
//
//        // In order to persist new translations, call mergeNewTranslations method, before flush
//        $product->mergeNewTranslations();
//        $entityManager->flush();

        $countries = Intl::getRegionBundle()->getCountryNames();

        return $this->render('index.html.twig', [
                       'countries' => $countries
                    ]);
    }
}