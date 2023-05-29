<?php

$userIds = array(
    "801069133810237491",
    "1001220573457813584",
    "627543270985170958",
    "705038766582267944"
);

$botToken = $_ENV['TOKEN'];

$headers = array(
    "Authorization: Bot $botToken"
);

$users = array();

foreach ($userIds as $index => $userId) {
    $url = "https://discord.com/api/v9/users/$userId";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $jsonResponse = json_decode($response, true);

    $id = $jsonResponse["id"];
    $username = $jsonResponse["username"];
    $discrim = $jsonResponse["discriminator"];
    $avatar = $jsonResponse["avatar"];
    $avatarUrl = "https://cdn.discordapp.com/avatars/$id/$avatar";


    $user = array(
        "id" => $id,
        "username" => $username,
        "discrim" => $discrim,
        "avatarUrl" => $avatarUrl
    );

    $users[$index] = $user;
}
?>

<div class="mt-10">
    <div class="container">
        <h2 class="d-flex justify-content-center mt-4 mt-lg-0 mb-4">Eirtis CEO</h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php foreach ($users as $index => $user) { ?>
            <div class="col-md-3">
                <div class="user-avatar" id='id<?php echo $index; ?>'>
                    <div class="user-info">
                        <a class="user-nick" href="https://discord.com/users/<?php echo $user['id']; ?>" target="_blank">
                            <img src="<?php echo $user['avatarUrl'] ?>" alt="<?php echo $user['username']; ?>'in profil resmi">
                            <div class="user-username"><?php echo $user['username']; ?>#<?php echo $user['discrim']; ?></div>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


