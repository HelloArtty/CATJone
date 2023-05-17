<?php 
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CATJone</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css\\home.css">
    <link rel="stylesheet" href="css\\meow.css">
    <link rel="stylesheet" href="css\\load.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=IBM+Plex+Sans+Thai&family=Indie+Flower&family=Itim&family=Mogra&family=Montserrat+Alternates&display=swap"
        rel="stylesheet">

    <!-- custom js file link  -->
    <script src="javascript\\loading.js" defer></script>
    <script src="javascript\\meow.js" defer></script>

</head>

<!-- Preloader -->
<div class="preloader">
    <div class="cat">
        <div class="cat__body"></div>
        <div class="cat__tail"></div>
        <div class="cat__head"></div>
    </div>
</div>

<body>
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

    <div class="container">

        <h3 class="title"> สายพันธุ์แมวที่เป็นที่นิยมในประเทศไทย </h3>

        <div class="cats-container">

            <div class="cat" data-name="p-1">
                <img src="IMG\\1.jpg" alt="">
                <h3>Persian</h3>
            </div>

            <div class="cat" data-name="p-2">
                <img src="IMG\\2.jpg" alt="">
                <h3>American Short Hair</h3>
            </div>

            <div class="cat" data-name="p-3">
                <img src="IMG\\3.jpg" alt="">
                <h3>Maine Coon</h3>
            </div>

            <div class="cat" data-name="p-4">
                <img src="IMG\\4.jpg" alt="">
                <h3>British Shorthair</h3>
            </div>

            <div class="cat" data-name="p-5">
                <img src="IMG\\5.jpg" alt="">
                <h3>Scottish Fold</h3>
            </div>

            <div class="cat" data-name="p-6">
                <img src="IMG\\6.jpg" alt="">
                <h3>Munchkin</h3>
            </div>

            <div class="cat" data-name="p-7">
                <img src="IMG\\7.jpg" alt="">
                <h3>Bengal</h3>
            </div>

            <div class="cat" data-name="p-8">
                <img src="IMG\\8.jpg" alt="">
                <h3>American Curl</h3>
            </div>

            <div class="cat" data-name="p-9">
                <img src="IMG\\9.jpg" alt="">
                <h3>Exotic Shorthair</h3>
            </div>

        </div>

    </div>

    <div class="cats-preview">

        <div class="preview" data-target="p-1">
            <i class="fas fa-times"></i>
            <img src="IMG\\1.jpg" alt="">
            <h3>Persian</h3>
            <h4>ลักษณะทั่วไป</h4>
            <p>เรียกได้ว่าเป็นสายพันธุ์แมวที่คนส่วนใหญ่คุ้นเคยมากที่สุด
                เป็นแมวที่ขนสลวยสวยเก๋ มีสง่าราศี ดูเป็นแมวลูกคุณ โลกส่วนตัวสูง
                นิ่งเงียบเรียบร้อย รักสันโดษมาก ๆ และน้องยังมีไหวพริบดีอีกด้วย ตะปบเก่งเชียวล่ะ
            </p>

        </div>

        <div class="preview" data-target="p-2">
            <i class="fas fa-times"></i>
            <img src="IMG\\2.jpg" alt="">
            <h3>American Short Hair</h3>
            <h4>ลักษณะทั่วไป</h4>
            <p>อเมริกัน ช็อตแฮร์เป็นสายพันธุ์แมวที่ฮอตฮิตมาก
                เพราะมีลวดลายที่สวยงามแปลกตา
                เป็นแมวที่มีหน้าตาน่ารัก และรูปร่างก็น่าฟัดน่ากอด
                ค่อนข้างเลี้ยงง่าย เพราะน้องสามารถเล่นได้ด้วยตัวเอง
                จึงไม่ค่อยอ้อนคนมากนัก เหมาะกับทาสที่ชอบเอาชนะใจแมวหรืออยากให้แมวมาสนใจอย่างยิ่ง
                เนื่องจากน้องมีโลกส่วนตัวค่อนข้างสูง
            </p>

        </div>


        <div class="preview" data-target="p-3">
            <i class="fas fa-times"></i>
            <img src="IMG\\3.jpg" alt="">
            <h3>Maine Coon</h3>
            <h4>ลักษณะทั่วไป</h4>
            <p>เมนคูนเป็นสายพันธุ์แมวที่ใหญ่ที่สุด ตัวยาวเกือบเท่าสุนัขเลยก็ว่าได้ ขนยาวเหมือนนางพญาแมว มองเผิน ๆ
                ดูน่าเกรงขาม แต่จริง ๆ แล้วน้องขี้อ้อนมาก ใจดี และยังชอบอยู่กับคนด้วย ไม่ค่อยกลัวคนแปลกหน้าเท่าไร
                ใครอยากกอดแมวแทนหมอนข้างแนะนำพันธุ์นี้เลย ก่ายได้พอดี
            </p>
        </div>

        <div class="preview" data-target="p-4">
            <i class="fas fa-times"></i>
            <img src="IMG\\4.jpg" alt="">
            <h3>British Shorthair</h3>
            <h4>ลักษณะทั่วไป</h4>
            <p>บริติช ช็อตแฮร์เป็นสายพันธุ์แมวที่ค่อนข้างเงียบ ไม่ค่อยส่งเสียงร้อง สามารถเลี้ยงในคอนโดได้
                แต่ที่อยากนำเสนอเป็นพิเศษคือน้องเป็นพันธุ์แมวที่น่ารักและขี้อ้อนมาก ๆ
                แถมใบหน้ายังกลมใหญ่ดูเป็นไอ้ต้าวอ้วน แต่จริง ๆ แล้วสายพันธุ์ของน้องเป็นสายพันธุ์แมวที่แข็งแรง
                มีกล้ามเนื้อเยอะเฉย ๆ โดยส่วนใหญ่สีที่คนนิยมเลี้ยงจะเป็นสีเทาหรือสีสวาด แต่คนในวงการแมวจะเรียกว่าสีบลู
            </p>
        </div>

        <div class="preview" data-target="p-5">
            <i class="fas fa-times"></i>
            <img src="IMG\\5.jpg" alt="">
            <h3>Scottish Fold</h3>
            <h4>ลักษณะทั่วไป</h4>
            <p>หากพูดถึงสายพันธุ์แมวที่เป็นขวัญใจของสาว ๆ ต้องยกให้สก็อตติช โฟลด์เขาเลยล่ะ
                เรียกได้ว่าเป็นแมวที่น่าทะนุถนอมสุด ๆ เพราะขนาดของนางนั้นมินิเหลือเกิน แถมหน้าตายังบ้องแบ๊วชวนหลงใหล
                และยังชอบวิ่งสุด ๆ แต่บทจะเงียบก็เงียบจริง ๆ และบอกไว้ก่อนว่าน้องจะอ้อนแค่ตอนหิวเท่านั้น
            </p>
        </div>

        <div class="preview" data-target="p-6">
            <i class="fas fa-times"></i>
            <img src="IMG\\6.jpg" alt="">
            <h3>Munchkin</h3>
            <h4>ลักษณะทั่วไป</h4>
            <p>นี่ก็เป็นอีกหนึ่งสายพันธุ์แมวที่น่ารักไม่เบา ใคร ๆ มักเรียกน้องว่า “เจ้าเตี้ย”
                เพราะน้องขาสั้นถึงขั้นพุงติดพื้นเลยทีเดียว แต่เห็นแบบนี้จังหวะยืนสองขาก็ทำเอาเหล่าทาสใจละลายเหมือนกัน
                และยังขี้อ้อนสุด ๆ เดินไปไหนก็ตามตลอด แถมยังซนเอามาก ๆ
            </p>
        </div>

        <div class="preview" data-target="p-7">
            <i class="fas fa-times"></i>
            <img src="IMG\\7.jpg" alt="">
            <h3>Bengal</h3>
            <h4>ลักษณะทั่วไป</h4>
            <p>ใครที่หลงใหลในความน่ารักของลูกเสือ ต้องมีเจ้าเบงกอลไปเลี้ยงสักตัวแล้วล่ะ
                เพราะลวดลายของน้องนั้นเหมือนเสือจากัวร์มาก เนื่องจากเป็นแมวที่ผสมข้ามสายพันธุ์ระหว่างแมวดาวกับแมวบ้าน
                แต่ถ้าใครกังวลเรื่องความดุร้ายนั้นไม่ต้องห่วง เพราะน้องเชื่องและเป็นมิตรกับคนมาก ๆ แถมยังฉลาด
                คล่องแคล่วปราดเปรียว วิ่งเก่ง พลังนี่ล้นเหลือ และยังชอบเล่นน้ำเป็นที่สุด คงจะเป็นสัญชาตญาณของแมวดาวแน่ ๆ
            </p>
        </div>

        <div class="preview" data-target="p-8">
            <i class="fas fa-times"></i>
            <img src="IMG\\8.jpg" alt="">
            <h3>American Curl</h3>
            <h4>ลักษณะทั่วไป</h4>
            <p>อเมริกัน เคิร์ล เป็นสายพันธุ์แมวที่มีลักษณะโดดเด่นให้เห็นชัด นั่นก็คือหูจะพับไปด้านหลัง
                มีความเป็นแมวผู้ดี ทรวดทรงองเอวสวยงาม ชอบเล่นกับคน มีความขี้อ้อน ชอบอยู่ข้าง ๆ มนุษย์ แต่ไม่ชอบให้อุ้ม
                แถมยังชอบปีนป่ายและกระโดดไปมาอีกด้วย
            </p>
        </div>

        <div class="preview" data-target="p-9">
            <i class="fas fa-times"></i>
            <img src="IMG\\9.jpg" alt="">
            <h3>Exotic Shorthair</h3>
            <h4>ลักษณะทั่วไป</h4>
            <p>เอ็กโซติก ช็อตแฮร์ เป็นสายพันธุ์แมวที่ค่อนข้างเป็นมิตรกับทุกคน ชอบคลอเคลีย
                และยังได้รับฉายาว่าเป็นแมวหน้ามึนอีกด้วย แถมตัวอ้วนกลมน่ากอดมาก ๆ ช่างสงสัยเป็นที่หนึ่งเลยล่ะ
                ใครที่คิดจะเลี้ยงแมวพันธุ์นี้อาจจะต้องดูแลตาน้องเป็นพิเศษ เพราะน้ำตาจะไหลค่อนข้างมาก
            </p>
        </div>

    </div>

</body>

</html>';