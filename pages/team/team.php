<?php

$guildId = "1102544463856943115";

$teamRoleId = "1102544589241466892";

$botToken = $_ENV['TOKEN'];

$headers = array(
    "Authorization: Bot $botToken"
);

$members = array();

$url = "https://discord.com/api/v9/guilds/$guildId/members?limit=1000";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$jsonResponse = json_decode($response, true);

foreach ($jsonResponse as $index => $member) {
    if (in_array($teamRoleId, $member["roles"])) {
        $userId = $member["user"]["id"];
        $username = $member["user"]["username"];
        $discriminator = $member["user"]["discriminator"];
        $avatar = $member["user"]["avatar"];

        if ($avatar == null) {
            $avatarUrl = "https://imgrosetta.mynet.com.tr/file/14620885/14620885-728xauto.jpg";
        } else {
            $avatarUrl = "https://cdn.discordapp.com/avatars/$userId/$avatar";
        }
        $members[] = array(
            "id" => $userId,
            "username" => $username,
            "discriminator" => $discriminator,
            "avatarUrl" => $avatarUrl
        );
    }
}

?>

<div class="teamCeo">
    <div class="container mt-5">
        <h2 class="d-flex justify-content-center mt-4 mt-lg-0 mb-4">Eirtis Geliştirici Ekibi</h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php foreach ($members as $index => $member) { ?>
            <div class="col-md-2">
                <div class="user-avatar" id='id<?php echo $index; ?>'>
                    <a class="user-nick" target="_blank" href="https://discord.com/users/<?php echo $member['id']; ?>">
                        <div class="user-info">
                            <img src="<?php echo $member['avatarUrl'] ?>" alt="<?php echo $member['username']; ?>'in profil resmi">
                            <div class="user-username"><?php echo $member['username'] . "#" . $member['discriminator']; ?></div>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>