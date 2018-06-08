<?php
   header("X-XSS-Protection: 0");
   $siteUrl = urldecode($_GET['url']);  
   $requestUrl = 'https://opengraph.io/api/1.1/site/' . urlencode($siteUrl);
   $requestUrl = $requestUrl . '?app_id=5ab53e43c8869a6a06cf204e';
    
   $siteInformationJSON = file_get_contents($requestUrl);
   $siteInformation = json_decode($siteInformationJSON, true);
   
   $title = issetor($siteInformation['hybridGraph']['title'], 'Campfire Chat');
   $description = issetor($siteInformation['hybridGraph']['description'], 'Create Real Sales Opportunities on Any Link You Share.');
   $image = issetor($siteInformation['hybridGraph']['image'], ''); 
   $site_name = $siteInformation['hybridGraph']['site_name'];
   $video = $siteInformation['hybridGraph']['video'];  
   $locale = $siteInformation['hybridGraph']['locale'];      
   
   $message1 = issetor($_GET["message1"], "Hey its Gary here! Want to get more leads faster without spending more?<br><br>Click Chat Now, I'll send you my recorded webinar.");
   $message2 = $_GET["message2"];
   $cta = issetor($_GET["cta"], "https://www.m.me/garyyau.chan");
   
   $facebookUrl = 'https://opengraph.io/api/1.1/site/' . urldecode($_GET['facebook-url']) . '?app_id=5aae8abbc8869a6a06cf159a';;
   $siteInformationJSON = file_get_contents($facebookUrl);
   $fbInformation = json_decode($siteInformationJSON, true);      
   $username = issetor($fbInformation['hybridGraph']['title'], 'Gary-Yau Chan');
   $fbImage = issetor($fbInformation['hybridGraph']['image'], 'https://scontent-iad3-1.xx.fbcdn.net/v/t1.0-1/cp0/e15/q65/p200x200/29186690_10100825954702126_5619734372014882816_n.jpg?_nc_cat=0&oh=59df6e91f96518e409740318fc5122cd&oe=5B645D60');
   
   function issetor(&$var, $default) {
       return isset($var) ? $var : $default;
   }               
   ?>
<!DOCTYPE>
<html>
   <head>
      <!-- Hotjar Tracking Code for http://mycampfirechat.com/g/result.php -->
      <script>
         (function(h,o,t,j,a,r){
             h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
             h._hjSettings={hjid:824430,hjsv:6};
             a=o.getElementsByTagName('head')[0];
             r=o.createElement('script');r.async=1;
             r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
             a.appendChild(r);
         })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
      </script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <link rel="stylesheet" href="../etc/assets/style.css">
      <link rel="stylesheet" href="../etc/assets/facebook.css">
      <link rel="stylesheet" type="text/css" href="../etc/assets/chat.css">
      <meta property="og:title" content="<?php echo $title; ?>">
      <meta property="og:url" content="<?php echo $url; ?>">
      <meta property="og:description" content="<?php echo $description; ?>">
      <meta property="og:image" content="<?php echo $image; ?>">
      <meta property="og:url" content="<?php echo $url; ?>">
      <!-- COMMON TAGS -->
      <title><?php echo $title; ?></title>
      <!-- Search Engine -->
      <meta name="description" content="<?php echo $description; ?>">
      <meta name="image" content="<?php echo $image; ?>">
      <!-- Schema.org for Google -->
      <meta itemprop="name" content="<?php echo $title; ?>">
      <meta itemprop="description" content="<?php echo $description; ?>">
      <meta itemprop="image" content="<?php echo $image; ?>">
      <!-- Twitter -->
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="<?php echo $title; ?>">
      <meta name="twitter:description" content="<?php echo $description; ?>">
      <!-- <meta name="twitter:site" content=""> -->
      <!-- <meta name="twitter:creator" content=""> -->
      <meta name="twitter:image:src" content="<?php echo $image; ?>">
      <!-- <meta name="twitter:player" content=""> -->
      <!-- Open Graph general (Facebook, Pinterest & Google+) -->
      <meta name="og:title" content="<?php echo $title; ?>">
      <meta name="og:description" content="<?php echo $description; ?>">
      <meta name="og:image" content="<?php echo $image; ?>">
      <meta name="og:url" content="<?php echo $url; ?>">
      <meta name="og:site_name" content="<?php echo $site_name; ?>">
      <meta name="og:video" content="<?php echo $video; ?>">
      <meta name="og:locale" content="<?php echo $locale; ?>">
      <!-- <meta name="fb:admins" content="">
         <meta name="fb:app_id" content=""> -->
      <meta name="og:type" content="website">
      <style>
         /*body{
         overflow-y: scroll;
         }
         .scroll-wrapper {
         overflow: auto;
         -webkit-overflow-scrolling: touch;
         overflow-y: scroll;
         } */
         #iframe iframe{
         height: calc(100% - 50px);
         /*position: relative;*/
         /*position: absolute;*/
         left: 0;
         right: 0;
         top: 0;
         bottom: 0;
         border: 0;
         height: 90%;
         min-width: 100%;
         width: 10px;
         -webkit-overflow-scrolling: touch;
         overflow-y: scroll;
         }
      </style>
      <script async>(function(s,u,m,o,j,v){j=u.createElement(m);v=u.getElementsByTagName(m)[0];j.async=1;j.src=o;j.dataset.sumoSiteId='3f01d7a57fb4246b1c668e5dcff27ab1576b2a3cfca252ddb6ac6455e0ff318e';v.parentNode.insertBefore(j,v)})(window,document,'script','//load.sumo.com/');</script>
   </head>
   <body>
      <?php                   
         if($_GET['iframe-type'] == 'iframely'){ 
           echo '<div class="iframely-content" style="width:75%;margin:0 auto">';
         
           echo str_replace("<.script","<script", $_GET['iframe-content']);
         
           echo '</div>';
         
         } else if ($_GET['iframe-type'] == 'amp'){ ?>
      <div class="scroll-wrapper">
         <div class="scroll-wrapper">
            <iframe width="100%" height="100%" src="<?php echo $_GET['iframe-content']; ?>"/>
         </div>
      </div>
      <? } else if($_GET['iframe-type'] == 'amp'){ ?>       
      <div class="scroll-wrapper">
      <div id="iframe" style="border-bottom: 3px solid;">
      <iframe width="100%" height="90%" scrolling="no" frameborder="0" src=""></iframe>
      </div>
      </div>
      <?php
         } else { ?>
      <div class="scroll-wrapper">
         <div class="scroll-wrapper">
            <div id="iframe" style="border-bottom: 3px solid;">
               <!-- <iframe width="100%" height="90%" scrolling="no" frameborder="0" src=""></iframe> -->
            </div>
         </div>
      </div>
      <?php } ?>   
      <div class="fb-livechat">
         <div class="fb-livechat-welcome" id="chat-welcome" width="1000px" height="1000px" >
            <div class="_li">
               <div class="pluginSkinLight pluginFontHelvetica">
                  <div>
                     <div id="u_0_0">
                        <div class="_30ss">
                           <div class="_j68">
                              <div class="promptHeaderContainer">
                                 <div class="promptTextContainer">
                                    <div class="promptHeader">
                                       <!--                                       <img src="https://thumbs.gfycat.com/ResponsibleBeautifulHoki-max-1mb.gif" style="margin:10px">
                                          -->                                      
                                       <p><?php echo $message1; ?></p>
                                    </div>
                                    <div class="promptSubheader">
                                       <div class="profilePictureContainer">
                                          <div class="_4cqr">
                                             <img class="profilePicture img" id="profile-picture" alt="" src="<?php echo $fbImage ?>"/>
                                             <div class="clearfix"></div>
                                          </div>
                                       </div>
                                       <div class="username" id="username"><?php echo $username; ?></div>
                                       <!-- <a class="notYouLink" href="#">Not you?</a> -->
                                    </div>
                                 </div>
                                 <div class="_4cqr">
                                    <img class="profilePicture img" alt="" src="<?php echo $fbImage ?>"/>
                                    <div class="clearfix"></div>
                                 </div>
                                 <div class="closeButtonContainer">
                                    <div class="_4bqf _2t-5 fb-button" tabindex="0" role="button">
                                       <svg width="10px" height="10px" viewBox="0 0 14 14">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                             <g transform="translate(-419.000000, -413.000000)">
                                                <g transform="translate(164.000000, 396.000000)">
                                                   <g>
                                                      <g transform="translate(250.000000, 12.000000)">
                                                         <g>
                                                            <g>
                                                               <rect opacity="0.200000003" x="0" y="0" width="24" height="24"></rect>
                                                               <g transform="translate(4.000000, 4.000000)" fill="#000000">
                                                                  <rect transform="translate(8.000000, 8.000000) rotate(45.000000) translate(-8.000000, -8.000000) " x="7" y="-1" width="2" height="18" rx="1"></rect>
                                                                  <rect transform="translate(8.000000, 8.000000) rotate(135.000000) translate(-8.000000, -8.000000) " x="7" y="-1" width="2" height="18" rx="1"></rect>
                                                               </g>
                                                            </g>
                                                         </g>
                                                      </g>
                                                   </g>
                                                </g>
                                             </g>
                                          </g>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                              <a onclick="window.open('<?php echo $cta; ?>', '_blank')">
                                 <div class="promptButtonContainer">
                                    <div class="_4bqf promptButton" tabindex="0" role="button" style="color: rgb(0, 132, 255);">Chat Now</div>
                              </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="ctrlq fb-overlay" style="display: none;"></div>
         <div class="fb-widget" style="display: none; bottom: 0px; opacity: 0;">
            <div class="fb-customerchat fb_invisible_flow fb_iframe_widget" page_id="450517685117626" ref="5a0f1e4c5fbb4043950463df" minimized="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=712856635533512&amp;container_width=0&amp;locale=en_US&amp;minimized=false&amp;page_id=450517685117626&amp;ref=5a0f1e4c5fbb4043950463df&amp;sdk=joey">
               <span style="vertical-align: bottom; width: 1000px; height: 0px;">
               <iframe name="f177f0ad30ab644" width="1000px" height="100px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:customerchat Facebook Social Plugin" src="customerchat.php?msg=<?php echo $message2  ?>&facebook-url=<?php echo $facebookUrl ?>&image=<?php echo urlencode($fbImage) ?>" style="border: none; visibility: visible; width: 270pt; height: 360pt; border-radius: 9pt; bottom: 72pt; box-shadow: rgba(0, 0, 0, 0.15) 0px 3pt 12pt; display: inline; padding: 0px; position: fixed; left: 18pt; top: auto; z-index: 2147483647;" class="" data-testid="dialog_iframe"></iframe>
               </span>
            </div>
         </div>
         <a title="Send us a message on Facebook" class="ctrlq fb-button" style="display: block;"></a>
         <p id="console" class="hidden none">Loading...</p>
         <p id="poweredby" style="float:right;margin:20px">Powered by <b>Campfire</b></p>
      </div>
   </body>
   <script type="text/javascript">
      $(document).ready(function(){
        var iframe_type = '';
        <?php if($_GET['iframe-type'] != null){ ?>
          iframe_type = "<?php echo $_GET['iframe-type']; ?>";
        <?php } ?> 
        var url = "<?php echo $_GET['url']; ?>";  
        if(iframe_type == ''){          
          $("#iframe iframe").attr({'src': url});
        }    
        // TESTING IF IFRAME, ELSE REDIRECT
        if(canAccessIFrame(decodeURIComponent(url))){
      
        }else{
          //window.location.replace(url);
        }
      
      });
      
      $.urlParam = function(name, url) {
        if (!url) {
         url = window.location.href;
        }
        var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(url);
        if (!results) {
            return undefined;
        }
        return results[1] || undefined;
      }
   </script>
   <script>
      $(document).ready(function() {
              var t = {
                  delay: 650,
                  overlay: $(".fb-overlay"),
                  widget: $(".fb-widget"),
                  button: $(".fb-button"),
                  welcome: $(".fb-livechat-welcome")
              };
              setTimeout(function() {
                  $("div.fb-livechat").fadeIn()
              }, 8 * t.delay), $(".ctrlq").on("click", function(e) {
                  e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({
                      bottom: 0,
                      opacity: 0
                  }, 2 * t.delay, function() {
                      //$(this).hide("slow"), t.button.show()
                  })) : t.welcome.fadeOut(t.delay, function(){
                  //   t.widget.stop().show().animate({
                  //         bottom: "100px",
                  //         opacity: 1
                  // }, 2 * t.delay), t.overlay.fadeIn(t.delay)
                  })
              })
      
              $('.fb-button').click(function(){
                if($('.fb-livechat-welcome').css('display') == 'none'){
                  t.welcome.fadeIn(t.delay);
                }else{
                  t.welcome.fadeOut(t.delay);
                }
              });
      
              // $('.promptButton').click(function(){
              //   t.welcome.fadeOut(t.delay, function(){
              //     t.widget.stop().show().animate({
              //           bottom: "100px",
              //           opacity: 1
              //   }, 2 * t.delay), t.overlay.fadeIn(t.delay)
              //   })
              // });
          });
      
      function canAccessIFrame(url) {
          var iframeLoaded = false;
          var iframe = document.createElement('iframe');
      
          // ***** SWAP THE `iframe.src` VALUE BELOW FOR DIFFERENT RESULTS ***** //
          // iframe.src = "https://jsfiddle.net/7qusz4q3/117/"; // This will work. There is no 'X-Frame-Options' header.
          iframe.src = url; // This won't work. 'X-Frame-Options' is set to 'SAMEORIGIN'.
          // iframe.id = 'theFrame';
           
          var iframeOnloadEvent = function () {
            iframeLoaded = true;
            var consoleDiv = document.getElementById('console');
            if (iframe.contentWindow.length > 0) {
              consoleDiv.innerHTML = '✔ Content window loaded: ' + iframe.src;
              consoleDiv.style.cssText = 'color: green;'
              // REMOVE TESTING
              $('#theFrame').remove();
            } else {
              // REDIRECT
              if(url.indexOf("ampproject") || url.indexOf("youtube.com/embed") !== -1 ){
      
              }else{
                //window.location.replace(url);
                consoleDiv.innerHTML = '✘ Content window failed to load: ' + iframe.src;
                consoleDiv.style.cssText = 'color: red;'
              }
              
            }
          } 
      
          if (iframe.attachEvent){
            iframe.attachEvent('onload', iframeOnloadEvent);
          } else {
            iframe.onload = iframeOnloadEvent;
          }
          $('#iframe').append(iframe);
      
          // iframe.onload event doesn't trigger in firefox if loading mixed content (http iframe in https parent) and it is blocked.
          setTimeout(function () {
            if (iframeLoaded === false) {
              //window.location.replace(url);
              consoleDiv.innerHTML = '✘ iframe failed to load within 5s: ' + iframe.src;
              consoleDiv.style.cssText = 'color: red;'    
            }
      
            $('#theFrame').remove();
          }, 5000);
      }
   </script>
</html>