<?php

namespace ForWinterCms\Toolbox\Classes;

/**
 * Contains a list of icons that can be used by plugins.
 *
 * @see https://wintercms.com/docs/ui/icon
 *
 * @package forwintercms\toolbox
 * @author Diamond Systems
 */
class IconList
{
    public static function getAllIcons()
    {
        return self::getWebApplicationIcons() +
            self::getMedicalIcons() +
            self::getTextEditorIcons() +
            self::getSpinnerIcons() +
            self::getFileTypeIcons() +
            self::getDirectionalIcons() +
            self::getVideoPlayerIcons() +
            self::getFormControlIcons() +
            self::getTransportationIcons() +
            self::getChartIcons() +
            self::getBrandIcons() +
            self::getHandIcons() +
            self::getPaymentIcons() +
            self::getCurrencyIcons() +
            self::getAccessibilityIcons() +
            self::getGenderIcons();
    }

    public static function getAllGroupedIcons()
    {
        return [
            'web_application' => [
                'name' => 'Web application',
                'icons' => self::getWebApplicationIcons()
            ],
            'medical' => [
                'name' => 'Medical',
                'icons' => self::getMedicalIcons()
            ],
            'text_editor' => [
                'name' => 'Text editor',
                'icons' => self::getTextEditorIcons()
            ],
            'spinner' => [
                'name' => 'Spinner',
                'icons' => self::getSpinnerIcons()
            ],
            'file_type' => [
                'name' => 'File type',
                'icons' => self::getFileTypeIcons()
            ],
            'directional' => [
                'name' => 'Directional',
                'icons' => self::getDirectionalIcons()
            ],
            'video_player' => [
                'name' => 'Video player',
                'icons' => self::getVideoPlayerIcons()
            ],
            'form_control' => [
                'name' => 'Form control',
                'icons' => self::getFormControlIcons()
            ],
            'transportation' => [
                'name' => 'Transportation',
                'icons' => self::getTransportationIcons()
            ],
            'chart' => [
                'name' => 'Chart',
                'icons' => self::getChartIcons()
            ],
            'brand' => [
                'name' => 'Brand',
                'icons' => self::getBrandIcons()
            ],
            'hand' => [
                'name' => 'Hand',
                'icons' => self::getHandIcons()
                ],
            'payment' => [
                'name' => 'Payment',
                'icons' => self::getPaymentIcons()
            ],
            'currency' => [
                'name' => 'Currency',
                'icons' => self::getCurrencyIcons()
            ],
            'accessibility' => [
                'name' => 'Accessibility',
                'icons' => self::getAccessibilityIcons()
            ],
            'gender' => [
                'name' => 'Gender',
                'icons' => self::getGenderIcons()
],
        ];
    }

    public static function getWebApplicationIcons()
    {
        return [
            'address-book',
            'address-book-o',
            'address-card',
            'address-card-o',
            'adjust',
            'american-sign-language-interpreting',
            'anchor',
            'archive',
            'area-chart',
            'arrows',
            'arrows-h',
            'arrows-v',
            'assistive-listening-systems',
            'asterisk',
            'at',
            'audio-description',
            'balance-scale',
            'ban',
            'bar-chart',
            'barcode',
            'bars',
            'bath',
            'battery-empty',
            'battery-full',
            'battery-half',
            'battery-quarter',
            'battery-three-quarters',
            'bed',
            'beer',
            'bell',
            'bell-o',
            'bell-slash',
            'bell-slash-o',
            'bicycle',
            'binoculars',
            'birthday-cake',
            'blind',
            'bluetooth',
            'bluetooth-b',
            'bolt',
            'bomb',
            'book',
            'bookmark',
            'bookmark-o',
            'braille',
            'briefcase',
            'bug',
            'building',
            'building-o',
            'bullhorn',
            'bullseye',
            'bus',
            'calculator',
            'calendar',
            'calendar-check-o',
            'calendar-minus-o',
            'calendar-o',
            'calendar-plus-o',
            'calendar-times-o',
            'camera',
            'camera-retro',
            'car',
            'caret-square-o-down',
            'caret-square-o-left',
            'caret-square-o-right',
            'caret-square-o-up',
            'cart-arrow-down',
            'cart-plus',
            'cc',
            'certificate',
            'check',
            'check-circle',
            'check-circle-o',
            'check-square',
            'check-square-o',
            'child',
            'circle',
            'circle-o',
            'circle-o-notch',
            'circle-thin',
            'clock-o',
            'clone',
            'cloud',
            'cloud-download',
            'cloud-upload',
            'code',
            'code-fork',
            'coffee',
            'cog',
            'cogs',
            'comment',
            'comment-o',
            'commenting',
            'commenting-o',
            'comments',
            'comments-o',
            'compass',
            'copyright',
            'creative-commons',
            'credit-card',
            'credit-card-alt',
            'crop',
            'crosshairs',
            'cube',
            'cubes',
            'cutlery',
            'database',
            'deaf',
            'desktop',
            'diamond',
            'dot-circle-o',
            'download',
            'ellipsis-h',
            'ellipsis-v',
            'envelope',
            'envelope-o',
            'envelope-open',
            'envelope-open-o',
            'envelope-square',
            'eraser',
            'exchange',
            'exclamation',
            'exclamation-circle',
            'exclamation-triangle',
            'external-link',
            'external-link-square',
            'eye',
            'eye-slash',
            'eyedropper',
            'fax',
            'female',
            'fighter-jet',
            'file-archive-o',
            'file-audio-o',
            'file-code-o',
            'file-excel-o',
            'file-image-o',
            'file-pdf-o',
            'file-powerpoint-o',
            'file-video-o',
            'file-word-o',
            'film',
            'filter',
            'fire',
            'fire-extinguisher',
            'flag',
            'flag-checkered',
            'flag-o',
            'flask',
            'folder',
            'folder-o',
            'folder-open',
            'folder-open-o',
            'frown-o',
            'futbol-o',
            'gamepad',
            'gavel',
            'gift',
            'glass',
            'globe',
            'graduation-cap',
            'hand-lizard-o',
            'hand-paper-o',
            'hand-peace-o',
            'hand-pointer-o',
            'hand-rock-o',
            'hand-scissors-o',
            'hand-spock-o',
            'handshake-o',
            'hashtag',
            'hdd-o',
            'headphones',
            'heart',
            'heart-o',
            'heartbeat',
            'history',
            'home',
            'hourglass',
            'hourglass-end',
            'hourglass-half',
            'hourglass-o',
            'hourglass-start',
            'i-cursor',
            'id-badge',
            'id-card',
            'id-card-o',
            'inbox',
            'industry',
            'info',
            'info-circle',
            'key',
            'keyboard-o',
            'language',
            'laptop',
            'leaf',
            'lemon-o',
            'level-down',
            'level-up',
            'life-ring',
            'lightbulb-o',
            'line-chart',
            'location-arrow',
            'lock',
            'low-vision',
            'magic',
            'magnet',
            'male',
            'map',
            'map-marker',
            'map-o',
            'map-pin',
            'map-signs',
            'meh-o',
            'microchip',
            'microphone',
            'microphone-slash',
            'minus',
            'minus-circle',
            'minus-square',
            'minus-square-o',
            'mobile',
            'money',
            'moon-o',
            'motorcycle',
            'mouse-pointer',
            'music',
            'newspaper-o',
            'object-group',
            'object-ungroup',
            'paint-brush',
            'paper-plane',
            'paper-plane-o',
            'paw',
            'pencil',
            'pencil-square',
            'pencil-square-o',
            'percent',
            'phone',
            'phone-square',
            'picture-o',
            'pie-chart',
            'plane',
            'plug',
            'plus',
            'plus-circle',
            'plus-square',
            'plus-square-o',
            'podcast',
            'power-off',
            'print',
            'puzzle-piece',
            'qrcode',
            'question',
            'question-circle',
            'question-circle-o',
            'quote-left',
            'quote-right',
            'random',
            'recycle',
            'refresh',
            'registered',
            'reply',
            'reply-all',
            'retweet',
            'road',
            'rocket',
            'rss',
            'rss-square',
            'search',
            'search-minus',
            'search-plus',
            'server',
            'share',
            'share-alt',
            'share-alt-square',
            'share-square',
            'share-square-o',
            'shield',
            'ship',
            'shopping-bag',
            'shopping-basket',
            'shopping-cart',
            'shower',
            'sign-in',
            'sign-language',
            'sign-out',
            'signal',
            'sitemap',
            'sliders',
            'smile-o',
            'snowflake-o',
            'sort',
            'sort-alpha-asc',
            'sort-alpha-desc',
            'sort-amount-asc',
            'sort-amount-desc',
            'sort-asc',
            'sort-desc',
            'sort-numeric-asc',
            'sort-numeric-desc',
            'space-shuttle',
            'spinner',
            'spoon',
            'square',
            'square-o',
            'star',
            'star-half',
            'star-half-o',
            'star-o',
            'sticky-note',
            'sticky-note-o',
            'street-view',
            'suitcase',
            'sun-o',
            'tablet',
            'tachometer',
            'tag',
            'tags',
            'tasks',
            'taxi',
            'television',
            'terminal',
            'thermometer-empty',
            'thermometer-full',
            'thermometer-half',
            'thermometer-quarter',
            'thermometer-three-quarters',
            'thumb-tack',
            'thumbs-down',
            'thumbs-o-down',
            'thumbs-o-up',
            'thumbs-up',
            'ticket',
            'times',
            'times-circle',
            'times-circle-o',
            'tint',
            'toggle-off',
            'toggle-on',
            'trademark',
            'trash',
            'trash-o',
            'tree',
            'trophy',
            'truck',
            'tty',
            'umbrella',
            'universal-access',
            'university',
            'unlock',
            'unlock-alt',
            'upload',
            'user',
            'user-circle',
            'user-circle-o',
            'user-o',
            'user-plus',
            'user-secret',
            'user-times',
            'users',
            'video-camera',
            'volume-control-phone',
            'volume-down',
            'volume-off',
            'volume-up',
            'wheelchair',
            'wheelchair-alt',
            'wifi',
            'window-close',
            'window-close-o',
            'window-maximize',
            'window-minimize',
            'window-restore',
            'wrench',
        ];
    }

    public static function getMedicalIcons()
    {
        return [
            'ambulance',
            'h-square',
            'heart',
            'heart-o',
            'heartbeat',
            'hospital-o',
            'medkit',
            'plus-square',
            'stethoscope',
            'user-md',
            'wheelchair',
            'wheelchair-alt',
        ];
    }

    public static function getTextEditorIcons()
    {
        return [
            'align-center',
            'align-justify',
            'align-left',
            'align-right',
            'bold',
            'chain-broken',
            'clipboard',
            'columns',
            'eraser',
            'file',
            'file-o',
            'file-text',
            'file-text-o',
            'files-o',
            'floppy-o',
            'font',
            'header',
            'indent',
            'italic',
            'link',
            'list',
            'list-alt',
            'list-ol',
            'list-ul',
            'outdent',
            'paperclip',
            'paragraph',
            'repeat',
            'scissors',
            'strikethrough',
            'subscript',
            'superscript',
            'table',
            'text-height',
            'text-width',
            'th',
            'th-large',
            'th-list',
            'underline',
            'undo',
        ];
    }

    public static function getSpinnerIcons()
    {
        return [
            'circle-o-notch',
            'cog',
            'refresh',
            'spinner',
        ];
    }

    public static function getFileTypeIcons()
    {
        return [
            'file',
            'file-archive-o',
            'file-audio-o',
            'file-code-o',
            'file-excel-o',
            'file-image-o',
            'file-o',
            'file-pdf-o',
            'file-powerpoint-o',
            'file-text',
            'file-text-o',
            'file-video-o',
            'file-word-o',
        ];
    }

    public static function getDirectionalIcons()
    {
        return [
            'angle-double-down',
            'angle-double-left',
            'angle-double-right',
            'angle-double-up',
            'angle-down',
            'angle-left',
            'angle-right',
            'angle-up',
            'arrow-circle-down',
            'arrow-circle-left',
            'arrow-circle-o-down',
            'arrow-circle-o-left',
            'arrow-circle-o-right',
            'arrow-circle-o-up',
            'arrow-circle-right',
            'arrow-circle-up',
            'arrow-down',
            'arrow-left',
            'arrow-right',
            'arrow-up',
            'arrows',
            'arrows-alt',
            'arrows-h',
            'arrows-v',
            'caret-down',
            'caret-left',
            'caret-right',
            'caret-square-o-down',
            'caret-square-o-left',
            'caret-square-o-right',
            'caret-square-o-up',
            'caret-up',
            'chevron-circle-down',
            'chevron-circle-left',
            'chevron-circle-right',
            'chevron-circle-up',
            'chevron-down',
            'chevron-left',
            'chevron-right',
            'chevron-up',
            'exchange',
            'hand-o-down',
            'hand-o-left',
            'hand-o-right',
            'hand-o-up',
            'long-arrow-down',
            'long-arrow-left',
            'long-arrow-right',
            'long-arrow-up',
        ];
    }

    public static function getVideoPlayerIcons()
    {
        return [
            'arrows-alt',
            'backward',
            'compress',
            'eject',
            'expand',
            'fast-backward',
            'fast-forward',
            'forward',
            'pause',
            'pause-circle',
            'pause-circle-o',
            'play',
            'play-circle',
            'play-circle-o',
            'random',
            'step-backward',
            'step-forward',
            'stop',
            'stop-circle',
            'stop-circle-o',
            'youtube-play',
        ];
    }

    public static function getFormControlIcons()
    {
        return [
            'check-square',
            'check-square-o',
            'circle',
            'circle-o',
            'dot-circle-o',
            'minus-square',
            'minus-square-o',
            'plus-square',
            'plus-square-o',
            'square',
            'square-o',
        ];
    }

    public static function getTransportationIcons()
    {
        return [
            'ambulance',
            'bicycle',
            'bus',
            'car',
            'fighter-jet',
            'motorcycle',
            'plane',
            'rocket',
            'ship',
            'space-shuttle',
            'subway',
            'taxi',
            'train',
            'truck',
            'wheelchair',
            'wheelchair-alt',
        ];
    }

    public static function getChartIcons()
    {
        return [
            'area-chart',
            'bar-chart',
            'line-chart',
            'pie-chart',
        ];
    }

    public static function getBrandIcons()
    {
        return [
            '500px',
            'adn',
            'amazon',
            'android',
            'angellist',
            'apple',
            'bandcamp',
            'behance',
            'behance-square',
            'bitbucket',
            'bitbucket-square',
            'black-tie',
            'bluetooth',
            'bluetooth-b',
            'btc',
            'buysellads',
            'cc-amex',
            'cc-diners-club',
            'cc-discover',
            'cc-jcb',
            'cc-mastercard',
            'cc-paypal',
            'cc-stripe',
            'cc-visa',
            'chrome',
            'codepen',
            'codiepie',
            'connectdevelop',
            'contao',
            'css3',
            'dashcube',
            'delicious',
            'deviantart',
            'digg',
            'dribbble',
            'dropbox',
            'drupal',
            'edge',
            'eercast',
            'empire',
            'envira',
            'etsy',
            'expeditedssl',
            'facebook',
            'facebook-official',
            'facebook-square',
            'firefox',
            'first-order',
            'flickr',
            'font-awesome',
            'fonticons',
            'fort-awesome',
            'forumbee',
            'foursquare',
            'free-code-camp',
            'get-pocket',
            'gg',
            'gg-circle',
            'git',
            'git-square',
            'github',
            'github-alt',
            'github-square',
            'gitlab',
            'glide',
            'glide-g',
            'google',
            'google-plus',
            'google-plus-official',
            'google-plus-square',
            'google-wallet',
            'gratipay',
            'grav',
            'hacker-news',
            'houzz',
            'html5',
            'imdb',
            'instagram',
            'internet-explorer',
            'ioxhost',
            'joomla',
            'jsfiddle',
            'lastfm',
            'lastfm-square',
            'leanpub',
            'linkedin',
            'linkedin-square',
            'linode',
            'linux',
            'maxcdn',
            'meanpath',
            'medium',
            'meetup',
            'mixcloud',
            'modx',
            'odnoklassniki',
            'odnoklassniki-square',
            'opencart',
            'openid',
            'opera',
            'optin-monster',
            'pagelines',
            'paypal',
            'pied-piper',
            'pied-piper-alt',
            'pied-piper-pp',
            'pinterest',
            'pinterest-p',
            'pinterest-square',
            'product-hunt',
            'qq',
            'quora',
            'ravelry',
            'rebel',
            'reddit',
            'reddit-alien',
            'reddit-square',
            'renren',
            'safari',
            'scribd',
            'sellsy',
            'share-alt',
            'share-alt-square',
            'shirtsinbulk',
            'simplybuilt',
            'skyatlas',
            'skype',
            'slack',
            'slideshare',
            'snapchat',
            'snapchat-ghost',
            'snapchat-square',
            'soundcloud',
            'spotify',
            'stack-exchange',
            'stack-overflow',
            'steam',
            'steam-square',
            'stumbleupon',
            'stumbleupon-circle',
            'superpowers',
            'telegram',
            'tencent-weibo',
            'themeisle',
            'trello',
            'tripadvisor',
            'tumblr',
            'tumblr-square',
            'twitch',
            'twitter',
            'twitter-square',
            'usb',
            'viacoin',
            'viadeo',
            'viadeo-square',
            'vimeo',
            'vimeo-square',
            'vine',
            'vk',
            'weibo',
            'weixin',
            'whatsapp',
            'wikipedia-w',
            'windows',
            'wordpress',
            'wpbeginner',
            'wpexplorer',
            'wpforms',
            'xing',
            'xing-square',
            'y-combinator',
            'yahoo',
            'yelp',
            'yoast',
            'youtube',
            'youtube-play',
            'youtube-square',
        ];
    }

    public static function getHandIcons()
    {
        return [
            'hand-lizard-o',
            'hand-o-down',
            'hand-o-left',
            'hand-o-right',
            'hand-o-up',
            'hand-paper-o',
            'hand-peace-o',
            'hand-pointer-o',
            'hand-rock-o',
            'hand-scissors-o',
            'hand-spock-o',
            'thumbs-down',
            'thumbs-o-down',
            'thumbs-o-up',
            'thumbs-up',
        ];
    }

    public static function getPaymentIcons()
    {
        return [
            'cc-amex',
            'cc-diners-club',
            'cc-discover',
            'cc-jcb',
            'cc-mastercard',
            'cc-paypal',
            'cc-stripe',
            'cc-visa',
            'credit-card',
            'credit-card-alt',
            'google-wallet',
            'paypal',
        ];
    }

    public static function getCurrencyIcons()
    {
        return [
            'btc',
            'eur',
            'gbp',
            'gg',
            'gg-circle',
            'ils',
            'inr',
            'jpy',
            'krw',
            'money',
            'rub',
            'try',
            'usd',
        ];
    }

    public static function getAccessibilityIcons()
    {
        return [
            'american-sign-language-interpreting',
            'assistive-listening-systems',
            'audio-description',
            'blind',
            'braille',
            'cc',
            'deaf',
            'low-vision',
            'question-circle-o',
            'sign-language',
            'tty',
            'universal-access',
            'volume-control-phone',
            'wheelchair',
            'wheelchair-alt',
        ];
    }

    public static function getGenderIcons()
    {
        return [
            'genderless',
            'mars',
            'mars-double',
            'mars-stroke',
            'mars-stroke-h',
            'mars-stroke-v',
            'mercury',
            'neuter',
            'transgender',
            'transgender-alt',
            'venus',
            'venus-double',
            'venus-mars',
        ];
    }
}