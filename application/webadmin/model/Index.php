<?php

namespace app\webadmin\model;

use app\webadmin\model\system\SystemAdmin;
use think\Db;

class Index extends SystemAdmin
{


    //状态
    public static function changeState($tablename, $post )
    {
        $field =  trim($post['field']);
        $id  =  intval($post['id']);
        $value =intval( $post['value']);
        if (empty($field)  || empty($id) || empty($value )) return false;
        $data[$field] = $value;
        $result =  Db::name($tablename)->where('id', $id)->update($data);
        return $result;

    }

    //删除
    public static function deleteFindOne($tablename, $id )
    {
        if (empty($id) || empty($tablename)) return false;
        $data['is_del'] = 2;
        $result =  Db::name( $tablename )->where('id', $id)->update($data);
        return $result;
    }


   public static function _reSort($data, $parent_id = 0) {
        $return = array();//不能用static
        foreach($data as $v) {
            if($v['pid'] == $parent_id) {
                foreach($data as $subv) {
                    if($subv['pid'] == $v['id']) {
                        $v['children'] = self::_reSort($data, $v['id']);
                        break;
                    }
                }
                $return[] = $v;
            }
        }
        return $return;
    }

   public static function trans_byte($byte)
    {
        $KB = 1024;

        $MB = 1024 * $KB;

        $GB = 1024 * $MB;

        $TB = 1024 * $GB;

        if ($byte < $KB) {

            return $byte . "B";

        } elseif ($byte < $MB) {

            return round($byte / $KB, 2) . "KB";

        } elseif ($byte < $GB) {
            return false;
            //return round($byte / $MB, 2) . "MB";

        } elseif ($byte < $TB) {

            return round($byte / $GB, 2) . "GB";

        } else {

            return round($byte / $TB, 2) . "TB";

        }
    }

}
