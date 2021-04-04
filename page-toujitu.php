
<?php get_header(); ?>

<body class="drawer drawer--left">
  <!-- header -->
  <header class="header">
    <div class="header__inner">
      <button type="button" class="drawer-toggle drawer-hamburger is-pc">
        <span class="drawer-hamburger-icon"></span>
        <span class="drawer-menu">メニュー</span>
      </button>
      <nav class="header__nav drawer-nav">
        <ul class="nav__list">
          <li class="nav__item drawer-menu-item"><a href="#">トップ</a></li>
          <li class="nav__item drawer-menu-item"><a href="#event">メインセッション</a></li>
          <li class="nav__item drawer-menu-item"><a href="#schedule">タイムスケジュール</a></li>
          <li class="nav__item drawer-menu-item"><a href="#company">協賛企業</a></li>
        </ul>
        <div class="header__cta">
          <li class="nav__item drawer-menu-item"><a
              href="https://form.kintoneapp.com/public/form/show/60eea262095da21cc3cdd9d23c248fdcb59b113baa39ec349dab4bb8201bb823">お問い合わせ</a>
          </li>
          <li class="nav__item drawer-menu-item"><a
              href="https://form.kintoneapp.com/public/form/show/7d49a568b0828e3639208abbbc502197da8823dece37ef5aeb3dc3161105dab5?fbclid=IwAR3-ytDinAvZArgdWbqJdtEIB7P1AUH72iFO5O9GxUou_KVcSu9q7qGlU3U">お申込みはこちら</a>
          </li>
        </div>
      </nav>
    </div>
  </header><!-- /header -->

  <!-- mainvisual -->
  <section class="mv">
    <div class="mv-figure-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/img/bannar_pc.jpg" alt="楽八のバナー">
    </div>
  </section><!-- mainvisual -->

  <!-- news -->
  <section class="news">
    <div class="news__inner inner">
      <div class="news-content">
        <div class="news-content__inner">
          <div class="news-header">
            <p class="news-header__above">＼　チャンス チェンジ NAGOYA　／</p>
            <p class="news-header__below">名古屋を楽しくカッコよく<br class="is-pc">楽八オンライン </p>
          </div>
          <p class="news-header__text">
            10/16(金)・10/17(土)・10/18(日)開催の楽八オンラインセッションを<br>
            視聴いただくためのサイトです
          </p>
        </div>
      </div>
    </div>
  </section><!-- news -->

  <!-- event -->
  <section class="event" id="event">
    <div class="heading">視聴</div>
    <div class="event__inner inner">
      <!-- メインセッション -->
      <h2 class="common__title eventmain__title">メインセッション
      </h2>
      <span class="common__title--border">
        <img src="<?php echo get_template_directory_uri(); ?>/img/border.png" alt="ボーダー">
      </span>
      <p class="consult__text">メインセッションはyoutube配信となります。「視聴する」ボタンよりyoutubeにて視聴ください。<p>
      <!-- <div class="event-lead">ZoomのURLを入力して視聴を開始してください。</div> -->
      <div class="event__figure">
        <img src="<?php echo get_template_directory_uri(); ?>/img/zoom.png" alt="イベントの様子"></div>
      <div class="util__button">
        <a href="https://youtu.be/ywa0ZILc0Vk" class="util__button-link button__watch">視聴する</a>
      </div>
      <!-- 個別相談室 -->
      <h2 class="common__title consult__title">個別相談室</h2>
      <span class="common__title--border">
        <img src="<?php echo get_template_directory_uri(); ?>/img/border.png" alt="ボーダー">
      </span>
      <p class="consult__text">個別相談室はZoomを利用しての相談となります。個別相談室をご利用の際には「相談する」のボタンを押して、Zoomを開いてください。<p>
      <p class="consult__text">個別相談室は１６日１３時半～１７時の間での実施となります。<p>

      <ul class="event__list">

        <li class="event__item">
          <div class="event__item-figure"><img src="<?php echo get_template_directory_uri(); ?>/img/Sponsorlogo2.png" alt=""></div>
          <div class="event__item-body">
            <p class="event__item-title">サイボウズ 株式会社 </p>
            <p class="event__item-text">
              <span class="bold mb-20">「（ほぼ）出社しないサイボウズの働き方を支える情報共有ツールのご紹介」</span><br>
              サイボウズでは緊急事態宣言下で「（ほぼ）100％の在宅勤務」を実現してきました。その情報を入手した企業様から「自社の情報共有の仕組みを見直したい」と、サイボウズのグループウェアに関するお問い合わせが急増しております。
              在宅勤務・テレワーク、またその全体像ともいえる「働き方改革」の基盤となる『情報共有のお困りごと』をお聞かせください！</p>
          </div>
          <p class="event__password">パスワード: 1016</p>
          <div class="util__button _event">
            <a href="https://cybozu.zoom.us/j/94857635363?pwd=ZVpBd0p3cnhYNmY2eW5PcFIxWTlxdz09
パスワード: 1016" class="util__button-link _event" target="_blank">相談する</a>
          </div>
        </li>

        <li class="event__item">
          <div class="event__item-figure"><img src="<?php echo get_template_directory_uri(); ?>/img/Sponsorlogo3.png" alt=""></div>
          <div class="event__item-body">
            <p class="event__item-title">株式会社 サティライズ</p>
            <p class="event__item-text">
              <span class="bold mb-20">サイボウズ　マニアックな相談室</span><br>

              サイボウズ製品のカスタマイズならサティライズにお任せください！<br>
              カスタマイズに限らず、Garoon、Office、kintone各サービスの導入相談も承ります。<br>
              Garoonの導入事績数で右に出るパートナーはいない！と言っても過言ではないぐらい詳しいです。<br>
              オンプレ、クラウド、どちらもお任せください。
              また、kintoneについてもアプリ構築支援、カスタマイズのサービスをご提供いたします。</p>
          </div>
          <div class="util__button _event">
            <a href="https://zoom.us/j/94158622704?pwd=WFVDZWFqYlVRRTV2bklFLzNwN3VTZz09" class="util__button-link _event" target="_blank">相談する</a>
          </div>
        </li>

        <li class="event__item">
          <div class="event__item-figure"><img src="<?php echo get_template_directory_uri(); ?>/img/Sponsorlogo4.png" alt=""></div>
          <div class="event__item-body">
            <p class="event__item-title">株式会社 ミライコミュニケーションネットワーク</p>
            <p class="event__item-text">
              <span class="bold mb-20">「ひとり情シスを助ける中小企業向けテレワークパッケージ」</span><br>
              テレワークの導入に必要な、システム、セキュリティ、サポートデスクを一つに。<br>
              忙しいひとり情シスでも導入しやすい、オススメのパッケージをご紹介いたします。</p>
          </div>
          <p class="event__password">パスワード: 239163</p>
          <div class="util__button _event">
            <a href="https://zoom.us/j/93291065042/" class="util__button-link _event" target="_blank">相談する</a>
          </div>
        </li>

        <li class="event__item">
          <div class="event__item-figure"><img src="<?php echo get_template_directory_uri(); ?>/img/Sponsorlogo5.png" alt=""></div>
          <div class="event__item-body">
            <p class="event__item-title">ピー・シー・エー 株式会社</p>
            <p class="event__item-text">
              <span class="bold mb-20">「会計や給与業務だってクラウドでＯＫ。バックオフィスのクラウド化今やどこの企業も！どうやって？」</span><br>
              コロナ禍において、基幹業務ソフトのクラウド化のご相談が激増しております。お金は現金でタンスに保管よりも銀行に預けるように、会社にとって大事なデータもより堅牢で安全なクラウドに預けるのは今や常識！他社の具体的事例などを元に、御社にとってより最適なサービスをご紹介いたします。</p>
          </div>
          <div class="util__button _event">
            <a href="https://zoom.us/my/pcanagoya
" class="util__button-link _event" target="_blank">相談する</a>
          </div>
        </li>
      </ul>
    </div>
  </section><!-- event -->

  <!-- schedule -->
  <section class="schedule" id="schedule">
    <div class="heading">タイムスケジュール</div>
    <div class="news-date">
      <p class="news-date__text">タイムスケジュールは3日間共通になります。</p>
    </div>
    <div class="schedule__inner inner">
      <table>
        <tbody>
          <tr>
            <td class="schedule-time">13:30</td>
            <td class="schedule-text">開始</td>
          </tr>
          <tr>
            <td class="schedule-time">13:30~13:40</td>
            <td class="schedule-text">八の会代表　松本洋介　挨拶</td>
          </tr>
          <tr>
            <td class="schedule-time">13:40~14:20</td>
            <td class="schedule-text">河村たかし市長　ご挨拶　「リニア時代の名古屋のポテンシャル」</td>
          </tr>
          <tr>
            <td class="schedule-time">14:30~14:50</td>
            <td class="schedule-text">コロナ禍で気付いた新しい働き方</td>
          </tr>
          <tr>
            <td class="schedule-time">15:00~15:50</td>
            <td class="schedule-text">「これからの働くについて思いをぶつけるパネルディスカッション」</td>
          </tr>
          <tr>
            <td class="schedule-time">16:00~16:30</td>
            <td class="schedule-text">「名古屋の老舗企業のChangeへのChallenge」</td>
          </tr>
          <tr>
            <td class="schedule-time">16:30~17:00</td>
            <td class="schedule-text">「レペゼンNAGOYA 名古屋の食文化を更にカッコよく」</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section><!-- schedule -->

  <!-- company -->
  <section class="company" id="company">
    <div class="heading">協賛企業</div>
    <div class="company__inner inner">
      <div class="company-figure__wrapper">
        <img class="is-sp" src="<?php echo get_template_directory_uri(); ?>/img/SponsorCompany_pc.png" alt="協賛企業様のロゴ">
        <img class="is-pc" src="<?php echo get_template_directory_uri(); ?>/img/SponsorCompany_sp.png" alt="協賛企業様のロゴ">
      </div>
    </div>
  </section><!-- company -->

  <!-- footer -->
  <footer class="footer">
    <div class="footer__inner inner">
      <div class="footer-content">
        <a href="https://hachinokai.qloba.com/" class="footer-logo__wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo1.png" alt="楽八ロゴ">
        </a>

        <div class="footer-text">
          <p class="footer-text__above">主催：八の会<br>URL：<a href="https://hachinokai.qloba.com/">https://hachinokai.qloba.com/</a><br>
            <a class="footer__button" href="https://form.kintoneapp.com/public/form/show/60eea262095da21cc3cdd9d23c248fdcb59b113baa39ec349dab4bb8201bb823">
              <button type="button">八の会事務局への<br class="is-pc">お問い合わせはこちら</button>
            </a></p>
          <p class="footer-text__below">名古屋・中部をもっともっと格好良い街にしよう<br>
            ビジネスを盛り上げよう！を掛け声にしている地域コミュニティ。
          </p>
        </div>

      </div>
      <div class="footer-box">
        <div class="footer-logo2__wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="楽八ロゴ">
        </div>
        <p class="footer-text__lead">
          後援：名古屋市
        </p>
      </div>
    </div>
  </footer><!-- /footer -->
  <?php wp_footer(); ?>
</body>

</html>