<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>يسرا للأكلات الشهية</title>
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <!-- خطوط جوجل -->
    <link
      href="https://fonts.googleapis.com/css?family=Reem+Kufi:regular,500,600,700"
      rel="stylesheet"
    />
    <style>
      * {
        padding: 0;
        margin: 0;
        border: none;
        outline: none;
        box-sizing: border-box;
        font-family: "Reem Kufi", sans-serif;
        text-decoration: none;
        scroll-behavior: smooth;
      }
      select {
        cursor: pointer;
      }
    a,i {
        color: white;
      }
      .fa-star {
        color: orange;
      }
      body {
        background-color: #fdf1e5;
        width: 100%;
        min-height: 100vh;
        direction: rtl;
      }
      .settings {
        height: 100vh;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2rem 1rem;
        gap: 5rem;
      }
      .right-settings {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        background-color: #9c6b50;
        align-items: center;
        padding: 1rem;
        color: black;
      }
      .right-settings .personal-settings {
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }
      .personal-settings a {
        display: block;
        color: black;
        background-color: #e4ded6;
        padding: 1rem 5rem;
        font-size: 1.5rem;
        text-align: center;
        border-radius: 0.5rem;
      }
      .left-settings {
        width: 50%;
      }
      .user-frame {
        position: relative;
        display: flex;
        justify-content: end;
        align-items: center;
      }
      .user-frame .image {
        position: relative;
        width: 18rem;
        height: 18rem;
      }
      .user-frame img {
        width: 100%;
        object-fit: contain;
        position: absolute;
        top: 0;
        left: 0;
      }
      .user-frame a {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -40%);
        font-size: 9rem;
        color: white;
        width: 13rem;
        height: 13rem;
        border-radius: 50%;
        background-color: #9c6b50;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .notification-icon {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 2rem;
        align-items: center;
        gap: 1rem;
      }
      .notification-icon i {
        color: #9c6b50;
        font-size: 4rem;
      }
      .client-data h2 {
        margin-top: 1rem;
        text-align: center;
        font-size: 3rem;
        padding-right: 5rem;
      }
      .client-data a {
        position: relative;
        display: flex;
        justify-content: space-between;
        text-align: center;
        width: 35rem;
        max-width: 70%;
        background-color: #e8c39b;
        color: #9c6b50;
        padding: 1rem 2rem;
        border-radius: 2rem;
        font-size: 1.5rem;
        gap: 1rem;
        margin: 2rem auto;
      }
      .client-data a:nth-child(2) {
        border: #9c6b50 solid 0.4rem;
      }
      .fa-phone {
                color: #9c6b50;
      }
      .client-data a:nth-child(3) i {
        position: absolute;
        background-color: #9c6b50;
        width: 5rem;
        height: 5rem;
        border-radius: 50%;
        color: white;
        font-size: 3rem;
        /* text-align: center;
        line-height: 5rem; */
        display: flex;
        justify-content: center;
        align-items: center;
        top: 2.5rem;
        left: 2rem;
        transform: translate(-50%, -50%);
      }
      /* الجزء الثاني الخاص بالمعلومات الشخصية  */
      .personal-information {
        background-color: #9c6b50;
        text-align: center;
        padding: 2rem;
      }
      /* هحط طبعاً الصورة اللى موجوده فلازم أخلى العنصر الأب يأخذ بوزيشن ريلاتيف و الصورة بوزيشن أبسليوت */
      .personal-information img {
        position: absolute;
        bottom: 0;
        right: 5%;
        rotate: 15deg;
      }
      .personal-information .information {
        position: relative; /*علشان أقدر أحرك الصورة بالنسبة للعنصر الأب ده*/
        width: 40%;
        margin: auto;
        background-color: #f1ebe5;
        padding: 2rem 0;
        border: #f1ebe5 solid 0.1rem;
      }
      .information h2 {
        background-color: #9c6b50;
        height: 3rem;
        line-height: 3rem;
      }
      .information form {
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        gap: 2rem;
      }
      /*  كل حقل من هنا هديله إرتفاع من معين و عرض معين من عرض الصفحة ككل
       و الاتجاه من الشمال لليمين علشان
       ده إنجليزي ومسافه للداخل علشان ما يبقاش الكلام لازق في الحقل نفسه*/
      .information form input {
        width: 60%;
        height: 2.5rem;
        background-color: white;
        border-radius: 2rem;
        font-size: 1.2rem;
        direction: ltr;
        padding: 0.4rem 1.5rem;
      }
      .information form .submit {
        background-color: #e8c39b;
        color: #9c6b50;
        cursor: pointer;
      }
      /* ===============تنسيقات البلوك الثالث=============================== */
      .favorities {
        background-color: #e8c39b;
        display: grid;
        padding: 2rem;
        gap: 2rem;
      }
      .favorities .favorite-title {
        display: flex;
        background-color: #9c6b50;
        gap: 1rem;
        padding: 0.5rem 3rem;
        align-items: center;
        width: fit-content;
        margin: auto;
      }
      .favorite-title a {
        color: white;
        font-size: 2rem;
      }
      /* تنسيق المتاجر بقى */
      .favorite-list {
        margin-top: 1rem;
        display: flex;
        justify-content: center;
        gap: 2rem;
        align-items: center;
      }
      /* تنسيق كل متجر على وهو التنسيق متشابه لكل متجر */
      .favorite {
        box-shadow: 0 0.03rem 0.1rem #9c6b50;
        background-color: white;
        /* هنا خاصة البورد بتتحط بالترتيب ده 
        فوق شمال و بعدين فوق يمين وبعدين تحت يمين و بعدين تحت شمال و بالتالي هنا حطيت قيم فوق شمال و فوق يمين بصفر و القيمتين اللى تحت ب 1 rem */
        border-radius: 0 0 1rem 1rem;
        overflow: hidden;
      }
      .favorite-icon {
        width: 17rem;
        aspect-ratio: 1/1.3;
        position: relative;
      }
      .favorite-icon img {
        width: 100%;
        height: 100%;
        object-fit: fill;
      }
      /* نعمل تنسيقات بقى السيليكت */
      .favorite select {
        width: 100%;
        height: 3rem;
        font-size: 1.5rem;
        text-align: center;
      }
      .favorities .show-all-list {
        position: relative;
        height: 12rem;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .show-all-list img {
        width: 5rem;
        position: absolute;
        top: 50%;
        right: 20%;
        transform: translate(-50%, -50%);
      }
      .favorities .show-all-list select {
        display: block;
        width: 20rem;
        height: 3rem;
        background-color: #9c6b50;
        margin: 1rem auto;
        font-size: 1.4rem;
        display: flex;
        align-items: center;
        padding: .5rem 1rem;
        color: white;
        border-radius: 2rem;
      }
      /* البلوك الأخير الخاص بالتعليقات */
      .comments {
        background-color: #9c6b50;
        display: grid;
        place-items: center;
        padding: 1rem 5%;
      }
      .all-comments {
        width: 50%;
        background-color: #F1EBE5;
        border: .1rem solid #F1EBE5
      }
      .all-comments .comments-icon {
        margin-top: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2rem;
        background-color: #9c6b50;
        padding: 1rem;
      }
      .comments-icon h3 {
        font-size: 2rem;
      }
      .person-comment {
        display: flex;
        align-items: center;
        gap: 2rem;
        padding: .5rem;
      }
      .person-img {
        width: 5rem;
        aspect-ratio: 1/1;
      }
      .comment-text {
        display: flex;
        flex-direction: column;
      }
      /* تنسيق الجزء الخاص بقائمة المتاجر */
    </style>
  </head>
  <body>
    <!-- =======================بداية أول بلوك ============================-->
    <div class="settings">
      <!-- الإعدادات من الناحية اليمنى -->
      <div class="right-settings">
        <h2>الإعدادات</h2>
        <div class="personal-settings">
          <a href="#personal">معلومات شخصية</a>
          <a href="#favorities">قائمة المفضلة</a>
          <a href="#comments">تعليقاتي</a>
          <a href="#language">اللغة</a>
        </div>
      </div>
      <!-- الإعدادات من الناحية اليسرى -->
      <div class="left-settings">
        <!-- بداية أول جزء من البلوك اللى على الشمال -->
        <div class="user-frame">
          <div class="image">
            <img src="frame.png " alt="" />
            <a href="#user" class="fa-regular fa-user"></a>
          </div>
          <div class="notification-icon">
            <i class="fa-solid fa-bell"></i>
            <i class="fa-solid fa-gear"></i>
          </div>
        </div>
        <div class="client-data">
          <h2>إسم العميل</h2>
          <a href="tel:+966591305347"
            >966591305347+ <i class="fa-solid fa-phone"></i
          ></a>
          <a href="mailto:yosramohamad47@gmail.com"
            >yosramohamad47@gmail.com <i class="fa-solid fa-envelope-open"></i
          ></a>
        </div>

        <!-- نهاية أول جزء من البلوك اللى على الشمال -->
      </div>

      <!-- نهاية أول بلوك -->
    </div>
    <!-- ==================البلوك الثاني =============================== -->
    <div class="personal-information" id="personal">
      <div class="information">
        <!-- هنا هنضع الصورة قبل أي شي -->
        <img src="personal-information.png" alt="flower" />
        <h2>معلومات شخصية</h2>
        <form action="register_post.php" method="POST">
          <?php if(isset($user_error)){ echo $user_error;}?>
          <input
            type="text"
            name="username"
            id="username"
            placeholder="phone number, username"
            required
          />
          <?php if(isset($user_error)){ echo $user_error;}?>
          <input
            type="text"
            name="username"
            id="username"
            placeholder="username"
            required
          />
          <?php if(isset($user_error)){ echo $user_error;}?>
          <input
            type="text"
            name="fullname"
            id="fullname"
            placeholder="fullname"
            required
          />
          <?php if(isset($email_error)){ echo $email_error;}?>

          <input
            type="email"
            name="email"
            id="email"
            placeholder="email"
            required
          />
          <?php if(isset($password_error)){ echo $password_error;}?>

          <input
            type="password"
            name="password"
            id="password"
            placeholder="password"
            required
          />
          <input type="submit" value="حفظ" class="submit" />
          <h3>أو</h3>
         <a id="login" href="index.php" class="submit">تسجل الدخول</a>
        <!--<input type="submit" value="تسجيل دخول" class="submit"  />-->
        </form>
      </div>
    </div>
    <!-- ========================البلوك الثالث====================== الخاص بقائمة المفضلات -->
    <div class="favorities" id="favorities">
      <div class="favorite-title">
        <h2>قائمة المفضلة للمتاجر</h2>
        <a href="#" class="fa-regular fa-bookmark"></a>
      </div>
      <!-- بداية أسماء المتاجر التي تم إختيارها -->
      <div class="favorite-list">
        <div class="favorite one">
          <div class="favorite-icon">
            <img src="cart.png" alt="cart" />
          </div>
          <select name="shops" id=" shops">
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
          </select>
        </div>
        <div class="favorite two">
          <div class="favorite-icon">
            <img src="cart.png" alt="cart" />
          </div>
          <select name="shops" id=" shops">
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
          </select>
        </div>
        <div class="favorite three">
          <div class="favorite-icon">
            <img src="cart.png" alt="cart" />
          </div>
          <select name="shops" id=" shops">
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
            <option value="">إسم المتجر</option>
          </select>
        </div>
      </div>
      <!-- عرض جميع القائمة -->
      <div class="show-all-list">
        <img src="show-all-list.png" alt="">
        <select name="shops" id="shops">
          <option label="عرض جميع القائمة" >عرض جميع القائمة</خ>
          <option value="متجر 1">متجر 1</option>
          <option value="متجر 2">متجر 2</option>
          <option value="متجر 3">متجر 3</option>
          <option value="متجر 4">متجر 4</option>
          <option value="متجر 5">متجر 5</option>
          <option value="متجر 6">متجر 6</option>
          <option value="متجر 7">متجر 7</option>
          <option value="متجر 8">متجر 8</option>
          <option value="متجر 9">متجر 9</option>
          <option value="متجر 10">متجر 10</option>
        </select>
      </div>
    </div>
    <!-- أخر بلوك وهو بلوك التعليقات -->
    <div class="comments" id="comments">
      <div class="all-comments">
       <div class="comments-icon">
        <h3>تعليقاتي</h3>
        <a href="#" class="fa-regular fa-comment"></a>
       </div>
       <!-- هنا بقى جزء التعليقات بتاعت المتاجر -->
       <div class="person-comment">
        <div class="person-img">
          <img src="person.svg" alt="person-image">
        </div>
        <div class="comment-text">
          <h4>إسم المتجر</h4>
          <p>نص تعليق</p>
          <div class="review-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
       </div>
      </div>
<!-- هنا نهاية أول تعليق هنبدأ نزود التعليقات أكثر -->
       <div class="person-comment">
        <div class="person-img">
          <img src="person.svg" alt="person-image">
        </div>
        <div class="comment-text">
          <h4>إسم المتجر</h4>
          <p>نص تعليق</p>
          <div class="review-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
       </div>
      </div>


             <div class="person-comment">
        <div class="person-img">
          <img src="person.svg" alt="person-image">
        </div>
        <div class="comment-text">
          <h4>إسم المتجر</h4>
          <p>نص تعليق</p>
          <div class="review-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
       </div>
      </div>           
            <div class="person-comment">
        <div class="person-img">
          <img src="person.svg" alt="person-image">
        </div>
        <div class="comment-text">
          <h4>إسم المتجر</h4>
          <p>نص تعليق</p>
          <div class="review-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
       </div>
      </div>

                  <div class="person-comment">
        <div class="person-img">
          <img src="person.svg" alt="person-image">
        </div>
        <div class="comment-text">
          <h4>إسم المتجر</h4>
          <p>نص تعليق</p>
          <div class="review-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
       </div>
      </div>
    </div>
    <!-- ملف الجافا اسكربت الخارجي -->
    <script src="maina.js"></script>
  </body>
</html>
