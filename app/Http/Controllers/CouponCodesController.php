<?php

namespace App\Http\Controllers;

use App\Exceptions\CouponCodeUnavailableException;
use App\Models\CouponCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponCodesController extends Controller
{
    public function show($code,Request $request)
    {
        $record = CouponCode::where('code', $code)->first();
        if (!$record) {
            throw new CouponCodeUnavailableException('优惠券不存在');
        }
        $record->checkAvailable($request->user());
        return $record;
    }
}
