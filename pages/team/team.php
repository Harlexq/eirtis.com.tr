<div class="teamCeo">
    <div class="container mt-5">
        <h2 class="d-flex justify-content-center mt-4 mt-lg-0 mb-4">ClyDev Ekip</h2>
    </div>
</div>

<?php

$roleId = "1069319448827281410";
$guildId = "1060269060295757955";

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
    foreach ($member["roles"] as $role) {
        if ($role == $roleId) {
            $userId = $member["user"]["id"];
            $username = $member["user"]["username"];
            $avatar = $member["user"]["avatar"];

            if ($avatar == null) {
                $avatarUrl = "https://cdn.discordapp.com/attachments/961738070317727784/1093444056111136839/discord.png";
            } else {
                $avatarUrl = "https://cdn.discordapp.com/avatars/$userId/$avatar";
            }

            $members[] = array(
                "id" => $userId,
                "username" => $username,
                "avatarUrl" => $avatarUrl
            );
            break;
        }
    }
}

?>

<div class="container">
    <div class="row">
        <?php foreach ($members as $index => $member) { ?>
            <div class="col-md-3">
                <div class="user-avatar" id='id<?php echo $index; ?>'>
                    <a class="user-nick" target="_blank" href="https://discord.com/users/<?php echo $member['id']; ?>">
                        <div class="user-info">
                            <img width="50px" src="<?php echo $member['avatarUrl'] ?>" alt="<?php echo $member['username']; ?>'in profil resmi">
                            <div class="user-username"><?php echo $member['username']; ?></div>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>