<body id="body">
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d187aa35d452b00127d7644&product='inline-share-buttons' async='async'></script>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create Form</h1>
    <script type="text/javascript">
      function add(type)
      {
        ch = prompt("Enter 1.textbox 2.radio 3.image/pdf 4.Drop-down name as text1,text2,text3... for string type inputs");
        if(ch==1)
        {
            var element = document.createElement("input");
            element.setAttribute("type",type);
            element.setAttribute("value",type);
            element.setAttribute("name",type);
            element.value=prompt("Set value:");
            element.name=prompt("Set name:");
            var s = document.getElementById("bar");
            s.appendChild(element);
          }
          if(ch==2)
          {
            var l = document.getElementById("msg");
            l.style.display = "block";
            var element = document.createElement("input");
            element.setAttribute("type",type);
            element.setAttribute("value",type);
            element.setAttribute("name",type);
            var s = document.getElementById("bar");
            l.appendChild(element);
          }
          if(ch==3)
        {
            var element = document.createElement("input");
            element.setAttribute("type",type);
            element.setAttribute("value",type);
            element.setAttribute("name",type);
            element.name="file";
            var s = document.getElementById("bar");
            s.appendChild(element);
          }
          if(ch==4)
          {
            var b=document.getElementById("branch");
            b.style.display="block";
            var temp=document.getElementById("start");

            var n=prompt("Enter no. of options");
            var a=1;
            while(a<=n)
               {
                var opt = document.createElement("option");
                opt.text=prompt("Set text");
                opt.value=prompt("Set value");
                temp.options.add(opt);
                a++;
             }
          }



          }
    
    </script>
    <form class="form" action="process.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>

      Enter Choice:<select name="element">
        <option value="text">Text</option>
        <option value="text">Drop-down</option>
        <option value="radio">radio</option>
       <option value="file">file</option>
      </select>
      <input type="button" value="add" class="btn"  onclick="add(document.forms[0].element.value)"/>
      <span id="bar">&nbsp;
        <p id="branch" style="display: none;">
       <label >Menu</label>
       <select id="start">
         <option >...</option>
       </select>
       </p>

      <p id="msg" style="display: none;">Confirm     </p>

      </span><br>
      <div>
      <input type="submit" value="Save" name="save" class="btn" />
    </div>
      </div>
    </form>
  </div>
</div>
<div class="fb-share-button" data-href="https://localhost/n/details.php" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flocalhost%2Fn%2Fdetails.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
<div class="sharethis-inline-share-buttons"></div>

</body>