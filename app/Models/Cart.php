<?php

namespace App\Models;

use App\Models\KhuyenMai;
use App\Models\CTKhuyenMai;
use App\Models\KhoaHoc;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->DONGIA, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $today = Carbon::createFromTimestamp(strtotime(date("Y-m-d h:i:sa")));

        $listKM = DB::table('ctkhuyenmai')
            ->join('khuyenmai', 'ctkhuyenmai.MAKM', '=', 'khuyenmai.MAKM')
            ->where('ctkhuyenmai.MAKH', '=', $item->MAKH)
            ->where('khuyenmai.NGAYBD', '<=', $today)
            ->where('khuyenmai.NGAYKT', '>=', $today)
            ->get();

        $storedItem['qty']++;
        $storedItem['price'] = $item->DONGIA * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;

        if ($listKM->count() > 0)
            $this->totalPrice += ($item->DONGIA - ($item->DONGIA / 100 * $listKM[0]->TYLEKM));
        else
            $this->totalPrice += $item->DONGIA;
    }

    public function deleteItem($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}