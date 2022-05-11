<?php

    //medical
    if ( isset($_POST['medical-pdfs']) ) {
        //print_r($_POST);
        //clearstatcache();
        $pdfs = $_POST['medical-pdfs'];

        $zip = new ZipArchive();

        $zip_location = 'lilly-medical' . time() . '.zip';

        if ($zip->open($zip_location, ZipArchive::CREATE) === TRUE) {
            //echo ' opened zip at ' . $zip_location;
            foreach ($pdfs as $pdf) {
                //echo 'pdfhref= ' .$pdf['href'] . ' ';
                // pdfhref= https://lilly-virtual.com/oncology/asco/dev/wp-content/themes/lilly_tradeshow/pipeline/molecule-flashcards/Abemaciclib_LY2835219.pdf
                //convert to relative path
                //$path = str_replace('https://lilly.ibec.me', '', $pdf['href']);
                //$path = str_replace('https://com.lilly', '', $path);
                //$path = str_replace('https://lilly-virtual.com/oncology/asco/dev/', '/home/czarlill/public_html/oncology/us-congress-june2021/dev/', $path);

                $path = str_replace('https://lilly-virtual.com/', '/home/czarlill/public_html/', $pdf['href']);

                //echo ' trying to add ' . $path . ' ';

                if( file_exists($path) ) {
                    $zip->addFile($path, strip_tags($pdf['title']) . '.pdf');
                    //echo ' added ' . $path . ' ';
                }
                else {
                    //echo ' no file ';
                }
                    
            }
            $result = $zip->close();
        }
        else {
            //echo 'error';
            //echo 'false';
        }

        //echo 'https://' . $_SERVER[HTTP_HOST] . '/wp-content/pdf-bundle/' . $zip_location;
        echo 'https://lilly-virtual.com/immunology/us-5/wp-content/pdf-bundle/' . $zip_location;

    }


    //products
    if ( isset($_POST['product-pdfs']) ) {
        //print_r($_POST);
        //clearstatcache();
        $pdfs = $_POST['product-pdfs'];

        $zip = new ZipArchive();

        $zip_location = 'lilly-products' . time() . '.zip';

        if ($zip->open($zip_location, ZipArchive::CREATE) === TRUE) {
            //echo ' opened zip at ' . $zip_location;
            foreach ($pdfs as $pdf) {
                //echo ' pdf href = ' . $pdf['href'];
                //convert to relative path
                //$path = str_replace('https://lilly.ibec.me', '', $pdf['href']);
                //$path = str_replace('https://com.lilly', '', $path);
                //$path = str_replace('https://lilly-virtual.com/oncology/asco/dev/', '/home/czarlill/public_html/oncology/us-congress-june2021/dev/', $pdf['href']);
                //$path = str_replace('https://lilly-virtual.com/immunology/us-5/', '/home/czarlill/public_html/oncology/us-congress-june2021/dev/', $path);
                //$path = $_SERVER['DOCUMENT_ROOT'] . $path;

                //https://lilly-virtual.com/immunology/us-5/wp-content/uploads/2021/05/PP-AL-US-2176_2020-OS-Leave-Behind-Digital_FINALresave.pdf
                $path = str_replace('https://lilly-virtual.com/', '/home/czarlill/public_html/', $pdf['href']);

                //echo ' trying to add ' . $path;

                if( file_exists($path) ) {
                    $zip->addFile($path, strip_tags($pdf['title']) . '.pdf');
                    //echo ' added ' . $path . ' ';
                }
                else {
                    //echo ' no file ';
                }
                    
            }
            $result = $zip->close();
        }
        else {
            //echo 'error';
            //echo 'false';
        }

        //echo 'https://' . $_SERVER[HTTP_HOST] . '/wp-content/pdf-bundle/' . $zip_location;
        echo 'https://lilly-virtual.com/immunology/us-5/wp-content/pdf-bundle/' . $zip_location;

        // echo 'zip created? ' . $result . ' pdfs = ';
        // print_r($pdfs);

    }

?>