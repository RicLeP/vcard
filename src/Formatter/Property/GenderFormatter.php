<?php

namespace JeroenDesloovere\VCard\Formatter\Property;

use JeroenDesloovere\VCard\Property\Gender;

final class GenderFormatter extends NodeFormatter implements NodeFormatterInterface
{
    /**
     * @var Gender
     */
    protected $gender;

    public function __construct(Gender $gender)
    {
        $this->gender = $gender;
    }

    public function getVcfString(): string
    {
        $string = Gender::getNode() . ':' . $this->gender->getValue();

        if ($this->gender->hasNote()) {
            $string .= ';' . $this->gender->getNote();
        }

        return $string;
    }
}
