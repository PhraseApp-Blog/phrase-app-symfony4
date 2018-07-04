<?php

namespace App\AppBundle;


use Symfony\Bundle\FrameworkBundle\Translation\Translator as BaseTranslator;

class PhraseTranslator extends BaseTranslator
{
    public function trans($id, array $parameters = array(), $domain = "messages", $locale = null)
    {
        $prefix = "{{__phrase_";
        $suffix = "__}}";

        if (null === $domain) {
            $domain = 'messages';
        }

        // Return ID of translation key with pre- and suffix for PhraseApp
        return $prefix.$id.$suffix;
    }
}