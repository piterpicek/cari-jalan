<?php
function URLReferenceRandom() {
    $dominio = array('Adzuna', 'Bixee', 'CareerBuilder', 'Craigslist', 'Dice', 'Eluta.ca', 'Hotjobs', 'JobStreet', 'Incruit', 'Indeed', 'Glassdoor', 'LinkUp', 'Monster', 'Naukri',
        'Yahoo', 'Legal', 'GoogleScholar', 'Lexis', 'Manupatra', 'Quicklaw', 'WestLaw', 'Medical', 'Bing Health', 'Bioinformatic', 'CiteAb', 'EB-eye', 'Entrez', 'mtv', 'ubuntu',
        'GenieKnows', 'GoPubMed', 'Healia', 'Healthline', 'Nextbio', 'PubGene', 'Quertle', 'Searchmedica', 'WebMD', 'News', 'BingNews', 'Daylife', 'GoogleNews', 'aol', 'microsoft',
        'MagPortal', 'Newslookup', 'Nexis', 'Topix', 'Trapit', 'YahooNews', 'People', 'Comfibook', 'Ex.plode', 'InfoSpace', 'PeekYou', 'Spock', 'Spokeo', 'WorldwideHelpers', 'iPhone',
        'Zabasearch', 'ZoomInfo', 'Fizber', 'HotPads', 'Realtor', 'Redfin', 'Rightmove', 'Trulia', 'Zillow', 'Zoopla', 'StuRents', 'globo', 'sbt', 'band', 'cnn', 'blog.inurl.com.br'
    );
    $gTLD = array('aero', 'arpa', 'biz', 'com', 'coop', 'edu', 'gov', 'info', 'int', 'mil', 'museum', 'name', 'net', 'org', 'pro', 'tel');
    $arquivo = array('admin', 'index', 'wp-admin', 'info', 'shop', 'file', 'out', 'open', 'news', 'add', 'profile', 'search', 'open', 'photo', 'insert', 'view');
    $ext = array('exe', 'php', 'asp', 'aspx', 'jsf', 'html', 'htm', 'lua', 'log', 'cgi', 'sh', 'css', 'py', 'sql', 'xml', 'rss');
    $pasta = array('App_Files', 'Assets', 'CFFileServlet', 'CFIDE', 'Communication', 'Computers', 'CoreAdminHome', 'CoreHome', 'Crawler', 'Creator',
        'DECOM', 'Dashboard', 'Drives', 'Dynamic', 'FCKeditor', 'Feedback', 'Files', 'Flash', 'Forms', 'Help', 'ICEcore', 'IO', 'Image', 'JPG', 'getold',
        'JSP', 'KFSI', 'Laguna', 'Login', 'Motors', 'MultiSites', 'NR', 'OCodger', 'RSS', 'Safety', 'Smarty', 'Software', 'Static', 'Stress', 'getfull',
        'Sugarcrm', 'Travel', 'UPLOAD', 'Urussanga', 'UserFiles', '__tpl', '_fckeditor', '_info', '_machine', '_plugins', '_sample', '_samples', 'postmost',
        '_source', '_testcases', 'aaa', 'abelardoluz', 'aberlardoluz', 'aborto', 'about', 'aboutus', 'abuse', 'abusers', 'ac_drives', 'acabamentos', 'mail',
        'academias', 'acao', 'acartpro', 'acatalog', 'acc', 'acc_auto_del', 'acc_beep_ken', 'acc_beep_time', 'acc_ch_mail', 'acc_fc_prsc', 'accounts', 'validar',
        'acc_html_mark', 'acc_html_rand', 'acc_lan_page', 'acc_pic_html', 'acc_profol', 'acc_soft_link', 'acc_ssd_page', 'acc_syun_ei', 'german', 'intranet', 'old',
        'acc_time_go', 'acc_wbcreator', 'accept', 'accepted', 'acceso', 'access', 'accessibility', 'accessories', 'acciones', 'acclg', 'account', 'paste', 'paste22',
        'acessorios', 'acontece', 'acougueiro', 'acoustic', 'act', 'action', 'activate', 'active', 'activeden', 'activism', 'actualit', 'actuators', 'ad', 'informatica',
        'ad_division', 'ad_rate', 'adapter', 'adapters', 'adaptive', 'adaptivei', 'adatmentes', 'adbanner', 'adblock', 'adboard', 'adclick', 'add-ons', 'add', 'delete',
        'added', 'addon', 'address', 'adduser', 'adfree', 'adhoc', 'adinfo', 'adios_papa', 'adlink', 'adlinks', 'acc_folder_vw', 'acc_syun_su',
    );
    $locais = array('ac', 'ad', 'ae', 'af', 'ag', 'al', 'am', 'an', 'ao', 'aq', 'ar', 'as', 'at', 'au', 'aw', 'az', 'ba', 'bb', 'bd', 'be', 'bf', 'bg', 'bh', 'bi', 'bj', 'bm', 'bn',
        'bw', 'by', 'bz', 'ca', 'cc', 'cd', 'cf', 'cg', 'ch', 'ci', 'ck', 'cl', 'cm', 'cn', 'co', 'cr', 'cu', 'cv', 'cx', 'cy', 'cz', 'de', 'dj', 'dk', 'dm', 'do', 'dz', 'bo', 'br',
        'ec', 'ee', 'eg', 'er', 'es', 'et', 'eu', 'fi', 'fj', 'fk', 'fm', 'fo', 'fr', 'ga', 'gb', 'gd', 'ge', 'gf', 'gg', 'gh', 'gi', 'gl', 'gm', 'gn', 'gp', 'gq', 'gr', 'bs', 'bt',
        'gs', 'gt', 'gu', 'gw', 'gy', 'hk', 'hm', 'hn', 'hr', 'ht', 'hu', 'id', 'ie', 'il', 'im', 'in', 'io', 'iq', 'ir', 'is', 'it', 'je', 'jm', 'jo', 'jp', 'ke', 'kg', 'bv',
        'kh', 'ki', 'km', 'kn', 'kr', 'kw', 'ky', 'kz', 'la', 'lb', 'lc', 'li', 'lk', 'lr', 'ls', 'lt', 'lu', 'lv', 'ly', 'ma', 'mc', 'md', 'me', 'mg', 'mh', 'mk', 'ml',
        'mm', 'mn', 'mo', 'mp', 'mq', 'mr', 'ms', 'mt', 'mu', 'mv', 'mw', 'mx', 'my', 'mz', 'nb', 'nc', 'ne', 'nf', 'ng', 'ni', 'nl', 'no', 'np', 'nr', 'nu', 'nz', 'om',
        'pa', 'pe', 'pf', 'pg', 'ph', 'pk', 'pl', 'pm', 'pn', 'pr', 'ps', 'pt', 'pw', 'py', 'qa', 're', 'ro', 'ru', 'rw', 'sa', 'sb', 'sc', 'sd', 'se', 'sg', 'sh', 'si',
        'sj', 'sk', 'sl', 'sm', 'sn', 'so', 'sr', 'ss', 'st', 'su', 'sv', 'sy', 'sz', 'tc', 'td', 'tf', 'tg', 'th', 'tj', 'tk', 'tl', 'tm', 'tn', 'to', 'tr', 'tt', 'tv',
        'tw', 'tz', 'ua', 'ug', 'uk', 'um', 'us', 'uy', 'uz', 'va', 'vc', 've', 'vg', 'vi', 'vn', 'vu', 'wf', 'ws', 'ye', 'yt', 'yu', 'za', 'zm', 'zw', 'ai',
    );
    return "http://www." . strtolower($dominio[rand(0, count($dominio) - 1)]) . ".{$gTLD[rand(0, count($gTLD) - 1)]}.{$locais[rand(0, count($locais) - 1)]}/{$pasta[rand(0, count($pasta) - 1)]}/{$arquivo[rand(0, count($arquivo) - 1)]}.{$ext[rand(0, count($ext) - 1)]}";
}
function UserAgentRandom() {
    $agentBrowser = array('Firefox', 'Safari', 'Opera', 'Flock', 'Internet Explorer', 'Seamonkey', 'Tor Browser', 'GNU IceCat', 'CriOS', 'TenFourFox',
        'SeaMonkey', 'B-l-i-t-z-B-O-T', 'Konqueror', 'Mobile', 'Konqueror', 'Netscape', 'Chrome', 'Dragon', 'SeaMonkey', 'Maxthon', 'IBrowse',
        'K-Meleon', 'GoogleBot', 'Konqueror', 'Minimo', 'Googlebot', 'WeltweitimnetzBrowser', 'SuperBot', 'TerrawizBot', 'YodaoBot', 'Wyzo', 'Grail',
        'PycURL', 'Galaxy', 'EnigmaFox', '008', 'ABACHOBot', 'Bimbot', 'Covario IDS', 'iCab', 'KKman', 'Oregano', 'WorldWideWeb', 'Wyzo', 'GNU IceCat',
        'Vimprobable', 'uzbl', 'Slim Browser', 'Flock', 'OmniWeb', 'Rockmelt', 'Shiira', 'Swift', 'Pale Moon', 'Camino', 'Flock', 'Galeon', 'Sylera'
    );

    $agentSistema = array('Windows 3.1', 'Windows 95', 'Windows 98', 'Windows 2000', 'Windows NT', 'Linux 2.4.22-10mdk', 'FreeBSD',
        'Windows XP', 'Windows Vista', 'Redhat Linux', 'Ubuntu', 'Fedora', 'AmigaOS', 'BackTrack Linux', 'iPad', 'BlackBerry', 'Unix',
        'CentOS Linux', 'Debian Linux', 'Macintosh', 'Android', 'iPhone', 'Windows NT 6.1', 'BeOS', 'OS 10.5', 'Nokia', 'Arch Linux',
        'Ark Linux', 'BitLinux', 'Conectiva (Mandriva)', 'CRUX Linux', 'Damn Small Linux', 'DeLi Linux', 'Ubuntu', 'BigLinux', 'Edubuntu',
        'Fluxbuntu', 'Freespire', 'GNewSense', 'Gobuntu', 'gOS', 'Mint Linux', 'Kubuntu', 'Xubuntu', 'ZeVenOS', 'Zebuntu', 'DemoLinux',
        'Dreamlinux', 'DualOS', 'eLearnix', 'Feather Linux', 'Famelix', 'FeniX', 'Gentoo', 'GoboLinux', 'GNUstep', 'Insigne Linux',
        'Kalango', 'KateOS', 'Knoppix', 'Kurumin', 'Dizinha', 'TupiServer', 'Linspire', 'Litrix', 'Mandrake', 'Mandriva', 'MEPIS',
        'Musix GNU Linux', 'Musix-BR', 'OneBase Go', 'openSuSE', 'pQui Linux', 'PCLinuxOS', 'Plaszma OS', 'Puppy Linux', 'QiLinux',
        'Red Hat Linux', 'Red Hat Enterprise Linux', 'CentOS', 'Fedora', 'Resulinux', 'Rxart', 'Sabayon Linux', 'SAM Desktop', 'Satux',
        'Slackware', 'GoblinX', 'Slax', 'Zenwalk', 'SuSE', 'Caixa Mágica', 'HP-UX', 'IRIX', 'OSF/1', 'OS-9', 'POSYS', 'QNX', 'Solaris',
        'OpenSolaris', 'SunOS', 'SCO UNIX', 'Tropix', 'EROS', 'Tru64', 'Digital UNIX', 'Ultrix', 'UniCOS', 'UNIflex', 'Microsoft Xenix',
        'z/OS', 'Xinu', 'Research Unix', 'InfernoOS'
    );

    $locais = array('cs-CZ', 'en-US', 'sk-SK', 'pt-BR', 'sq_AL', 'sq', 'ar_DZ', 'ar_BH', 'ar_EG', 'ar_IQ', 'ar_JO',
        'ar_KW', 'ar_LB', 'ar_LY', 'ar_MA', 'ar_OM', 'ar_QA', 'ar_SA', 'ar_SD', 'ar_SY', 'ar_TN', 'ar_AE', 'ar_YE', 'ar',
        'be_BY', 'be', 'bg_BG', 'bg', 'ca_ES', 'ca', 'zh_CN', 'zh_HK', 'zh_SG', 'zh_TW', 'zh', 'hr_HR', 'hr', 'cs_CZ', 'cs',
        'da_DK', 'da', 'nl_BE', 'nl_NL', 'nl', 'en_AU', 'en_CA', 'en_IN', 'en_IE', 'en_MT', 'en_NZ', 'en_PH', 'en_SG', 'en_ZA',
        'en_GB', 'en_US', 'en', 'et_EE', 'et', 'fi_FI', 'fi', 'fr_BE', 'fr_CA', 'fr_FR', 'fr_LU', 'fr_CH', 'fr', 'de_AT', 'de_DE',
        'de_LU', 'de_CH', 'de', 'el_CY', 'el_GR', 'el', 'iw_IL', 'iw', 'hi_IN', 'hu_HU', 'hu', 'is_IS', 'is', 'in_ID', 'in', 'ga_IE',
        'ga', 'it_IT', 'it_CH', 'it', 'ja_JP', 'ja_JP_JP', 'ja', 'ko_KR', 'ko', 'lv_LV', 'lv', 'lt_LT', 'lt', 'mk_MK', 'mk', 'ms_MY',
        'ms', 'mt_MT', 'mt', 'no_NO', 'no_NO_NY', 'no', 'pl_PL', 'pl', 'pt_PT', 'pt', 'ro_RO', 'ro', 'ru_RU', 'ru', 'sr_BA', 'sr_ME',
        'sr_CS', 'sr_RS', 'sr', 'sk_SK', 'sk', 'sl_SI', 'sl', 'es_AR', 'es_BO', 'es_CL', 'es_CO', 'es_CR', 'es_DO', 'es_EC', 'es_SV',
        'es_GT', 'es_HN', 'es_MX', 'es_NI', 'es_PA', 'es_PY', 'es_PE', 'es_PR', 'es_ES', 'es_US', 'es_UY', 'es_VE', 'es', 'sv_SE',
        'sv', 'th_TH', 'th_TH_TH', 'th', 'tr_TR', 'tr', 'uk_UA', 'uk', 'vi_VN', 'vi'
    );
    return $agentBrowser[rand(0, count($agentBrowser) - 1)] . '/' . rand(1, 20) . '.' . rand(0, 20) . ' (' . $agentSistema[rand(0, count($agentSistema) - 1)] . ' ' . rand(1, 7) . '.' . rand(0, 9) . '; ' . $locais[rand(0, count($locais) - 1)] . ';)';
}

function curl($url, $post = false,$header=false){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, UserAgentRandom());
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_REFERER, URLReferenceRandom());
    if($header!==false) {
        curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
    }
    if ($post!==false) {
        //curl_setopt($ch, CURLOPT_COOKIESESSION, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cook.tmp");
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cook.tmp");
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

function gbw($find_start, $find_end, $str) {
    $start = strpos($str, $find_start);
    if ($start === false) {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str, $start + $length), $find_end);
    return trim(substr($str, $start + $length, $end));
}

if (isset($_GET['ip']) && !empty($_GET['ip'])) {
	$dataku 	= curl("http://www.geoplugin.net/json.gp?ip=".$_GET['ip']);
	$out 		= json_decode($dataku,true);
	$cdetail 	= curl("https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyBiszx96KFMqnD9OcN-ijDmTGYLqvsvhXA&address=".$out['geoplugin_latitude']."+".$out['geoplugin_longitude']."&result_type=street_address&language=en");
	$lala 		= json_decode($cdetail,true);
	echo $lala['results'][0]['formatted_address'];
	unlink('cook.tmp');
}