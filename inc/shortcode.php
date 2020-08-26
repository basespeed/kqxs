<?php

add_shortcode('live_mb', function ($arr){
$html = '';

$html .= '<div class="live_mb_list">';
    $html .= '<div class="in">';

            $query = new WP_Query(array(
               'post_type' => 'kqxs',
               'posts_per_page' => 1,
                'post_status' => 'publish',
                'meta_query'	=> array(
                    'relation'		=> 'AND',
                    array(
                        'key'	  	=> 'date',
                        'value'	  	=> $arr['date'],
                        'compare' 	=> '=',
                    ),
                    array(
                        'key'	  	=> 'mien',
                        'value'	  	=> $arr['id'],
                        'compare' 	=> '=',
                    )
                ),
            ));
            while ($query->have_posts()) : $query->the_post();
            $html .= '<h3>'.get_the_title().'</h3>';
            $html .= '<ul>';
                $html .= '<li>';
                    $html .= '<span>Giải đặc biệt</span>';
                    $html .= '<p>'.get_post_meta( get_the_ID(), 'giai_db', true ).'</p>';
                $html .= '</li>';
                $html .= '<li>';
                    $html .= '<span>Giải nhất</span>';
                    $html .= '<p>'.get_post_meta( get_the_ID(), 'giai1', true ).'</p>';
                $html .= '</li>';
                $html .= '<li>';
                    $html .= '<span>Giải hai</span>';
                    $html .= '<p>'.get_post_meta( get_the_ID(), 'giai2', true ).'</p>';
                $html .= '</li>';
                $html .= '<li>';
                    $html .= '<span>Giải ba</span>';
                    $html .= '<p>'.get_post_meta( get_the_ID(), 'giai3', true ).'</p>';
                $html .= '</li>';
                $html .= '<li>';
                    $html .= '<span>Giải bốn</span>';
                    $html .= '<p>'.get_post_meta( get_the_ID(), 'giai4', true ).'</p>';
                $html .= '</li>';
                $html .= '<li>';
                    $html .= '<span>Giải năm</span>';
                    $html .= '<p>'.get_post_meta( get_the_ID(), 'giai5', true ).'</p>';
                $html .= '</li>';
                $html .= '<li>';
                    $html .= '<span>Giải sáu</span>';
                    $html .= '<p>'.get_post_meta( get_the_ID(), 'giai6', true ).'</p>';
                $html .= '</li>';
                $html .= '<li>';
                    $html .= '<span>Giải bảy</span>';
                    $html .= '<p>'.get_post_meta( get_the_ID(), 'giai7', true ).'</p>';
                $html .= '</li>';
            $html .= '</ul>';
            endwhile;
            wp_reset_query();
    $html .= '</div>';
$html .= '</div>';

$html .= '<div class="list_loto live_mb">';

    $html .= '<h2>THỐNG KÊ NHANH CHO NGÀY '.date("d/m/Y").'</h2>';
    $html .= '<h3>Lotto lâu chưa ra (lotto gan):</h3>';
    $html .= '<div class="list_l">';
    $get_url = file_get_html('https://vesophuongtrang.com/truc-tiep-xo-so-mien-bac-xsttmb.html');
    $n = 0;
    foreach($get_url->find('#bangthongkexoso table') as $element) {
    $html .= '<table>'.$element->innertext.'</table>';
    }
    $html .= '</div>';

    $html .= '<h3>Lotto ra nhiều trong tháng qua:</h3>';
    $html .= '<div class="list_l list_2">';
        $get_url = file_get_html('https://vesophuongtrang.com/truc-tiep-xo-so-mien-bac-xsttmb.html');
        $n = 0;
        $html .= '<table>';
            $html .= '<tbody>';
            $html .= '<tr>';
                $html .= '<td>';
                    foreach($get_url->find('.box_tkdefault_xhn3l .list_ralientiep') as $element) {
                    $html .= '<div class="list_khongxuathienlaunhat">'.$element->innertext.'</div>';
                    }
                    $html .= '</td>';
                $html .= '</tr>';
            $html .= '</tbody>';
            $html .= '</table>';
        $html .= '</div>';

    ?>
    <script>
        jQuery(document).ready(function () {
            jQuery('.list_khongxuathienlaunhat a').on('click', function () {
                return false;
            });
        });
    </script>
    <?php

    $html .= '</div>';

    return $html;
});

add_shortcode('live_mt', function ($arr){
    $html = '';
    $html .= '<div class="live_mb_list">';
    $html .= '<div class="in">';

    $query = new WP_Query(array(
        'post_type' => 'kqxs',
        'posts_per_page' => 1,
        'post_status' => 'publish',
        'meta_query'	=> array(
            'relation'		=> 'AND',
            array(
                'key'	  	=> 'date',
                'value'	  	=> $arr['date'],
                'compare' 	=> '=',
            ),
            array(
                'key'	  	=> 'mien',
                'value'	  	=> $arr['id'],
                'compare' 	=> '=',
            )
        ),
    ));
    while ($query->have_posts()) : $query->the_post();
        $html .= '<h3>'.get_the_title().'</h3>';
        $html .= '<ul>';
        $html .= '<li>';
        $html .= '<span>Giải đặc biệt</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai_db', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải nhất</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai1', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải hai</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai2', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải ba</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai3', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải bốn</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai4', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải năm</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai5', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải sáu</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai6', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải bảy</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai7', true ).'</p>';
        $html .= '</li>';
        $html .= '</ul>';
    endwhile;
    wp_reset_query();
    $html .= '</div>';
    $html .= '</div>';


    $html .= '<h3>Lotto ra nhiều trong tháng qua:</h3>';
    $html .= '<div class="list_l list_2">';
    $get_url = file_get_html('https://vesophuongtrang.com/truc-tiep-xo-so-mien-bac-xsttmb.html');
    $n = 0;
    $html .= '<table>';
    $html .= '<tbody>';
    $html .= '<tr>';
    $html .= '<td>';
    foreach($get_url->find('.box_tkdefault_xhn3l .list_ralientiep') as $element) {
        $html .= '<div class="list_khongxuathienlaunhat">'.$element->innertext.'</div>';
    }
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '</tbody>';
    $html .= '</table>';
    $html .= '</div>';

    ?>
    <script>
        jQuery(document).ready(function () {
            jQuery('.list_khongxuathienlaunhat a').on('click', function () {
                return false;
            });
        });
    </script>
    <?php

    $html .= '</div>';

    return $html;
});

add_shortcode('live_mn', function ($arr){
    $html = '';
    $html .= '<div class="live_mb_list">';
    $html .= '<div class="in">';

    $query = new WP_Query(array(
        'post_type' => 'kqxs',
        'posts_per_page' => 1,
        'post_status' => 'publish',
        'meta_query'	=> array(
            'relation'		=> 'AND',
            array(
                'key'	  	=> 'date',
                'value'	  	=> $arr['date'],
                'compare' 	=> '=',
            ),
            array(
                'key'	  	=> 'mien',
                'value'	  	=> $arr['id'],
                'compare' 	=> '=',
            )
        ),
    ));
    while ($query->have_posts()) : $query->the_post();
        $html .= '<h3>'.get_the_title().'</h3>';
        $html .= '<ul>';
        $html .= '<li>';
        $html .= '<span>Giải đặc biệt</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai_db', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải nhất</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai1', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải hai</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai2', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải ba</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai3', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải bốn</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai4', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải năm</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai5', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải sáu</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai6', true ).'</p>';
        $html .= '</li>';
        $html .= '<li>';
        $html .= '<span>Giải bảy</span>';
        $html .= '<p>'.get_post_meta( get_the_ID(), 'giai7', true ).'</p>';
        $html .= '</li>';
        $html .= '</ul>';
    endwhile;
    wp_reset_query();
    $html .= '</div>';
    $html .= '</div>';

    $html .= '<h3>Lotto ra nhiều trong tháng qua:</h3>';
    $html .= '<div class="list_l list_2">';
    $get_url = file_get_html('https://vesophuongtrang.com/truc-tiep-xo-so-mien-nam-xsttmn.html');
    $n = 0;
    $html .= '<table>';
    $html .= '<tbody>';
    $html .= '<tr>';
    $html .= '<td>';
    foreach($get_url->find('.box_tkdefault_xhn3l .list_ralientiep') as $element) {
        $html .= '<div class="list_khongxuathienlaunhat">'.$element->innertext.'</div>';
    }
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '</tbody>';
    $html .= '</table>';
    $html .= '</div>';

    ?>
    <script>
        jQuery(document).ready(function () {
            jQuery('.list_khongxuathienlaunhat a').on('click', function () {
                return false;
            });
        });
    </script>
    <?php

    $html .= '</div>';

    return $html;
    });

    add_shortcode('list_lotto',function(){


        //return $html;
    });

    add_shortcode('list_random_lotto',function(){
    $html = '';
    $html .= '<div class="add_random_lotto">';
    $html .= '<div class="in">';
    $html .= '<button class="random_add">Lấy số ngẫu nhiễn</button>';
    $html .= '<div class="show_random_number"></div>';
    $html .= '</div>';
    $html .= '</div>';

    ?>
    <script>
        jQuery(document).ready(function () {
            jQuery('.random_add').on('click', function(){
                jQuery('.show_random_number').empty();
                for(var i = 1 ; i <= 20; i++){
                    var a = Math.floor(Math.random() * 100);
                    if(i == 20){
                        jQuery('.show_random_number').append(a);
                    }else{
                        jQuery('.show_random_number').append(a + ', ');
                    }
                }
            });
        });

    </script>
<?php

return $html;
});


