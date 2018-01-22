
        <div id="slideshow">
            <div class="fullwidthbanner-container">
                <div class="revolution-slider" style="height: 0; overflow: hidden;">
                    <ul>    <!-- SLIDE  -->
                        <!-- Slide1 -->
                        <li data-transition="zoomin" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="http://placehold.it/2080x646" alt="">
                        </li>
                        
                        <!-- Slide2 -->
                        <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="http://placehold.it/2080x646" alt="">
                        </li>
                        
                        <!-- Slide3 -->
                        <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="http://placehold.it/2080x646" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section id="content">
            <div class="search-box-wrapper">
                <div class="search-box container">
                    <ul class="search-tabs clearfix">
                        <li class="active"><a href="#hotels-tab" data-toggle="tab">HOTELS</a></li>
                        <li><a href="#flights-tab" data-toggle="tab">FLIGHTS</a></li>
                        <li><a href="#flight-and-hotel-tab" data-toggle="tab">FLIGHT &amp; HOTELS</a></li>
                        <li><a href="#cars-tab" data-toggle="tab">CARS</a></li>
                        <li><a href="#cruises-tab" data-toggle="tab">CRUISES</a></li>
                        <li><a href="#flight-status-tab" data-toggle="tab">FLIGHT STATUS</a></li>
                        <li><a href="#online-checkin-tab" data-toggle="tab">ONLINE CHECK IN</a></li>
                    </ul>
                    <div class="visible-mobile">
                        <ul id="mobile-search-tabs" class="search-tabs clearfix">
                            <li class="active"><a href="#hotels-tab">HOTELS</a></li>
                            <li><a href="#flights-tab">FLIGHTS</a></li>
                            <li><a href="#flight-and-hotel-tab">FLIGHT &amp; HOTELS</a></li>
                            <li><a href="#cars-tab">CARS</a></li>
                            <li><a href="#cruises-tab">CRUISES</a></li>
                            <li><a href="#flight-status-tab">FLIGHT STATUS</a></li>
                            <li><a href="#online-checkin-tab">ONLINE CHECK IN</a></li>
                        </ul>
                    </div>
                    
                    <div class="search-tab-content">
                        <div class="tab-pane fade active in" id="hotels-tab">
                            <form action="hotel-list-view.html" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Where</h4>
                                        <label>Your Destination</label>
                                        <input type="text" class="input-text full-width" placeholder="enter a destination or hotel name" />
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label>Check In</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Check Out</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Who</h4>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label>Rooms</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button type="submit" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="flights-tab">
                            <form action="flight-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Leaving From</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                        <div class="form-group">
                                            <label>Going To</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <label>Departing On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Arriving On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input type="text" class="input-text full-width" placeholder="type here" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Infants</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 pull-right">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">SERACH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="flight-and-hotel-tab">
                            <form action="flight-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Leaving From</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                        <div class="form-group">
                                            <label>Going To</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <label>Departing On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Arriving On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input type="text" class="input-text full-width" placeholder="type here" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Rooms</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 pull-right">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">SERACH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="cars-tab">
                            <form action="car-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Pick Up</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                        <div class="form-group">
                                            <label>Drop Off</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="form-group">
                                            <label>Pick-Up Date / Time</label>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">anytime</option>
                                                            <option value="2">morning</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Drop-Off Date / Time</label>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">anytime</option>
                                                            <option value="2">morning</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input type="text" class="input-text full-width" placeholder="type here" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Car Type</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">select a car type</option>
                                                        <option value="economy">Economy</option>
                                                        <option value="compact">Compact</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">SERACH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="cruises-tab">
                            <form action="cruise-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Your Destination</label>
                                            <input type="text" class="input-text full-width" placeholder="enter a destination or hotel name" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Departure Date</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Cruise Length</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">select length</option>
                                                        <option value="1">1-2 Nights</option>
                                                        <option value="2">3-4 Nights</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Cruise Line</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">select cruise line</option>
                                                        <option>Azamara Club Cruises</option>
                                                        <option>Carnival Cruise Lines</option>
                                                        <option>Celebrity Cruises</option>
                                                        <option>Costa Cruise Lines</option>
                                                        <option>Cruise &amp; Maritime Voyages</option>
                                                        <option>Crystal Cruises</option>
                                                        <option>Cunard Line Ltd.</option>
                                                        <option>Disney Cruise Line</option>
                                                        <option>Holland America Line</option>
                                                        <option>Hurtigruten Cruise Line</option>
                                                        <option>MSC Cruises</option>
                                                        <option>Norwegian Cruise Line</option>
                                                        <option>Oceania Cruises</option>
                                                        <option>Orion Expedition Cruises</option>
                                                        <option>P&amp;O Cruises</option>
                                                        <option>Paul Gauguin Cruises</option>
                                                        <option>Peter Deilmann Cruises</option>
                                                        <option>Princess Cruises</option>
                                                        <option>Regent Seven Seas Cruises</option>
                                                        <option>Royal Caribbean International</option>
                                                        <option>Seabourn Cruise Line</option>
                                                        <option>Silversea Cruises</option>
                                                        <option>Star Clippers</option>
                                                        <option>Swan Hellenic Cruises</option>
                                                        <option>Thomson Cruises</option>
                                                        <option>Viking River Cruises</option>
                                                        <option>Windstar Cruises</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>&nbsp;</label>
                                                <button class="icon-check full-width">SEARCH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="flight-status-tab">
                            <form action="flight-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Leaving From</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Going To</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">When</h4>
                                        <div class="form-group">
                                            <label>Departure Date</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group">
                                            <label>Flight Number</label>
                                            <input type="text" class="input-text full-width" placeholder="enter flight number" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button class="icon-check full-width">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="online-checkin-tab">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Leaving From</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Going To</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">When</h4>
                                        <div class="form-group">
                                            <label>Departure Date</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="input-text full-width" placeholder="enter your full name" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button class="icon-check full-width">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section">
                <div class="container">
                    <h2>Featured Flight Deals</h2>
                    <div class="image-box style11 block">
                        <div class="row">
                            <div class="col-sm-4">
                                <article class="box">
                                    <figure class="animated" data-animation-type="fadeInDown">
                                        <a title="" href="flight-detailed.html"><img alt="" src="http://placehold.it/370x160"></a>
                                        <figcaption>
                                            <h3 class="caption-title">Paris</h3>
                                            <span>Delta airline</span>
                                        </figcaption>
                                    </figure>
                                    <div class="details">
                                        <span class="price">
                                            <small>From</small>$120
                                        </span>
                                        <div class="icon-box style11">
                                            <div class="icon-wrapper">
                                                <i class="soap-icon-plane-right takeoff-effect circle"></i>
                                            </div>
                                            <div class="details">
                                                <h4 class="box-title">London to Paris<small>Oneway flight</small></h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-4">
                                <article class="box">
                                    <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0.6">
                                        <a title="" href="flight-detailed.html"><img alt="" src="http://placehold.it/370x160"></a>
                                        <figcaption>
                                            <h3 class="caption-title">Spain</h3>
                                            <span>United airline</span>
                                        </figcaption>
                                    </figure>
                                    <div class="details">
                                        <span class="price">
                                            <small>From</small>$347
                                        </span>
                                        <div class="icon-box style11">
                                            <div class="icon-wrapper">
                                                <i class="soap-icon-plane-right takeoff-effect circle"></i>
                                            </div>
                                            <div class="details">
                                                <h4 class="box-title">Dubai to Spain<small>Return flight</small></h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-4">
                                <article class="box">
                                    <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0.9">
                                        <a title="" href="flight-detailed.html"><img alt="" src="http://placehold.it/370x160"></a>
                                        <figcaption>
                                            <h3 class="caption-title">Australia</h3>
                                            <span>air asia airline</span>
                                        </figcaption>
                                    </figure>
                                    <div class="details">
                                        <span class="price">
                                            <small>From</small>$239
                                        </span>
                                        <div class="icon-box style11">
                                            <div class="icon-wrapper">
                                                <i class="soap-icon-plane-right takeoff-effect circle"></i>
                                            </div>
                                            <div class="details">
                                                <h4 class="box-title">Rome to Australia<small>Oneway flight</small></h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    
                    <h2>Cheap Flights &amp; Air Tickets</h2>
                    <div class="image-carousel style2 block" data-animation="slide" data-item-width="270" data-item-margin="30">
                        <ul class="slides image-box listing-style2 flight">
                            <li>
                                <article class="box">
                                    <figure>
                                        <span><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></span>
                                    </figure>
                                    <div class="details">
                                        <a title="View all" href="flight-detailed.html" class="pull-right button btn-mini uppercase">select</a>
                                        <h4 class="box-title">Paris</h4>
                                        <label class="price-wrapper">
                                            <span class="price-per-unit">$620</span>oneway
                                        </label>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article class="box">
                                    <figure>
                                        <span><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></span>
                                    </figure>
                                    <div class="details">
                                        <a title="View all" href="flight-detailed.html" class="pull-right button btn-mini uppercase">select</a>
                                        <h4 class="box-title">Paris</h4>
                                        <label class="price-wrapper">
                                            <span class="price-per-unit">$170</span>oneway
                                        </label>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article class="box">
                                    <figure>
                                        <span><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></span>
                                    </figure>
                                    <div class="details">
                                        <a title="View all" href="flight-detailed.html" class="pull-right button btn-mini uppercase">select</a>
                                        <h4 class="box-title">Paris</h4>
                                        <label class="price-wrapper">
                                            <span class="price-per-unit">$620</span>oneway
                                        </label>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article class="box">
                                    <figure>
                                        <span><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></span>
                                    </figure>
                                    <div class="details">
                                        <a title="View all" href="flight-detailed.html" class="pull-right button btn-mini uppercase">select</a>
                                        <h4 class="box-title">Paris</h4>
                                        <label class="price-wrapper">
                                            <span class="price-per-unit">$320</span>oneway
                                        </label>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article class="box">
                                    <figure>
                                        <span><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></span>
                                    </figure>
                                    <div class="details">
                                        <a title="View all" href="flight-detailed.html" class="pull-right button btn-mini uppercase">select</a>
                                        <h4 class="box-title">Paris</h4>
                                        <label class="price-wrapper">
                                            <span class="price-per-unit">$620</span>oneway
                                        </label>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <h2>Before you Fly</h2>
                            <div class="toggle-container with-image block" id="accordion3" data-image-animation-type="fadeIn" data-image-animation-duration="2">
                                <div class="panel style1">
                                    <img src="http://placehold.it/370x160" alt="" />
                                    <h4 class="panel-title">
                                        <a href="#acc7" data-toggle="collapse" data-parent="#accordion3">Book your Bags in Advance</a>
                                    </h4>
                                    <div class="panel-collapse collapse in" id="acc7">
                                        <div class="panel-content">
                                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa iden porta nequetiam elerisque mi id habitant morbi tristique senectus.</p>
                                        </div><!-- end content -->
                                    </div>
                                </div>
                                
                                <div class="panel style1">
                                    <img src="http://placehold.it/370x160" alt="" />
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#acc8" data-toggle="collapse" data-parent="#accordion3">Special Meal Requests</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="acc8">
                                        <div class="panel-content">
                                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa iden porta nequetiam elerisque mi id habitant morbi tristique senectus.</p>
                                        </div><!-- end content -->
                                    </div>
                                </div>
                                
                                <div class="panel style1">
                                    <img src="http://placehold.it/370x160" alt="" />
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#acc9" data-toggle="collapse" data-parent="#accordion3">Check your Flight Status</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="acc9">
                                        <div class="panel-content">
                                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed pulvinar massa iden porta nequetiam elerisque mi id habitant morbi tristique senectus.</p>
                                        </div><!-- end content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2>Top Flight Routes</h2>
                            <div class="flight-routes image-box style13 block">
                                <div class="box">
                                    <figure>
                                        <a href="#"><img src="http://placehold.it/40x40" alt=""></a>
                                    </figure>
                                    <div class="action">
                                        <a href="flight-booking.html" class="button">BOOK</a>
                                    </div>
                                    <div class="details">
                                        <h5 class="box-title">Rome to Dubai</h5>
                                        <label class="price-wrapper"><span class="price-per-unit">$201</span>Oneway</label>
                                    </div>
                                </div>
                                <div class="box">
                                    <figure>
                                        <a href="#"><img src="http://placehold.it/40x40" alt=""></a>
                                    </figure>
                                    <div class="action">
                                        <a href="flight-booking.html" class="button">BOOK</a>
                                    </div>
                                    <div class="details">
                                        <h5 class="box-title">Greece to Canada</h5>
                                        <label class="price-wrapper"><span class="price-per-unit">$478</span>return</label>
                                    </div>
                                </div>
                                <div class="box">
                                    <figure>
                                        <a href="#"><img src="http://placehold.it/40x40" alt=""></a>
                                    </figure>
                                    <div class="action">
                                        <a href="flight-booking.html" class="button">BOOK</a>
                                    </div>
                                    <div class="details">
                                        <h5 class="box-title">Thailand to Paris</h5>
                                        <label class="price-wrapper"><span class="price-per-unit">$231</span>Oneway</label>
                                    </div>
                                </div>
                                <div class="box">
                                    <figure>
                                        <a href="#"><img src="http://placehold.it/40x40" alt=""></a>
                                    </figure>
                                    <div class="action">
                                        <a href="flight-booking.html" class="button">BOOK</a>
                                    </div>
                                    <div class="details">
                                        <h5 class="box-title">Singapore to Malaysia</h5>
                                        <label class="price-wrapper"><span class="price-per-unit">$149</span>return</label>
                                    </div>
                                </div>
                                <div class="box">
                                    <figure>
                                        <a href="#"><img src="http://placehold.it/40x40" alt=""></a>
                                    </figure>
                                    <div class="action">
                                        <a href="flight-booking.html" class="button">BOOK</a>
                                    </div>
                                    <div class="details">
                                        <h5 class="box-title">Greece to Canada</h5>
                                        <label class="price-wrapper"><span class="price-per-unit">$478</span>return</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2>Get Travel Insurance</h2>
                            <div class="icon-box style7 border-bottom">
                                <i class="soap-icon-user yellow-bg"></i>
                                <div class="description">
                                    <h4 class="box-title"><a href="#">Single Trip Plans</a></h4>
                                    <ul class="circle">
                                        <li>Trip Protector</li>
                                        <li>Rental Car Damage Protector</li>
                                    </ul>
                                    <a class="view" href="#">View Single Trip Plan Options »</a>
                                </div>
                            </div>
                            <div class="icon-box style7">
                                <i class="soap-icon-friends yellow-bg"></i>
                                <div class="description">
                                    <h4 class="box-title"><a href="#">Multi-Trip (Annual) Plans</a></h4>
                                    <ul class="circle">
                                        <li>Best value for frequent travelers</li>
                                        <li>Coverage for non-award</li>
                                    </ul>
                                    <a class="view" href="#">View Annual Trip Plan Options »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="global-map-area promo-box no-margin parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="content-section description pull-right col-sm-9">
                        <div class="table-wrapper hidden-table-sm">
                            <div class="table-cell">
                                <h2 class="m-title">
                                    Comfortable and modern flight experience.<br /><em>400+ Airlines to Travel The World!</em>
                                </h2>
                            </div>
                            <div class="table-cell action-section col-md-4 no-float">
                                <form method="post" action="flight-list-view.html">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-12">
                                            <input type="text" class="input-text input-large full-width" value="" placeholder="Enter destination or hotel name" />
                                        </div>
                                        <div class="col-xs-6 col-md-12">
                                            <button class="full-width btn-large">search flights</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="image-container col-sm-4">
                        <img src="http://placehold.it/290x234" alt="" class="animated" data-animation-type="fadeInUp" />
                    </div>
                </div>
            </div>
        </section>
 

