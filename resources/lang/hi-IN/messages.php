<?php

return [

    'success' => [
        'added'             => ':type जोड़ा गया!',
        'updated'           => ':type अपडेट किया गया!',
        'deleted'           => ':type हटा दिया गया!',
        'duplicated'        => ':type प्रतिलिपि बनाई गई!',
        'imported'          => ':type इम्पोर्ट किया गया!',
        'enabled'           => ':type सक्रिय किया गया!',
        'disabled'          => ':type निष्क्रिय किया गया!!',
    ],

    'error' => [
        'over_payment'      => 'त्रुटि: भुगतान नहीं जोड़ा गया! आपके द्वारा दर्ज की गई राशि कुल: :amount है',
        'not_user_company'  => 'त्रुटि: आपको इस कंपनी का प्रबंधन करने की अनुमति नहीं है!',
        'customer'          => 'त्रुटि: उपयोगकर्ता नहीं बनाया गया! :name पहले से ही इस ईमेल पते का उपयोग करते हैं।',
        'no_file'           => 'त्रुटि: कोई फ़ाइल चयनित नहीं!',
        'last_category'     => 'त्रुटि: अंतिम :type श्रेणी को हटा नहीं सकते हैं!',
        'change_type'       => 'त्रुटि: प्रकार बदल नहीं सकता क्योंकि इसमें :text संबंधित है!',
        'invalid_apikey'    => 'Error: The API Key entered is invalid!',
        'import_column'     => 'त्रुटि: :message शीट का नाम: :sheet। पंक्ति संख्या::line।',
        'import_sheet'      => 'त्रुटि: शीट का नाम मान्य नहीं है। कृपया, नमूना फ़ाइल की जाँच करें।',
    ],

    'warning' => [
        'deleted'           => 'चेतावनी: आपको <b>:name</b> को हटाने की अनुमति नहीं है क्योंकि इसमें :text संबंधित है।',
        'disabled'          => 'चेतावनी: आपको <b>:name</b> को निष्क्रिय करने की अनुमति नहीं है क्योंकि इसमें :text संबंधित है।',
        'disable_code'      => 'चेतावनी: आपको <b>:name </b> की मुद्रा को निष्क्रिय या बदलने की अनुमति नहीं है क्योंकि इसमें :text संबंधित है।',
        'payment_cancel'    => 'चेतावनी: आपने अपना हाल का :method भुगतान रद्द कर दिया है!',
    ],

];
