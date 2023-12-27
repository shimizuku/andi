@extends('layouts.global')

@section('content')
<main>
	<div class="home-top">
	  <img src="./images/home-top.jpg">
	</div>
	<div class="about">
	  <p>about</p>
	  <div class="about-text">
		<div id="ab">
		  <h2>多摩センターより徒歩２分！</h2>
		  <h2>完全予約制の個室サロン</h2>
		</div>
		<p>多摩センターの駅近く　ゆったりくつろげる個室サロン夜の8時まで受付。お仕事帰りにもぜひご利用くださいお一人ずつのご予約なので、他の方を気にせずゆったりと過ごせます無駄な待ち時間もありません！</p>
	  </div>
	  <div class="about-img">
		<img src="./images/about-img.jpg" alt="内装１">
	  </div>
	</div>
	<div class="about-123">
	  <!--パソコン、タブレット切り替え画面-->
	  <div class="pc">
	  	<div class="about-123_pc_inner">
			<div class="about-123_pc_inner_contents">
			  <img src="./images/about-space.jpg">
			  <h3>space</h3>
			  <p>2席ございますので、お友達やご家族の方といらしても大丈夫！知らない方が隣に座ることはありません！</p>
			</div>
			<div class="about-123_pc_inner_contents">
			  <img src="./images/about-relax.jpg">
			  <h3>relax</h3>
			  <p>サービスの頭皮マッサージで日々の疲れからもリフレッシュ！周りに人がいないので、シャンプーやトリートメントも格別リラックスできます。</p>
			</div>
			<div class="about-123_pc_inner_contents">
			  <img src="./images/about-skill.jpg">
			  <h3>skill</h3>
			  <p>担当スタイリストは、ショーやコンテストでも実績のあるベテラン！ヘアケアの資格も持ち、ヘアのスペシャリストとして15年の経歴があります！</p>
			</div>
		</div>
	  </div>
	  <!--ここまでPC,タブレット用-->
	  <!--スマホ用切り替え画面-->
	  <div class="sp">
		<div class="sec1">
		  <div class="sec1-pic">
			<img src="./images/about-space.jpg">
		  </div>
		  <div class="sec1-text">
			<h3>space</h3>
			<p>2席ございますので、お友達やご家族の方といらしても大丈夫！知らない方が隣に座ることはありません！</p>
		  </div>
		</div>
		<div class="sec2">
		  <div class="sec2-pic">
			<img src="./images/about-relax.jpg">
		  </div>
		  <div class="sec2-text">
			<h3>relax</h3>
			<p>サービスの頭皮マッサージで日々の疲れからもリフレッシュ！周りに人がいないので、シャンプーやトリートメントも格別リラックスできます。</p>
		  </div>
		</div>
		<div class="sec3">
		  <div class="sec3-pic">
			<img src="./images/about-skill.jpg">
		  </div>
		  <div class="sec3-text">
			<h3>skill</h3>
			<p>担当スタイリストは、ショーやコンテストでも実績のあるベテラン！ヘアケアの資格も持ち、ヘアのスペシャリストとして15年の経歴があります！</p>
		  </div>
		</div>
	  </div>
	  <!--ここまでスマホ用画面-->
	</div>
	<!--ここからシャンプーについて-->
	<div class="shampoo">
	  <div class="sp-img">
		<img src="./images/sampoo1.jpg">
	  </div>
	  <div class="sp-box">
		<p>shampoo</p>
	  </div>
	</div>
	<div class="shampoo-text">
	  <div class="sp-text-h">
		<h2>こだわりのシャンプーは８種類から</h2>
	  </div>
	  <div class="sp-text-p">
		<p>髪質は人それぞれ違います乾燥、きしみ、ごわつき広がり、傷み、ぺちゃんこ、べたつきandiでは、ヘアケアリストが８種類の中から最適なものをお選びします。</p>
	  </div>
	</div>
	<!--ここからおすすめ-->
	<div class="recommendation">
	  <div class="rd-box">
		<p>recommendatiom</p>
	  </div>
	  <div class="rd-img">
		<p id="slideshow">
		  <img src="./images/recommendation.jpg" alt="画像1" class="active">
		  <img src="./images/reco2.jpg" >
		  <img src="./images/reco3.jpg">
		</p>
	  </div>
	</div>
	<div class="recommendation-text">
	  <div class="rd-text-h">
		<h2>「MILBON」システムトリートメント</h2>
	  </div>
	  <div class="rd-text-p">
		<p>globalMILBONシステムトリートメント！髪の空洞化を補い、保湿とキューティクルのコートを一手に担う、抜群のトリートメントです！ヘアケアの資格を持ったスタイリストが、正しいトリートメントを施術致します！</p>
	  </div>
	</div>
	<div class="treatment">
	  <!--ここからPC,タブレット用切り替え画面-->
	  <div class="pc">
		<div class="treatment_pc">
			<div class="treatment_pc_inner">
				<img src="images/item01.jpg">
				<h3>５ステップトリートメント</h3>
				<p>&yen;6480(税込)(シャンプーブロー別)</p>
			</div>
			<div class="treatment_pc_inner">
				<img src="images/item02.jpg">
				<h3>リペアトリートメント</h3>
				<p>&yen;5160(税込)(シャンプーブロー別)</p>
			</div>
			<div class="treatment_pc_inner">
				<img src="images/item03.jpg">
				<h3>３ステップトリートメント</h3>
				<p>&yen;3780(税込)(シャンプーブロー別)</p>
			</div>
		</div>
	  </div>
	  <!--ここからスマホ用切り替え画面-->
	  <div class="sp">
		<div class="treat-text">
		  <h3>MILBON ５ステップトリートメント</h3>
		  <p>6480(税込)(シャンプーブロー別)</p>
		  <h3>MILBON リペアトリートメント</h3>
		  <p>5160(税込)(シャンプーブロー別)</p>
		  <h3>MILBON ３ステップトリートメント</h3>
		  <p>3780(税込)(シャンプーブロー別)</p>
		</div>
	  </div>
	  <!--ここまでスマホ用画面-->
	</div>
	<div class="relax-time">
	  <div class="relax-t-text">
		<h2>貸し切りサロンで、ゆったりとしたスパタイムを</h2>
		<p>andi private hair salon では、頭皮の引き上げとほぐしを中心とした</p>
		<p>リラクゼーションスパをご提供させて頂いております</p>
		<p>血行促進とリラクゼーション効果が頭皮を健康に！髪を美しく!</p>
		<p>是非お試しください！</p>
	  </div>
	</div>
	<!--PC用の切り替え画面-->
	<div class="pc">
	<div class="total">
		<div class="informatio1">
		  <p>information</p>
		</div>
		<div class="informatio2">
		  <p>coupon</p>
		</div>
	</div>
	<div class="info">
		<table>
		  <tr>
			<td rowspan="2">
			  <div class="facebook">
				<div class="facebook-img">
				  <img src="./images/facebook-logo.png">
				</div>
				<div class="facebook-text">
				  <p>&nbsp;&nbsp;&nbsp;SNS更新情報を掲載中<br>
				  &nbsp;&nbsp;&nbsp;シェア、コメントお待ちしております。</p>
				</div>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftamacenter.andi.private.hair.salon%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			  </div>
			</td>
			<td rowspan="2" style="width: 1px; height: 150px; background-color: gray;"></td>
			<td>
			  <div class="htp-coupon">
				<div class="htp-c-img">
				  <a href="https://beauty.hotpepper.jp/slnH000360615/"><img src="./images/hot-pepper-logo.png"></a>
				</div>
				<div class="htp-c-text">
				  <p><span style="font-weight: bold">Hot Papper Beauty</span><br>
					ホットペッパービューティーにて<br>
					オールメニューお得なクーポンがございます。<br>
					ネット予約も受け付けておりますので、ご利用ください。<br>
					<span style="font-weight: bold">⇐クーポン、ネット予約はアイコンをタッチ</span></p>
				</div>
			  </div>
			</td>
		  </tr>
		  <tr>
			<td>
			  <div class="andi-coupon">
				<div class="andi-c-img">
				  <img src="./images/andi-c-logo.png">
				</div>
				<div class="andi-c-text">
				  <p><span style="font-weight: bold">2回目以降のご来店で10％OFF!</span><br>
					お会計時に次のご予約をいただきますと、<br>
					次回のお会計から10％OFF！<br>
					3回目以降も同様にご利用できます!
				  </p>
				</div>
			  </div>
			</td>
		  </tr>
		</table>
	  </div>
	</div>
	<!--スマホ用の切り替え画面-->
	<div class="sp">
	<div class="total">
	  <div class="informatio1">
		<p>information</p>
	  </div>
	  <div class="facebook">
		<div class="facebook-img">
		  <img src="./images/facebook-logo.png">
		</div>
		<div class="facebook-text">
		  <p>SNS更新情報を掲載中<br>
		  シェア、コメントお待ちしております。</p>
		</div>
	  </div>
	  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftamacenter.andi.private.hair.salon%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	</div>
	  <div class="informatio2">
		<p>coupon</p>
	  </div>
	  <div class="htp-coupon">
		<div class="htp-c-img">
		  <a href="https://beauty.hotpepper.jp/slnH000360615/"><img src="./images/hot-pepper-logo.png"></a>
		</div>
		<div class="htp-c-text">
		  <p><span style="font-weight: bold">Hot Papper Beauty</span><br>
			ホットペッパービューティーにて<br>
			オールメニューお得なクーポンがございます。<br>
			ネット予約も受け付けておりますので、ご利用ください。<br>
			<span style="font-weight: bold">↑クーポン、ネット予約はアイコンをタッチ</span></p>
		</div>
	  </div>
	  <div class="andi-coupon">
		<div class="andi-c-img">
		  <img src="./images/andi-c-logo.png">
		</div>
		  <div class="andi-c-text">
			<p><span style="font-weight: bold">2回目以降のご来店で10％OFF!</span><br>
			  お会計時に次のご予約をいただきますと、<br>
			  次回のお会計から10％OFF！<br>
			  3回目以降も同様にご利用できます!</p>
		  </div>
		</div>
	</div>
	<!--ここまでスマホ用切り替え画面-->
</main>
@endsection
