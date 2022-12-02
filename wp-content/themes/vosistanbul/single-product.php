<?php get_header(); the_post(); ?>
    <div style="height: 130px"></div>
        <?php global $product; ?>
		<!--Single Product Area Start-->
		<div class="single-product-area mb-115">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12 col-lg-5">
		                <div class="product-details-img-tab">
		                    <!--Product Tab Content Start-->
		                    <div class="tab-content single-product-img">
                            <?php $single_pic_ids = $product->get_image_id(); ?>
                            <div class="tab-pane fade show active" id="product1">
                                  <div class="product-large-thumb img-full">
                                     <div class="easyzoom easyzoom--overlay">
                                        <a href="<?php echo $Original_image_url = wp_get_attachment_url( $single_pic_ids ); ?>">
                                            <img src="<?php echo $Original_image_url = wp_get_attachment_url( $single_pic_ids ); ?>" alt="">
                                        </a>
                                        <a href="<?php echo $Original_image_url = wp_get_attachment_url( $single_pic_ids ); ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-search"></i></a>
                                     </div>
                                  </div>
                            </div>
                            <?php 
                                $attachment_ids = $product->get_gallery_image_ids();
                                $galleryCount = 2;    
                                foreach( $attachment_ids as $attachment_id ) 
                                {
                            ?>  
                              <div class="tab-pane fade" id="product<?php echo $galleryCount; ?>">
                                  <div class="product-large-thumb img-full">
                                     <div class="easyzoom easyzoom--overlay">
                                        <a href="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>">
                                            <img src="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>" alt="">
                                        </a>
                                        <a href="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-search"></i></a>
                                     </div>
                                  </div>
                              </div>
                              <?php 
                                    $galleryCount++; 
                                } 
                              ?>
                            </div>
		                    <!--Product Tab Content End-->
		                    <!--Product Tab Menu Start-->
		                    <div class="product-menu">
		                        <div class="nav product-tab-menu">
                                    <?php $single_pic_ids = $product->get_image_id(); ?>
                                    <div class="product-details-img">
                                        <a class="active" data-bs-toggle="tab" href="#product1"><img src="<?php echo $Original_image_url = wp_get_attachment_url( $single_pic_ids ); ?>" alt=""></a>
                                    </div>
                                    
                                    <?php 
                                        $attachment_ids = $product->get_gallery_image_ids();
                                        $galleryCount = 2;    
                                        foreach( $attachment_ids as $attachment_id ) 
                                        {
                                    ?>
                                            <div class="product-details-img">
                                            <a class="active" data-bs-toggle="tab" href="#product<?php echo $galleryCount; ?>"><img src="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>" alt=""></a>
                                            </div>
                                  <?php 
                                            $galleryCount++; 
                                        } 
                                  ?>
                                </div>
		                    </div>
		                    <!--Product Tab Menu End-->
		                </div>
		            </div>
		            <div class="col-md-12 col-lg-7">
                        <!--Product Details Content Start-->
		                <div class="product-details-content">
                            <!--Product Nav Start-->
                            <!--Product Nav End-->
		                    <h2><?php echo $product->get_name(); ?></h2>
                            <div class="single-product-price">
                                <span class="price new-price"><?php echo $product->get_price(). ' TL'; ?></span>
                                <span class="regular-price"><?php echo $product->get_regular_price(). ' TL'; ?></span>
                            </div>
                            <div class="product-description">
                                <p><?php echo $product->get_short_description(); ?></p>
                            </div>
                            <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
							<?php /*
                            <div class="product-size mb-30">
                                <p style="margin-top:8px;">TESLİMAT SAATİ:</p>
                                <?php $teslimat_saati = get_field('teslimat_saati'); ?>
								<select name="_teslimat_saati" class="nice-select" name="sortby">
                                    <?php 
                                        foreach ($teslimat_saati as $teslimat_saatleri) {
                                    ?>
									    <option value="<?php echo $teslimat_saatleri['saat_metni']; ?>"><?php echo $teslimat_saatleri['saat_metni']; ?></option>
                                    <?php } ?>
								</select>
							</div>
                            */ ?>
                            
                            <div class="product-size mb-30">
                                <p style="margin-top:16px;">ADRES:</p>
                                <input type="text" id="checkoutCustomForm" name="_teslimat_adres_secimi" placeholder="Gönderim Adresi Seçiniz">
							</div>
							<div class="color-pick mb-30">
								<p>TESLİMAT TARİHİ : </p>
                                <?php 
                                    $teslimat_tarihi = get_field('teslim_tarihi'); 
                                    for ($i = 0; $i < $teslimat_tarihi; $i++) {
                                ?>
                                <label class="calendarDateBox <?php echo 'teslimat_tarihi_'.($i + 1); ?>"><span id="<?php echo 'calendarDateName_'.($i + 1); ?>" class="calendarDateName"></span> <div id="<?php echo 'calendarDateNumber_'.($i + 1); ?>" class="calendarDateNumber"></div> <input class="custom_radio" type="radio" id="<?php echo 'teslimat_tarihi_'.($i + 1); ?>" name="_teslimat_tarihi_secim"></label>
                                <?php $teslimat_tarihi_count++; } ?>
                                <label class="calendarDateBox teslimat_tarihi_takvim">Takvim <span id="calendarDateNumber_takvim" class="calendarDateName"></span> <input class="custom_radio" type="radio" id="takvim" name="_teslimat_tarihi_secim"></label>
							</div>
                            
                            <p class="errorTeslimTarihi" style="display:none;">Lutfen bir secim yapiniz</p>
                            <?php $product_id = $product->id; 
                            ?>
                            <div class="single-product-quantity">
                                    <div class="add-to-link">
                                        <input name="_custom_option" value="ssss" type="hidden" />
                                        <input id="datepicker" style="visibility:hidden;" type="text">
                                        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                                        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
                                        <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" id="addToCart" class="product-btn"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                                        <?php /*<a href="?add-to-cart=<?php echo $product_id; ?>" class="product-btn">Sepete Ekle</a> */ ?>
                                    </div>
                           </div>
                           </form>
                           <script type="text/javascript">
                                    const today = new Date();
                                    const teslimat_tarih_value = <?php echo get_field('teslim_tarihi'); ?>
                                    
                                    function calculate_date(date, increase_value) {
                                        var result = new Date(date);
                                        result.setDate(result.getDate() + increase_value);
                                        return result;
                                    }

                                    function calculate_date_name(date) {
                                        const resultToday = new Date();
                                        const resultTemp = new Date(date);
                                        const dateNames = ["Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi" ];
                                        const dateMonths = ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"];
                                        let returnDate = [];

                                        if(resultToday.getDay() == resultTemp.getDay()) {
                                            returnDate[0] = "Bugün";
                                            returnDate[1] = resultTemp.getDate() + ' ' +dateMonths[resultTemp.getMonth()]; 
                                        } else {
                                            returnDate[0] = dateNames[resultTemp.getDay()];
                                            returnDate[1] = resultTemp.getDate() + ' ' +dateMonths[resultTemp.getMonth()]; 
                                        }

                                        return returnDate;
                                    }

                                    let teslimat_days = [], teslimat_days_name = [];

                                    for(let k = 0; k < teslimat_tarih_value; k++) {
                                        if(k === 0) { teslimat_days[k] = today; }
                                        else { teslimat_days[k] = calculate_date(today, k); }
                                        const tempId = 'teslimat_tarihi_' + (k + 1);
                                        document.getElementById(tempId).value=teslimat_days[k];
                                        teslimat_days_name[k] = calculate_date_name(teslimat_days[k]);
                                        document.getElementById("calendarDateName_" + (k + 1)).innerHTML = teslimat_days_name[k][0];
                                        document.getElementById("calendarDateNumber_" + (k + 1)).innerHTML = teslimat_days_name[k][1];
                                    } 

                                    jQuery(document).ready(function () {
                                        $("#datepicker").datepicker({
                                            onSelect: function () {
                                                $(this).data('datepicker').inline = true;
                                                $("#datepicker").datepicker('hide');
                                                let currentTakvim = $("#datepicker").datepicker("getDate");
                                                $("#takvim").val(currentTakvim);
                                                currentTakvim = calculate_date_name(currentTakvim);
                                                document.getElementById("calendarDateNumber_takvim").innerHTML = currentTakvim[1];
                                            },
                                            onClose: function () {
                                                $(this).data('datepicker').inline = false;
                                                $("#takvim").toggleClass('opened');
                                            }
                                        });

                                        $('.teslimat_tarihi_1').addClass("calendarDateBoxChecked");
                                        $('input:radio[name="_teslimat_tarihi_secim"]').filter('[id="teslimat_tarihi_1"]').attr('checked', true);


                                        $('#takvim').click(function () {
                                            if ($(this).hasClass('opened')) {
                                                $("#datepicker").datepicker('hide');
                                                $('.teslimat_tarihi_takvim').addClass("calendarDateBoxChecked");
                                            } else {
                                                $("#datepicker").datepicker('show');
                                                $('.teslimat_tarihi_takvim').addClass("calendarDateBoxChecked");
                                            }
                                            $(this).toggleClass('opened');
                                            for(let k = 0; k < teslimat_tarih_value; k++) {
                                                const tempClass = '.teslimat_tarihi_' + (k + 1);
                                                $(tempClass).removeClass("calendarDateBoxChecked");
                                            } 
                                        });

                                        $('input[name="_teslimat_tarihi_secim"]').click(function(){
                                            for(let k = 0; k < teslimat_tarih_value; k++) {
                                                const tempClass = '.teslimat_tarihi_' + (k + 1);
                                                $(tempClass).removeClass("calendarDateBoxChecked");
                                            } 

                                            let tempID = $('input[name="_teslimat_tarihi_secim"]:checked').attr('id');
                                            if(tempID == "takvim") {
                                                
                                            } else {
                                                if($('.teslimat_tarihi_takvim').hasClass("calendarDateBoxChecked")) {
                                                    $('.teslimat_tarihi_takvim').removeClass("calendarDateBoxChecked");
                                                }
                                            }
                                            tempID = "." + tempID;
                                            $(tempID).addClass("calendarDateBoxChecked");
                                        })


                                        $('#addToCart').click(function(e){
                                            const tempTeslim = $('input[name="_teslimat_tarihi_secim"]:checked').val();
                                            const tempAdress = $('input[name="_teslimat_adres_secimi"]').val();
                                            if(tempTeslim && tempAdress) { 
                                                return true;
                                            }
                                            else {
                                                $(".errorTeslimTarihi").css("display", "block");
                                                return false;
                                            }
                                        })
                                    });
                            </script>
                            <div class="product-meta">
                                <span class="posted-in">
                                        Kategori: 
		                                <?php echo $product->get_categories(); ?>
		                            </span>
                            </div>
		                </div>
		                <!--Product Details Content End-->
		            </div>
		        </div>
		    </div>
		</div>
		<!--Single Product Area End-->
		<!--Product Description Review Area Start-->
		<div class="product-description-review-area mb-100">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="product-review-tab">
		                    <!--Review And Description Tab Menu Start-->
		                    <ul class="nav dec-and-review-menu">
                              <li>
                                <a class="active" data-bs-toggle="tab" href="#description">Ürün Açıklaması</a>
                              </li>
                            </ul>
		                    <!--Review And Description Tab Menu End-->
		                    <!--Review And Description Tab Content Start-->
		                    <div class="tab-content product-review-content-tab" id="myTabContent-4">
                              <div class="tab-pane fade active show" id="description">
                                  <div class="single-product-description">
                                     <p><?php echo $product->get_short_description(); ?></p>
                                  </div>
                              </div>
                            </div>
		                    <!--Review And Description Tab Content End-->
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Product Description Review Area Start-->
<?php get_footer(); ?>
