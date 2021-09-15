  <style>

    body {
      font-family: "Lato", sans-serif;
      /* background-color: #E0E0E0; */
      background-color: #white;
      margin:5%;
    }

    /* Style the tab */
    .tab {
      float: left;
      border: 0px solid #ccc;
    /* background-color: #E0E0E0; */
    background-color: #white; 
      width:30%;
      margin-left: 15%;
      padding:2%;
    height:70%;
    overflow: scroll;
      margin-top: 5%;
    }

    /* Style the buttons inside the tab */
    .tab button {
      display: block;
      background-color: inherit;
      color: black;
      padding: 22px 16px;
      width: 90%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      font-size: 17px;
      margin-bottom: 10%;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: white;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
      background: #FFFFFF;
      box-shadow: 10px 10px 20px 20px rgba(0, 0, 0, 0.06);
      border-radius: 10px;
      border: 0.4px solid rgba(0, 0, 0, 0.04);


    }


    .heading {
      margin-left: 10%;
      font-size: 30px;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;
      padding: 0px 1px;

      width: 30%;

      height: 300px;
      margin-left: 7%;
      margin-top: 5%;

    }

    .name {

      margin-top: 0%;
      margin-bottom: 2%;
    }

    .post {

      color: grey;
      margin-top: 3%;
      margin-bottom: 0%;

    }

    .profile_pic {
      width: 15%;
      height: 43px !important;
      border-radius: 50px;
      display: inline-block;
      margin-top: 0%;
    }
    .test{
      font-size: 20px;
      line-height: 2.6;
      display: inline-block;
      margin: 0%;
      
    }
    .apostrophe{
      font-size: 30px;
      display: inline-block;
      quotes: "“" " ”";
    }
    h1{
      margin:0px;
    }
</style>
<h2 class="heading">TESTIMONIAL</h2>

  <div class="tab">
    <button class="tablinks" onclick="openTest(event, 'test1')" id="defaultOpen"><img class="profile_pic"
        src="profile.jpg">
      <div style="display:inline-block;margin-left:12%;">
        <p class="name">Milton Austin</p>
        <p class="post">Sales Manager, Stack</p>
      </div>
    </button>
    <button class="tablinks" onclick="openTest(event, 'test2')"><img class="profile_pic" src="profile.jpg">
      <div style="display:inline-block;margin-left:12%;">
        <p class="name">John Reeves</p>
        <p class="post">HR Manager</p>
      </div>
    </button>
    <button class="tablinks" onclick="openTest(event, 'test3')"><img class="profile_pic" src="profile.jpg">
      <div style="display:inline-block;margin-left:12%;">
        <p class="name">Luke Austin</p>
        <p class="post">Sales Manager, Stack</p>
      </div>
    </button>
    <button class="tablinks" onclick="openTest(event, 'test4')"><img class="profile_pic" src="profile.jpg">
      <div style="display:inline-block;margin-left:12%;">
        <p class="name">Milton Austin</p>
        <p class="post">Sales Manager, Stack</p>
      </div>
    </button>
    <button class="tablinks" onclick="openTest(event, 'test5')"><img class="profile_pic" src="profile.jpg">
      <div style="display:inline-block;margin-left:12%;">
        <p class="name">Milton Austin</p>
        <p class="post">Sales Manager, Stack</p>
      </div>
    </button>
  </div>

  <div id="test1" class="tabcontent">
    <h3 style="margin-bottom: 10%;"></h3>
    <div style="display: inline-block;"><p class="test"><h1 >“</h1><p class="test">test1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat </p>
      <h1 style="margin-left:80%;"> ”</h1> </p> </div>
  </div>

  <div id="test2" class="tabcontent">
    <h3 style="margin-bottom: 10%;"></h3>
    <div style="display: inline-block;"><p class="test"><h1 >“</h1><p class="test">test 2Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat </p>
      <h1 style="margin-left:80%;"> ”</h1> </p> </div>
  </div>

  <div id="test3" class="tabcontent">
    <h3 style="margin-bottom: 10%;"></h3>
    <div style="display: inline-block;"><p class="test"><h1 >“</h1><p class="test">test 3Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat </p>
      <h1 style="margin-left:80%;"> ”</h1> </p> </div>
  </div>
  <div id="test4" class="tabcontent">
    <h3 style="margin-bottom: 10%;"></h3>
    <div style="display: inline-block;"><p class="test"><h1 >“</h1><p class="test">test 4Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat </p>
      <h1 style="margin-left:80%;"> ”</h1> </p> </div>
  </div>
  <div id="test5" class="tabcontent">
    <h3 style="margin-bottom: 10%;"></h3>
    <div style="display: inline-block;"><p class="test"><h1 >“</h1><p class="test">test 5Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat </p>
      <h1 style="margin-left:80%;"> ”</h1> </p> </div>
  </div>
  </div>
  </div>
<script>
  function openTest(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>