
 <?php include("header.php"); ?>

  <? include ('search.php'); ?>

	<? include ('navbar.php'); ?>

 <div class="clear"></div>


 <div class="container" id="homeheroarea">
 <div class="row">
 <div class="col-sm-8">
 <div id="heroslide" class="dz-theme">
 <div class="owl-item">
 <div class="item">
 <div class="banner-item" data-endtime="20 Oct 2016 17:00">
 <img alt="" src="images/newbanner-marshall-major-ll.jpg">
 <div class="caption dark-text left">
 <span class="endat-text"></span><span class="endtime"></span> <span class="btn btn-lg btn-orange os">Bid Now</span>
 </div>
 <a href="#" class="coverlink"></a>
 <div class="clear"></div>
 </div>
 </div>
 </div>
 </div>
 </div>

<!-- ผู้ชนะประมูล Box Review !-->
 <div class="col-sm-4">
 <div id="winnerbox-wrap">
 <h3><i class="fa fa-trophy"></i> ผู้ชนะประมูล</h3>
 <div id="winnerbox-base">
 <div id="winnerbox" class="dz-theme">

	 <div class="owl-item">
			<div class="item">
				<div class="photo">
					<img class="lazyOwl img-responsive" alt="Apple iPhone 6s Plus (16GB)" src="images/1466767257_4554 (Mobile).jpg">
					<div class="message">"Iphone 6s Plus 16 GB ทั้งลุ้นทั้งตื่นเต้นขอบคุณมากครับที่ได้สินค้าคุณภาพและสุดคุ้มกับ Dinoza"</div>
					<div class="clearfix"></div>
				</div>
				<div class="caption">
					<div class="caption-content">
						<hr>
						<div class="winner">
							<span class="bidusericon bidusericon-xl iT">T</span>Techokrub
							<div class="location">
								กทม
							</div>
						</div>
						<div class="wondate"><i class="fa fa-clock-o"></i> 13 มิ.ย. 2016</div>
						<div class="clearfix"></div>
						<div class="desc">
							<div class="product-title">Apple iPhone 6s Plus (16GB)</div>
							ชนะประมูลด้วยราคา<br>
							<span class="price">493.10 บาท</span><br><br>
						</div>
						<div class="savings-badge">
							<span class="savings-label">ประหยัด</span>
							<div class="savings-no">79<span>%</span></div>
						</div>
					</div>
				</div>
				<a class="coverlink" href="https://www.dinoza.com/productdetails.php?aid=3821"></a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>


<!-- End Bos Review !-->

<div id="brandfeatures">
				  <div class="container">
				      <div class="row nopadding">
				          <div class="col-md-3 col-xs-6">
				            <div class="media">
				               <span class="pull-left">
				                  <img class="media-object" src="images/icon-fair-sml.png">
				               </span>
				               <div class="media-body">
				                  <h4 class="media-heading">100% Fair Auctions</h4>
				                  การันตีความโปร่งใส
				               </div>
				            </div>
				          </div>
				          <div class="col-md-3 col-xs-6">
				            <div class="media">
				               <span class="pull-left">
				                  <img class="media-object" src="images/icon-delivery-sml.png">
				               </span>
				               <div class="media-body">
				                  <h4 class="media-heading">3 Days Delivery*</h4>
				                  จัดส่งทั่วประเทษไทย
				               </div>
				            </div>
				          </div>
				          <div class="col-md-3 col-xs-6">
				            <div class="media">
				               <span class="pull-left">
				                  <img class="media-object" src="images/icon-warranty-sml.png">
				               </span>
				               <div class="media-body">
				                  <h4 class="media-heading">Product Warranty</h4>
				                  รับประกันสินค้าทุกชิ้น
				               </div>
				            </div>
				          </div>
				          <div class="col-md-3 col-xs-6">
				            <div class="media">
				               <span class="pull-left">
				                  <img class="media-object" src="images/icon-support-sml.png">
				               </span>
				               <div class="media-body">
				                  <h4 class="media-heading">7 Days Customer Support</h4>
				                  ติดต่อเราได้เมื่อมีปัญหา
				               </div>
				            </div>
				          </div>
				      </div>
				  </div>
				</div>

        <div class="container">
					<div class="row">
						<div class="col-sm-6">
							<a href="#"><img class="img-responsive" src="images/banner-howtobid-th-01.png"></a>
						</div>
						<div class="col-sm-6">
							<a href="#"><img class="img-responsive" src="images/banner-winners-th-01.png"></a>
						</div>
					</div>
				</div>

  <div class="content_container">
  	<div class="category-tab-main">
        <div class="category-tab-fix">
          <script type="text/javascript" language="javascript">
       /*function findValue(li) {
       if( li == null ) return alert("No match!");

       // if coming from an AJAX call, let's use the CityId as the value
       if( !!li.extra ) var sValue = li.extra[0];

       // otherwise, let's just display the value in the text box
       else var sValue = li.selectValue;

       //alert("The value you selected was: " + sValue);
     }

     function selectItem(li) {
       findValue(li);
       SearchAuction();
     }

     function formatItem(row) {
       //return row[0] + " (id: " + row[1] + ")";
       return row[0];
     }

     function lookupAjax(){
       var oSuggest = $("#searchtxtdata")[0].autocompleter;
       oSuggest.findValue();
       return false;
     }


     $("#searchtxtdata").autocomplete(
       "getauctionsautocomplete.php", {
       delay:10,
       minChars:1,
       matchSubset:1,
       matchContains:1,
       cacheLength:10,
       onItemSelect:selectItem,
       onFindValue:findValue,
       formatItem:formatItem,
       autoFill:false
       }
     );
*/
       $(document).ready(function() {
       $(".searchtextbox#searchtxtdata").focus(function() {
         $(".searchtextbox").animate({
           width: '165px',
         }, '400');
       });

       $(".searchtextbox#searchtxtdata").blur(function() {
         $(".searchtextbox").animate({
           width: '125px',
         }, '400');
       });





     });

     $(function() {
       $('.box_dinozaclose,#overlay_more_dinoza,.closebox').click(function(){
         $('#box_more,.overlaybox').fadeOut('fast',function(){
           $('#overlay_more_dinoza').fadeOut('fast');
         });
       });


               $(document).keyup(function(e) {
                 if (e.keyCode == 27) {
                       $('#box_more,.overlaybox').fadeOut('fast',function(){
                       $('#overlay_more_dinoza').fadeOut('fast');
                   });
                  }   // esc
               });



       $('.more_popup').click(function(){
         $('#overlay_more_dinoza').fadeIn('fast',function(event){
           var header1 = $(document).scrollTop();
           header1 = Number(header1)+Number(100);
           $('#box_more').css({'top':header1+"px"}).fadeIn('fast');
          });
       });

       $('.end_popup').click(function(){
         showAuctionEnding();
       });



     });
function ValidateFeedbackForm(f1)
{
 var subject = f1.feedbacksubject;
 var description = "".concat(f1.feedbackdescription1.value, f1.feedbackdescription2.value,f1.feedbackdescription3.value, f1.feedbackdescription4.value);

 if(subject.value=="")
 {
   alert(lng_plsentersubject);
   subject.focus();
   return false;
 }
 if(description=="")
 {
   alert(lng_plsenterdescription);
   //description.focus();
   return false;
 }
 $.ajax({
    type: "POST",
    dataType: "json",
    url: "userfeedback.php",
    data: "subject="+subject.value+"&description="+description,
    success: function(data){
     if(data=="1")
     {
       alert(lng_feedbacksavesuccessfully);
     }
     else if(data=="2")
     {
       alert(lng_sessiontimedoutmsg);
     }
     document.getElementById("feedbackform").reset();
     $('#box_dinoza').animate({'top':'-1250px'},500,function(){
       $('#overlay_dinoza').fadeOut('fast');
     });
    }
 });
 return false;
}

     </script>
    </div>
  </div>

  <div class="bidnow_row">
        <div class="content_middlebg">
            <div class="leftside">
                <div class="index_bidnow_header_box">
                    <div class="bidnow_middlebg">
                    	<div class="image"><img src="images/title-icon.png" align="absmiddle" /> สินค้าพวกนี้กำลังจะสิ้นสุด Bid เลย</div>
                		<div class="image" style="float:right;"><span class="bidnow_more"><a class="orgbtn" href="buybids">เพิ่ม Bid</a></span></div>
                    </div>
                    <!--<div class="catagories_row">
                    </div>-->
                    <!--<div class="index_bidnow_header_rightbg">&nbsp;</div>-->
                </div>
								<div class="clear"></div>
                <div style="margin-top: 10px; text-align: left;border: 1px solid #e00;border-radius: 4px; width: 94%;padding: 0 3%; background: #F9F9F9;">
                                        <!--<p style="font-size: 18px; margin-top:10px;">ประกาศศศศ! แจ้งยุติหน้าการประมูลครับ ตั้งแต่วันที่ 21 ตุลาคม 2559 เป็นต้นไป Dinoza.com จะขอระงับการประมูลทุกสินค้า</p>-->
                    <p style="font-size: 18px;margin-top:10px;">ประกาศศศศ! แจ้งยุติหน้าการประมูลครับ</p>
                    <p style="font-size: 18px;">ตั้งแต่วันที่ 20 ตุลาคม 2559 เป็นต้นไป Dinoza.com จะขอระงับการประมูลทุกสินค้า</p>
                    <p style="color:orange;"><span class="end_popup">คลิกอ่านรายละเอียดเพิ่มเติม</span></p>
                                    </div>

                <div class="bidnow_content" id="content_container">
                	<div class="bidnow_content_top_image"></div>
                    <div class="bidnow_content_middle_image" id="content_container">
                    	<span class='pageloadermain'></span>
                        <span class='pageloaderinner'><span class='pageloader'></span></span>
                    	<input type="hidden" name="CurrentPageNo" id="CurrentPageNo" value="1" />
                        <input type="hidden" name="CurrentCatID" id="CurrentCatID" value="0" />
                        <input type="hidden" name="AuctionSearchTxt" id="AuctionSearchTxt" value="" />

                <div class="auction-item" title="4483" id="auction_4483"></div>

								<div class="main_bidnow_box" id="auction_balloon_4483" >
                                	<input type="hidden" id="index_inner_auction_flag_4483" value="1" />
                                    <input type="hidden" id="index_inner_auction_4483" value="1" />
                                    <!--<div class="main_bidnow_topbg_image"></div>-->
                                    <div class="main_bidnow_middle">
                                        <!--<div class="main_bidnow_leftbg_image">&nbsp;</div>-->
                                        <!--<div class="main_bidnow_middlebg">-->
                                        	<!--<div class="main_bidnow_area" onmouseover="showbidmoresavemore('4483');" onmouseout="showbidmoresavemorehide('4483');">-->
                                            <div class="main_bidnow_area">
                                                <div class="main_bidnow_product_image_box">
													                                                    <div class="main_bidnow_product_image"><a href="productdetails.php?aid=4483"><img src="images/thumbbig_f0a619064cfbce69b2f468f861b65bcc.jpg"  border="0" alt="" /></a></div>
                                                </div>
                                                <div class="main_bidnow_title">
                                                    <a href="productdetails.php?aid=4483">Remax Sport Magnet Bluetooth Headset</a>
													<!--<a href="productdetails.php?aid=4483">Remax Sport Magnet Bluetooth Headset</a>-->
                                                </div>
                                                <div class="timeleft_title">ลดจากราคา <span class="marketprice_linethrough"><span>฿990</span></span></div>
                                                <div class="main_bidnow_price_inner" align="center"><div class="main_bidnow_price" id="price_index_page_main_4483"><span id="currencysymbol_4483"></span><span id="price_index_page_4483">---</span></div></div>

                                                <div class="main_bidnow_bidder"><span id="product_bidder_4483">---</span></div>

                                                <div class="main_bidnow_auction_type_edge bidmultipliericon"><img src="images/icon-bidbooster.png" title="Bid Booster"></div>

                                                <div class="main_bidnow_timer"><span id="counter_index_page_4483"><script language="javascript" type="text/javascript">document.getElementById("counter_index_page_4483").innerHTML = calc_counter_from_time("4");</script></span></div>
                                                <div class="auction-boxes-row">
                                                    <div class="normal_text_boxes" style="height:17px;">
                                                    	<span id="normal_text_bid_info_enable_4483" style="display:none;top: -2px;position: relative;">
                                                    		จบ&nbsp;วันนี้                                                    	</span>
    													<span id="every_bid_resets_clock_txt_4483" style="display:inline-block;top: -2px;position: relative;">ทุก Bid เพิ่ม 10วิ</span>
                                                        <input type="hidden" id="auction_resets_clock_txt_flag_4483" value="1" />
                                                    </div>
                                                </div>

                                                <div class="main_bidnow_button">

                                                    													<!-- <img src="images/thai/bidbtn-sml.png" onmouseover="this.src='images/thai/loginbtn-sml_hover.png'" onmouseout="this.src='images/thai/bidbtn-sml.png'" border="0" style="cursor: pointer;"  onclick="window.location.href='login.php'" id="image_main_4483" alt="" /> -->
		                                                    <button class="btn btn-bid btn-sml" onclick="window.location.href='login.php'" id="image_main_4483" alt="Bid">Bid <span class="badge bidmulti">x1</span></button>

                                                                                                    </div>
                                            </div>

                                            												<div class="main_buynow_area">
                                                    <div class="auction_disount_belt_main">หรือซื้อทันที Dinoza ลดให้<span class="auction_disount_belt">30%</span></div>
                                                    <div class="auction_bid_rebate_amount_main">ลดเพิ่มจาก Bid ที่ใช้ไป&nbsp;<span class="auction_bid_rebate_amount">฿<span id="index_buynow_placebids_price_4483">0</span></span><div class="auction_bid_rebate_amount_payonly">จ่ายเพียง</div>
                                                    <span id="index_buynow_placebids_price_hid_4483" style="display:none;">0.00</span>
                                                    </div>

                                                                                                        <div class="auction-boxes-row">
                                                        <div class="auction_saving_price-det">฿<span id="index_buynow_price_savings_4483">690</span></div>
                                                        <span id="index_buynow_price_savings_hid_4483" style="display:none;">690.00</span>

                                                    </div>


                                                                                                    <div class="auction-boxes-row" style="padding-top: 10px">
                                                    	<!-- <img src="images/thai/buynowbtn-sml.png" onmouseover="this.src='images/thai/loginbtn-sml_hover.png'" onmouseout="this.src='images/thai/buynowbtn-sml.png'" onclick="window.location.href='login.php'" style="cursor: pointer" /> -->
                                                    	<span class="btn btn-buy btn-sml" onclick="window.location.href='login.php'">Buy Now</span>
                                                    </div>
                                                                                                </div>
                                            											                                        </div>
                                    <div class="clear"></div>

                                </div>



                                <div class="auction-item" title="4483" id="auction_4483"></div>

    <div class="main_bidnow_box" id="auction_balloon_4483" >
                      <input type="hidden" id="index_inner_auction_flag_4483" value="1" />
                        <input type="hidden" id="index_inner_auction_4483" value="1" />
                        <!--<div class="main_bidnow_topbg_image"></div>-->
                        <div class="main_bidnow_middle">
                            <!--<div class="main_bidnow_leftbg_image">&nbsp;</div>-->
                            <!--<div class="main_bidnow_middlebg">-->
                              <!--<div class="main_bidnow_area" onmouseover="showbidmoresavemore('4483');" onmouseout="showbidmoresavemorehide('4483');">-->
                                <div class="main_bidnow_area">
                                    <div class="main_bidnow_product_image_box">
                                                                  <div class="main_bidnow_product_image"><a href="productdetails.php?aid=4483"><img src="images/thumbbig_f0a619064cfbce69b2f468f861b65bcc.jpg"  border="0" alt="" /></a></div>
                                    </div>
                                    <div class="main_bidnow_title">
                                        <a href="productdetails.php?aid=4483">Remax Sport Magnet Bluetooth Headset</a>
              <!--<a href="productdetails.php?aid=4483">Remax Sport Magnet Bluetooth Headset</a>-->
                                    </div>
                                    <div class="timeleft_title">ลดจากราคา <span class="marketprice_linethrough"><span>฿990</span></span></div>
                                    <div class="main_bidnow_price_inner" align="center"><div class="main_bidnow_price" id="price_index_page_main_4483"><span id="currencysymbol_4483"></span><span id="price_index_page_4483">---</span></div></div>

                                    <div class="main_bidnow_bidder"><span id="product_bidder_4483">---</span></div>


                                    <div class="main_bidnow_timer"><span id="counter_index_page_4483"><script language="javascript" type="text/javascript">document.getElementById("counter_index_page_4483").innerHTML = calc_counter_from_time("4");</script></span></div>
                                    <div class="auction-boxes-row">
                                        <div class="normal_text_boxes" style="height:17px;">
                                          <span id="normal_text_bid_info_enable_4483" style="display:none;top: -2px;position: relative;">
                                            จบ&nbsp;วันนี้                                                    	</span>
                  <span id="every_bid_resets_clock_txt_4483" style="display:inline-block;top: -2px;position: relative;">ทุก Bid เพิ่ม 10วิ</span>
                                            <input type="hidden" id="auction_resets_clock_txt_flag_4483" value="1" />
                                        </div>
                                    </div>

                                    <div class="main_bidnow_button">

                                                                  <!-- <img src="images/thai/bidbtn-sml.png" onmouseover="this.src='images/thai/loginbtn-sml_hover.png'" onmouseout="this.src='images/thai/bidbtn-sml.png'" border="0" style="cursor: pointer;"  onclick="window.location.href='login.php'" id="image_main_4483" alt="" /> -->
                                            <button class="btn btn-bid btn-sml" onclick="window.location.href='login.php'" id="image_main_4483" alt="Bid">Bid <span class="badge bidmulti">x1</span></button>

                                                                                        </div>
                                </div>

                                                        <div class="main_buynow_area">
                                        <div class="auction_disount_belt_main">หรือซื้อทันที Dinoza ลดให้<span class="auction_disount_belt">30%</span></div>
                                        <div class="auction_bid_rebate_amount_main">ลดเพิ่มจาก Bid ที่ใช้ไป&nbsp;<span class="auction_bid_rebate_amount">฿<span id="index_buynow_placebids_price_4483">0</span></span><div class="auction_bid_rebate_amount_payonly">จ่ายเพียง</div>
                                        <span id="index_buynow_placebids_price_hid_4483" style="display:none;">0.00</span>
                                        </div>

                                                                                            <div class="auction-boxes-row">
                                            <div class="auction_saving_price-det">฿<span id="index_buynow_price_savings_4483">690</span></div>
                                            <span id="index_buynow_price_savings_hid_4483" style="display:none;">690.00</span>

                                        </div>


                                                                                        <div class="auction-boxes-row" style="padding-top: 10px">
                                          <!-- <img src="images/thai/buynowbtn-sml.png" onmouseover="this.src='images/thai/loginbtn-sml_hover.png'" onmouseout="this.src='images/thai/buynowbtn-sml.png'" onclick="window.location.href='login.php'" style="cursor: pointer" /> -->
                                          <span class="btn btn-buy btn-sml" onclick="window.location.href='login.php'">Buy Now</span>
                                        </div>
                                                                                    </div>
                                                                                              </div>
                        <div class="clear"></div>
                    </div>

                    <div class="auction-item" title="4483" id="auction_4483"></div>

<div class="main_bidnow_box" id="auction_balloon_4483" >
          <input type="hidden" id="index_inner_auction_flag_4483" value="1" />
            <input type="hidden" id="index_inner_auction_4483" value="1" />
            <!--<div class="main_bidnow_topbg_image"></div>-->
            <div class="main_bidnow_middle">
                <!--<div class="main_bidnow_leftbg_image">&nbsp;</div>-->
                <!--<div class="main_bidnow_middlebg">-->
                  <!--<div class="main_bidnow_area" onmouseover="showbidmoresavemore('4483');" onmouseout="showbidmoresavemorehide('4483');">-->
                    <div class="main_bidnow_area">
                        <div class="main_bidnow_product_image_box">
                                                      <div class="main_bidnow_product_image"><a href="productdetails.php?aid=4483"><img src="images/thumbbig_f0a619064cfbce69b2f468f861b65bcc.jpg"  border="0" alt="" /></a></div>
                        </div>
                        <div class="main_bidnow_title">
                            <a href="productdetails.php?aid=4483">Remax Sport Magnet Bluetooth Headset</a>
  <!--<a href="productdetails.php?aid=4483">Remax Sport Magnet Bluetooth Headset</a>-->
                        </div>
                        <div class="timeleft_title">ลดจากราคา <span class="marketprice_linethrough"><span>฿990</span></span></div>
                        <div class="main_bidnow_price_inner" align="center"><div class="main_bidnow_price" id="price_index_page_main_4483"><span id="currencysymbol_4483"></span><span id="price_index_page_4483">---</span></div></div>

                        <div class="main_bidnow_bidder"><span id="product_bidder_4483">---</span></div>


                        <div class="main_bidnow_timer"><span id="counter_index_page_4483"><script language="javascript" type="text/javascript">document.getElementById("counter_index_page_4483").innerHTML = calc_counter_from_time("4");</script></span></div>
                        <div class="auction-boxes-row">
                            <div class="normal_text_boxes" style="height:17px;">
                              <span id="normal_text_bid_info_enable_4483" style="display:none;top: -2px;position: relative;">
                                จบ&nbsp;วันนี้                                                    	</span>
      <span id="every_bid_resets_clock_txt_4483" style="display:inline-block;top: -2px;position: relative;">ทุก Bid เพิ่ม 10วิ</span>
                                <input type="hidden" id="auction_resets_clock_txt_flag_4483" value="1" />
                            </div>
                        </div>

                        <div class="main_bidnow_button">

                                                      <!-- <img src="images/thai/bidbtn-sml.png" onmouseover="this.src='images/thai/loginbtn-sml_hover.png'" onmouseout="this.src='images/thai/bidbtn-sml.png'" border="0" style="cursor: pointer;"  onclick="window.location.href='login.php'" id="image_main_4483" alt="" /> -->
                                <button class="btn btn-bid btn-sml" onclick="window.location.href='login.php'" id="image_main_4483" alt="Bid">Bid <span class="badge bidmulti">x1</span></button>

                                                                            </div>
                    </div>

                                            <div class="main_buynow_area">
                            <div class="auction_disount_belt_main">หรือซื้อทันที Dinoza ลดให้<span class="auction_disount_belt">30%</span></div>
                            <div class="auction_bid_rebate_amount_main">ลดเพิ่มจาก Bid ที่ใช้ไป&nbsp;<span class="auction_bid_rebate_amount">฿<span id="index_buynow_placebids_price_4483">0</span></span><div class="auction_bid_rebate_amount_payonly">จ่ายเพียง</div>
                            <span id="index_buynow_placebids_price_hid_4483" style="display:none;">0.00</span>
                            </div>

                                                                                <div class="auction-boxes-row">
                                <div class="auction_saving_price-det">฿<span id="index_buynow_price_savings_4483">690</span></div>
                                <span id="index_buynow_price_savings_hid_4483" style="display:none;">690.00</span>

                            </div>


                                                                            <div class="auction-boxes-row" style="padding-top: 10px">
                              <!-- <img src="images/thai/buynowbtn-sml.png" onmouseover="this.src='images/thai/loginbtn-sml_hover.png'" onmouseout="this.src='images/thai/buynowbtn-sml.png'" onclick="window.location.href='login.php'" style="cursor: pointer" /> -->
                              <span class="btn btn-buy btn-sml" onclick="window.location.href='login.php'">Buy Now</span>
                            </div>
                                                                        </div>
                                                                                  </div>
            <div class="clear"></div>
        </div>

        <div class="auction-item" title="4483" id="auction_4483"></div>

<div class="main_bidnow_box" id="auction_balloon_4483" >
<input type="hidden" id="index_inner_auction_flag_4483" value="1" />
<input type="hidden" id="index_inner_auction_4483" value="1" />
<!--<div class="main_bidnow_topbg_image"></div>-->
<div class="main_bidnow_middle">
    <!--<div class="main_bidnow_leftbg_image">&nbsp;</div>-->
    <!--<div class="main_bidnow_middlebg">-->
      <!--<div class="main_bidnow_area" onmouseover="showbidmoresavemore('4483');" onmouseout="showbidmoresavemorehide('4483');">-->
        <div class="main_bidnow_area">
            <div class="main_bidnow_product_image_box">
                                          <div class="main_bidnow_product_image"><a href="productdetails.php?aid=4483"><img src="images/thumbbig_f0a619064cfbce69b2f468f861b65bcc.jpg"  border="0" alt="" /></a></div>
            </div>
            <div class="main_bidnow_title">
                <a href="productdetails.php?aid=4483">Remax Sport Magnet Bluetooth Headset</a>
<!--<a href="productdetails.php?aid=4483">Remax Sport Magnet Bluetooth Headset</a>-->
            </div>
            <div class="timeleft_title">ลดจากราคา <span class="marketprice_linethrough"><span>฿990</span></span></div>
            <div class="main_bidnow_price_inner" align="center"><div class="main_bidnow_price" id="price_index_page_main_4483"><span id="currencysymbol_4483"></span><span id="price_index_page_4483">---</span></div></div>

            <div class="main_bidnow_bidder"><span id="product_bidder_4483">---</span></div>


            <div class="main_bidnow_timer"><span id="counter_index_page_4483"><script language="javascript" type="text/javascript">document.getElementById("counter_index_page_4483").innerHTML = calc_counter_from_time("4");</script></span></div>
            <div class="auction-boxes-row">
                <div class="normal_text_boxes" style="height:17px;">
                  <span id="normal_text_bid_info_enable_4483" style="display:none;top: -2px;position: relative;">
                    จบ&nbsp;วันนี้                                                    	</span>
<span id="every_bid_resets_clock_txt_4483" style="display:inline-block;top: -2px;position: relative;">ทุก Bid เพิ่ม 10วิ</span>
                    <input type="hidden" id="auction_resets_clock_txt_flag_4483" value="1" />
                </div>
            </div>

            <div class="main_bidnow_button">

                                          <!-- <img src="images/thai/bidbtn-sml.png" onmouseover="this.src='images/thai/loginbtn-sml_hover.png'" onmouseout="this.src='images/thai/bidbtn-sml.png'" border="0" style="cursor: pointer;"  onclick="window.location.href='login.php'" id="image_main_4483" alt="" /> -->
                    <button class="btn btn-bid btn-sml" onclick="window.location.href='login.php'" id="image_main_4483" alt="Bid">Bid <span class="badge bidmulti">x1</span></button>

                                                                </div>
        </div>

                                <div class="main_buynow_area">
                <div class="auction_disount_belt_main">หรือซื้อทันที Dinoza ลดให้<span class="auction_disount_belt">30%</span></div>
                <div class="auction_bid_rebate_amount_main">ลดเพิ่มจาก Bid ที่ใช้ไป&nbsp;<span class="auction_bid_rebate_amount">฿<span id="index_buynow_placebids_price_4483">0</span></span><div class="auction_bid_rebate_amount_payonly">จ่ายเพียง</div>
                <span id="index_buynow_placebids_price_hid_4483" style="display:none;">0.00</span>
                </div>

                                                                    <div class="auction-boxes-row">
                    <div class="auction_saving_price-det">฿<span id="index_buynow_price_savings_4483">690</span></div>
                    <span id="index_buynow_price_savings_hid_4483" style="display:none;">690.00</span>

                </div>


                                                                <div class="auction-boxes-row" style="padding-top: 10px">
                  <!-- <img src="images/thai/buynowbtn-sml.png" onmouseover="this.src='images/thai/loginbtn-sml_hover.png'" onmouseout="this.src='images/thai/buynowbtn-sml.png'" onclick="window.location.href='login.php'" style="cursor: pointer" /> -->
                  <span class="btn btn-buy btn-sml" onclick="window.location.href='login.php'">Buy Now</span>
                </div>
                                                            </div>
                                                                      </div>
<div class="clear"></div>
</div>



<!-- Category Wise Product Start -->
<div class="leftside"></div>
						<!-- Category Wise Product End (deepak) -->
    <div class="clear"></div>
        <div class="block"><a href="/register?src=homebnr"><img src="images/banner-register-th-04.png" /></a></div>
	      <div class="clear">&nbsp;</div>
   </div>

   <div class="rightside">
               <!-- End Meet Winner -->
   <!-- End Winner -->

   <!-- Bidpack Start -->
   <div class="bidpack_main_box">
                 <!--<div class="bidpack_detail_topbg">&nbsp;</div>-->
                 <div class="bidpack_detail_middlebg">
                   <div class="bidpack_header">
                     <!--<div class="bidpack_header_leftbg">&nbsp;</div>-->
                     <div class="bidpack_header_middlebg">Bid Pack</div>
                     <!--<div class="bidpack_header_rightbg">&nbsp;</div>-->
                   </div>
                   <div class="bidpack_detail_box">
                     <div class="bidpack_detail_leftbg">&nbsp;</div>
                     <div class="bidpack_titlerow">
                       <div class="title_bidpack">Bidpack</div>
                       <div class="title_bidpackprice">ราคา</div>
                       <div class="title_bidpacksavings">ประหยัด</div>
                     </div>

   				                     <div class="bidpack_detail_row_odd">
                       <!--<div class="bidpack_detail_arrow"></div>-->
                       <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=9">100&nbsp;Bids</a></div>
                       <div class="bidpack_detail_price_odd">500฿</div>
                       <div class="bidpack_detail_price_buy"><a href="buybids?pkg=9">Buy&raquo;</a></div>
                     </div>

   				                     <div class="bidpack_detail_row_even">
                       <!--<div class="bidpack_detail_arrow"></div>-->
                       <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=10">200&nbsp;Bids</a></div>
                       <div class="bidpack_detail_price_odd">1000฿</div>
                       <div class="bidpack_detail_price_buy"><a href="buybids?pkg=10">Buy&raquo;</a></div>
                     </div>


   				                     <div class="bidpack_detail_row_odd">
                       <!--<div class="bidpack_detail_arrow"></div>-->
                       <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=11">500&nbsp;Bids</a></div>
                       <div class="bidpack_detail_price_odd">2500฿</div>
                       <div class="bidpack_detail_price_buy"><a href="buybids?pkg=11">Buy&raquo;</a></div>
                     </div>


   				                     <div class="bidpack_detail_row_even">
                       <!--<div class="bidpack_detail_arrow"></div>-->
                       <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=12">1000&nbsp;Bids</a></div>
                       <div class="bidpack_detail_price_odd">5000฿</div>
                       <div class="bidpack_detail_price_buy"><a href="buybids?pkg=12">Buy&raquo;</a></div>
                     </div>

   				                                       <div class="bidpack_detail_rightbg">&nbsp;</div>
                   </div>
                 </div>
                 <!--<div class="bidpack_detail_bottombg">&nbsp;</div>-->
               </div>

   <!-- Bidpack End -->


   <!--Auction Type Section Start Here-->
			<div class="latestwin_detail_middlebg" style="margin-top:30px; border:none;"><a href="invite">
       <img style="border: 1px solid;border-color: #e9eaed #dfe0e4 #d0d1d5;border-radius: 4px;" src="images/refer_friends-02.jpg" /></a></div>
			<div class="auctiontype_main_box">
                <div class="auctiontype_header">
                  <!--<div class="bidpack_header_leftbg">&nbsp;</div>-->
                  <div class="auctiontype_header_middlebg">Auction Types</div>
                  <!--<div class="bidpack_header_rightbg">&nbsp;</div>-->
                </div>
                <div class="auctiontype_detail_box" style="min-height: 255px;">

                          <div class="auctiontype_detail_row" >
                            <div class="auctiontype_detail_icon"><img src="images/buynow_2.png" title="สามารถซื้อสินค้าได้" /></div>
                            <div class="auctiontype_detail_title">สามารถซื้อสินค้าได้</div>
                          </div>

                          <div class="auctiontype_detail_row" >
                            <div class="auctiontype_detail_icon"><img src="images/beginner_2.png" title="Beginner Only" /></div>
                            <div class="auctiontype_detail_title">Beginner Only</div>
                          </div>

                          <div class="auctiontype_detail_row" >
                            <div class="auctiontype_detail_icon"><img src="images/icon-clickbattle-sml.png" title="Click Battle" /></div>
                            <div class="auctiontype_detail_title">Click Battle</div>
                          </div>

						<div class="auctiontype_detail_row" >
                            <div class="auctiontype_detail_icon"><img src="images/night_2.png" title="ประมูล 24 ชั่วโมง" /></div>
                            <div class="auctiontype_detail_title">ประมูล 24 ชั่วโมง</div>
                          </div>

                      <div class="auctiontype_detail_row" >
                            <div class="auctiontype_detail_icon">&nbsp;</div>
                            <div class="auctiontype_detail_title"><span class="more_popup">ดูรายละเอียด<span></div>
                          </div>

                  <div class="bidpack_detail_rightbg">&nbsp;</div>
                </div>
              <div class="bidpack_detail_bottombg">&nbsp;</div>
            </div>
<!--Auction Type Section End Here-->
</div>

<div class="banner-bottom-main">
          <div class="featurebadge">

  <img src="images/icon-delivery-02.png" border="0" title="https://www.dinoza.com">
<p>เราแพ็คด้วยใจ จัดส่งถึงมือภายใน 3 วันทำการ*</p>
        </div>
            <div class="featurebadge">

  <img src="images/icon-secure-02.png" border="0">
<p>ชำระเงินผ่านระบบที่มีความปลอดภัยมาตรฐาน SSL (มาตรฐานเดียวกับสถาบันทางการเงิน) </p>
        </div>
            <div class="featurebadge">

  <img src="images/icon-warranty-02.png" border="0">
<p>รับประกันสินค้าทุกชิ้น มีปัญหาเปลี่ยนได้ทันทีภายใน 7 วัน</p>
        </div>
<div class="featurebadge">

  <img src="images/icon-support-02.png" border="0">
  <p>มีทีมงานดูแลตลอด 7 วัน หากมีปัญหา ติดต่อเราทันที</p>

</div>

</div>
</div>

<div id="banner-sub" class="banner_main_box" style="margin-top: 15px; margin-bottom: 15px; min-height: 0;">
    	<div class="banner" style="min-height: 0;">
		      <a href='dpoints?ref=homebnr'><img src="images/5-D-points-1040x218-3.jpg" style="width: 100%;" /></a>
	    </div>
	</div>

  <div class="clearfix"></div>
  <aside id="paymentmethods">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <ul>
                <li>
                    <img src="images/01.png">
                </li>
                <li>
        <!-- <script type="text/javascript">
        function verifySeal() {
        var bgHeight = "460";
        var bgWidth = "593";
        var url = "https:\/\/seal.godaddy.com\/verifySeal?sealID=CAIyHisel1UfdS00KDh93FjpdMGbag9tBqStk3NetmRvWeDg0w5uC";
        window.open(url,'SealVerfication','menubar=no,toolbar=no,personalbar=no,location=yes,status=no,resizable=yes,fullscreen=no,scrollbars=no,width=' + bgWidth + ',height=' + bgHeight);
      }
        </script>
        <span id="siteseal"><img style="cursor:pointer;cursor:hand" src="https://seal.godaddy.com/images/3/en/siteseal_gd_3_h_d_m.gif" onclick="verifySeal();" alt="SSL site seal - click to verify"></span></li>
      </ul> -->
            <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </aside>
<div class="clearfix"></div>

<footer>
      <div class="container" id="footer-content">
        <div class="row">
            		    <div class="col-md-2" id="footer-quicklinks">
            <h4>Quick Links </h4>
            <ul>
              <li><a href="/register?src=ftr">สมัครเลย!</a></li>
              <li><a href="/howitworks?src=ftr">Dinoza คืออะไร</a></li>
              <li><a href="/?src=ftr">สินค้าประมูล</a></li>
              <li><a href="/winners?src=ftr">คำฝากจากผู้ชนะ</a></li>
              <li><a href="/howtowin?src=ftr">Bid ยังไงให้ชนะ</a></li>
              <li><a href="/items?aid=3&amp;src=ftr">ประมูลที่ผ่านมา</a></li>
            </ul>
          </div>
  		              <div class="col-xs-6 col-sm-2" id="footer-about">
              <h4>About</h4>
              <ul>
                <li><a href="/aboutus?src=ftr">เกี่ยวกับเรา</a></li>
                <li><a href="/jobs?src=ftr">ร่วมงานกับไดโนซ่า</a></li>
                <li><a href="/news?src=ftr">ข่าวประชาสัมพันธ์</a></li>
                <li><a href="/privacy?src=ftr">นโยบาย</a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-2" id="footer-support">
              <h4>Support</h4>
              <ul>
                <li><a href="/help?src=ftr">ช่วยเหลือ</a></li>
                <li><a href="/howitworks?src=ftr">ใช้งานยังไง</a></li>
                <li><a href="/contact?src=ftr">Customer Support / ติดต่อเรา</a></li>
                <li><a href="/siterules?src=ftr">กฎทางเว็บไซต์</a></li>
                <li><a href="/terms?src=ftr">ข้อตกลงและเงื่อนไข</a></li>

              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-offset-1 col-md-3" id="footer-contact">
              <h4>มีคำถามค้างอยู่ในหัว?</h4>
              <ul class="contactchannels">
                <li class="i-call"><a class="btn btn-border" href="tel:0944040555">โทร 094-4040-555</a></li>
                <li class="i-email"><a href="mailto:support@dinoza.com" class="btn btn-border">เมลมาที่ support@dinoza.com</a></li>
                <li class="i-fb"><a href="https://www.facebook.com/messages/DinozaThailand" class="btn btn-border">แชทผ่าน Facebook Message</a></li>
                <li class="i-line"><a href="http://line.me/ti/p/%40ojr8846t" class="btn btn-border">คุยผ่าน LINE@ → DinozaThailand</a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-2" id="mascot"><img src="images/footer-logo-01.png" alt="I'm your friend at Dinoza" class="img-responsive center-block"></div>
            <div class="clearfix"></div>
          </div>
      </div> <!-- /container -->
    </footer>
	<div id="copyright" class="small">&copy; 2016 Dinoza Online Co., Ltd. All rights reserved.</div>



		<div class="overlay_dinoza" id="overlay_dinoza" style="display:none;"></div>


        <div class="prd_rebat_overlay_dinoza" id="prd_rebat_overlay_dinoza" style="display:none;"></div>
        <div class="prd_rebat_box_dinoza" id="prd_rebat_box_dinoza">
            <div class="prd_rebat_box_content">
            	<div class="prd_rebat_box_row">คุณได้ใช้ bid เท่าราคาสินค้าแล้วครับ สามารถซื้อฟรีได้เลย</div>
                <div class="prd_rebat_box_row"><br /><button class="prd_rebat_box_button" onclick="prd_rebat_box_close();">ตกลง</button></div>
            </div>
        </div>












<? include ('footer.php'); ?>
