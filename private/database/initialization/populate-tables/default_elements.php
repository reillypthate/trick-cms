<?php

    $default_elements = array();

    //  Image Element
    $default_elements['img'] = array(
        'name' => 'Image Embed Element',
        'tag' => 'img',
        'description' => 'This element embeds an image into the document.',
        'isVoid' => 1
    );
    //  Canvas Element
    $default_elements['canvas'] = array(
        'name' => 'Canvas Element',
        'tag' => 'canvas',
        'description' => 'This element is part of HTML5 and allows for dynamic, scriptable rendering of 2D and 3D shapes and bitmap images. It provides an empty graphic zone on which specific JavaScript APIs can draw (such as Canvas 2D or WebGL).',
        'isVoid' => 0
    );

    //  Video Element
    $default_elements['iframe'] = array(
        'name' => 'Inline Frame Element',
        'tag' => 'iframe',
        'description' => 'This element represents a nested browsing context, embedding another HTML page into the current one.',
        'isVoid' => 0
    );


    //  Containers
    $default_elements['div'] = array(
        'name' => 'Generic Container Element',
        'tag' => 'div',
        'description' => 'This element is the generic container for flow content. It has no effect on the content or layout until styled in some way using CSS (e.g. styling is directly applied to it, or some kind of layout model like Flexbox is applied to its parent element).',
        'isVoid' => 0
    );
    $default_elements['section'] = array(
        'name' => 'Generic Section Element',
        'tag' => 'section',
        'description' => 'This element represents a generic standalone section of a document, which doesn\'t have a more specific semantic element to represent it. Sections should always have a heading, with very few exceptions.',
        'isVoid' => 0
    );
    $default_elements['article'] = array(
        'name' => 'Article Contents Element',
        'tag' => 'article',
        'description' => 'This element represents a self-contained composition in a document, page, application, or site, which is intended to be independently distributable or reusable (e.g., in syndication).',
        'isVoid' => 0
    );

    $default_elements['header'] = array(
        'name' => 'Header Element',
        'tag' => 'header',
        'description' => 'This element represents introductory content, typically a group of introductory or navigational aids. It may contain some heading elements but also a logo, a search form, an author name, and other elements.',
        'isVoid' => 0
    );
    $default_elements['footer'] = array(
        'name' => 'Footer Element',
        'tag' => 'footer',
        'description' => 'This element represents a footer for its nearest sectioning content or sectioning root element. A footer typically contains information about the author of the section, copyright data or links to related documents.',
        'isVoid' => 0
    );

    //  Headings
    $default_elements['h1'] = array(
        'name' => 'Section Heading (Level 1) Element',
        'tag' => 'h1',
        'description' => 'The HTML heading elements represent six levels of section headings. H1 is the highest section level and H6 is the lowest.',
        'isVoid' => 0
    );
    $default_elements['h2'] = array(
        'name' => 'Section Heading (Level 2) Element',
        'tag' => 'h2',
        'description' => 'The HTML heading elements represent six levels of section headings. H1 is the highest section level and H6 is the lowest.',
        'isVoid' => 0
    );
    $default_elements['h3'] = array(
        'name' => 'Section Heading (Level 3) Element',
        'tag' => 'h3',
        'description' => 'The HTML heading elements represent six levels of section headings. H1 is the highest section level and H6 is the lowest.',
        'isVoid' => 0
    );
    $default_elements['h4'] = array(
        'name' => 'Section Heading (Level 4) Element',
        'tag' => 'h4',
        'description' => 'The HTML heading elements represent six levels of section headings. H1 is the highest section level and H6 is the lowest.',
        'isVoid' => 0
    );
    $default_elements['h5'] = array(
        'name' => 'Section Heading (Level 5) Element',
        'tag' => 'h5',
        'description' => 'The HTML heading elements represent six levels of section headings. H1 is the highest section level and H6 is the lowest.',
        'isVoid' => 0
    );
    $default_elements['h6'] = array(
        'name' => 'Section Heading (Level 6) Element',
        'tag' => 'h6',
        'description' => 'The HTML heading elements represent six levels of section headings. H1 is the highest section level and H6 is the lowest.',
        'isVoid' => 0
    );

    //  Text
    $default_elements['p'] = array(
        'name' => 'Paragraph',
        'tag' => 'p',
        'description' => 'Paragraphs are usually represented in visual media as blocks of text separated from adjacent blocks by blank lines and/or first-line indentation, but HTML paragraphs can be any structural grouping of related content, such as images or form fields.',
        'isVoid' => 0
    );

    //  Lists & List Items
    $default_elements['ol'] = array(
        'name' => 'Ordered List Element',
        'tag' => 'ol',
        'description' => 'This element represents an ordered list of items, typically rendered as a numbers list.',
        'isVoid' => 0
    );
    $default_elements['ul'] = array(
        'name' => 'Unordered List Element',
        'tag' => 'ul',
        'description' => 'This element represents an unordered list of items, typically rendered as a bulleted list.',
        'isVoid' => 0
    );
    $default_elements['li'] = array(
        'name' => 'Unordered List Element',
        'tag' => 'ul',
        'description' => 'This element element is used to represent an item in a list. In unordered lists, list items are usually displayed using bullet points. In ordered lists, they are usually displayed with an ascending counter on the left, such as a number or letter.',
        'isVoid' => 0
    );

    //  Description List and Items
    $default_elements['dl'] = array(
        'name' => 'Description List Element',
        'tag' => 'dl',
        'description' => 'This element represents a description list. The element encloses a list of groups of terms (DT) and descriptions (DD). Common uses for this element are to implement a glossary or to display metadata (a list of key-value pairs).',
        'isVoid' => 0
    );
    $default_elements['dt'] = array(
        'name' => 'Description Term Element',
        'tag' => 'dt',
        'description' => 'This element specifies a term in a description or definition list. It is usually followed by a DD element; however, multiple DT elements in a row indicates several terms that are all defined by the immediate next DD element.',
        'isVoid' => 0
    );
    $default_elements['dd'] = array(
        'name' => 'Description Details Element',
        'tag' => 'dd',
        'description' => 'This element provides the description, definition, or value for the preceding term DT in a description list DL.',
        'isVoid' => 0
    );

    //  Figure Elements
    $default_elements['figure'] = array(
        'name' => 'Figure with Optional Content Element',
        'tag' => 'figure',
        'description' => 'This element represents self-contained content, potentially with an optional caption, which is specified using the FIGCAPTION element. The figure, its caption, and its contents are referenced as a single unit.',
        'isVoid' => 0
    );
    $default_elements['figcaption'] = array(
        'name' => 'Figure Caption Element',
        'tag' => 'figcaption',
        'description' => 'This element represents a caption or legend describing the rest of the contents of its parent FIGURE element.',
        'isVoid' => 0
    );

    // 
    //  POPULATE 'element' TABLE
    //
    foreach($default_elements as $key=>$row)
    {
        $qb = $conn->createQueryBuilder();
        $qb ->insert('element')
            ->values(
                array(
                    'name' => '?',
                    'tag' => '?',
                    'description' => '?',
                    'isVoid' => '?'
                )
                )
            ->setParameter(0, $row['name'])
            ->setParameter(1, $row['tag'])
            ->setParameter(2, $row['description'])
            ->setParameter(3, $row['isVoid'])
        ;

        try
        {
            $qb->execute();
        }catch(Exception $e)
        {
            debug($e->getMessage());
        }
    }

    //  Dispose of default elements once we're done with them.
    unset($default_elements);
?>