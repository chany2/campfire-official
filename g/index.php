<html>
   <head>
      <title>Campfire Chat Homepage</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Create Real Sales Opportunities on Any Link You Share.">
      <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Raleway:900" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   </head>
   <style type="text/css">
      body{
      font-family: 'Libre Baskerville', serif;
      font-size: 3vmin;
      color: #3D3D3D
      }
      h1{
      font-family: 'Raleway', sans-serif;
      font-size: 5vw;
      color:#DF0A09;
      }
      p{
      color: #6E6E6E
      }
      .container {
      text-align: center;
      height: 50%!important;
      max-width: 100%!important;
      display: flex;
      position: fixed;
      align-items: center;
      justify-content: center;
      margin: 0px;
      padding: 0px;
      }
      ._30ss{
      display: block;
      }
      #url-invalid{
        color: red;
        display: none;
      }
      #url-valid{
        color: green;
        display: none;
      }
   </style>
   <body>
      <div class="container">
         <div>
            <h1>CAMPFIRE CHATS</h1>
            <h2>Turn sharing content into sales opportunities</h2>
            <p>Add chat to any link you share</p>
         </div>
      </div>
      <div class="fixed-bottom">
         <div class="bottom-navbar">
            <div class="row">
               <div class="col-md-12">
                  <form action="result.php" method="GET">
                     <div class="form-group">
                        <span id="url-invalid">!!!! This URL can't be Iframe !!!!</span>
                        <span id="url-valid">This URL can be Iframe</span>
                        <small>Enter a URL</small>
                        <input id="url" name="url" class="form-control" type="text" placeholder="Enter URL" required/>
                     </div>
                     <div class="form-group">
                        <small>Message</small>
                        <textarea id="message1" name="message1" class="form-control" placeholder="Type Message #1..." required></textarea>
                     </div>
                     <!-- <div class="form-group">
                        <small>Message 2</small>
                        <textarea id="message2" name="message2" class="form-control" placeholder="Type Message #2..." required></textarea>
                     </div> -->
                     <div class="form-group">
                        <small>Facebook Profile URL</small>
                        <input id="facebook-url" name="facebook-url" class="form-control" type="text" placeholder="Your facebook profile URL" required/>
                     </div>
                     <div class="form-group">
                        <small>CTA</small>
                        <input id="cta" name="cta" class="form-control" type="text" placeholder="Type CTA" required/>
                        <small>https://www.linkedin.com/messaging/compose/?after=mynetwork.index&recipient={{linkedin-public-profile-id}}</small>
                     </div>
                     <div class="form-group">
                        <input type="text" name="iframe-type" id="iframe-type"/>                        
                        <input type="text" name="iframe-content" id="iframe-content"/>
                        <input type="submit" id="submit" class="btn btn-success" value="OK"/>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
   <script type="text/javascript">
      $(document).ready(function(){

        // LOAD LOCALSTORAGE
        $('input[type="text"]').each(function(){    
            var id = $(this).attr('id');
            var value = localStorage.getItem(id);
            $(this).val(value);  
         }); 
        $('textarea').each(function(){    
            var id = $(this).attr('id');
            var value = localStorage.getItem(id);
            $(this).val(value);  
         }); 


        // validate whether url permits embed iframe or no
        $("#url").change(function(){
          validate_url();
        });

        if($("#url").val() !== ""){
          validate_url();
        }

        $("#submit").on({
            mouseover:function(){
                validate_url();

                // SAVE LOCALSTORAGE
                $('input[type="text"]').each(function(){    
                  var id = $(this).attr('id');
                  var value = $(this).val();
                 localStorage.setItem(id, value);
                }); 
                $('textarea').each(function(){    
                  var id = $(this).attr('id');
                  var value = $(this).val();
                 localStorage.setItem(id, value);
                }); 
            }
        });

        // CONVERT USER PROFILE TO CTA
        $('#facebook-url').keyup(function() {
            var profile_url = $('#facebook-url').val();
           if (profile_url.indexOf("facebook.com") >= 0){
               var cta_url = 'https://www.m.me'+ /.com(.+)/.exec(profile_url)[1];
               $('#cta').val(cta_url);
           }else if(profile_url.indexOf("linkedin.com") >= 0){
               var regex = /(?:\/.*\/)(.*)/;
               var user_id = regex.exec(profile_url)[1];
               var cta_url = 'https://www.linkedin.com/messaging/compose/?after=mynetwork.index&recipient='+ user_id;
               $('#cta').val(cta_url);
           }
        })

        $("#submit").click(function(){
          var url = $("#url").val();
          if(url != ""){
            $(location).attr('href', 'result.php?url=' + url);
          }
        });

      });

      function url_valid(){
        $("#url-valid").show();
        $("#url-invalid").hide();
      }

      function url_invalid(){
        // ERROR
        $("#url-valid").hide();
        $("#url-invalid").show();
      }

      function add_http(url){
        if (!/^https?:\/\//i.test(url)) {
            url = 'http://' + url;
        }
        $("#url").val(url);
        return url;
      }

      function mod_security_replace(string){
        //Not Acceptable! An appropriate representation of the requested resource could not be found on this server. This error was generated by Mod_Security.
        return string.replace(/\<script/g, "<.script");
      }

      function validate_url(){
        $("#iframe-type").val("");
        $("#iframe-content").val("");


        var insert_url = add_http($("#url").val());

        request = $.ajax({
          url: "iframe_validator.php?url=" + insert_url,
          type: "get"            
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR){            
            if(response == "true"){
              console.log('iframe_validator');
              url_valid();
            } else {
              
              // use AMP
              $.ajax({
                url: "https://content-acceleratedmobilepageurl.googleapis.com/v1/ampUrls:batchGet?key=AIzaSyCmliN1wBKxoaqvOPiDI_Ra-U2xqWTGL6o",
                type: "POST",
                data: "{\"urls\" : [\"" + insert_url + "\"]}",
                contentType:"application/json",
                dataType:"json",
                success: function(data){             
                console.log(data);       
                  if(data.hasOwnProperty("ampUrls")){

                    console.log('amp');

                    $("#iframe-type").val("amp");
                    mod_security_replace($("#iframe-content").val(data.ampUrls[0].cdnAmpUrl));

                    url_valid();
                  } else {

                    // use iFramely                
                    ifrmelyRequest = $.ajax({
                      url: "http://iframe.ly/api/iframely?api_key=a87f8ebff19f3d6e13deae&url=" + insert_url,
                      type: "get"
                    });                
                    ifrmelyRequest.done(function (response, textStatus, jqXHR){            
                      console.log(response);

                      console.log('iframely');

                      $("#iframe-type").val("iframely");
                      mod_security_replace($("#iframe-content").val(response.html));
                      url_valid();
                    }).fail(function(data){
                      url_invalid();
                    });                
                  }
                }
              })                
            }
        });          
      }
   </script>
</html>