<?php

namespace App\Helpers;

class Helper
{
    public static function active($active)
    {
        return $active == 0
            ? '<span class="" style="color:#D40B33"">Chưa kích hoạt</span>'
            : '<span class="" style="color:#387836">Đã kích hoạt</span>';
    }

    public static function cate($cateList, $parent_id = 0, $char = '')
    {
        $html = "";
        foreach ($cateList as $key => $menu) {
            if ($menu->MADMCHA == $parent_id) {
                $html .= '
                <tr>
                <td scope="col" class="sort">' . $char . $menu->TENDM . '</td>
                <td scope="col" class="sort">' . self::active($menu->ACTIVE) . '</td>
                <td scope="col" class="sort">' . $menu->UPDATE_AT . '</td>
                <td class="center">
                <a href="admin/danhmuc/sua/' . $menu->MADM . '" class="edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a href="admin/danhmuc/xoa/' . $menu->MADM . '" class="delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm(\'Bạn có muốn xóa không\')"><i class="material-icons">&#xE872;</i></a>
                </a>
                </td>
                </tr>
                ';
                unset($cateList[$key]);
                $html .= self::cate($cateList, $menu->MADM, $char . '|-------- ');
            }
        }
        return $html;
    }
}