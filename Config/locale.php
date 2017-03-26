<?php

return [

    /*
     * Whether or not to show the language picker, or just default to the default
     * locale specified in the app config file
     *
     * @var bool
     */
    'status' => true,

    /*
     * Available languages
     *
     * Add your language code to this array.
     * The code must have the same name as the language folder.
     * Be sure to add the new language in an alphabetical order.
     *
     * The language picker will not be available if there is only one language option
     * Commenting out languages will make them unavailable to the user
     *
     * @var array
     */
    'languages' => [
        /*
         * Key is the Laravel locale code
         * Index 0 of sub-array is the Carbon locale code
         * Index 1 of sub-array is the PHP locale code for setlocale()
         * Index 2 of sub-array is whether or not to use RTL (right-to-left) css for this language
         * Index 3 of sub-array is whether or not to use RTL (right-to-left) css for this language
         */
        'ar'    => ['ar', 'ar_AR',true, 'Arabic'],
        'da'    => ['da', 'da_DK',false, 'Danish'],
        'de'    => ['de', 'de_DE',false, 'German'],
        'el'    => ['el', 'el_GR',false, 'Greek'],
        'en'    => ['en', 'en_US',false, 'English'],
        'es'    => ['es', 'es_ES',false, 'Spanish'],
        'fr'    => ['fr', 'fr_FR',false, 'French'],
        'id'    => ['id', 'id_ID',false, 'Indonesian'],
        'it'    => ['it', 'it_IT',false, 'Italian'],
        'nl'    => ['nl', 'nl_NL',false, 'Dutch'],
        'pt_BR' => ['pt_BR', 'pt_BR',false, 'Brazilian Portuguese'],
        'sv'    => ['sv', 'sv_SE',false, 'Swedish'],
        'th'    => ['th', 'th_TH',false, 'Thai'],
    ],
];
