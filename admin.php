<?php
include('pages/common/head.php');
$client_id = getenv('CLIENT_ID');
$client_secret = getenv('CLIENT_SECRET');

$authorize_url = "https://discord.com/api/oauth2/authorize?client_id=1081356911141736468&redirect_uri=http%3A%2F%2Feirtis.com.tr.test%2Fpanel.php&response_type=code&scope=identify%20guilds%20email";
$token_url = "https://discord.com/api/oauth2/token";

$redirect_uri = "http://localhost/eirtis.com.tr/panel.php";

$auth_url = "$authorize_url&redirect_uri=" . urlencode($redirect_uri);

if (isset($_GET['code'])) {
    $params = [
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'grant_type' => 'authorization_code',
        'code' => $_GET['code'],
        'redirect_uri' => $redirect_uri,
        'scope' => 'identify email guilds'
    ];

    $headers = [
        'Content-Type: application/x-www-form-urlencoded'
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => implode("\r\n", $headers),
            'content' => http_build_query($params),
        ]
    ];
    $context = stream_context_create($options);
    $result = file_get_contents($token_url, false, $context);

    $token = json_decode($result);

    putenv("TOKEN=$token->access_token");

    header("Location: $redirect_uri");
}

include('pages/common/foot.php');
?>

<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form>
                    <h2>Eirtis Login</h2>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example13">Kullanıcı Adı</label>
                        <input type="email" id="form1Example13" placeholder="Kullanıcı Adı" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23">Şifre</label>
                        <input type="password" id="form1Example23" placeholder="Şifre" class="form-control">
                    </div>
                    <div class="align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked>
                            <label class="form-check-label" for="form1Example3">Beni Hatırla</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-danger btn-block"><i class="fa-solid fa-right-to-bracket me-2"></i>Giriş Yap</button>
                    <a class="btn btn-outline-danger btn-block" href="<?php echo $auth_url; ?>" role="button">
                        <i class="fab fa-discord me-2"></i>Discord İle Giriş Yap
                    </a>

                </form>
            </div>
        </div>
    </div>
</section>