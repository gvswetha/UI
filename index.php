<?php 
   include "./lib/load.php";
?>
    <head>
      <!-- For Montserrat -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="frame33.css">
<!-- For CHEESEBURGA (Custom Font Example) -->
<style>
@font-face {
    src: url('path_to_your_cheeseburga_font.woff') format('woff');
     font-family: CHEESEBURGA !important;

}
.content {
  position: absolute;
  z-index: 10; /* Ensure this is higher than other elements */

  display: block; /* Ensure this is set to block or inline */
  visibility: visible;
}


/* Main content and layout */
.main-content {
  width: 100vw;
  height: 100vh;
  position: relative;
  overflow: hidden;
}

/* Frame33 is hidden initially */
#frame33 {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.8); /* Dark semi-transparent background */
  z-index: 1000;
  overflow-y: auto;
}

/* Show the PC frame overlay */
#frame33.active {
  display: block;
}

/* Blur background effect */
.blur-bg {
  filter: blur(8px);
  transition: filter 0.3s ease;
}

/* Lock body scrolling */
body.scroll-lock {
  overflow: hidden;
}



</style>
<div class="Component12">
  <!-- Main Content Section -->
  <div class="Property1Component10 main-content" style="position: relative; width: 100vw; height: 100vh; background-color: #2E333E;">
    <img class="BackgroundImage" style="width: 100%; height: 100%; position: absolute;" src="/Alabay Assets/Assets/image.png"/>

    <!-- Button to trigger the frame -->
    <button id="toggleFrameBtn" style="position: absolute; width: 591px; height: 0px; border: 29px #FFF6A1 solid; bottom: 110px; left: 50%; color:#FFF6A1; transform: translateX(-50%);" onclick="togglePcFrame()">&#8593; Open Frame</button>
    
    <!-- Main Page Content -->
    <div class="Rectangle37" style="width: 1920px; height: 242px; background: #181C27"></div>
    <div class="WhereTheLegendaryCentralAsianShepherdDogMeetsANewAgeAdventureJoinUsInCelebratingTheStrengthLoyaltyAndHeritageOfTheAlabayBreed" style="width: 1820px; height: 238px; text-align: center">
      <span style="color: white; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word">where the </span>
      <span style="color: #FFF280; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word">legendary Central Asian Shepherd Dog</span>
      <span style="color: white; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word"> meets a new-age adventure.</span>
      <span style="color: #FFF280; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word">Join</span>
      <span style="color: white; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word"> </span>
      <span style="color: #FFF280; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word">us</span>
      <span style="color: white; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word"> in celebrating the</span>
      <span style="color: #FFF280; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word"> strength</span>
      <span style="color: white; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word">, </span>
      <span style="color: #FFF280; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word">loyalty</span>
      <span style="color: white; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word">, and </span>
      <span style="color: #FFF280; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word">heritage</span>
      <span style="color: white; font-size: 48px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word"> of the Alabay breed.</span>
    </div>
  </div>

  <!-- The overlay frame that will cover the entire page -->
  <div class="Frame33" id="frame33">
    <!-- Close Button -->
    <button id="closeFrame" style="position: absolute;top: 202px;left: 50%;width: 195px;font-size: 24px;background: #fff6a1;border: 29px #FFF6A1 solid;color: #FFF6A1;z-index: 5;height: 2px;border-radius: 16px;" onclick="togglePcFrame()">&#8595; Close</button>
     <!-- <div class="PcFrame" style="width: 90vw; height: 15360px; position: relative; border-radius: 40px; overflow: hidden;">
    <div class="Rectangle1" style="width: 100%; height: 15218px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 40px"></div>
    <div class="Line3" style="width: 231px; height: 0px; left: calc(50% - 115.5px); top: 61px; position: absolute; border: 29px #FFF6A1 solid"></div> 
    <div class="Rectangle2" style="width: 100%; height: 1184.95px; left: 36.91px; top: -239px; position: absolute; transform: rotate(6deg); transform-origin: 0 0; background: radial-gradient(116.38% 119.79% at 38.70% -889.92%, #FFF280 0%, #FFC700 100%); border-radius: 40px"></div> -->
   

   <div class="PcFrame" style="width: 1796px; height: 15360px; position: relative; border-radius: 40px;  overflow: hidden ">
    <div class="Rectangle1" style="width: 1796px; height: 15218px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 40px"></div>
   <div class="Line3" style="width: 231px; height: 0px; left: 783px; top: 61px; position: absolute; border: 29px #FFF6A1 solid"></div> 
     <div class="Rectangle2" style="width: 1955.40px; height: 1184.95px; left: 36.91px; top: -239px; position: absolute; transform: rotate(6deg); transform-origin: 0 0; background: radial-gradient(116.38% 119.79% at 38.70% -889.92%, #FFF280 0%, #FFC700 100%); border-radius: 40px"></div> 
    <div class="Rectangle3" style="width: 2134px;height: 1935.35px;left: 6.3px;top: 2667px;position: absolute;transform: rotate(2deg); transform-origin: 0 0; background: radial-gradient(115.71% 184.26% at -320.37% -434.23%, #FFF280 0%, #FFC700 100%)"></div>
    <div class="Rectangle4" style="width: 2134px;height: 1935.35px;left: -16.3px;top: 6389px;position: absolute;transform: rotate(4deg); transform-origin: 0 0; background: radial-gradient(115.71% 184.26% at -320.37% -434.23%, #FFF280 0%, #FFC700 100%)"></div>
    <div class="Rectangle5" style="width: 2134px; height: 1935.35px; left: -13.65px; top: 10063.51px; position: absolute; transform: rotate(2deg); transform-origin: 0 0; background: radial-gradient(115.71% 184.26% at -320.37% -434.23%, #FFF280 0%, #FFC700 100%)"></div>
     <div class="Frame2" style="width: 982.30px; height: 1645px; left: 10.70px; top: 264px; position: absolute">
  
      <div class="MaskGroup" style="width: 965.38px; height: 940px; left: 0px; top: 694.88px; position: absolute">
        <!-- <div class="Rectangle3" style="width: 965.38px; height: 940px; left: 0px; top: 0px; position: absolute;"><img style="width: 965.38px; height: 940px; left: 0px; top: 0px; position: absolute;" src="/Alabay Assets/Assets/2_.png"></div> -->
        <img class="DallE20240714164005A3dCartoonIllustrationOfAFurryCentralAsianShepherdDogJumpingHappilyInTheAirTheDogShouldHaveAJoyfulExpressionWithAWideSmile1" style="width: 962.56px; height: 962.56px; left: 2px;top: 4px; position: absolute" src="/Alabay Assets/Assets/2_.png" />
      </div>
      <img class="DallE20240714164005A3dCartoonIllustrationOfAFurryCentralAsianShepherdDogJumpingHappilyInTheAirTheDogShouldHaveAJoyfulExpressionWithAWideSmile2" style="width: 996.01px; height: 996.01px; left: -15.63px; top: -26.04px; position: absolute" src="/Alabay Assets/Assets/ 2.png" />
      <div class="HistoryOfAlabay" style="left: 886px; top: -110px; position: absolute; text-align: right"><span style="color: rgba(246.91, 104.66, 1.65, 0.82); font-size: 100.05px; font-family: Montserrat;font-weight: 900; line-height: 104.78px; word-wrap: break-word">History Of<br/></span><span style="color: white; font-size: 220px; font-family: CHEESEBURGA; font-weight: 400; line-height: 257.39px; word-wrap: break-word">ALABAY</span></div>
    </div>
    <div class="Frame4" style="left: 684px; top: 1173px; position: absolute; justify-content: flex-start; align-items: center; gap: 43px; display: inline-flex">
      <div class="All"><a href="#" style="text-align: right; color: #353535; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">ALL</div></>
      <div class="Photos"><a href="#" style="text-align: right; color: #FFA800; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">PHOTOS</div></a>
      <div class="Videos" style="text-align: right; color: #353535; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word"><a href="#"style="text-align: right; color: #353535; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">VIDEOS</div></a>
    </div>
    <div class="TheCentralAsianShepherdDogAlsoKnownAsAlabayHasBeenAGuardianOfLivestockAndPropertyForCenturiesOriginatingFromCentralAsiaTheseDogsAreRenownedForTheirCourageStrengthAndLoyalty" style="width: 769px; height: 532px; left: 923px; top: 569px; position: absolute; text-align: right; color: #353535; font-size: 46px; font-family: Kumbh Sans; font-weight: 700; line-height: 48.18px; word-wrap: break-word">The Central Asian Shepherd Dog, also known as Alabay, has been a guardian of livestock and property for centuries. Originating from Central Asia, these dogs are renowned for their courage, strength, and loyalty.</div>  
    <div class="Frame6" style="width: 1669px; height: 310px; left: 63px; top: 1221px; position: absolute; justify-content: center; align-items: center; display: inline-flex"> 
    <div class="Component4" style="width: 1669px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
        <div class="Frame5" style="padding-top: 500px; padding-bottom: 16px; padding-left: 22px; border-radius: 30px; overflow: hidden; justify-content: flex-end; align-items: flex-start; gap: 60px; display: inline-flex">
            <div class="Frame9" style="width: 456px; height: 310px; position: relative; background: #A6A6A6; flex-direction: column; border-radius: 30px; justify-content: flex-start; align-items: flex-start; display: flex">
                <div class="Component1" style="width: 456px; height: 310px; justify-content: center; align-items: center; display: inline-flex">
                    <div id="photo-display" class="Rectangle4" style="width: 456px; height: 310px; background: #A6A6A6; border-radius: 30px;"></div>
                </div>
                <div id="photo-caption" style="width: 456px; height: 310px; text-align: center; color: black; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">PHOTO 1</div>
            </div>
        <div class="Frame8" style="width: 456px; height: 310px; position: relative; background: #A6A6A6; flex-direction: column; border-radius: 30px; justify-content: flex-start; align-items: flex-start; display: flex">
            <div class="Component2" style="width: 456px; height: 310px; justify-content: center; align-items: center; display: inline-flex">
              <div id="photo-display-2" class="Rectangle4" style="width: 456px; height: 310px; background: #A6A6A6; border-radius: 30px"></div>
            </div>
            <div id="photo-caption-2" class="Photo2" style="width: 456px; height: 310px; text-align: center; color: black; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">PHOTO 2</div>
          </div>
          <div class="Frame7" style="width: 456px; height: 310px; position: relative; background: #A6A6A6; /*flex-direction: column; */border-radius: 30px;flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div class="Component3" style="width: 456px; height: 310px; justify-content: center; align-items: center; display: inline-flex">
              <div id="photo-display-3" class="Rectangle4" style="width: 456px; height: 310px; background: #A6A6A6; border-radius: 30px"></div>
            </div>
            <div id="photo-caption-3" class="Photo3" style="width: 456px; height: 310px; text-align: center; color: black; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">PHOTO 3</div>
          </div>
          <div class="Frame10" style="width: 456px; height: 310px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div class="Component3" style="width: 456px; height: 310px; justify-content: center; align-items: center; display: inline-flex">
              <div  id="photo-display-4" class="Rectangle4" style="width: 456px; height: 310px; background: #A6A6A6; border-radius: 30px"></div>
            </div>
            <div id="photo-caption-4" class="Photo4" style="width: 456px; height: 310px; text-align: center; color: black; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">PHOTO 4</div>
          </div>
          <div class="Frame11" style="width: 456px; height: 310px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div class="Component3" style="width: 456px; height: 310px; justify-content: center; align-items: center; display: inline-flex">
              <div  id="photo-display-5" class="Rectangle4" style="width: 456px; height: 310px; background: #A6A6A6; border-radius: 30px"></div>
            </div>
            <div id="photo-caption-5" class="Photo5" style="width: 456px; height: 310px; text-align: center; color: black; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">PHOTO 5</div>
          </div>
          <div class="Frame12" style="width: 456px; height: 310px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div class="Component3" style="width: 456px; height: 310px; justify-content: center; align-items: center; display: inline-flex">
              <div  id="photo-display-6" class="Rectangle4" style="width: 456px; height: 310px; background: #A6A6A6; border-radius: 30px"></div>
            </div>
            <div id="photo-caption-6" class="Photo6" style="width: 456px; height: 310px; text-align: center; color: black; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">PHOTO 6</div>
          </div>
          <div class="Frame13" style="width: 456px; height: 310px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div class="Component1" style="width: 456px; height: 310px; justify-content: center; align-items: center; display: inline-flex">
              <div id="photo-display-1" class="Rectangle4" style="width: 456px; height: 310px; background: #A6A6A6; border-radius: 30px"></div>
            </div>
            <div id="photo-caption-1" class="Photo1" style="width: 456px; height: 310px; text-align: center; color: black; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">PHOTO 1</div>
          </div>
          <div class="Frame14" style="width: 456px; height: 310px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div class="Component2" style="width: 456px; height: 310px; justify-content: center; align-items: center; display: inline-flex">
              <div id="photo-display-2"  class="Rectangle4" style="width: 456px; height: 310px; background: #A6A6A6; border-radius: 30px"></div>
            </div>
            <div id="photo-caption-2" class="Photo2" style="width: 456px; height: 310px; text-align: center; color: black; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">PHOTO 2</div>
          </div>
          <div class="Frame15" style="width: 456px; height: 310px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div class="Component3" style="width: 456px; height: 310px; justify-content: center; align-items: center; display: inline-flex">
              <div id="photo-display-3"  class="Rectangle4" style="width: 456px; height: 310px; background: #A6A6A6; border-radius: 30px"></div>
            </div>
            <div id="photo-caption-3" class="Photo3" style="width: 456px; height: 310px; text-align: center; color: black; font-size: 32px; font-family: Montserrat; font-weight: 900; line-height: 33.51px; word-wrap: break-word">PHOTO 3</div>
          </div>
        </div>
        <div class="Frame3" style="position:/* absolute;/* top: 50%; left: 5%;">
            <button id="next-btn" class="next-btn" style="width: 121px; height: 172px;left: 98%;top: 580px; position: absolute; background: #353535; box-shadow: 8px 9px 19px rgba(0, 0, 0, 0.65); border-radius: 33.86px;">Next</button>
        </div>
      </div>
    </div>
        <?php //load_template('frame6'); ?>
   <!-- <div class="Arrow1" style="width: 16px; height: 0px; left: 1267px; top: 1152px; position: absolute"></div> --> 
    <div class="ProjectVision" style="/*left: 142px;*/ top: 1846px; position: absolute; text-align: right; color: #FFA800; font-size: 220px; font-family: CHEESEBURGA; font-weight: 400; line-height: 230.41px; word-wrap: break-word">PROJECT VISION</div>
    <?php load_template('frame17');?>
    <?php load_template('roadmap');?>
    <?php load_template('frme18');?>
    
<?php load_template('frame19');?>
    <div class="Merchandise" style="left: 252px; top: 6517px; position: absolute; color: #FFA800; font-size: 220px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word">merchandise</div>

    <div class="ComingSoon" style="left: 70%; top: 7017px; position: absolute;color: #2A2027; font-size: 36px; font-family: Montserrat; font-weight: 900; word-wrap: break-word">Coming Soon...</div>
    <div class="Frame68" style="width: 1652px; height: 1080px; position: relative; border-radius: 26px; overflow: hidden; justify-content: center; align-items: center; display: inline-flex;top: 7125px;">
    <!-- <div class="ComingSoon" style="color: #2A2027; font-size: 36px; font-family: Montserrat; font-weight: 900; word-wrap: break-word">Coming Soon...</div> -->
    <div class="Component27" style="width: 1652px; height: 1155px; position: relative; border-radius: 46px; overflow: hidden; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex;">
        <img id="image-display" style="width: 1652px; height: 1155px;background-image:url('/Alabay Assets/Assets/Alabay Merch/pink tee bck.png');" src="/Alabay Assets/Assets/Alabay Merch/pink tshirt.png" />
        <img id="image-display"class="CapMockup1" style="width: 1652px; height: 1155px; background-image:url('/Alabay Assets/Assets/Alabay Merch/cap mockup.png');" src="/Alabay Assets/Assets/Alabay Merch/blue cap bck.png" />
          <img id="image-display"class="PinkTshirt1" style="width: 1652px; height: 1155px" src="/Alabay Assets/Assets/Alabay Merch/pink tshirt.png" />
          <img id="image-display"class="YellowTshirt1" style="width: 1652px; height: 1155px" src="/Alabay Assets/Assets/Alabay Merch/yellow tshirt.png" />
          <img id="image-display"class="BlackHoodie1" style="width: 1652px; height: 1155px" src="/Alabay Assets/Assets/Alabay Merch/black hoodie.png" />
          <img id="image-display"class="CapMockup1" style="width: 1652px; height: 1155px" src="/Alabay Assets/Assets/Alabay Merch/blue cap bck.png" />
          <img id="image-display"class="PinkTshirt1" style="width: 1652px; height: 1155px" src="/Alabay Assets/Assets/Alabay Merch/black hoodie bck.png" />
          <!-- <div class="ComingSoon" style="color: #2A2027; font-size: 36px; font-family: Montserrat; font-weight: 900; word-wrap: break-word">Coming Soon...</div> -->
    </div>
    
    <div style="position: absolute; left: 90%; top: 50%;">
    <button onclick="nextImage()" style="font-size: 36px;width: 50px; height: 50px; color: black;">&#8250;</button>
    </div>
<div style="position: absolute; top: 50%; left: 5%;">
        <button onclick="prevImage()" style="font-size: 36px;width: 50px; height: 50px;color:black;">&#8249;</button>
    </div>
</div>
        <!-- <div class="ComingSoon" style="color: #2A2027; font-size: 36px; font-family: Montserrat; font-weight: 900; word-wrap: break-word">Coming Soon...</div> -->
        <div class="Frame66" style="width: 1565px; height: 96px; justify-content: flex-start; align-items: center; gap: 1373px; display: inline-flex">
  <div class="Frame64" style="width: 96px; height: 96px; position: relative">
    <!-- <div class="Ellipse14" style="width: 96px; height: 96px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 9999px"></div> -->
    <!-- <div class="Arrow4" style="width: 52px; height: 0px; left: 74px; top: 48px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0; border: 5px #575472 solid"></div> -->
  </div>
  <div class="Frame65" style="width: 96px; height: 96px; position: relative; transform: rotate(180deg); transform-origin: 0 0">
    <!-- <div class="Ellipse14" style="width: 96px; height: 96px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 9999px"></div> -->
    <!-- <div class="Arrow4" style="width: 52px; height: 0px; left: 74px; top: 48px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0; border: 5px #575472 solid"></div> -->
  </div>
</div>
<script src="app.js"></script>

  <?php //load_template('frame68');?>
    <div class="Games" style="left: 584px; top: 8430px; position: absolute; color: white; font-size: 220px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word">games</div>
    <!-- <div class="Line3" style="width: 231px; height: 0px; left: 783px; top: 61px; position: absolute; border: 29px #FFF6A1 solid"></div> -->
    <div class="Frame49" style="width: 1662px; height: 2300px; left: 76px; top: 11344px; position: absolute">
      <div class="SocialMediaLinks" style="left: 0px; top: 0px; position: absolute; color: #FFA800; font-size: 200px; font-family: CHEESEBURGA; font-weight: 400; word-wrap: break-word">social media<br/>links</div>
      <div class="MaskGroup" style="width: 1026px; height: 1139px; left: 636px; top: 2300px; position: absolute">
        <div class="Rectangle33" style="width: 1026px; height: 139px; left: 0px; top: -1139px; position: absolute; background: linear-gradient(180deg, #D9D9D9 0%, rgba(115, 115, 115, 0) 100%)"></div>
        <img class="DallE20240729173601A3dCartoonIllustrationOfACuteFurryCentralAsianShepherdDogHoldingAMobilePhoneAndLookingAtItTheDogHasExpressiveEyesAFluffyC1" style="width: 1020px; height: 1020px; left: 6px; top: -963px; position: absolute" src="/Alabay Assets/Assets/c1.png" />
      </div>
      <img class="DallE20240729173601A3dCartoonIllustrationOfACuteFurryCentralAsianShepherdDogHoldingAMobilePhoneAndLookingAtItTheDogHasExpressiveEyesAFluffyC2" style="width: 1020px; height: 1020px; left: 642px; top: 478px; position: absolute" src="/Alabay Assets/Assets/c2.png" />
      <div class="Frame36" style="width: 677.47px; height: 445px; left: 0px; top: 816px; position: absolute; background: linear-gradient(138deg, rgb(128, 179, 255) 0%, rgb(65, 125, 241) 100%);">
      <!-- src="/Alabay Assets/Assets/image.png" -->
        <img class="Union" style="width: 677.47px; height: 445px; left: 0px; top: 0px; position: absolute; box-shadow: 15px 15px 34.29999923706055px rgba(0, 0, 0, 0.37); border: 13px rgba(5.33, 83.09, 199.74, 0.66) solid"/>
        <div class="Frame34" style="width: 91px; height: 91px; left: 69px; top: 102px; position: absolute">
          <div class="Ellipse8" style="width: 91px; height: 91px; left: 0px; top: 0px; position: absolute; background: #353535; border-radius: 9999px"></div>
          <img class="TwitterLogo1" style="width: 47px; height: 45px; left: 22px; top: 23px; position: absolute" src="/Alabay Assets/Assets/twitter logo 1.png" />
        </div>
        <div class="Frame35" style="width: 91px; height: 91px; left: 69px; top: 252px; position: absolute">
          <div class="Ellipse8" style="width: 91px; height: 91px; left: 0px; top: 0px; position: absolute; background: #353535; border-radius: 9999px"></div>
          <div class="MaskGroup" style="width: 58px; height: 51px; left: 15px; top: 20px; position: absolute">
            <img class="TelegramLogo1" style="width: 58px; height: 51px; left: 0px; top: 0px; position: absolute" src="/Alabay Assets/Assets/telegram.png" />
            <div class="Rectangle35" style="width: 63px; height: 51px; left: 0px; top: 0px; position: absolute;"></div>
          </div>
        </div>
        <div class="TwitterLink" style="left: 195px; top: 124px; position: absolute; color: white; font-size: 40px; font-family: Montserrat; font-weight: 900; word-wrap: break-word">Twitter Link</div>
        <div class="TelegramLink" style="left: 196px; top: 272px; position: absolute; color: white; font-size: 40px; font-family: Montserrat; font-weight: 900; word-wrap: break-word">Telegram Link</div>
      </div>
    </div>
    <div class="Frame50" style="left: 55px; top: 10513px; position: absolute; justify-content: flex-start; align-items: center; gap: 42px; display: inline-flex">
      <img class="Artifacts2" style="width: 489px; height: 489px; border-radius: 27.17px" src="/Alabay Assets/Assets/Alabay Games/artifacts 2.png" />
      <img class="Abilities2" style="width: 489px; height: 489px; border-radius: 27.17px" src="/Alabay Assets/Assets/Alabay Games/Abilities 2.png" />
      <img class="Image3AlabayGuard2" style="width: 489.53px; height: 489px; border-radius: 27.17px" src="/Alabay Assets/Assets/Alabay Games/image 3 alabay guard 2.png" />
    </div>
    <div class="GamePreviews" style="left: 55px; top: 10193px; position: absolute"><span style="color: #FFA800; font-size: 64px; font-family: Montserrat; font-weight: 900; word-wrap: break-word">GAME</span><span style="color: #353535; font-size: 64px; font-family: Montserrat; font-weight: 900; word-wrap: break-word"> PREVIEWS</span></div>
    <div class="Frame3" style="width: 121px; height: 172px; left: 1623px; top: 11472px; position: absolute">
      <div class="Rectangle7" style="width: 121px; height: 172px; left: 0px; top: 0px; position: absolute; background: #353535; box-shadow: 8px 9px 19px rgba(0, 0, 0, 0.65); border-radius: 33.86px"></div>
      <img class="Union" style="width: 67.32px; height: 56.85px; left: 25.40px; top: 57.39px; position: absolute; border: 6px #353535 solid" src="/Alabay Assets/Assets/arrow.png" />
    </div>
    <div class="StayTunedForUpcomingGames" style="left: 320px; top: 8830px; position: absolute; text-align: center; color: #353535; font-size: 64px; font-family: Montserrat; font-weight: 900; word-wrap: break-word">Stay tuned for upcoming games !</div>
    <div class="Component26" style="top: 7930px;width: 1796px; height: 1005px; position: relative; overflow: hidden;">
    <div class="Frame48" style="position: absolute; justify-content: flex-start; align-items: center; gap: 122px; display: inline-flex;">
        <img id="game-image-display" style="width: 1688.89px; height: 950px; border-radius: 70px; border: 14px white solid;" src="/Alabay Assets/Assets/Alabay Games/alabay guard prev 2 1.png" />
    </div>

    <!-- Next button -->
    <div style="position: absolute; top: 50%; left: 90%;">
        <button onclick="nextGameImage()"><img  style="width: 50px; height: 50px;" src="/Alabay Assets/Assets/arrow.png"></button>
    </div>

    <!-- Previous button -->
    <div style="position: absolute; top: 50%; left: 5%;">
    <!-- <div class="Frame3" style="width: 121px; height: 172px; left: 916px; top: -293.80px; position: absolute"> -->
        <button onclick="prevGameImage()" ><img src="/Alabay Assets/Assets/arrowleft.png" style="width: 50px; height: 50px;"></button>
    </div>
</div>

      <div class="Frame52" style="width: 454px; height: 110px; left: 671px; top: 9897px; position: absolute">
        <div class="Rectangle45" style="width: 454px; height: 110px; left: 0px; top: 0px; position: absolute; background: #843AFC; box-shadow: 12px 11px 11.300000190734863px rgba(0, 0, 0, 0.61); border-radius: 100px"></div>
        <div class="Discover"><button><a href="/Alabay Assets/templates/com17.php" style="left: 77px; top: 35px; position: absolute; text-align: center; color: white; font-size: 40px; font-family: Montserrat; font-weight: 900; line-height: 41.89px; word-wrap: break-word">DISCOVER</div></a></button>
        <div class="Arrow3" style="width: 51px; height: 0px; left: 346px; top: 56px; position: absolute; border: 7px white solid"></div>
        <!-- <div class="Frame3" style="width: 121px; height: 172px; left: 916px; top: -293.80px; position: absolute"> -->
          <!-- <div class="Rectangle7" style="width: 121px; height: 172px; left: 0px; top: 0px; position: absolute; background: #353535; box-shadow: 8px 9px 19px rgba(0, 0, 0, 0.65); border-radius: 33.86px"></div> -->
          <img class="Union" style="width: 121px; height: 172px; left: 220%; top: 880px; position: absolute; background: #353535; box-shadow: 8px 9px 19px rgba(0, 0, 0, 0.65); border-radius: 33.86px;" src="/Alabay Assets/Assets/arrow.png" />
        </div>
      <!-- </div> -->
      </div>    
 </div>
</div>
    
    </div>
  
  
   
  <script src="Alabay Assets/app.js"></script>
