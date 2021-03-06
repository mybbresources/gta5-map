<?php
/**
 * GTA 5 Secrets Map BBCode
 * Author: Mark Topper <mail@webman.io>
 * Version 1.1.
 */
$plugins->add_hook('parse_message', 'gtafivesecrets_run');
function gtafivesecrets_info()
{
    return [
        'name'            => 'GTA 5 Secrets Map BBCode',
        'description'     => 'This plugin will enable a BBCode for showing GTA 5 Secrets Map just like on gta5secrets.com. This supports the MyCode output from the websites Sharing Dialog.',
        'website'         => 'http://gta5secrets.com/',
        'author'          => 'Mark Topper',
        'authorsite'      => 'http://www.webman.io/',
        'version'         => '1.1',
        'guid'            => 'f25be3f3277cc1b7629a1193a1e35aca',
    ];
}

/**
 * TODO: creating a real activation
 * it will add a possibility to add or remove languages.
 */
function gtafivesecrets_activate()
{
}

function gtafivesecrets_deactivate()
{
}

/**
 * The parsing function.
 */

function gtafivesecrets_run($message)
{
    $mycode = [
            //Text Apperence
        '#\[map\]http\://(www\.)?gta5secrets.com(.*?)\[/map\]#si' => '<iframe src="http://www.gta5secrets.com\\2" height="500" style="width: 100%;">Your browser doesn\'t support iFrames.</iframe>',
    ];

    $message = preg_replace(array_keys($mycode), array_values($mycode), $message);

    return $message;
}
