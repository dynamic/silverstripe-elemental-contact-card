<?php

namespace Dynamic\Elements\Card\Elements\Test;

use SilverStripe\Forms\FieldList;
use SilverStripe\Dev\SapphireTest;
use Dynamic\Elements\ContactCard\Elements\ElementContactCard;

class ElementContactCardTest extends SapphireTest
{
    protected static $fixture_file = 'contactcard.yml';

    public function testGetCMSFields()
    {
        $object = $this->objFromFixture(ElementContactCard::class, 'one');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }
}
