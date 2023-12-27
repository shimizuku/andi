@extends('layouts.global')

@section('title', 'Stylist')
@section('content')
<main>
  <div class="scissors">
    <p id="slideshow2">
      <img src="../images/hasami1.png" alt="画像2" class="active2">
      <img src="../images/hasami2.png">
      <img src="../images/hasami3.png">
      <img src="../images/hasami4.png">
    </p>
  </div>
  <!--ここから鈴木さん紹介-->
  <!--鈴木さん紹介PC用-->
  <div class="pc">
    <div class="back-color">
      <div class="stylist">
        <p>STYLIST</p>
      </div>
      <div class="suzuking">
        <div class="suzuki-l">
          <img src="../images/stylist.jpg">
        </div>
        <div class="suzui-r">
          <h3>オーナースタイリスト</h3>
          <h2><ruby>
          <rb>鈴木　啓崇</rb><rp>（</rp><rt>すずき　ひろたか</rt><rp>）</rp>
          </ruby></h2>
          <p>35歳　福岡県出身　会津男子<br>
            多摩の地で１５年。　美容師として学んできました。<br>
            ショーやコンテストなどで実績も積み、<br>
            満を持してサロンをオープンいたしました。<br>
            ヘアケアやネイル、着付けなど、様々な資格を持っておりますが<br>
            現在はヘアのみに絞ってサービスを提供しております。
          </p>
        </div>
      </div>
    </div>
  </div>
    <!--div class="pc">
      <div class="stylist">
        <table>
          <tr>
            <td id="title-s">STYLIST</td>
            <td id="text-align"><h2>オーナースタイリスト</h2></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td id="text-align"><h1><ruby>
            <rb>鈴木　啓崇</rb><rp>（</rp><rt>すずき　ひろたか</rt><rp>）</rp>
            </ruby></h1></td>
            <td><h3>SUZUKI HIROTAKA</h3></td>
          </tr>
        </table>
      </div>
    </div-->
    <!--鈴木さん紹介スマホ用-->
    <div class="sp">
      <div class="stylist-intro">
        <p>STYLIST</p>
      </div>
      <div class="stylist-intro2">
        <h3>オーナースタイリスト</h3>
        <h2><ruby><rb>鈴木　啓崇</rb>
        <rp>（</rp><rt>すずき　ひろたか</rt><rp>）</rp></ruby></h2>
        <p>SUZUKI HIROTAKA</p>
      </div>
    <div class="stylist-stylist">
      <div class="stylist-pic">
        <img src="../images/stylist.jpg">
      </div>
      <div class="stylist-message">
        <p>35歳　福岡県出身　会津男子</p>
        <p>多摩の地で１５年。　美容師として学んできました。</p>
        <p>ショーやコンテストなどで実績も積み、</p>
        <p>満を持してサロンをオープンいたしました。</p>
        <p>ヘアケアやネイル、着付けなど、様々な資格を持っておりますが</p>
        <p>現在はヘアのみに絞ってサービスを提供しております。</p>
      </div>
      </div>
    </div>
    <!--ヘアカタログPC用切り替え-->
  <div class="pc">
    <div class="hair-model">
      <p>HAIR STYLE</p>
    </div>
    <div class="model-pic">
      <table>
        <tr>
          <td><img src="../images/model15.jpg"></td>
          <td><img src="../images/model2.jpg"></td>
          <td><img src="../images/model8.jpg"></td>
        </tr>
        <tr>
          <td><img src="../images/model6.jpg"></td>
          <td><img src="../images/model5.jpg"></td>
          <td><img src="../images/model11.jpg"></td>
        </tr>
      </table>
    </div>
  </div>
    <!--ヘアカタログスマホ用切り替え-->
  <div class="sp">
    <div class="hair-model">
      <p>HAIR STYLE</p>
    </div>
    <div class="model-pic">
      <div>
        <img src="../images/model15.jpg">
      </div>
      <div>
        <img src="../images/model2.jpg">
      </div>
      <div>
        <img src="../images/model8.jpg">
      </div>
      <div>
        <img src="../images/model6.jpg">
      </div>
      <div>
        <img src="../images/model5.jpg">
      </div>
      <div>
        <img src="../images/model11.jpg">
      </div>
    </div>
  </div>
</main>
@endsection
