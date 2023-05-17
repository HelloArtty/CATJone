<?php 
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CATJone</title>

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css\\guide.css">
    <link rel="stylesheet" href="css\\load.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=IBM+Plex+Sans+Thai&family=Indie+Flower&family=Itim&family=Mogra&family=Montserrat+Alternates&display=swap"
        rel="stylesheet">

    <!-- custom js file link  -->
    <script src="javascript\\loading.js" defer></script>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cat">
            <div class="cat__body"></div>
            <div class="cat__tail"></div>
            <div class="cat__head"></div>
        </div>
    </div>
    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="index.php" class="logo">CATJone</a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="meow.php">Meow</a>
            <a href="guide.php">Guide</a>
            <a href="about.php">About</a>
        </nav>


    </header>

    <section class="home" id="home">

        <div class="content">
            <h3 class="">สิ่งที่ทาสควรรู้ก่อนเลี้ยงแมว</h3>
            
        </div>

    </section>

    <section class="about" id="about">
        <div class="row">

            <div class="img-container">
                <img src="IMG\\1.1.jpg" alt="">
                <h3>อาหาร</h3>
            </div>

            <div class="content">
                <h3>1.อาหารแบบไหนสำหรับเจ้าเหมียว</h3>
                <p>อาหารแมวมีสองประเภท คือ อาหารเม็ดกับอาหารเปียก ควรเลือกให้เหมาะกับช่วงอายุและสายพันธุ์
                    โดยให้อาหารสองแบบสลับกัน เพื่อเจ้าเหมียวจะได้คุ้นชินกับอาหารทั้งสองประเภท
                    เรื่องภาชนะและน้ำก็ควรดูแลเป็นอย่างดี
                    ส่วนถ้าใครยังไม่อยากให้แมวอ้วนกลายเป็น ‘เหมียวซิลล่า’ แนะนำว่าควรควบคุมปริมาณอาหารให้ไม่เกิน 5-10%
                    ในแต่ละมื้อ
                    ซึ่งอาหารของแต่ละแบรนด์ มีทั้งที่ถูกปากกินได้อย่างเอร็ดอร่อย แต่หากไม่ถูกปากก็จะเมินอย่างไร้เยื่อใย
                    ฉะนั้นเรื่องอาหารก็คงต้องศึกษานิสัยแมวที่เลี้ยงอยู่ด้วย “เข้าใจนะมนุษย์”
                </p>

            </div>

            <div class="row">

                <div class="img-container">
                    <img src="IMG\\2.1.jpg" alt="">
                    <h3>ขนน้องแมว</h3>
                </div>

                <div class="content">
                    <h3>2.เรื่องขนต้องหมั่นแปรง</h3>
                    <p>ธรรมชาติของแมวเป็นสัตว์รักสะอาด สังเกตได้จากการชอบเลียขนตัวเอง ส่วนเรื่องอาบน้ำก็สามารถจับอาบได้
                        แม้ว่าแมวส่วนใหญ่จะดูไม่ค่อยปลื้มกับการอาบน้ำเท่าไหร่นัก
                        ฉะนั้นหนึ่งในวิธีการจะสานสัมพันธ์ระหว่างแมวกับทาสผู้เลี้ยง คือ
                        การมองหาหวีและแปรงมาช่วยแปรงขนสลวยๆ
                        ให้นุ่มพริ้วไสว เงางาม พร้อมกำจัดขนเก่าที่หลุดร่วงออกมา
                        เพื่อให้การเลียขนของเหมียวสมูทมากยิ่งขึ้น
                    </p>

                </div>

                <div class="row">

                    <div class="img-container">
                        <img src="IMG\\3.1.jpg" alt="">
                        <h3>ห้องน้ำแมว</h3>
                    </div>

                    <div class="content">
                        <h3>3.เลือกห้องน้ำและที่ขับถ่ายให้เหมาะสม</h3>
                        <p>เพื่อสุขอนามัยที่ดีของคุณสัตว์เลี้ยง
                            ยิ่งคนที่เลี้ยงแมวในห้องคอนโดยิ่งต้องดูแลเรื่องนี้เป็นพิเศษ ควรตระเตรียมกระบะทราย
                            ให้แมวสามารถขับถ่ายได้อย่างเป็นที่เป็นทาง และหมั่นเปลี่ยนทรายแมวทุก 1-2 เดือน เพื่อความสะอาด
                            ส่งผลถึงการดูแลสุขภาพที่ดีของเจ้าเหมียว เพราะแมวบางประเภทอาจจะแพ้ฝุ่นจากทราย
                            แต่ก็มีตัวเลือกอย่าง ทรายแมวไร้ฝุ่น
                            ที่สามารถควบคุมกลิ่นและไม่ติดก้นกระบะ เพื่อความสะดวกกับเจ้าของมากยิ่งขึ้น
                        </p>

                    </div>

                    <div class="row">

                        <div class="img-container">
                            <img src="IMG\\4.1.jpg" alt="">
                            <h3>ของเล่นแมว</h3>
                        </div>

                        <div class="content">
                            <h3>4.มองหาที่ฝนเล็บ ยืดเส้นยืดสาย</h3>
                            <p>หนึ่งในนิสัยแมวๆ อย่างหนึ่ง คือ การชอบเกา ชอบฝนเล็บ โดยมองหาสิ่งต่างๆ
                                ที่จะช่วยเป็นฐานในการฝนเล็บได้ อาจเป็นทั้ง
                                ขาโต๊ะ ขาตู้ ไปจนถึงเฟอร์นิเจอร์ต่างๆ ภายในห้อง ซึ่งบางคนมองว่าเป็นหนึ่งใน
                                ข้อเสียของการเลี้ยงแมว
                                แต่ถ้าคุณเข้าใจความเป็นแมวสักนิด โดยมองหาอุปกรณ์อย่าง ‘ที่ฝนเล็บ’
                                ที่มีทั้งแบบกระดาษลูกฟูกหรือแบบเชือก ช่วยให้เหมียวสามารถฝนเล็บ
                                ขัดฝัน ได้อย่างเต็มเหนี่ยวโดยไม่ต้องห่วงเฟอร์นิเจอร์ภายในบ้าน รวมถึงควรมองหา ของเล่นแมว
                                แบบต่างๆ มาไว้เล่นกับเจ้าเหมียว เพื่อให้ได้ยืดเส้นยืดสาย
                            </p>

                        </div>

                        <div class="row">

                            <div class="img-container">
                                <img src="IMG\\5.1.jpg" alt="">
                                <h3>พบสัตวแพทย์</h3>
                            </div>

                            <div class="content">
                                <h3>5.พาพบสัตวแพทย์เป็นประจำ</h3>
                                <p>เพื่อสุขภาพของนายท่าน เหล่าทาสควรพาแมวไปฉีดวัคซีน เพื่อสร้างภูมิคุ้มกัน
                                    ป้องกันโรคภัยในแมวต่างๆ อย่างสม่ำเสมอ
                                    เพราะนอกจากจะทำให้แมวไม่เจ็บป่วย ยังช่วยให้เหมียวได้อยู่ร่วมกับทาส
                                    เป็นตัวป่วนของบ้านอย่างแข็งแรงและร่าเริงไปอีกหลายปี
                                </p>

                            </div>

    </section>

</body>

</html>';