<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Contracts\Translation\TranslatorInterface;

class TranslatorManager
{
    public function __construct(
        private TranslatorInterface   $translator,
        private readonly RequestStack $requestStack
    )
    {
    }

    public function translate(string $char): string
    {

        return $this->translator->trans($char, locale: $this->requestStack->getCurrentRequest()->getLocale());

    }

    public function getLocal(): string
    {
        return $this->translator->getLocale();
    }
}