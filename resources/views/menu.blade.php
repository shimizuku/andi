@extends('layouts.global')

@section('title', 'Menu')
@section('content')
<main>
    <div class="menu-pic">
        <img src="../images/1.jpg">
    </div>
    <div class="menu">
        <h1>MENU</h1>
        <!--ここからPC用切り替え画面-->
        <div class="pc">
            <div class="pc-new-menu">
                @foreach ($categories as $category => $value)
                    <div class="exmple-menu">
                        <div class="menu-text">
                            <h2>{{ $value['name'] }}</h2>
                            @foreach ($menus[$value['id']] as $key => $val)
                                <p>{{ $val['name'] }}　￥{{ $val['price'] }}</p>
                            @endforeach
                        </div>
                        <img class="images" src="../images/{{ $value['img'] }}.jpg" alt="{{ $value['img'] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--ここからスマホ用切り替え画面-->
    <div class="sp">
        <div class="sp-menu">
            @foreach ($categories as $category => $value)
                <div class="exmple-sp-menu" style="background:url({{'../images/' . $value['img'] . '-h.png'}})no-repeat right center;">
                    <div class="menu-text">
                        <h2>{{ $value['name'] }}</h2>
                        @foreach ($menus[$value['id']] as $key => $val)
                            <p>{{ $val['name'] }}　￥{{ $val['price'] }}</p>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="menu-last-text">
        <p>※税込表記、ロング料金なし<br>
        ※カット以外のメニューのみの場合、スタイリング料金として、+￥2160頂戴しております。</p>
        <p>カード利用可<br>
        ペーパーレスになっておありますので、クレジット明細をご希望の方は<br>
        ご指定のメールアドレスにお送りしております。</p>
    </div>
</main>
@endsection
