<?phpnamespace soft\widget\kartik;use kartik\builder\Form as KartikForm;use kartik\helpers\Html;use soft\db\ActiveRecord;use soft\helpers\ArrayHelper;use soft\widget\adminlte3\Card;use Yii;use yii\base\InvalidConfigException;class Form extends KartikForm{    const INPUT_STATUS = 'status';    const INPUT_ELFINDER = 'elfinder';    const INPUT_CKEDITOR = 'ckeditor';    const INPUT_ICON = 'icon';    const INPUT_CROPPER = 'cropper';    const INPUT_SELECT2 = 'select2';    const INPUT_DATE = 'date';    const INPUT_DATETIME = 'datetime';    const INPUT_DATERANGE = 'daterange';    const INPUT_DATETIMERANGE = 'datetimerange';    const INPUT_PASSPORT = "passport_mask";    const INPUT_ENTRY_YEAR = "entry_year";    const INPUT_JSHSHIR = "jshshir";    const INPUT_IMAGE = "imageInput";    const INPUT_SUM = "sum";    const INPUT_PHONE = "phone";    const DOSAMIGOS_FILE_INPUT = 'dosamigosFileInput';    const DOSAMIGOS_FILE_IMAGE = 'dosamigosFileImage';    /**     * @var ActiveRecord the model instance.     */    public $model;    /**     * @inheritdoc     */    public $attributeDefaults = ['type' => Form::INPUT_TEXT, 'options' => ['class' => 'rounded-0']];    public $initCard;    public $colMd = 12;    public function init()    {        $this->attributes = $this->generateAttributes($this->attributes);        if ($this->initCard === null) {            $this->initCard = !Yii::$app->request->isAjax;        }        parent::init();    }    public function run()    {        echo Html::beginTag('div', ['class' => 'row']);        echo Html::beginTag('div', ['class' => "col-md-$this->colMd"]);        if ($this->initCard) {            Card::begin();            parent::run();            Card::end();        } else {            parent::run();        }        echo Html::endTag('div');        echo Html::endTag('div');    }    protected function generateAttributes($attributes = [])    {        $result = [];        foreach ($attributes as $key => $setting) {            if (ArrayHelper::getValue($setting, 'visible', true) === true) {                if (isset($setting['attributes'])) {                    $result[$key] = $setting;                    $result[$key]['attributes'] = $this->generateAttributes($setting['attributes']);                } else {                    $this->generateFormattedConfigs($result, $key, $setting);                }            }        }        return $result;    }    public function generateFormattedConfigs(&$result, $key, $setting)    {        $configs = [];        if (is_array($setting)) {            $formattedConfigs = $this->formattedConfigs($key);        } else {            $formattedConfigs = $this->formattedConfigs($setting);        }        $key = $formattedConfigs['attribute'];        if ($formattedConfigs['type'] != null) {            $configs['type'] = $formattedConfigs['type'];        }        $configs['label'] = $formattedConfigs['label'];        if (is_array($setting)) {            $configs = ArrayHelper::merge($configs, $setting);        }        $result[$key] = $this->generateConfigs($key, $configs);    }    /**     * Kartik FormBuilder uchun configni generatsiya qilish     * $customConfigs - bu Form builderni generatsiya qilayotganda user tomonidan     * berilgan configlar     * @param $attribute     * @param array $customConfigs     * @return array     */    public function generateConfigs($attribute, $customConfigs = [])    {        $defaultAttributeConfigs = ArrayHelper::getValue($this->defaultAttributeConfigs(), $attribute, []);        $configs = ArrayHelper::merge($defaultAttributeConfigs, $customConfigs);        $type = ArrayHelper::getValue($configs, 'type', self::INPUT_TEXT);        $defaultInputTypeOptions = static::defaultInputTypeOptions($type);        $configs = ArrayHelper::merge($defaultInputTypeOptions, $customConfigs);        if (isset($defaultInputTypeOptions["type"])) {            $configs['type'] = $defaultInputTypeOptions["type"];        }        return $configs;    }    protected function getSubAttributesContent($settings, $index)    {        $subIndex = 0;        $defaultSubColOptions = ArrayHelper::getValue($settings, 'subColumnOptions', $this->columnOptions);        $content = '';        $content .= "\t" . $this->beginTag('div', $this->rowOptions) . "\n";        $attrCount = count($settings['attributes']);        $cols = ArrayHelper::getValue($settings, 'columns', $attrCount);        foreach ($settings['attributes'] as $subAttr => $subSettings) {            $subColWidth = (int)(self::GRID_WIDTH / $cols);            $subSettings = array_replace_recursive($this->attributeDefaults, $subSettings);            $subColOptions = ArrayHelper::getValue($subSettings, 'columnOptions', $defaultSubColOptions);            if (isset($subColOptions['colspan'])) {                $subColWidth = (int)$subColWidth * (int)($subColOptions['colspan']);                unset($subColOptions['colspan']);            }            Html::addCssClass($subColOptions, 'col-' . $this->columnSize . '-' . $subColWidth);            $subSettings['columnOptions'] = $subColOptions;            $subSettings['fieldConfig']['skipFormLayout'] = true;            $content .= "\t\t" . $this->beginTag('div', $subColOptions) . "\n";            /** @var integer $index */            $content .= "\t\t\t" . $this->parseInput($subAttr, $subSettings, $index * 10 + $subIndex) . "\n";            $subIndex++;            $content .= "\t\t" . $this->endTag('div') . "\n";        }        $content .= "\t" . $this->endTag('div') . "\n";        return $content;    }    protected static function defaultInputTypeOptions($type)    {        switch ($type) {            case self::INPUT_DROPDOWN_LIST:                return [                    'options' => ['class' => 'rounded-0 custom-select'],                ];            case self::INPUT_STATUS:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => InputType::SWITCH_INPUT,                    'options' => [                        'pluginOptions' => [                            'onText' => Yii::t('site', 'Active'),                            'offText' => Yii::t('site', 'Inactive'),                        ],                    ],                ];            case self::INPUT_ELFINDER:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\mihaildev\elfinder\InputFile',                    'options' => [                        'language' => 'ru',                        'controller' => 'elfinder',                        'filter' => 'image',                        'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',                        'options' => ['class' => 'form-control'],                        'buttonOptions' => ['class' => 'btn btn-primary'],                        'multiple' => false,                    ]                ];            case self::INPUT_CKEDITOR:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\mihaildev\ckeditor\CKEditor',                ];            case self::INPUT_ICON:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\dominus77\iconpicker\IconPicker',                ];            case self::INPUT_CROPPER:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\odilov\cropper\Cropper',                ];            case self::INPUT_SELECT2:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\kartik\widgets\Select2',                    'options' => [                        'pluginOptions' => [                            'placeholder' => 'Tanlang ...',                            'allowClear' => true,                        ]                    ]                ];            case self::INPUT_DATE:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\soft\widget\kartik\DatePicker',                    'options' => [                        'options' => [                            'placeholder' => Yii::t('site', 'DD.MM.YYYY'),                        ],                        'pluginOptions' => [//                            'placeholder' => 'dd.mm.yyyy',                            'autoclose' => true,                            'format' => 'dd.mm.yyyy'                        ]                    ]                ];            case self::INPUT_DATETIME:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\soft\widget\kartik\DateTimePicker',                    'options' => [                        'pluginOptions' => [                            'autoclose' => true,                        ]                    ]                ];            case self::INPUT_DATERANGE:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\soft\widget\kartik\DateRangePicker',                    'options' => [                        'pluginOptions' => [                            'autoclose' => true,                        ]                    ]                ];            case self::INPUT_DATETIMERANGE:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\soft\widget\kartik\DateRangePicker',                    'options' => [                        'timePicker' => true,                    ]                ];            case self::INPUT_PASSPORT:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => 'yii\widgets\MaskedInput',                    'options' => [                        'mask' => 'aa9999999',                    ],                ];            case self::INPUT_JSHSHIR:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => 'yii\widgets\MaskedInput',                    'options' => [                        'mask' => '99999999999999',                    ],                ];            case self::INPUT_ENTRY_YEAR:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\kartik\select2\Select2',                    'options' => [                        'data' => self::getYears()                    ],                ];            case self::INPUT_IMAGE:                return [                    'type' => InputType::FILE,                    'options' => [                        'accept' => 'image/*',                    ],                ];            case self::INPUT_SUM:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => 'soft\widget\input\SumMaskedInput',                ];            case self::INPUT_PHONE:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => 'soft\widget\input\PhoneMaskedInput',                ];            case self::DOSAMIGOS_FILE_INPUT:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\soft\widget\dosamigos\fileinput\FileInput',                ];            case self::DOSAMIGOS_FILE_IMAGE:                return [                    'type' => InputType::WIDGET,                    'widgetClass' => '\soft\widget\dosamigos\fileinput\FileInput',                    'options' => [                        'onlyImage' => true                    ]                ];            default:                return [];        }    }    protected function defaultAttributeConfigs()    {        return [            'password' => [                'type' => self::INPUT_PASSWORD,            ],            'image' => [                'type' => self::INPUT_IMAGE,            ],            'photo' => [                'type' => self::INPUT_IMAGE,            ],        ];    }    protected function formattedConfigs($attribute)    {        if (!preg_match('/^([^:]+)(:(\w*))?(:(.*))?$/', $attribute, $matches)) {            throw new InvalidConfigException('The attribute must be specified in the format of "attribute", "attribute:format" or "attribute:format:label"');        }        return [            'attribute' => $matches[1],            'type' => isset($matches[3]) ? $matches[3] : null,            'label' => isset($matches[5]) ? $matches[5] : null,        ];    }    protected static function getYears()    {        $years = [];        for ($i = intval(date('Y')); $i >= 2000; $i--) {            $years[$i] = $i;        }        return $years;    }}?>