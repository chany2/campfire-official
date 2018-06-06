<?php

  $image = urldecode($_GET['image']);
  $fb_chat = 'https://m.me' . parse_url($_GET['facebook-url'], PHP_URL_PATH);

?>
<html lang="en" id="facebook" class="svg ">
   <head>
      <meta charset="utf-8">
      <title>Facebook</title>
      <link type="text/css" rel="stylesheet" href="etc/assets/style-chat.css">
   </head>
   <body dir="ltr" class="plugin chrome webkit mac x2 Locale_en_US">
      <div class="_li">
         <div class="pluginSkinLight pluginFontHelvetica">
            <div>
               <div id="u_0_0">
                  <div class="_30ss">
                     <div class="_3gog" style="border-radius: 9pt;">
                        <div class="_f_0">
                           <div class="_1qd1">
                              <div class="_2t-5 _4bqf" tabindex="0" role="button">
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
                           <div class="_hov">
                              <div class="_how _4ik4 _4ik5" style="-webkit-line-clamp: 1;"><?php echo $username ?></div>
                              <div class="_hox _4ik4 _4ik5" style="-webkit-line-clamp: 1;">Typically replies instantly</div>
                           </div>
                           <div class="_1qd3">
                              <div class="_4bqf _17l7" tabindex="0" role="button">
                                 <svg width="24px" height="24px" viewBox="0 0 24 24">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <g transform="translate(-413.000000, -56.000000)">
                                          <g transform="translate(90.000000, 44.000000)">
                                             <g>
                                                <g>
                                                   <g transform="translate(324.000000, 13.000000)">
                                                      <circle fill="#FFFFFF" stroke="#0084FF" cx="11" cy="11" r="11"></circle>
                                                      <path d="M11,9 L12,9 L12,17 L13,17 L13,17.5 L9,17.5 L9,17 L10,17 L10,9.5 L9,9.5 L9,9 L11,9 Z M11,4.5 C11.8284271,4.5 12.5,5.17157288 12.5,6 C12.5,6.82842712 11.8284271,7.5 11,7.5 C10.1715729,7.5 9.5,6.82842712 9.5,6 C9.5,5.17157288 10.1715729,4.5 11,4.5 Z" fill="#0084FF">
                                                      </path>
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
                        <div class="_424s">
                           <div class="_5f0v uiScrollableArea fade contentAfter contentBefore" height="100%" tabindex="0" style="height: 100%;">
                              <div class="uiScrollableAreaTrack hidden_elem" tabindex="0" style="opacity: 0;">
                                 <div class="uiScrollableAreaGripper" style="height: 117.395px; top: 158.268px;"></div>
                              </div>
                              <div class="uiScrollableAreaWrap scrollable" id="js_1" style="overscroll-behavior: contain contain;">
                                 <div class="uiScrollableAreaBody">
                                    <div class="uiScrollableAreaContent">
                                       <div>
                                          <div class="preventScrollOverflow">
                                             <div class="conversationContainer">
                                                <h4 class="datebreak _497p _2lpt">
                                                   <time class="_3oh-">-</time>
                                                </h4>
                                                <div class="_4xkn clearfix">
                                                   <div class="profilePictureColumn">
                                                      <div class="_4cqr">
                                                         <img class="profilePicture img" src="<?php echo $image ?>" alt="">
                                                         <div class="clearfix"></div>
                                                      </div>
                                                   </div>
                                                   <div class="messages">
                                                      <div class="_4xko _2k7w _4xkr">
                                                         <div class="_2k7x">
                                                            <div class="_4fgw">
                                                               <div class="_636o" style="background-image: url(https://thumbs.gfycat.com/ResponsibleBeautifulHoki-max-1mb.gif); background-position: center center; height: 150px; width: 100%;"></div>
                                                               <div class="_2kay">
                                                                  <div class="_2kbn _4ik4 _4ik5" style="-webkit-line-clamp: 1;"><?php echo $_GET['msg']?></div>
                                                                  <!-- <div class="_2kbt">
                                                                     <div>Want to jumpstart 1 on 1 chats with your leads? <br><br> Just type <b>"Yes"</b> below.</div>
                                                                  </div> -->
                                                               </div>
                                                               <!-- <div class="_lx4">
                                                                  <div class="_4bqf _3onj">
                                                                    <a class="_3gq2" href="https://www.facebook.com/messages/t/gary.yau.chan" target="_blank" style="color: rgb(0, 132, 255);">Make A Chatbot</a>
                                                                  </div>
                                                                  </div> -->
                                                               <div class="_lx4">
                                                                  <!--                                         <div class="_4bqf _3onj"><a class="_3gq2" href="https://www.facebook.com/messages/t/gary.yau.chan" target="_blank" style="color: rgb(0, 132, 255);">Make A Keyboard</a></div> -->
                                                               </div>
                                                               <!-- <div class="_lx4">
                                                                  <div class="_4bqf _3onj"><a class="_3gq2" href="https://www.facebook.com/messages/t/gary.yau.chan" target="_blank" style="color: rgb(0, 132, 255);">Join The Snaps Team</a></div>
                                                                  </div> -->
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- <div class="logMessage"><span><span>You opened this conversation from Gary-Yau Chan.</span></span></div> -->
                                             </div>
                                          </div>
                                          <div style="position: relative; top: 0px;">
                                             <div class="_2ufb">
                                                <div currentselectedindex="0" maxchangeamount="1" class="_23n-">
                                                   <div class="_4u-c">
                                                      <div index="0" class="_a28">
                                                         <div class="_a2e">
                                                            <div class="_2zgz">
                                                               <div class="_4bqf _2ufc _1s74 _635y" tabindex="0" role="button" style="border-color: rgb(0, 132, 255); color: rgb(0, 132, 255);">
                                                                  <img class="_2uff img" src="https://www.shareicon.net/download/2016/07/10/119951_tinder.ico" alt="">Add this widget to my links
                                                               </div>
                                                            </div>
                                                            <div class="_2zgz">
                                                               <div class="_4bqf _2ufc _1s74 _635y" tabindex="0" role="button" style="border-color: rgb(0, 132, 255); color: rgb(0, 132, 255);">
                                                                  <img class="_2uff img" src="https://external.xx.fbcdn.net/safe_image.php?d=AQDdk8sSTbveFXMc&amp;url=https%3A%2F%2Fstickers.snaps.photo%2F57f417c33b3593eb37dd8e4c%2Fproduction%2F59efddde1d56585c1b10841f.png&amp;_nc_hash=AQAfVZ35PntmU9Ko" alt="">Get Started with Campfire
                                                               </div>
                                                            </div>
                                                            <div class="_2zgz">
                                                               <div class="_4bqf _2ufc _1s74 _635y" tabindex="0" role="button" style="border-color: rgb(0, 132, 255); color: rgb(0, 132, 255);">
                                                                  <img class="_2uff img" src="https://external.xx.fbcdn.net/safe_image.php?d=AQA6-zV2QzeOJH8K&amp;url=https%3A%2F%2Fstickers.snaps.photo%2F57f417c33b3593eb37dd8e4c%2Fproduction%2F5a0f4b8c1128ea48b7fde5d9.jpg&amp;_nc_hash=AQCNjBK-HysBEl-N" alt="">Learn about Conversation Qualified Leads
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="_4u-f">
                                                         <iframe aria-hidden="true" class="_1_xb" tabindex="-1"></iframe>
                                                      </div>
                                                   </div>
                                                   <div class="_32rk _32rh _32ri _32rj">
                                                      <div class="_3bwv _3bww">
                                                         <div class="_3bwy">
                                                            <div class="_3bwx">
                                                               <a class="" href="#">
                                                                  <div direction="forward" class="_10sf _5x5_">
                                                                     <div class="_5x6d">
                                                                        <div class="_3bwv _3bww">
                                                                           <div class="_3bwy">
                                                                              <div class="_3bwx">
                                                                                 <i class="_3-8w img sp_DDf-pXCfo-I_2x sx_090c1c" alt=""></i>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="_336a">
                           <div class="_4zbw">
                              <div class="_4fwe">
                                 <label class="_58ak _3ct8"><input class="_58al" type="text" placeholder="Type a message..." value=""></label>
                              </div>
                              <div class="_kmd">
                                 <div class="_4bqf _64mk" tabindex="0" role="button">
                                    <a data-hover="tooltip" data-tooltip-content="Press Enter to send Press Shift+Enter to add a new paragraph" class="_30yy _38lh _39bl" onclick="window.open('<?php echo $fb_chat ?>', '_blank')">Send</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>