<?php

    $default_components = array();

    //  Tier 1 Components
    $default_components['Text'] = array(
        'element_id' => null,
        'name' => 'Text',
        'description' => 'The text component refers to a body of HTML-formatted text that has been processed to escape HTML entity characters.'
    );
    $default_components['Image'] = array(
        'element_id' => 1,
        'name' => 'Image',
        'description' => 'The image component refers to an image element. It sources an image from a given site.'
    );
    $default_components['Video'] = array(
        'element_id' => 2,
        'name' => 'Video',
        'description' => 'The video component refers to an iframe element. It sources a video from a video-hosting platform like YouTube or Vimeo, and the iframe is constructed according to the respective platform’s embed functionality.'
    );
    $default_components['Canvas'] = array(
        'element_id' => 3,
        'name' => 'Canvas',
        'description' => 'The canvas component refers to a canvas element. It is used in any JavaScript project that involves animation.'
    );

    //  Tier 2 Components
    $default_components['Gallery'] = array(
        'element_id' => 4,
        'name' => 'Gallery',
        'description' => 'The gallery component refers to a div element. It contains a number of related components.'
    );

    // 
    //  POPULATE 'component' TABLE
    //
    foreach($default_components as $key=>$row)
    {
        $qb = $conn->createQueryBuilder();
        $qb ->insert('component')
            ->values(
                array(
                    'element_id' => '?',
                    'name' => '?',
                    'description' => '?'
                )
                )
            ->setParameter(0, $row['element_id'])
            ->setParameter(1, $row['name'])
            ->setParameter(2, $row['description'])
        ;

        try
        {
            $qb->execute();
        }catch(Exception $e)
        {
            debug($e->getMessage());
        }
    }

    unset($default_components);

?>