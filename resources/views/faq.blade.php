<link rel="stylesheet" href="{{asset('assets/css/faq.css')}}">

<div class="mpdd-faq-header">
	<p>問題詳情</p>
	<img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_arrow.png" alt="arrow" onclick="window.history.go(-1)">
</div>

@switch($id)

	@case(1)

			<div class="mpdd-faq-content">
                <p class="mpdd-faq-desc">購物流程</p>
                <div class="mpdd-faq-guide">
                    <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_guide.png" alt="">
                </div>
                
            </div>

    @break

    @case(2)
			<div class="mpdd-faq-content">
                <p class="mpdd-faq-desc">我拍下來後的商品什麽時候發貨？</p>

                <div class="mpdd-faq-trade">
                    <p class="faq-trade-subtitle subtitle-extra-margin">拼多多商城您參團並成功後除特殊商品外，商家將在48小時內發貨。以下情況除外：</p>
                    <ul class="ft-answer-list">
                        <li class="ft-answer-item ft-answer-item-contact">1.預售及其他特殊情形商品，商品會在約定發貨時間內安排發貨，發貨時間以商家商品描述頁面為準。</li><li class="ft-answer-item ft-answer-item-contact">2.海淘直供類目產品，將在成團後7天內安排發貨。</li><li class="ft-answer-item ft-answer-item-contact">3.抽獎類目產品，系統會在抽獎日自動抽取獲獎用戶，壹等獎用戶將會安排發貨，二等獎用戶系統將會全額退款並贈送代金券，具體活動規則請查看抽獎活動詳情頁。</li>
                        
                    </ul>
                </div>
            </div>

    @break


    @case(3)
			<div class="mpdd-faq-content">
                <p class="mpdd-faq-desc">已成團未發貨如何退款？</p>
                <div class="mpdd-faq-trade">
                    <p class="faq-trade-subtitle"></p>
                    <ul class="ft-answer-list">
                        <li class="ft-answer-item ft-answer-item-contact">未超過發貨時間的訂單退款，請聯系拼多多平臺客服。</li>                      
                    </ul>
                </div>
            </div>


    @break

	@case(4)
				<div class="mpdd-faq-content">
	                <p class="mpdd-faq-desc">沒有收到貨/商家發錯地址了怎麽辦？</p>
	        
	                <div class="mpdd-faq-trade">
	                    <p class="faq-trade-subtitle"></p>
	                    <ul class="ft-answer-list">
	                        <li class="ft-answer-item ft-answer-item-contact">買家可在已發貨訂單裏查看物流單號，並點擊查看物流，查看發貨信息。物流信息不準確可以聯系賣家客服核實並要求處理，若商家拒絕處理，可以要求拼多多客服介入處理。</li>
	                    </ul>
	                </div>
	            </div>


	@break

	
	@case(5)
				<div class="mpdd-faq-content">
	                <p class="mpdd-faq-desc">收到商品有問題怎麽辦？</p>
	                
	                <div class="mpdd-faq-trade">
	                    <p class="faq-trade-subtitle"></p>
	                    <ul class="ft-answer-list">
	                        <li class="ft-answer-item ft-answer-item-contact">買家可以先聯系賣家客服，並提供實物圖片確認問題是否屬實。如果確認商品問題，或無法說明商品是否合格，賣家應與買家協商解決；若因商品問題商家拒絕處理，可以要求拼多多客服介入處理。</li>
	                        
	                        
	                    </ul>
	                </div>
	            </div>


	@break

	@case(6)
				<div class="mpdd-faq-content">
	                <p class="mpdd-faq-desc">如何聯系商家客服？</p>
	                
	                <div class="mpdd-faq-trade">
	                    <p class="faq-trade-subtitle"></p>
	                    <ul class="ft-answer-list">
	                        <li class="ft-answer-item ft-answer-item-contact">1.在拼多多App中商品詳情裏面點擊“客服”可直接聯系商家。</li><li class="ft-answer-item ft-answer-item-contact">2.也可在拼多多App的訂單詳情裏面“聯系賣家”。</li>
	                        
	                        
	                        
	                    </ul>
	                </div>
	            </div>


	@break


	@case(7)
				<div class="mpdd-faq-content">
	                <p class="mpdd-faq-desc">收到的商品能退換貨麽？</p>
	                
	                <div class="mpdd-faq-trade">
	                    <p class="faq-trade-subtitle"></p>
	                    <ul class="ft-answer-list">
	                        <li class="ft-answer-item ft-answer-item-contact">拼多多商城支持7天無理由退換貨，在不影響第二次銷售的情況下，可以要求商家無理由退換貨。因為商品的特殊性，7天無理由退貨換不支持生鮮/虛擬/海淘直供類目。</li>
	                        
	                        
	                        
	                    </ul>
	                </div>
	            </div>

	@break

	@case(8)
				<div class="mpdd-faq-content">
	                <p class="mpdd-faq-desc">退換貨流程</p>
	                
	                <div class="mpdd-faq-trade">
	                    <p class="faq-trade-subtitle subtitle-extra-margin">請您務必先通過微信公眾號尋找拼多多客服或者直接與商家客服聯系，說明退換貨原因。</p>
	                    <ul class="ft-answer-list">
	                       <li class="ft-answer-item ft-answer-item-contact">1.若商品符合退換貨規則條件，客服將會為您提供商家退貨地址和退貨流程，買家未聯系客服自行退貨導致商家無法收到產品，商家有權不予處理。</li><li class="ft-answer-item ft-answer-item-contact">2.若商品符合退換貨規則條件，賣家不提供退貨地址，買家可聯系拼多多官方客服介入處理。拼多多不支付退貨到付。在您沒有和賣家協商好貨到付款時，請聯系物流公司取回貨物，拿回貨物後重新退貨，運費買家自行承擔。</li>
	                        
	                        
	                        
	                    </ul>
	                </div>
	            </div>

	@break


	@case(9)

			<div class="mpdd-faq-content">
                <p class="mpdd-faq-desc">退換貨規則</p>
                
                <div class="mpdd-faq-trade">
                    <p class="faq-trade-subtitle"></p>
                    <ul class="ft-answer-list">
                        <li class="ft-answer-item ft-answer-item-contact">1.買家須在簽收商品之日起7天內（按照物流簽收後的第二天零時起計算時間，滿168小時為7天）向商家提出退換貨。</li><li class="ft-answer-item ft-answer-item-contact">2.買家申請退款金額不得高於已實際付款金額。</li><li class="ft-answer-item ft-answer-item-contact">3.若買家退換原因為7天無理由退貨，買家須承擔退貨運費。</li><li class="ft-answer-item ft-answer-item-contact">4.若產品因質量問題、發錯、丟件等形式導致退換貨，運費全部由商家承擔。</li><li class="ft-answer-item ft-answer-item-contact">5.若因個人原因對水產肉類/新鮮蔬果/熟食等食品進行拒收，商家有理由拒絕對買家進行退款。</li><li class="ft-answer-item ft-answer-item-contact">6.若買家收到產品後超過7天未聯系商家或平臺客服處理退換貨需求，商家有權不予處理。</li><li class="ft-answer-item ft-answer-item-contact">7.若買家自收到商品之日起7天內根據賣家或系統提供的退貨地址進行無理由退貨，賣家收到所退商品之日起3天內（按照物流簽收後的第二天零時起計算時間，滿72小時為3天）未有異議但並未退款的，拼多多介入後有權對買家進行退款。</li><li class="ft-answer-item ft-answer-item-contact">8.若買家要求換貨，商家需在收到所退產品起3天內（按照物流簽收後的第二天零時起計算時間，滿72小時為3天）安排換貨，逾期未發出換貨拼多多有權介入處理。</li><li class="ft-answer-item ft-answer-item-contact">9.關於拒收：若為無理由拒簽，運費應由買家承擔。有理拒簽的情況包括但不僅限於以下幾種： a、在賣家未發貨前，買家已申請退款表示取消訂單，後未經買家同意而賣家強行發貨所導致的買家拒簽；b、買家驗貨時發現貨物破損，或商品不符，然後拒簽。</li>
                        
                        
                        
                    </ul>
                </div>
            </div>


	@break

	@case(10)
			<div class="mpdd-faq-content">
                <p class="mpdd-faq-desc">7天無理由退換貨</p>
                
                <div class="mpdd-faq-trade">
                    <p class="faq-trade-subtitle"></p>
                    <ul class="ft-answer-list">
                        <li class="ft-answer-item ft-answer-item-contact">七天無理由退換貨是指消費者在拼多多購物後，在簽收貨物後7天內，如因主觀原因要求退換貨，可以提出“7天無理由退換貨”的申請（部分商品及類目除外），並且買家退貨的貨物不得影響賣家的二次銷售。若因個人原因對水產肉類/新鮮蔬果/熟食等食品進行拒收，商家有理由拒絕對買家進行退款。</li>
                        
                        <div class="ft-answer-cat">
                            <div class="ft-answer-cat-wrapper-1">
                                <div class="ft-answer-cat-1">
                                    <p class="ft-answer-cat-title-1">支持7天無理由退換貨類目</p>
                                    <ul>
                                        <li class="ft-answer-cat-list">▪ <span>奶粉/輔食/營養品/零食</span></li><li class="ft-answer-cat-list">▪ <span>零食/堅果</span></li><li class="ft-answer-cat-list">▪ <span>茶/咖啡/沖飲</span></li><li class="ft-answer-cat-list">▪ <span>彩妝/香水/美妝工具</span></li><li class="ft-answer-cat-list">▪ <span>美容護膚/美體/精油</span></li><li class="ft-answer-cat-list">▪ <span>服裝類</span></li><li class="ft-answer-cat-list">▪ <span>個人護理/保健/按摩器材</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ft-answer-cat-wrapper-2">
                                <div class="ft-answer-cat-2">
                                    <p class="ft-answer-cat-title-2">不支持7天無理由退換貨類目</p>
                                    <ul>
                                        <li class="ft-answer-cat-list">▪ <span>電影/演出/體育賽事</span></li><li class="ft-answer-cat-list">▪ <span>珠寶/鉆石/翡翠/黃金</span></li><li class="ft-answer-cat-list">▪ <span>酒類</span></li><li class="ft-answer-cat-list">▪ <span>水產肉類/新鮮蔬果/熟食</span></li><li class="ft-answer-cat-list">▪ <span>成人用品/避孕/計生用品</span></li><li class="ft-answer-cat-list">▪ <span>網絡店鋪代金/優惠券</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="ft-answer-item">
                            若此類商品詳情頁中出現“7天退換”標識的商品，則支持7天無理由退貨。
                        </p>
                    </ul>
                </div>
            </div>

	@break
	
	@case(11)

			<div class="mpdd-faq-content">
                <p class="mpdd-faq-desc">如何聯系拼多多客服？</p>
                
                <div class="mpdd-faq-trade">
                    <p class="faq-trade-subtitle">壹、聯系拼多多在線客服</p>
                    <ul class="ft-answer-list">
                        <li class="ft-answer-item ft-answer-item-contact fta-item-contact-extra">1.搜索拼多多（pinduoduo2015）關註微信公眾號“拼多多”，進入微信公眾號。
                        </li>
                        <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_step1.png">
                        <li class="ft-answer-item ft-answer-item-contact fta-item-contact-extra">2.點擊右下方按鈕“平臺客服”，選擇“聯系平臺客服”。
                        </li>
                        <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_step2.png">
                        <li class="ft-answer-item ft-answer-item-contact fta-item-contact-extra">	3.點擊鍵盤圖標，在對話框內輸入您的問題，稍後就會有專業客服幫您處理。
                        </li>
                        <img src="//mcdn.pinduoduo.com/assets/img/mpdd_faq_step3.png">
                        	<li class="ft-answer-item ft-answer-item-contact fta-item-contact-extra">4.在線客服時間: 9:00-24:00
                        </li>
                        <div class="ft-answer-contact-extra">
                            <p class="fta-contact-extra-1">二、進入拼多多App個人中心，我的消息中聯系“拼多多官方客服”。</p>
                            <p class="fta-contact-extra-1">三、電話聯系拼多多客服</p>
                            <ul>
                                <li class="ft-answer-item fta-item-contact-extra">
                                    <p>1.客服電話：021-61897088（推薦）</p>
                                    <p>400-8822-528</p>
                                    <p>2.商家熱線：021-61897188</p>
                                    <p>3.客服時間：9:00-20:00</p>
                                </li>
                            </ul>
                        </div>
                        
                        
                    </ul>
                </div>
            </div>


	@break




        
@endswitch
		
