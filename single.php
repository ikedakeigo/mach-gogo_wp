<?php get_header(); ?>
    <div class="container">
      <div class="blogTop-img">
        <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="no-img">
        <?php endif ; ?>
      </div>
      <div class="s-blog__date">
        2021-03-23 <span class="s-blog__category"> <a href="../blog/uncategorized/index.html" title="Uncategorized">Uncategorized</a> </span>
        <h1 class="s-blog__title">クリニックで長い待ち時間が発生する4＋1の理由。待ち時間を短くする工夫とは？</h1>
      </div>
      <div class="s-blog__content">
        <h6 class="s-blog__heading">目次</h6>

        <ol>
          <li><a href="#anchor01">病院の待ち時間はイライラ、退屈のいいことなし</a></li>
          <li><a href="#anchor02">待ち時間ができる4つともう１つの理由</a></li>
          <li><a href="#anchor03">予約制と気合いで待ち時間短縮に取り組む現状</a></li>
          <li><a href="#anchor04">待ち時間のデータを持っているクリニックはほとんどない</a></li>
          <li><a href="#anchor05">待ち時間の短縮は「仕組みで解決」できる</a></li>
        </ol>

        <div class="anchorarea s-blog__boxTitle">
          <p class="lp_anchor" id="anchor01"></p>
          <h3 class="wp-block-heading">病院の待ち時間はイライラ、退屈のいいことなし</h3>
        </div>

        <p>私たちは、病院やクリニックを選ぶのに大概は自宅か職場の近くを選びます。それは身体がつらいので早く楽になりたい、あるいは予防接種などで、できるだけ早くそれをすませて帰って来たいからではないでしょうか。あるいは特に異変のない場合の、長期管理薬（降圧剤、ぜんそくの吸入薬、漢方薬）の処方なども同じですね。</p>

        <p>近くに行ってさっと済ませて帰りたいのに、結果として半休を取らなければいけなくなったなどの経験はありませんか？おまけに新型コロナウイルスの感染リスクを考えれば、クリニックやその後の薬局での待ち時間はいいことなしですよね？</p>

        <div class="anchorarea s-blog__boxTitle">
          <p class="lp_anchor" id="anchor02"></p>
          <h3 class="wp-block-heading">待ち時間ができる、4つともう１つの理由</h3>
        </div>

        <p>待ち時間ができる理由にはいくつかありますが、医療機関内での待ち時間発生の主なものは次の4つだと思われます。</p>

        <p>1番目の理由は、<strong>患者・受診者の方々が医療機関に行きたいと思う時間が重なる</strong>ことです。同じ時間に大勢の人が集まることで、待ち行列ができます。一人一人の診察を効率的に行ったとしても、患者さんの絶対数が多くなり、それを受け容れることで、待ち行列はどんどん長くなります。</p>

        <p>2番目の理由として、初診の場合は、<strong>問診票をその場で書くなど、患者さんの状態の把握に時間がかかる</strong>こともあります。患者さんの状態の事前把握ができていないこと、その場でのさまざまな確認に時間がかかることで停滞が発生し、カルテ作成に時間がかかり、待ち時間の増加につながります。</p>

        <p>3番目の理由として、<strong>診察に必要以上の時間をかけてしまう</strong>と、そのことが積もり積もって待ち時間につながります。</p>

        <p>4番目の理由。<strong>診療報酬の点数計算</strong>は、とても複雑なものです。そのために<strong>会計で待ちを発生</strong>させてしまうことがあります。</p>

        <p>そして、待ち時間を発生させているもう１つの理由として、医療機関側の「企業努力の欠如」(<a href="#" title="#">参考記事</a>) が指摘されています。</p>

        <div class="anchorarea s-blog__boxTitle">
          <p class="lp_anchor" id="anchor03"></p>
          <h3 class="wp-block-heading">予約制と気合いで待ち時間短縮に取り組む現状</h3>
        </div>

        <p>待ち時間問題、解決する方法はないのでしょうか？</p>

        <p>一つは予約制の導入です。予約は、医師が時間あたり何人を診療するかを決めて、一定の時間枠の中に受診者を配置していく方法です。医師が実際に何人診療できるかは変わってくるために、予約したらその時間にすぐに診察や検査が開始されるかどうかはわかりませんが、それでも、予約なしで待たされるよりはずっと待ち時間は減るはずです。ただ、予約優先していても、予約なしの患者さんが待ち行列に入ると、不満の起こらないようにコントロールするのは難しくなります。</p>

        <p>もう一つは、医療スタッフの意識改革です。医療はサービス業の一面があり、患者・受診者をおもてなしするという考えのもとでは、対話もその要素です。一方で、忙しいビジネスパーソンの中には、なるべく早く帰りたいと考える人も少なくないでしょう。その場合には、対話が「無駄なおしゃべり」になり、待ち時間を増やす結果になってしまいます。「患者さんの時間を大切にしよう」という意識を持って、忙しい人の時間を奪わないように、キビキビと動くことを心がけることは有効でしょう。</p>

        <div class="anchorarea s-blog__boxTitle">
          <p class="lp_anchor" id="anchor04"></p>
          <h3 class="wp-block-heading">待ち時間のデータを持っているクリニックはほとんどない</h3>
        </div>

        <p>一体、どのくらい私たちは待たされているのでしょうか？それを正確に知るには、誰かが待ち時間を計測する必要があります。そのデータが集まめることで、どこに待ち時間改善の余地があるのかもわかるはずです。</p>

        <p>けれども、もしそれをするとなると、現状では誰かがストップウォッチなどで測定し、記録することが求められます。そこまでして、待ち時間を短縮することに経営的な意義を見いだしにくい、というのがほとんどのクリニックのありようだと思われます。</p>

        <div class="anchorarea s-blog__boxTitle">
          <p class="lp_anchor" id="anchor05"></p>
          <h3 class="wp-block-heading">待ち時間の短縮は「仕組みで解決」できる</h3>
        </div>

        <p>受診者の時間を大切にし、待ち時間を本気で短縮しようと取り組むためには、データを収集することのほか、<strong>クリニックの受付から会計を済ませてクリニックを出るまでのプロセスを見直し、どこに短縮の余地があるかを検討し、そこにできる「打ち手」を入れ込むことを仕組み化する</strong>ことを検討すべきでしょう。</p>

        <p>予約制はもちろんその一つです。それに先だって、「医療スタッフ、受診者の時間を大切にしよう」という方針を確立することが重要です。その方針は、医療従事者・受診者にWin-Winの関係をもたらします。医療従事者は、経営効率をあげることができるので、取り組む意味はあるでしょう。</p>

        <h3 class="wp-block-heading">ゼロマチクリニックでの受診体験</h3>

        <p>ゼロマチクリニック天神では、一貫した受診者ファーストの理念のもと、新型コロナ渦でも安心して来院できる仕組みを初めとし、土日診療や夜21:00までの診療時間、診察後すぐ薬局に行けるなど、 数多くの工夫を施しております。</p>

        <p><a href="#">【予約はこちらから】</a></p>
      </div>
      <!-- <section id="btn_set">
        <div class="btn"><a href="#">お役立ち記事トップへ</a></div>
      </section> -->
      <div class="button-wrapper">
        <a href="#" class="button">お役立ち記事トップへ</a>
      </div>

      <section id="articles">
        <div class="container inner">
          <h2 class="main_title">新着記事</h2>
          <div class="border"></div>
          <div class="articles-grid">
            <div class="article-item">
              <a href="#">
                <div class="article-image">
                  <img src="https://placehold.jp/cc9999/993333/150x150.png" alt="テスト投稿" />
                </div>
                <div class="article-details">
                  <h6>2023-04-17 <span class="category"> Uncategorized </span></h6>
                  <h4>テスト投稿</h4>
                </div>
              </a>
            </div>
            <div class="article-item">
              <a href="#">
                <div class="article-image">
                  <img src="https://placehold.jp/cc9999/993333/150x150.png" alt="テスト投稿" />
                </div>
                <div class="article-details">
                  <h6>2023-04-17 <span class="category"> Uncategorized </span></h6>
                  <h4>テスト投稿</h4>
                </div>
              </a>
            </div>
            <div class="article-item">
              <a href="#">
                <div class="article-image">
                  <img src="https://placehold.jp/cc9999/993333/150x150.png" alt="テスト投稿" />
                </div>
                <div class="article-details">
                  <h6>2023-04-17 <span class="category"> Uncategorized </span></h6>
                  <h4>テスト投稿</h4>
                </div>
              </a>
            </div>
            <div class="article-item">
              <a href="#">
                <div class="article-image">
                  <img src="https://placehold.jp/cc9999/993333/150x150.png" alt="テスト投稿" />
                </div>
                <div class="article-details">
                  <h6>2023-04-17 <span class="category"> Uncategorized </span></h6>
                  <h4>テスト投稿</h4>
                </div>
              </a>
            </div>
            <!-- More article-items -->
          </div>
        </div>
      </section>
    </div>

    <?php get_footer(); ?>
