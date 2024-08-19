<?php

namespace Dynamic\Elements\ContactCard\Elements;

use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\FieldType\DBField;
use Dynamic\Elements\Card\Elements\ElementCard;

class ElementContactCard extends ElementCard
{
    /**
     * @var string
     * @config
     */
    private static $table_name = 'ElementContactCard';

    /**
     * @var string
     * @config
     */
    private static string $singular_name = 'Contact Card';

    /**
     * @var string
     * @config
     */
    private static string $plural_name = 'Contact Cards';

    /**
     * @var string
     * @config
     */
    private static string $description = 'A contact card element';

    /**
     * @var string
     * @config
     */
    private static string $icon = 'font-icon-block-content';

    /**
     * @var array|string[]
     * @config
     */
    private static $db = [
        'PositionTitle' => 'Varchar',
        'Phone' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
    ];

    /**
     * @param bool $includerelations
     * @return array
     */
    public function fieldLabels($includerelations = true)
    {
        $labels = parent::fieldLabels($includerelations);

        $labels['PositionTitle'] = _t(__CLASS__ . '.PositionTitleLabel', 'Position');
        $labels['Phone'] = _t(__CLASS__ . '.PhoneLabel', 'Phone');
        $labels['Email'] = _t(__CLASS__ . '.EmailLabel', 'Email');

        return $labels;
    }

    /**
     * @return FieldList
     */
    public function getCMSFields(): FieldList
    {
        $this->beforeUpdateCMSFields(function (FieldList $fields) {
            $fields->addFieldsToTab(
                'Root.Contact',
                [
                    $fields->dataFieldByName('PositionTitle'),
                    $fields->dataFieldByName('Phone'),
                    $fields->dataFieldByName('Email'),
                ]
            );
        });

        return parent::getCMSFields();
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return DBField::create_field('HTMLText', $this->HTML)->Summary(20);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return _t(__CLASS__ . '.BlockType', 'Contact Card');
    }
}
