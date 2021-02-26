<?php

    $default_attributes = array();
    //  Default attributes will be used to flesh out the component definitions.
    
    $default_attributes['id'] = array(
        'name' => 'Identifier (ID)',
        'description' => 'Define an identifier (ID) which must be unique in the whole document. Its purpose is to identify the element when linking (using a fragment identifier), scripting, or styling (with CSS).',
        'slug' => 'id',
        'ordinal' => 1
    );
    $default_attributes['class'] = array(
        'name' => 'Class',
        'description' => 'This is a space-separated list of the case-sensitive classes of the element. Classes allow CSS and Javascript to select and access specific elements via the class selectors or functions like the DOM method document.getElementsByClassName.',
        'slug' => 'class',
        'ordinal' => 2
    );

    //  IMAGE attributes
    $default_attributes['image_src'] = array(
        'name' => 'Image Source',
        'description' => 'The src attribute is required for an IMG, and contains the path to the image you want to embed.',
        'slug' => 'src',
        'ordinal' => 10
    );
    $default_attributes['image_alt'] = array(
        'name' => 'Image Alt',
        'description' => 'Holds a text description of the image, which isn\'t mandatory but is incredibly useful for accessibility — screen readers read this description out to their users so they know what the image means.',
        'slug' => 'src',
        'ordinal' => 11
    );

    //  VIDEO attributes
    $default_attributes['iframe_src'] = array(
        'name' => 'Video Source',
        'description' => 'The URL of the page to embed. Use a value of about:blank to embed an empty page that conforms to the same-origin policy.',
        'slug' => 'src',
        'ordinal' => 10
    );
    $default_attributes['iframe_allow'] = array(
        'name' => 'Video Allow',
        'description' => 'Specifies a feature policy for the IFRAME. The policy defines what features are available to the IFRAME based on the origin of the request (e.g. access to the microphone, camera, battery, web-share API, etc.).',
        'slug' => 'allow',
        'ordinal' => 11
    );

    // 
    //  POPULATE 'attribute' TABLE
    //
    foreach($default_attributes as $key=>$row)
    {
        $qb = $conn->createQueryBuilder();
        $qb ->insert('attribute')
            ->values(
                array(
                    'name' => '?',
                    'description' => '?',
                    'slug' => '?',
                    'ordinal' => '?'
                )
                )
            ->setParameter(0, $row['name'])
            ->setParameter(1, $row['description'])
            ->setParameter(2, $row['slug'])
            ->setParameter(3, $row['ordinal'])
        ;

        try
        {
            $qb->execute();
        }catch(Exception $e)
        {
            debug($e->getMessage());
        }
    }

    unset($default_attributes);
?>