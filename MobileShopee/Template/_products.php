<!--Product-->
<?php   
    $item_id =$_GET['item_id'] ?? 1;
    foreach($product->getData() as $item):   // or can do like this ,.. { open and specify end of it at end of section
    if($item['item_id']== $item_id):
?>

<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png";?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>By <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>

                </div>
                <hr class="m-0">
                <!--Product price-->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P</td>
                        <td><strike>$</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price</td>
                        <td class="font-size-20 text-danger"><strong>$<?php echo $item['item_price'] ?? '0'; ?></strong><span><small class="font-size-12 text-dark">&nbsp;&nbsp;inclusive of all taxes</small></span></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save</td>
                        <td class="font-size-20 text-warning"><span>$10.00</span></td>
                    </tr>
                </table>
                <!--!Product price-->

                <!-- #policy-->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet p-3 border rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days<br>replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck p-3 border rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">BluePart<br>Delivered</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double p-3 border rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 Year<br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!-- !policy-->
    <hr>

                <!--#order-details-->

                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivered by: Mar 29 - Apr 1</small>
                    <small>Sold by <a href="#">Dev Electronics</a>(4.5 out of 5|18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 462003</small>
                </div>

                     <!--color & quantity-->
                 <div class="row">
                    <div class="col-6">
                        <!--color-->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                            <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!--!color-->
                        
                    </div>
                    <div class="col-6">
                        <!--  Quantity -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty:</h6>
                            <div class="px-3 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro" class="qty_input border px-1 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>

                            </div>
                        </div>
                        <!-- !Quantity -->
                    </div>
                </div>
                    <!--color & quantity-->
                
                <!--!order-details-->
                
                <hr class="m-0">
                <!--size-->

                    <div class="size my-3">
                        <h6 class="font-baloo">Size:</h6>
                        <div class="d-flex justify-content-between w-85">
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-12">4GB RAM</button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-12">6GB RAM</button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-12">8GB RAM</button>
                            </div>
                           
                        </div>
                    </div>
                
                <!-- !size-->

            </div>

            <div class="col-l2">
                <h6 class="font-rubik">Product Descriptioin</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, pariatur. Sint soluta recusandae ullam excepturi sapiente obcaecati! Ad praesentium tempore impedit labore magnam. Repellendus recusandae incidunt ab quam eveniet ducimus, fuga tempore nisi sit nemo, ad vitae obcaecati quos, autem adipisci veniam in tenetur esse ea assumenda ex! Ipsa, reiciendis?</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, pariatur. Sint soluta recusandae ullam excepturi sapiente obcaecati! Ad praesentium tempore impedit labore magnam. Repellendus recusandae incidunt ab quam eveniet ducimus, fuga tempore nisi sit nemo, ad vitae obcaecati quos, autem adipisci veniam in tenetur esse ea assumenda ex! Ipsa, reiciendis?</p>
            </div>

        </div>
    </div>
</section>
<!--!Product-->
<?php 
    endif;
    endforeach;
?>