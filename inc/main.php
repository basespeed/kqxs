<?php
// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {

    //create new top-level menu
    add_menu_page('My Cool Plugin Settings', 'KQXS', 'administrator', __FILE__, 'my_cool_plugin_settings_page' , plugins_url('../assets/img/LG_03.jpg', __FILE__) );

    //call register settings function
    add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}


function register_my_cool_plugin_settings() {
    //register our settings
    register_setting( 'my-cool-plugin-settings-group', 'new_option_name' );
    register_setting( 'my-cool-plugin-settings-group', 'some_other_option' );
    register_setting( 'my-cool-plugin-settings-group', 'option_etc' );
}

function my_cool_plugin_settings_page() {
    $listXS = array(
        array(
            'title' => 'TP.HCM',
            'url' => 'https://xosodaiphat.com/xshcm-xo-so-tphcm.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'An Giang',
            'url' => 'https://xosodaiphat.com/xsag-xo-so-an-giang.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Bình Dương',
            'url' => 'https://xosodaiphat.com/xsbd-xo-so-binh-duong.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Bạc Liêu',
            'url' => 'https://xosodaiphat.com/xsbl-xo-so-bac-lieu.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Bình Phước',
            'url' => 'https://xosodaiphat.com/xsbp-xo-so-binh-phuoc.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Bến Tre',
            'url' => 'https://xosodaiphat.com/xsbtr-xo-so-ben-tre.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Bình Thuận',
            'url' => 'https://xosodaiphat.com/xsbth-xo-so-binh-thuan.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Cà Mau',
            'url' => 'https://xosodaiphat.com/xscm-xo-so-ca-mau.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Cần Thơ',
            'url' => 'https://xosodaiphat.com/xsct-xo-so-can-tho.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Đà Lạt- Lâm Đồng',
            'url' => 'https://xosodaiphat.com/xsdl-xo-so-da-lat.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Đồng Nai',
            'url' => 'https://xosodaiphat.com/xsdn-xo-so-dong-nai.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Đồng Tháp',
            'url' => 'https://xosodaiphat.com/xsdt-xo-so-dong-thap.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Hậu Giang',
            'url' => 'https://xosodaiphat.com/xshg-xo-so-hau-giang.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Kiên Giang',
            'url' => 'https://xosodaiphat.com/xskg-xo-so-kien-giang.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Long An',
            'url' => 'https://xosodaiphat.com/xsla-xo-so-long-an.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Sóc Trăng',
            'url' => 'https://xosodaiphat.com/xsst-xo-so-soc-trang.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Tiền Giang',
            'url' => 'https://xosodaiphat.com/xstg-xo-so-tien-giang.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Tây Ninh',
            'url' => 'https://xosodaiphat.com/xstn-xo-so-tay-ninh.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Trà Vinh',
            'url' => 'https://xosodaiphat.com/xstv-xo-so-tra-vinh.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Vĩnh Long',
            'url' => 'https://xosodaiphat.com/xsvl-xo-so-vinh-long.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Vũng Tàu',
            'url' => 'https://xosodaiphat.com/xsvt-xo-so-vung-tau.html',
            'id' => 'mn'
        ),
        array(
            'title' => 'Bình Định',
            'url' => 'https://xosodaiphat.com/xsbdi-xo-so-binh-dinh.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Đắk Lắk',
            'url' => 'https://xosodaiphat.com/xsdlk-xo-so-dak-lak.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Đà Nẵng',
            'url' => 'https://xosodaiphat.com/xsdna-xo-so-da-nang.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Đắk Nông',
            'url' => 'https://xosodaiphat.com/xsdno-xo-so-dak-nong.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Gia Lai',
            'url' => 'https://xosodaiphat.com/xsgl-xo-so-gia-lai.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Khánh Hòa',
            'url' => 'https://xosodaiphat.com/xskh-xo-so-khanh-hoa.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Kon Tum',
            'url' => 'https://xosodaiphat.com/xskt-xo-so-kon-tum.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Ninh Thuận',
            'url' => 'https://xosodaiphat.com/xsnt-xo-so-ninh-thuan.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Phú Yên',
            'url' => 'https://xosodaiphat.com/xspy-xo-so-phu-yen.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Quảng Bình',
            'url' => 'https://xosodaiphat.com/xsqb-xo-so-quang-binh.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Quảng Ngãi',
            'url' => 'https://xosodaiphat.com/xsqng-xo-so-quang-ngai.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Quảng Nam',
            'url' => 'https://xosodaiphat.com/xsqna-xo-so-quang-nam.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Quảng Trị',
            'url' => 'https://xosodaiphat.com/xsqt-xo-so-quang-tri.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Thừa Thiên Huế',
            'url' => 'https://xosodaiphat.com/xstth-xo-so-hue.html',
            'id' => 'mt'
        ),
        array(
            'title' => 'Miền bắc',
            'url' => 'https://xosodaiphat.com/xsmb-xo-so-mien-bac.html',
            'id' => 'mb'
        ),
    );
    ?>
    <div class="main_kqxs_wiew_shortcode">
        <h2>Kết quả sổ xố</h2>
        <form action="<?php the_permalink(); ?>" method="post">
        <ul>
            <li><strong>Kết quả trực tiếp miền bắc (shortcode):</strong> <input type="date" class="date_mb"/> <span>[live_mb]</span></li>
            <li><strong>Kết quả trực tiếp miền trung (shortcode):</strong>
                <select name="" id="slt_mt">
                    <option value="1">Bình Định</option>
                    <option value="2">Đắk Lắk</option>
                    <option value="3">Đà Nẵng</option>
                    <option value="4">Đắk Nông</option>
                    <option value="5">Gia Lai</option>
                    <option value="6">Khánh Hòa</option>
                    <option value="7">Kon Tum</option>
                    <option value="8">Ninh Thuận</option>
                    <option value="9">Phú Yên</option>
                    <option value="10">Quảng Bình</option>
                    <option value="11">Quảng Ngãi</option>
                    <option value="12">Quảng Nam</option>
                    <option value="13">Quảng Trị</option>
                    <option value="14">Thừa Thiên Huế</option>
                </select>
                <input type="date" class="date_mt"/>
                <span>[live_mt]</span>
            </li>
            <li><strong>Kết quả trực tiếp miền nam (shortcode):</strong>
                <select name="" id="slt_mn">
                    <option value="1">TP.HCM</option>
                    <option value="2">An Giang</option>
                    <option value="3">Bình Dương</option>
                    <option value="4">Bạc Liêu</option>
                    <option value="5">Bình Phước</option>
                    <option value="6">Bến Tre</option>
                    <option value="7">Bình Thuận</option>
                    <option value="8">Cà Mau</option>
                    <option value="9">Cần Thơ</option>
                    <option value="10">Đà Lạt- Lâm Đồng</option>
                    <option value="11">Đồng Nai</option>
                    <option value="12">Đồng Tháp</option>
                    <option value="13">Hậu Giang</option>
                    <option value="14">Kiên Giang</option>
                    <option value="15">Long An</option>
                    <option value="16">Sóc Trăng</option>
                    <option value="17">Tiền Giang</option>
                    <option value="18">Tây Ninh</option>
                    <option value="19">Trà Vinh</option>
                    <option value="20">Vĩnh Long</option>
                    <option value="21">Vũng Tàu</option>
                </select>
                <input type="date" class="date_mn"/>
                <span>[live_mn]</span>
            </li>
            <li><strong>Lấy ngẫu nhiễn số lotto (shortcode):</strong> <span>[list_random_lotto]</span></li>
            <li>
                <select name="slt_custom_sub" id="slt_custom_sub">
                    <option value="" selected disabled>Chọn tỉnh</option>
                    <?php
                        foreach ($listXS as $item) {
                            ?>
                            <option data-id="<?php echo $item['id']; ?>" data-title="<?php echo $item['title']; ?>" value="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></option>
                            <?php
                        }
                    ?>
                </select>
                <input type="hidden" class="id_custom" name="id_custom"/>
                <input type="hidden" class="title_custom" name="title_custom"/>
                <input type="date" class="date_custom" name="date_custom"/>
                <input type="submit" name="sub_date_custom" class="sub_date_custom" value="Cập nhật kết quả tùy chỉnh theo ngày"/> &nbsp;&nbsp;
            </li>
            <li><button type="submit" name="sub" class="sub_update">Cập nhật kết quả hôm nay</button> &nbsp;&nbsp; - Lưu ý: Sau 19h lên click cập nhật kết quả mới nhất cho ngày hôm nay</li>
        </ul>
        </form>
    </div>
<?php
    if(isset($_POST['sub'])){
        $n = 0;
        foreach ($listXS as $item){
            $title = $item['title'];
            $url = $item['url'];
            $id = $item['id'];

            updateResultXS($url, $title, $id);
        }

        date_default_timezone_set("Asia/Ho_Chi_Minh");
        echo '<div style="color:green;">Cập nhật kết quả đến '.date('d/m/Y H:i:s').'</div>';

    }

    if(isset($_POST['sub_date_custom'])){
        $url = $_POST['slt_custom_sub'];
        $date = $_POST['date_custom'];
        $date = explode('-', $date);
        $date = $date[2].$date[1].$date[0];

        updateResultCustomXS($url, $date, $title, $id);
    }

}



