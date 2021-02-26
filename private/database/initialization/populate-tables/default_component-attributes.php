<?php

    $default_compattrs = array();
    //  Default attributes will be used to flesh out the component definitions.
    
    $default_compattrs['image_src'] = array(
        'component_id' => 2,
        'attribute_id' => 3
    );
    $default_compattrs['image_alt'] = array(
        'component_id' => 2,
        'attribute_id' => 4
    );
    $default_compattrs['video_src'] = array(
        'component_id' => 3,
        'attribute_id' => 5
    );
    $default_compattrs['video_allow'] = array(
        'component_id' => 3,
        'attribute_id' => 6
    );
    $default_compattrs['canvas_id'] = array(
        'component_id' => 4,
        'attribute_id' => 1
    );

    // 
    //  POPULATE 'component_attribute' TABLE
    //
    foreach($default_compattrs as $key=>$row)
    {
        $qb = $conn->createQueryBuilder();
        $qb ->insert('component_attribute')
            ->values(
                array(
                    'component_id' => '?',
                    'attribute_id' => '?',
                )
                )
            ->setParameter(0, $row['component_id'])
            ->setParameter(1, $row['attribute_id'])
        ;

        try
        {
            $qb->execute();
        }catch(Exception $e)
        {
            debug($e->getMessage());
        }
    }

    unset($default_compattrs);
?>