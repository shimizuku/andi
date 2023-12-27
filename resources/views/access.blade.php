@extends('layouts.global')

@section('title', 'Access')
@section('content')
<main>
  <div class="access">
    <img src="../images/access-top.jpg">
    <p>Access</p>
  </div>
  <div class="train">
    <div class="train-text">
      <h2>電車でおこしのお客様</h2>
      <p>多摩センター駅東口を出て、左手側に当店がございます。</p>
      <p>徒歩１分ほどのところに「洋服の青山」さんがございます。</p>
      <p>その右手奥のビルの７階になります。</p>
      <p>※一階は「賃貸ステーション」さん</p>
    </div>
    <div class="train-img">
      <img src="../images/map.png" alt="地図">
    </div>
  </div>
  <div class="car-text">
    <h2>車でおこしのお客様</h2>
    <p>多摩ニュータウン通りを永山から堀之内方面に向かう道路に面しており、</p>
    <p>「洋服の青山」さん手前、一階が「賃貸ステーション」さんのビルの7階になります。</p>
    <p>当店には駐車場はございませんので、お手数ではありますが最寄りの有料駐車場をご利用ください。</p>
    <p>一番近い駐車場は、地図を参考にご利用ください。</p>
    <p>※洋服の青山産の駐車場もコインパーキングとしてご利用いただけます。</p>
  </div>
  <!--グーグルマップ、PC用サイズ-->
  <div class="pc">
    <div class="g-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1621.5261291247746!2d139.4239515834904!3d35.626438189150576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e33675cddfbb%3A0xc9283eb5f384705a!2z44CSMjA2LTAwMzMg5p2x5Lqs6YO95aSa5pGp5biC6JC95ZCI77yR5LiB55uu77yW4oiS77ySIOOCteODs-ODqeOCpOOCuuWil-eUsA!5e0!3m2!1sja!2sjp!4v1517070441991" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  <!--グーグルマップ、スマホ用サイズ-->
  </div>
  <div class="sp">
    <div class="g-map-sp">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.052144616348!2d139.42253671465815!3d35.62644099058348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e33675cddfbb%3A0xc9283eb5f384705a!2z44CSMjA2LTAwMzMg5p2x5Lqs6YO95aSa5pGp5biC6JC95ZCI77yR5LiB55uu77yW4oiS77ySIOOCteODs-ODqeOCpOOCuuWil-eUsA!5e0!3m2!1sja!2sjp!4v1517303951366" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</main>
@endsection
