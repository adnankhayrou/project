<?php

use App\Http\Livewire\Visitor\VendorProducts;
use App\Models\Admin\Cities;
use App\Models\Admin\City;
use App\Models\Admin\HmizatAdmarAds;
use App\Models\Admin\Secteur;
use App\Models\Admin\Seo;
use App\Models\Admin\Settings;
use App\Models\Admin\Style;
use App\Models\Category;
use App\Models\Chat;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use App\Models\Shop;
use App\Models\CommentsSetting;
use App\Models\Message;
use App\Models\Role;
use App\Models\Shop\Category as ShopCategory;
use App\Models\ShopUsers;
use App\Models\User;
use App\Models\Wishlist;
use Faker\Provider\Lorem;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Current;


function _setSession($name, $value)
{
  session()->put($name, $value);
}
function _getSession($name)
{
  return session()->get($name);
}

function get_default_lang()
{
  return   Config::get('app.locale');
}
