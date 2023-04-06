<div class="commandSite mt-5">
    <div class="container">
        <h2 class="d-flex justify-content-center mt-4 mt-lg-0 mb-4 mb-lg-4">Eirtis Komutlar</h2>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="kayit-tab" data-bs-toggle="tab" data-bs-target="#kayit-tab-pane" type="button" role="tab">Kayıt</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="moderasyon-tab" data-bs-toggle="tab" data-bs-target="#moderasyon-tab-pane" type="button" role="tab">Moderasyon</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="guard-tab" data-bs-toggle="tab" data-bs-target="#guard-tab-pane" type="button" role="tab">Guard</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="ekonomi-tab" data-bs-toggle="tab" data-bs-target="#ekonomi-tab-pane" type="button" role="tab">Ekonomi</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="eglence-tab" data-bs-toggle="tab" data-bs-target="#eglence-tab-pane" type="button" role="tab">Eğlence</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="bot-tab" data-bs-toggle="tab" data-bs-target="#bot-tab-pane" type="button" role="tab">Bot</button>
            </li>
        </ul>

        <div class="tab-content" style="margin-bottom: 200px;">
            <div class="tab-pane active" id="kayit-tab-pane">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Komut</th>
                            <th scope="col">Kullanım</th>
                            <th scope="col">Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="searchAra">e.kayıt</td>
                            <td>e.kayıt</td>
                            <td>Kayıt Sistemini Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kayıt kayıt-yetkilisi</td>
                            <td>e.kayıt kayıt-yetkilisi @Rol</td>
                            <td>Kayıt Yetkilisi Rolünü Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kayıt erkek-rol</td>
                            <td>e.kayıt erkek-rol @Rol</td>
                            <td>Erkek Kişi Rolünü Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kayıt kız-rol</td>
                            <td>e.kayıt kız-rol @Rol</td>
                            <td>Kız Kişi Rolünü Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kayıt kayıtsız-rol</td>
                            <td>e.kayıt kayıtsız-rol @Rol</td>
                            <td>Kayıtsız Rolünü Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kayıt kayıt-log</td>
                            <td>e.kayıt kayıt-log #Kanal</td>
                            <td>Kayıt Log Kanalını Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kayıt kayıt-kanal</td>
                            <td>e.kayıt kayıt-kanal #Kanal</td>
                            <td>Kayıt Kanalının Yapılcağı Yeri Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.erkek</td>
                            <td>e.erkek @Kişi İsim Yaş</td>
                            <td>Erkek Kayıt Yaparsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kız</td>
                            <td>e.kız @Kişi İsim Yaş</td>
                            <td>Kız Kayıt Yaparsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.isim</td>
                            <td>e.isim @Kişi İsim Yaş</td>
                            <td>Herhangi Birinin İsmini Değiştirirsiniz</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kayıtsız</td>
                            <td>e.kayıtsız @Kişi</td>
                            <td>Kayıtsıza Düşürürsünüz</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kayıt-stats</td>
                            <td>e.kayıt-stats @Kişi</td>
                            <td>Kayıt Yetkilisinin Stat Bilgilerine Bakarsınız.</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.otorol</td>
                            <td>e.otorol</td>
                            <td>Oto Rol Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.otorol kanal</td>
                            <td>e.otorol kanal #Kanal</td>
                            <td>Otorol İle Gelen Kullanıcıları Loglar</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.otorol rol</td>
                            <td>e.otorol rol @Rol</td>
                            <td>Sunucuya Gelen Kişiye Otomatik Verilcek Rolü Ayarlarsınız</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="moderasyon-tab-pane">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Komut</th>
                            <th scope="col">Kullanım</th>
                            <th scope="col">Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="searchAra">e.ban</td>
                            <td>e.ban @Kişi [ Sebep ]</td>
                            <td>Etiketlediğiniz Kişiyi Sunucudan Banlar</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.mute</td>
                            <td>e.mute @Kişi [ Sebep ]</td>
                            <td>Etiketlediğiniz Kişiye Mute Atar</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.mute-ayar rol</td>
                            <td>e.mute-ayar rol @Rol</td>
                            <td>Mute Rolünü Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.mute-ayar log</td>
                            <td>e.mute-ayar log #Kanal</td>
                            <td>Mute Loglarının Kanalını Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.mute-ayar mute-yetkilisi</td>
                            <td>e.mute-ayar mute-yetkilisi @Rol</td>
                            <td>Mute Yetkilisini Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.hg-bb</td>
                            <td>e.hg-bb kanal #Kanal</td>
                            <td>Hoşgeldin Bay Bay Kanalını Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kick</td>
                            <td>e.kick @Kişi [ Sebep ]</td>
                            <td>Etiketlediğiniz Kişiyi Sunucudan Atar</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kilit</td>
                            <td>e.kilit</td>
                            <td>Kanalı Kilitler Veya Açar</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.mod-log</td>
                            <td>e.mod-log #Kanal</td>
                            <td>Sunucunun Loglarını Tutar</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.nuke</td>
                            <td>e.nuke</td>
                            <td>Komudu Yazdığınız Kanalı Sıfırlar</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.rol-ver</td>
                            <td>e.rol-ver @Kişi @Rol</td>
                            <td>Etiketlediğiniz Kullanıcıya Etiketlediğiniz Rolü Verir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.sa-as</td>
                            <td>e.sa-as</td>
                            <td>Selam Sistemini Açar Kapatırsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.say</td>
                            <td>e.say</td>
                            <td>Sunucunun Ses Ve Chat Bilgilerini Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.sayaç</td>
                            <td>e.sayaç</td>
                            <td>Sayaç Sistemini Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.sayaç log</td>
                            <td>e.sayaç log #Kanal</td>
                            <td>Sayaş Logunu Ayaralarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.sayaç hedef</td>
                            <td>e.sayaç hedef [ Sayı ]</td>
                            <td>Sayacın Hedef Sistemini Ayaralarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.sil</td>
                            <td>e.sil [ Sayı ]</td>
                            <td>Yazdığınız Sayı Kadar Mesaj Silee</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.snipe</td>
                            <td>e.snipe</td>
                            <td>En Son Silinen Mesajı Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.sunucubilgi</td>
                            <td>e.sunucubilgi</td>
                            <td>Sunucu Bilgilerini Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.taç</td>
                            <td>e.taç</td>
                            <td>Sunucunun Tac Sahibini Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.top-komuts</td>
                            <td>e.top-komuts</td>
                            <td>Botda Bulunan Toplam Komutlar Sayısını Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.yaz</td>
                            <td>e.yaz [ Mesaj ]</td>
                            <td>Bota Yazı Yazdırır</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.tag</td>
                            <td>e.tag [ Sembol ]</td>
                            <td>Sunucuya Tag Eklemenizi Sağlar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="guard-tab-pane">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Komut</th>
                            <th scope="col">Kullanım</th>
                            <th scope="col">Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="searchAra">e.capsengel</td>
                            <td>e.capsengel aç/kapat</td>
                            <td>Caps Engel Sitemini Açıp Kaptmanıza Yarar</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.küfürengel</td>
                            <td>e.küfürengel aç/kapat</td>
                            <td>Küfür Engel Sitemini Açıp Kaptmanıza Yarar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="ekonomi-tab-pane">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Komut</th>
                            <th scope="col">Kullanım</th>
                            <th scope="col">Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="searchAra">e.banka</td>
                            <td>e.banka</td>
                            <td>Bankana Bakarsın</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.banka kur</td>
                            <td>e.banka kur</td>
                            <td>Banka Hesabı Hesabı Kurarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.banka sil</td>
                            <td>e.banka sil</td>
                            <td>Banka Hesabını Silersiniz</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.banka yatır</td>
                            <td>e.banka yatır</td>
                            <td>Banka Hesabına Coin Eklersin</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.banka çek</td>
                            <td>e.banka çek</td>
                            <td>Banka Hesabındaki Coini Çekersin</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.banka vade</td>
                            <td>e.banka vade</td>
                            <td>Vadeli Hesabınız İle Alakalı İşlemler Yaparsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.banka vade yatır</td>
                            <td>e.banka vade yatır</td>
                            <td>Vadeli Hesabınızdan Coin Yatırırsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.banka vade çek</td>
                            <td>e.banka vade çek</td>
                            <td>Vadeli Hesabınızdan Coin Çekersiniz</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.banka vade aç</td>
                            <td>e.banka vade aç</td>
                            <td>Vadeli Hesabınızı Açarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.banka vade kapat</td>
                            <td>e.banka vade kapat</td>
                            <td>Vadeli Hesabınızı Kapatırsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.envanter</td>
                            <td>e.envanter</td>
                            <td>Envanterinizi Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.coin-gönder</td>
                            <td>e.coin-gönder @Kişi [ Sayı ]</td>
                            <td>Etiketlediğiniz Kullanıcıya Coin Gönderir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.günlük</td>
                            <td>e.günlük</td>
                            <td>Günlük Coin Verir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.hesap</td>
                            <td>e.hesap</td>
                            <td>Hesap Kurarsınız Ve Silersiniz</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.hesap kur</td>
                            <td>e.hesap kur [ Hesap Adı ]</td>
                            <td>Ekonomi Hesabı Kurarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.hesap sil</td>
                            <td>e.hesap sil</td>
                            <td>Ekonomi Hesabını Silersiniz</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.market</td>
                            <td>e.market</td>
                            <td>Marketi Açar</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.market al</td>
                            <td>e.market al [ Ürün ] [ Sayı ]</td>
                            <td>Seçtiğiniz Ürünü Satın Alır</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.market sat</td>
                            <td>e.market sat [ Ürün ] [ Sayı ]</td>
                            <td>Seçtiğiniz Ürünü Satar</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.çalış</td>
                            <td>e.çalış</td>
                            <td>Madende Veya Ormanda Çalışırsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.çalış maden</td>
                            <td>e.kayıt maden</td>
                            <td>Madende Veya Ormanda Çalışırsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.çalış orman</td>
                            <td>e.kayıt orman</td>
                            <td>Madende Veya Ormanda Çalışırsınız</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="level-tab-pane">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Komut</th>
                            <th scope="col">Kullanım</th>
                            <th scope="col">Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="searchAra">e.level-ayar</td>
                            <td>e.level-ayar</td>
                            <td>Level Ayarlarını Yaparsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.level-ayar xp-mesaj miktar</td>
                            <td>e.level-ayar xp-mesaj miktar [ Sayı ]</td>
                            <td>Mesaj Başı XP Oranını Ayarlarsınız [Otomatik Ayar 1]</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.level-ayar xp-level</td>
                            <td>e.level-ayar xp-level [ Sayı ]</td>
                            <td>Kaç XP De Level Atlayacağını Ayarlarsınız [Otomatik Ayar 250]</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.level-ayar log</td>
                            <td>e.level-ayar log #Kanal</td>
                            <td>Level Atlandığında Mesaj Atılacak Kanal Ayarlarsınız</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.level-ayar tebrik-mesaj</td>
                            <td>e.level-ayar tebrik-mesaj [ Mesaj ]</td>
                            <td>Kişi Level Atladığında Mesajını Yanıtla Yaparak Tebrik Eder [Otomatik Ayar Kapalı]</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="eglence-tab-pane">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Komut</th>
                            <th scope="col">Kullanım</th>
                            <th scope="col">Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="searchAra">e.afk</td>
                            <td>e.afk [ Sebep ]</td>
                            <td>Sizi AFK Moduna Sokar</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.avatar</td>
                            <td>e.avatar @Kişi</td>
                            <td>Etiketlediğiniz Kişinin Avatarını Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.banner</td>
                            <td>e.banner @Kişi</td>
                            <td>Etiketlediğiniz Kişinin Bannerini Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.kullanıcıbilgi</td>
                            <td>e.kullanıcıbilgi @Kişi</td>
                            <td>Etiketlediğiniz Kişinin Bilgilerini Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.etkinlik</td>
                            <td>e.etkinlik</td>
                            <td>Sesde Etkinlik Açar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="bot-tab-pane">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Komut</th>
                            <th scope="col">Kullanım</th>
                            <th scope="col">Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="searchAra">e.davet</td>
                            <td>e.davet</td>
                            <td>Botun Davet Linkini Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.ping</td>
                            <td>e.ping</td>
                            <td>Botun Pingini Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.yapımcı</td>
                            <td>e.yapımcı</td>
                            <td>Botu Yazan Ve Yapan Kişleri Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.i</td>
                            <td>e.i</td>
                            <td>Botun İstatistiklerini Gösterir</td>
                        </tr>
                        <tr>
                            <td class="searchAra">e.yardım</td>
                            <td>e.yardım</td>
                            <td>Botun Komutlarını Gösterir</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>