<?php
function getResultXS($url){
    $xml = simplexml_load_file($url);
    $array = json_decode(json_encode((array) $xml), true);
    $array_xml = array($xml->getName() => $array);

    foreach($array_xml as $item) {
        $count = count($item['channel']['item']);
        $check = 0;
        foreach ($item['channel']['item'] as $item) {
            $check++;
            if ($check == $count) {
                $array = explode(':', $item['description']);
                $n = 0;
                $html = '';
                $html .= '<div class="show_list_kqxs">';
                $html .= '<h3>'.str_replace(' (Thứ Ba)', '', $item['title']).'<h3/>';
                $html .= '<ul>';
                foreach ($array as $item) {
                    $n++;
                    if ($n == 1) {
                        //echo str_replace('ĐB ','',$item);
                    } elseif ($n == 2) {
                        $html .= '<li>';
                        $str = str_replace(' 1', '', $item);
                        $html .= substr($str, 0, -1);
                        $html .= '</li>';
                    } elseif ($n == 3) {
                        $html .= '<li>';
                        $str = str_replace(' 2', '', $item);
                        $html .= substr($str, 0, -1);
                        $html .= '</li>';
                    } elseif ($n == 4) {
                        $html .= '<li>';
                        $str = str_replace(' 3', '', $item);
                        $html .= substr($str, 0, -1);
                        $html .= '</li>';
                    } elseif ($n == 5) {
                        $html .= '<li>';
                        $str = str_replace(' 4', '', $item);
                        $html .= substr($str, 0, -1);
                        $html .= '</li>';
                    } elseif ($n == 6) {
                        $html .= '<li>';
                        $str = str_replace(' 5', '', $item);
                        $html .= substr($str, 0, -1);
                        $html .= '</li>';
                    } elseif ($n == 7) {
                        $html .= '<li>';
                        $str = str_replace(' 6', '', $item);
                        $html .= substr($str, 0, -1);
                        $html .= '</li>';
                    } elseif ($n == 8) {
                        $html .= '<li>';
                        $str = str_replace(' 7', '', $item);
                        $html .= substr($str, 0, -1);
                        $html .= '</li>';
                    } elseif ($n == 9) {
                        $html .= '<li>';
                        $str = str_replace('', '', $item);
                        $html .= $str;
                        $html .= '</li>';
                    }
                }
                $html .= '</ul>';
                $html .= '</div>';
            }

        }
    }

    echo $html;
}

//getResultXS('https://xskt.com.vn/rss-feed/vung-tau-xsvt.rss');

add_shortcode('shortResultXS',function ($args){
    $html = $args['id'];
    return $html;
});


function updateResultXS($url, $title, $id){
    $html = file_get_html($url);

    date_default_timezone_set("Asia/Ho_Chi_Minh");



    if(date('H') >= 19){
        if(!empty($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',2))) {
            foreach($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',2)->find('td') as $element) {
                $gdb = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',3))) {
            foreach($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',3)->find('td') as $element) {
                $g1 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',4))) {
            foreach($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',4)->find('td') as $element) {
                $g2 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',5))) {
            foreach($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',5)->find('td') as $element) {
                $g3 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',6))) {
            foreach($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',6)->find('td') as $element) {
                $g4 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',7))) {
            foreach($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',7)->find('td') as $element) {
                $g5 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',8))) {
            foreach($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',8)->find('td') as $element) {
                $g6 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',9))) {
            foreach($html->find('#kqngay_'.date('dmY').' .block-main-content table tbody tr',9)->find('td') as $element) {
                $g7 = $element->plaintext;
            }
            $check = true;
        }else{
            $check = false;
        }

        if($check !== false){
            $query = new WP_Query(array(
                'post_type' => 'kqxs',
                'posts_per_page' => '1',
                "s" => $title
            ));

            if($query->post_count < 1){
                $insert_result = array(
                    'post_title' => $title.'-'.date('d/m/Y'),
                    'post_type' => 'kqxs',
                    'post_status' => 'publish'
                );

                $insert_result_id = wp_insert_post($insert_result);

                date_default_timezone_set("Asia/Ho_Chi_Minh");

                update_field('date', date('Y-m-d'), $insert_result_id);

                update_field('hours', date('H:i:s'), $insert_result_id);

                update_field('mien', $id, $insert_result_id);

                update_field('giai_db', $gdb, $insert_result_id);

                update_field('giai1', $g1, $insert_result_id);

                update_field('giai2', $g2, $insert_result_id);

                update_field('giai3', $g3, $insert_result_id);

                update_field('giai4', $g4, $insert_result_id);

                update_field('giai5', $g5, $insert_result_id);

                update_field('giai6', $g6, $insert_result_id);

                update_field('giai7', $g7, $insert_result_id);

            }
        }

    }else{
        if(!empty($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',2))) {
            foreach($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',2)->find('td') as $element) {
                $gdb = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',3))) {
            foreach($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',3)->find('td') as $element) {
                $g1 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',4))) {
            foreach($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',4)->find('td') as $element) {
                $g2 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',5))) {
            foreach($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',5)->find('td') as $element) {
                $g3 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',6))) {
            foreach($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',6)->find('td') as $element) {
                $g4 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',7))) {
            foreach($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',7)->find('td') as $element) {
                $g5 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',8))) {
            foreach($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',8)->find('td') as $element) {
                $g6 = $element->plaintext;
            }
            $check = true;
        }elseif(!empty($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',9))) {
            foreach($html->find('#kqngay_'.date('dmY', strtotime(' -1 day')).' .block-main-content table tbody tr',9)->find('td') as $element) {
                $g7 = $element->plaintext;
            }
            $check = true;
        }else{
            $check = false;
        }

        if($check !== false){
            $query = new WP_Query(array(
                'post_type' => 'kqxs',
                'posts_per_page' => '1',
                "s" => $title
            ));

            if($query->post_count < 1){
                $insert_result = array(
                    'post_title' => $title.'-'.date('d/m/Y'),
                    'post_type' => 'kqxs',
                    'post_status' => 'publish'
                );

                $insert_result_id = wp_insert_post($insert_result);

                date_default_timezone_set("Asia/Ho_Chi_Minh");

                update_field('date', date('Y-m-d'), $insert_result_id);

                update_field('hours', date('H:i:s'), $insert_result_id);

                update_field('mien', $id, $insert_result_id);

                update_field('giai_db', $gdb, $insert_result_id);

                update_field('giai1', $g1, $insert_result_id);

                update_field('giai2', $g2, $insert_result_id);

                update_field('giai3', $g3, $insert_result_id);

                update_field('giai4', $g4, $insert_result_id);

                update_field('giai5', $g5, $insert_result_id);

                update_field('giai6', $g6, $insert_result_id);

                update_field('giai7', $g7, $insert_result_id);

            }
        }
    }
}



function updateResultCustomXS($url, $date, $title, $id){
    $html = file_get_html($url);

    date_default_timezone_set("Asia/Ho_Chi_Minh");

    if(!empty($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',2))) {
        foreach($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',2)->find('td') as $element) {
            $gdb = $element->plaintext;
        }
        $check = true;
    }elseif(!empty($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',3))) {
        foreach($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',3)->find('td') as $element) {
            $g1 = $element->plaintext;
        }
        $check = true;
    }elseif(!empty($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',4))) {
        foreach($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',4)->find('td') as $element) {
            $g2 = $element->plaintext;
        }
        $check = true;
    }elseif(!empty($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',5))) {
        foreach($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',5)->find('td') as $element) {
            $g3 = $element->plaintext;
        }
        $check = true;
    }elseif(!empty($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',6))) {
        foreach($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',6)->find('td') as $element) {
            $g4 = $element->plaintext;
        }
        $check = true;
    }elseif(!empty($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',7))) {
        foreach($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',7)->find('td') as $element) {
            $g5 = $element->plaintext;
        }
        $check = true;
    }elseif(!empty($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',8))) {
        foreach($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',8)->find('td') as $element) {
            $g6 = $element->plaintext;
        }
        $check = true;
    }elseif(!empty($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',9))) {
        foreach($html->find('#kqngay_'.$date.' .block-main-content table tbody tr',9)->find('td') as $element) {
            $g7 = $element->plaintext;
        }
        $check = true;
    }else{
        $check = false;
    }

    if($check !== false){
        $query = new WP_Query(array(
            'post_type' => 'kqxs',
            'posts_per_page' => '1',
            "s" => $title
        ));

        if($query->post_count < 1){
            $insert_result = array(
                'post_title' => $title.'-'.$date,
                'post_type' => 'kqxs',
                'post_status' => 'publish'
            );

            $insert_result_id = wp_insert_post($insert_result);

            date_default_timezone_set("Asia/Ho_Chi_Minh");

            update_field('date', date('Y-m-d'), $insert_result_id);

            update_field('hours', date('H:i:s'), $insert_result_id);

            update_field('mien', $id, $insert_result_id);

            update_field('giai_db', $gdb, $insert_result_id);

            update_field('giai1', $g1, $insert_result_id);

            update_field('giai2', $g2, $insert_result_id);

            update_field('giai3', $g3, $insert_result_id);

            update_field('giai4', $g4, $insert_result_id);

            update_field('giai5', $g5, $insert_result_id);

            update_field('giai6', $g6, $insert_result_id);

            update_field('giai7', $g7, $insert_result_id);

        }
    }
}
