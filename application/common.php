<?php
/**
 * tzhe
 * @param $value
 */

if (request()->isMobile()) {

    config('template.view_path','../application/index/view/wap/wap/');

} else {

    config('template.view_path','');

}





function wl_debug( $value )
{
    echo '<pre>';
    print_r( $value );
    echo '<pre>';
    exit;
}

function  wl_debug_log( $files  , $key  = '' )
{
    $files = [$key ? $key : date('Y-m-d H : s', time()) => $files];
    $dir = fopen("../application/index/error.txt", "w") or die("Unable to open file!");

    fwrite($dir,  print_r($files, true ) );

    fclose($dir);

}



function jsondebug( $array )
{
    if (is_array($array)) {
        exit(json_encode(['json' => $array]));
    }

    exit( json_encode(['str' => $array]) );
}

function iJson( $url = null, $status = true, $msg = '提交成功' )
{
    $data = [
        'url' => $url,
        'status' =>  $status,
        'msg' => $msg,
    ];
    return  json_encode($data);

}

function tree($data, $pid = 0, $deep = 0 )
{
    static $arr = [];
    foreach ($data as $val) {

        if ($val['pid'] == $pid ) {
            $val['deep'] = $deep;
            $val['html'] = str_repeat('<span>&nbsp;|__</span>',$deep);
            $arr[] = $val;
            $arr = tree($data, $val['id'], $deep+1 );
        }

    }
    return $arr;

}


function timeTran($time)
{
    $t = time() - $time;
    $f = array(
        '31536000' => '年',
        '2592000' => '个月',
        '604800' => '星期',
        '86400' => '天',
        '3600' => '小时',
        '60' => '分钟',
        '1' => '秒'
    );
    foreach ($f as $k => $v) {
        if (0 != $c = floor($t / (int)$k)) {
            return $c . $v  .'前';
        }
    }
}


function _reSort($data, $parent_id = 0) {
    $return = [];//不能用static
    foreach($data as $v) {
        if($v['pid'] == $parent_id) {
            foreach($data as $subv) {
                if($subv['pid'] == $v['id']) {
                    $v['children'] = _reSort($data, $v['id']);
                    break;
                }
            }
            $return[] = $v;
        }
    }
    return $return;
}




/**
 * @return string
 */
function get_ip() {
    //strcasecmp 比较两个字符，不区分大小写。返回0，>0，<0。
    if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
        $ip = getenv('HTTP_CLIENT_IP');
    } elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
        $ip = getenv('HTTP_X_FORWARDED_FOR');
    } elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
        $ip = getenv('REMOTE_ADDR');
    } elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $res =  preg_match ( '/[\d\.]{7,15}/', $ip, $matches ) ? $matches [0] : '';
    return  $res;
}




function validStrlen($str, $set_len = 100 )
{
    if (intval(strlen($str)) > intval( $set_len )) return false;
    return true;

}

function utf8_sub_str( $text, $statr = 0, $end = 10 )
{
    if (empty($text) ) return false;

    return mb_substr($text, $statr, $end, 'utf-8');

}



function rek($k_arr, $content)
{
    if (empty($k_arr) || !is_array($k_arr) || empty($content)) return false;

    foreach ($k_arr as $v ) {
        $key =  json_decode($v['re_keywords']);
        foreach ($key as $vk ) {
            $content  = str_replace($vk,"<a style='color:red;' href='".$v['link']."'>$vk</a>", (string)$content);
        }
    }

    return $content;

}