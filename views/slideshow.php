<style>
        ul {
            list-style: none outside none;
            padding-left: 0;
            margin: 0;
        }
</style>
</head>

<body>


    <div class="item">
        <ul id="content-slider" class="content-slider">
            <li>
                <div class="sm-sl-box">
                    <figure><img src="img/1.jpg" class="img-responsive"></figure>
                    <div class="caption-box">
                        <h1>This is a simple text to do this, This is a simple text to do this........</h1>
                        <p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> ថ្ងៃនេះ ម៉ោង 11:20</p>
                        <p class="cate"><i class="fa fa-th" aria-hidden="true"></i> Technology</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="sm-sl-box">
                    <figure><img src="img/2.jpg" class="img-responsive"></figure>
                    <div class="caption-box">
                        <h1>This is a simple text to do this, This is a simple text to do this........</h1>
                        <p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> ថ្ងៃនេះ ម៉ោង 11:20</p>
                        <p class="cate"><i class="fa fa-th" aria-hidden="true"></i> Technology</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="sm-sl-box">
                    <figure><img src="img/3.jpg" class="img-responsive"></figure>
                    <div class="caption-box">
                        <h1>This is a simple text to do this, This is a simple text to do this........</h1>
                        <p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> ថ្ងៃនេះ ម៉ោង 11:20</p>
                        <p class="cate"><i class="fa fa-th" aria-hidden="true"></i> Technology</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="sm-sl-box">
                    <figure><img src="img/4.jpg" class="img-responsive"></figure>
                    <div class="caption-box">
                        <h1>This is a simple text to do this, This is a simple text to do this........</h1>
                        <p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> ថ្ងៃនេះ ម៉ោង 11:20</p>
                        <p class="cate"><i class="fa fa-th" aria-hidden="true"></i> Technology</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="sm-sl-box">
                    <figure><img src="img/5.jpg" class="img-responsive"></figure>
                    <div class="caption-box">
                        <h1>This is a simple text to do this, This is a simple text to do this........</h1>
                        <p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> ថ្ងៃនេះ ម៉ោង 11:20</p>
                        <p class="cate"><i class="fa fa-th" aria-hidden="true"></i> Technology</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="sm-sl-box">
                    <figure><img src="img/6.jpg" class="img-responsive"></figure>
                    <div class="caption-box">
                        <h1>This is a simple text to do this, This is a simple text to do this........</h1>
                        <p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> ថ្ងៃនេះ ម៉ោង 11:20</p>
                        <p class="cate"><i class="fa fa-th" aria-hidden="true"></i> Technology</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="fixed-bottom" id="marquee">
                    <p class="marquee">Hello World</p>

                </div>

                <div class="btnAction align centered" onclick="breakingBtn()">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>





    <script src="js/jquery.min.js"></script>
    <script src="js/lightslider.js"></script>
    <script src="js/main.js"></script>

    <script src="js/jquery.marquee.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {

            $('.marquee').marquee({
                //speed in milliseconds of the marquee
                duration: 3500,
                //gap in pixels between the tickers
                gap: 50,
                //time in milliseconds before the marquee will start animating
                delayBeforeStart: 0,
                //'left' or 'right'
                direction: 'left',
                //true or false - should the marquee be duplicated to show an effect of continues flow
                duplicated: true,
                pauseOnHover: true
            });

            $('#content-slider').lightSlider({
                item: 4,
                loop: false,
                slideMove: 2,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                }, {
                    breakpoint: 850,
                    settings: {
                        item: 2,
                        slideMove: 1
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        item: 1,
                        slideMove: 1
                    }
                }]
            });
        });
    </script>