<div class="under_border"></div>
<div class="medical-treatment-all">
        <div class="im">
          <div class="im__icon--container show-more">
            <a href="/vaccine/influenza/">
                  <div class="im-icon">
                    <p class="im-ttl">インフルエンザワクチン</p>
                  </div>
                </a>
          </div>
        </div>
        <!-- <div class="list_toggle">
          <a href="javascript:void(0);" class="open_link"></a>
        </div> -->
      </div>
      <script>
        (function () {
          let showmore = $(".show-more");
          let closeHeight = $(".im__icon--container").children("a");
          let listOpen = parseInt(showmore.height());
          let listClose = closeHeight.outerHeight(true);
          showmore.css("height", listClose + "px");
          $(".list_toggle a").click(function () {
            let thisBtn = $(this);
            if ($(this).hasClass("open_link")) {
              thisBtn.removeClass("open_link").addClass("close_link");
              showmore.css("height", listOpen + "px");
            } else if ($(this).hasClass("close_link")) {
              thisBtn.removeClass("close_link").addClass("open_link");
              showmore.css("height", listClose + "px");
            }
          });
        })();
      </script>
