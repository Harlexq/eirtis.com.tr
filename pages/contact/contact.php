<?php

if (isset($_POST['submit'])) {
    $to = "info@eirtis.com.tr";
    $subject = "Eirtis Form Mesajı";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $message = "
    İsim Soyisim: $name\n
    E-posta Adresi: $email\n
    Telefon Numarası: $phone\n
    Mesaj: $message\n
    ";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";

    if (mail($to, $subject, $message, $headers)) {
        $success = "Mesajınız başarıyla gönderildi!";
    } else {
        $error = "Mesajınız gönderilemedi. Lütfen daha sonra tekrar deneyin.";
    }
}

?>

<section class="contact-box">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3">Bize Ulaşın</h1>
                <?php if (isset($success)) { ?>
                    <p style='color:green;'><?php echo $success; ?></p>
                <?php } else if (isset($error)) { ?>
                    <p style='color:red;'><?php echo $error; ?></p>
                <?php } ?>
                <form method="post">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">İsim Soyisim <span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Adınız" required maxlength="40" aria-describedby="ErrName">
                            <div class="invalid-feedback fs-6" id="ErrName"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Adresiniz <span class="text-danger">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Eposta" required maxlength="100" aria-describedby="ErrEmail">
                            <div class="invalid-feedback fs-6" id="ErrEmail"></div>
                        </div>
                        <div class="col-md-12">
                            <label for="phone" class="form-label">Telefon No <span class="text-danger">*</span></label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Telefon Numaranız" required maxlength="15" aria-describedby="ErrPhone">
                            <div class="invalid-feedback fs-6" id="ErrPhone"></div>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Mesajınız <span class="text-danger">*</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Mesajınız" rows="7" required maxlength="500" aria-describedby="ErrMessage"></textarea>
                            <div class="invalid-feedback fs-6" id="ErrMessage"></div>
                            <div class="text-white text-end">
                                <span id="current-character">0</span>
                                <span> / 500</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row d-flex justify-content-end mt-3">
                                <div class="col-md-6">
                                    <button id="BtnContact" type="submit" name="submit" class="btn btn-dark w-100 fw-bold">Gönder</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>