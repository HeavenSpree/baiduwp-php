<?php
// Language["TipTitle"]
// <?php echo Language["HelpButton"];
$lang = [
	"zh-CN" => [
		"LanguageName" => "Chinese",
		"Sitename" => "PanDownload 复刻版",
		"ConfirmTitle" => "继续解析？",
		"ConfirmText" => "为保证服务稳定，每个IP每天有" . DownloadTimes . "次免费解析次数，是否继续？",
		"ConfirmmButtonText" => "确定",
		"IndexButton" => "首页",
		"HelpButton" => "使用帮助",
		"TipTitle" => "提示",
		"TimeoutTip" => "当前页面已失效，请刷新重新获取。",
		"AllFiles" => "全部文件",
		"PasswordError" => "密码错误",
		"AccountError" => "账户错误",
		"NoChance" => "免费次数不足",
		"SwitchWait" => "请稍后，正在切换账号中~",
		"DownloadLinkError" => "获取下载链接失败",
		"DatabaseError" => "数据库错误",
		"DownloadLinkSuccess" => "获取下载链接成功",
		"Rreview" => "在线预览：",
		"NotSupportWithUA" => "暂不支持当前文件。",
		"NotSupportWithoutUA" => "目前只支持<b>50MB以下文件</b>或<b>设置UA</b>后使用在线预览功能。",
		"DownloadLink" => "下载链接",
		"DownloadTip" => "Tips:电脑端右键即可复制下载链接，手机端长按可复制下载链接。",
		"SendToAria2" => "发送到aria2",
		"Send" => "发送",
		"CheckVersion" => "检查aria2版本",
		"Close" => "关闭",
		"IndexTitle" => "百度网盘在线解析",
		"ShareLink" => "请输入分享链接(可输入带验证码链接)",
		"SharePassword" => "请输入提取码(没有留空)",
		"PassWord" => "请输入密码",
		"Submit" => "提交",
		"UserSettings" => "用户设置",
		"ColorMode" => "色彩模式",
		"BrowserSettings" => "浏览器设置：",
		"CurrentSetting" => "当前设置：",
		"FollowBrowser" => "跟随浏览器（默认）",
		"DarkMode" => "深色模式",
		"LightMode" => "浅色模式",
		"LanguageChoose" => "选择语言",
		"SaveForever" => '将会永久保存。',
		"Save365" => '将会保存 365 天，每次访问此项目会自动续期。',
		"CurrentDisplayed" => "当前显示：",
		"HelpPage" => '
	<div class="row justify-content-center">
		<div class="col-md-7 col-sm-8 col-11">
			<div class="alert alert-primary" role="alert">
				<h5 class="alert-heading">提示</h5>
				<hr />
				<p class="card-text">因百度限制，需修改浏览器 User Agent 后下载。<br />
					<div class="page-inner">
						<section class="normal" id="section-">
							<div id="IDM"><a class="anchor" href="#IDM"></a>
								<h4>IDM（推荐）</h4>
							</div>
							<ol>
								<li>选项 -> 下载 -> 手动添加任务时使用的用户代理（UA）-> 填入 <b>LogStatistic</b></li>
								<li><b>右键复制下载链接</b>（直接点击 或 右键调用 IDM 将传入浏览器的 UA，将会导致下载失败），在 IDM 新建任务，粘贴链接即可下载。</li>
							</ol>
							<div id="ADM"><a class="anchor" href="#ADM"></a>
								<h4>ADM Pro（Android推荐）</h4>
								<ol>
									<li>设置 -> 下载中 -> 浏览器标识 -> 自定义 浏览器标识</li>
									<li>填入 <b>LogStatistic</b></li>
									<li>切换到浏览器（ADM留在后台），长按“下载链接”，选择复制链接地址</li>
									<li>然后在ADM里点击开始即可</li>
								</ol>
								<div id="Chrome"><a class="anchor" href="#Chrome"></a>
									<h4>Chrome 浏览器</h4>
								</div>
								<ol>
									<li>安装浏览器扩展程序 <a href="https://chrome.google.com/webstore/detail/user-agent-switcher-for-c/djflhoibgkdhkhhcedjiklpkjnoahfmg" target="_blank">User-Agent Switcher for Chrome</a></li>
									<li>右键点击扩展图标 -> 选项</li>
									<li>New User-Agent name 填入 百度网盘分享下载</li>
									<li>New User-Agent String 填入 <b>LogStatistic</b></li>
									<li>Group 填入 百度网盘</li>
									<li>Append? 选择 Replace</li>
									<li>Indicator Flag 填入 Log，点击 Add 保存</li>
									<li>保存后点击扩展图标，出现“百度网盘”，进入并选择“百度网盘分享下载”。</li>
								</ol>
								<blockquote>
									<p>Chrome 应用商店打不开或者其他 Chromium 内核的浏览器，<a href="resource/UserAgentSwitcher.crx" target="_blank">请点此下载</a></p>
									<p><a href="https://appcenter.browser.qq.com/search/detail?key=User-Agent%20Switcher%20for%20Chrome&amp;id=djflhoibgkdhkhhcedjiklpkjnoahfmg%20&amp;title=User-Agent%20Switcher%20for%20Chrome" target="_blank">QQ浏览器插件下载</a></p>
								</blockquote>
								<div id="Pure"><a class="anchor" href="#Pure"></a>
									<h4>Pure 浏览器（Android）</h4>
								</div>
								<ol>
									<li>设置 –> 浏览设置 -> 浏览器标识(UA)</li>
									<li>添加自定义 UA：<b>LogStatistic</b></li>
								</ol>
								<div id="Alook"><a class="anchor" href="#Alook"></a>
									<h4>Alook 浏览器（IOS）</h4>
								</div>
								<ol>
									<li>设置 -> 通用设置 -> 浏览器标识 -> 移动版浏览器标识 -> 自定义 -><br />填入 <b>LogStatistic</b></li>
								</ol>
								<div id="Copyright"><a class="anchor" href="#Copyright"></a>
									<h4>关于此项目</h4>
								</div>
								<ol>
									<li>本项目与PanDownload无关。</li>
									<li>本项目仅以学习为目的，不得用于其他用途。</li>
									<li>当前项目版本：<?php echo programVersion; ?></li>
									<li><a href="https://github.com/yuantuo666/baiduwp-php" target="_blank">Github仓库</a></li>
									<li><a href="https://imwcr.cn/" target="_blank">Made by Yuan_Tuo</a></li>
								</ol>
						</section>
						<script>
							$(".anchor").attr("target", "_self").prepend(`<svg viewBox="0 0 16 16" version="1.1" width="16" height="16"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5
							3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"/></svg>`);
						</script>
					</div>
				</p>
			</div>
		</div>
	</div>'
	],
	"zh" => [
		"LanguageName" => "Chinese",
		"Sitename" => "PanDownload 复刻版",
		"ConfirmTitle" => "继续解析？",
		"ConfirmText" => "为保证服务稳定，每个IP每天有" . DownloadTimes . "次免费解析次数，是否继续？",
		"ConfirmmButtonText" => "确定",
		"IndexButton" => "首页",
		"HelpButton" => "使用帮助",
		"TipTitle" => "提示",
		"TimeoutTip" => "当前页面已失效，请刷新重新获取。",
		"AllFiles" => "全部文件",
		"PasswordError" => "密码错误",
		"AccountError" => "账户错误",
		"NoChance" => "免费次数不足",
		"SwitchWait" => "请稍后，正在切换账号中~",
		"DownloadLinkError" => "获取下载链接失败",
		"DatabaseError" => "数据库错误",
		"DownloadLinkSuccess" => "获取下载链接成功",
		"Rreview" => "在线预览：",
		"NotSupportWithUA" => "暂不支持当前文件。",
		"NotSupportWithoutUA" => "目前只支持<b>50MB以下文件</b>或<b>设置UA</b>后使用在线预览功能。",
		"DownloadLink" => "下载链接",
		"DownloadTip" => "Tips:电脑端右键即可复制下载链接，手机端长按可复制下载链接。",
		"SendToAria2" => "发送到aria2",
		"Send" => "发送",
		"CheckVersion" => "检查aria2版本",
		"Close" => "关闭",
		"IndexTitle" => "百度网盘在线解析",
		"ShareLink" => "请输入分享链接(可输入带验证码链接)",
		"SharePassword" => "请输入提取码(没有留空)",
		"PassWord" => "请输入密码",
		"Submit" => "提交",
		"UserSettings" => "用户设置",
		"ColorMode" => "色彩模式",
		"BrowserSettings" => "浏览器设置：",
		"CurrentSetting" => "当前设置：",
		"FollowBrowser" => "跟随浏览器（默认）",
		"DarkMode" => "深色模式",
		"LightMode" => "浅色模式",
		"LanguageChoose" => "选择语言",
		"SaveForever" => '将会永久保存。',
		"Save365" => '将会保存 365 天，每次访问此项目会自动续期。',
		"CurrentDisplayed" => "当前显示：",
		"HelpPage" => '
	<div class="row justify-content-center">
		<div class="col-md-7 col-sm-8 col-11">
			<div class="alert alert-primary" role="alert">
				<h5 class="alert-heading">提示</h5>
				<hr />
				<p class="card-text">因百度限制，需修改浏览器 User Agent 后下载。<br />
					<div class="page-inner">
						<section class="normal" id="section-">
							<div id="IDM"><a class="anchor" href="#IDM"></a>
								<h4>IDM（推荐）</h4>
							</div>
							<ol>
								<li>选项 -> 下载 -> 手动添加任务时使用的用户代理（UA）-> 填入 <b>LogStatistic</b></li>
								<li><b>右键复制下载链接</b>（直接点击 或 右键调用 IDM 将传入浏览器的 UA，将会导致下载失败），在 IDM 新建任务，粘贴链接即可下载。</li>
							</ol>
							<div id="ADM"><a class="anchor" href="#ADM"></a>
								<h4>ADM Pro（Android推荐）</h4>
								<ol>
									<li>设置 -> 下载中 -> 浏览器标识 -> 自定义 浏览器标识</li>
									<li>填入 <b>LogStatistic</b></li>
									<li>切换到浏览器（ADM留在后台），长按“下载链接”，选择复制链接地址</li>
									<li>然后在ADM里点击开始即可</li>
								</ol>
								<div id="Chrome"><a class="anchor" href="#Chrome"></a>
									<h4>Chrome 浏览器</h4>
								</div>
								<ol>
									<li>安装浏览器扩展程序 <a href="https://chrome.google.com/webstore/detail/user-agent-switcher-for-c/djflhoibgkdhkhhcedjiklpkjnoahfmg" target="_blank">User-Agent Switcher for Chrome</a></li>
									<li>右键点击扩展图标 -> 选项</li>
									<li>New User-Agent name 填入 百度网盘分享下载</li>
									<li>New User-Agent String 填入 <b>LogStatistic</b></li>
									<li>Group 填入 百度网盘</li>
									<li>Append? 选择 Replace</li>
									<li>Indicator Flag 填入 Log，点击 Add 保存</li>
									<li>保存后点击扩展图标，出现“百度网盘”，进入并选择“百度网盘分享下载”。</li>
								</ol>
								<blockquote>
									<p>Chrome 应用商店打不开或者其他 Chromium 内核的浏览器，<a href="resource/UserAgentSwitcher.crx" target="_blank">请点此下载</a></p>
									<p><a href="https://appcenter.browser.qq.com/search/detail?key=User-Agent%20Switcher%20for%20Chrome&amp;id=djflhoibgkdhkhhcedjiklpkjnoahfmg%20&amp;title=User-Agent%20Switcher%20for%20Chrome" target="_blank">QQ浏览器插件下载</a></p>
								</blockquote>
								<div id="Pure"><a class="anchor" href="#Pure"></a>
									<h4>Pure 浏览器（Android）</h4>
								</div>
								<ol>
									<li>设置 –> 浏览设置 -> 浏览器标识(UA)</li>
									<li>添加自定义 UA：<b>LogStatistic</b></li>
								</ol>
								<div id="Alook"><a class="anchor" href="#Alook"></a>
									<h4>Alook 浏览器（IOS）</h4>
								</div>
								<ol>
									<li>设置 -> 通用设置 -> 浏览器标识 -> 移动版浏览器标识 -> 自定义 -><br />填入 <b>LogStatistic</b></li>
								</ol>
								<div id="Copyright"><a class="anchor" href="#Copyright"></a>
									<h4>关于此项目</h4>
								</div>
								<ol>
									<li>本项目与PanDownload无关。</li>
									<li>本项目仅以学习为目的，不得用于其他用途。</li>
									<li>当前项目版本：<?php echo programVersion; ?></li>
									<li><a href="https://github.com/yuantuo666/baiduwp-php" target="_blank">Github仓库</a></li>
									<li><a href="https://imwcr.cn/" target="_blank">Made by Yuan_Tuo</a></li>
								</ol>
						</section>
						<script>
							$(".anchor").attr("target", "_self").prepend(`<svg viewBox="0 0 16 16" version="1.1" width="16" height="16"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5
							3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"/></svg>`);
						</script>
					</div>
				</p>
			</div>
		</div>
	</div>'
	],
	"en" => [
		"LanguageName" => "English",
		"Sitename" => "PanDownload 复刻版",
		"ConfirmTitle" => "Continue?",
		"ConfirmText" => "You have " . DownloadTimes . " download times, continue?",
		"ConfirmmButtonText" => "Yes",
		"IndexButton" => "Home",
		"HelpButton" => "Using Help",
		"TipTitle" => "Tip",
		"TimeoutTip" => "It's timeout now, please refresh the page!",
		"AllFiles" => "All File(s)",
		"PasswordError" => "Password is error",
		"AccountError" => "You are banned",
		"NoChance" => "You have no download times.",
		"SwitchWait" => "Please wait",
		"DownloadLinkError" => "An error happened when try to get download link",
		"DatabaseError" => "An error happened when try to connect to database",
		"DownloadLinkSuccess" => "Succeed",
		"Rreview" => "Preview:",
		"NotSupportWithUA" => "The type is not support",
		"NotSupportWithoutUA" => "The type is not support",
		"DownloadLink" => "Download Link",
		"DownloadTip" => "Tips:Copy the download link and put it in your download apps.",
		"SendToAria2" => "Send to aria2",
		"Send" => "Send",
		"CheckVersion" => "Check version",
		"Close" => "Close",
		"IndexTitle" => "Get Download Link of pan.baidu.com",
		"ShareLink" => "Please enter the share link",
		"SharePassword" => "Please enter the share link password",
		"PassWord" => "Please enter the site password",
		"Submit" => "Submit",
		"UserSettings" => "User settings",
		"ColorMode" => "Color mode",
		"BrowserSettings" => "Browser settings: ",
		"CurrentSetting" => "Current setting: ",
		"FollowBrowser" => "Follow browser (default)",
		"DarkMode" => "Dark mode",
		"LightMode" => "Light mode",
		"LanguageChoose" => "Choose a language",
		"SaveForever" => 'Will be saved forever.',
		"Save365" => 'It will be saved for 365 days and will be automatically renewed every time you visit this item.',
		"CurrentDisplayed" => "Current displayed: ",
		"HelpPage" => '
	<div class="row justify-content-center">
		<div class="col-md-7 col-sm-8 col-11">
			<div class="alert alert-primary" role="alert">
				<h5 class="alert-heading">Using help</h5>
				<hr />
				<p class="card-text">Due to Baidu restrictions, you need to modify the browser "User Agent" before downloading. <br />
					<div class="page-inner">
						<section class="normal" id="section-">
							<div id="IDM"><a class="anchor" href="#IDM"></a>
								<h4>IDM(Recommend)</h4>
							</div>
							<ol>
								<li>选项 -> 下载 -> 手动添加任务时使用的用户代理（UA）-> 填入 <b>LogStatistic</b></li>
								<li><b>右键复制下载链接</b>（直接点击 或 右键调用 IDM 将传入浏览器的 UA，将会导致下载失败），在 IDM 新建任务，粘贴链接即可下载。</li>
							</ol>
							<div id="ADM"><a class="anchor" href="#ADM"></a>
								<h4>ADM Pro(Android)</h4>
								<ol>
									<li>设置 -> 下载中 -> 浏览器标识 -> 自定义 浏览器标识</li>
									<li>填入 <b>LogStatistic</b></li>
									<li>切换到浏览器（ADM留在后台），长按“下载链接”，选择复制链接地址</li>
									<li>然后在ADM里点击开始即可</li>
								</ol>
								<div id="Chrome"><a class="anchor" href="#Chrome"></a>
									<h4>Chrome 浏览器</h4>
								</div>
								<ol>
									<li>安装浏览器扩展程序 <a href="https://chrome.google.com/webstore/detail/user-agent-switcher-for-c/djflhoibgkdhkhhcedjiklpkjnoahfmg" target="_blank">User-Agent Switcher for Chrome</a></li>
									<li>右键点击扩展图标 -> 选项</li>
									<li>New User-Agent name 填入 百度网盘分享下载</li>
									<li>New User-Agent String 填入 <b>LogStatistic</b></li>
									<li>Group 填入 百度网盘</li>
									<li>Append? 选择 Replace</li>
									<li>Indicator Flag 填入 Log，点击 Add 保存</li>
									<li>保存后点击扩展图标，出现“百度网盘”，进入并选择“百度网盘分享下载”。</li>
								</ol>
								<blockquote>
									<p>Chrome 应用商店打不开或者其他 Chromium 内核的浏览器，<a href="resource/UserAgentSwitcher.crx" target="_blank">请点此下载</a></p>
									<p><a href="https://appcenter.browser.qq.com/search/detail?key=User-Agent%20Switcher%20for%20Chrome&amp;id=djflhoibgkdhkhhcedjiklpkjnoahfmg%20&amp;title=User-Agent%20Switcher%20for%20Chrome" target="_blank">QQ浏览器插件下载</a></p>
								</blockquote>
								<div id="Pure"><a class="anchor" href="#Pure"></a>
									<h4>Pure 浏览器（Android）</h4>
								</div>
								<ol>
									<li>设置 –> 浏览设置 -> 浏览器标识(UA)</li>
									<li>添加自定义 UA：<b>LogStatistic</b></li>
								</ol>
								<div id="Alook"><a class="anchor" href="#Alook"></a>
									<h4>Alook 浏览器（IOS）</h4>
								</div>
								<ol>
									<li>设置 -> 通用设置 -> 浏览器标识 -> 移动版浏览器标识 -> 自定义 -><br />填入 <b>LogStatistic</b></li>
								</ol>
								<div id="Copyright"><a class="anchor" href="#Copyright"></a>
									<h4>关于此项目</h4>
								</div>
								<ol>
									<li>本项目与PanDownload无关。</li>
									<li>本项目仅以学习为目的，不得用于其他用途。</li>
									<li>当前项目版本：<?php echo programVersion; ?></li>
									<li><a href="https://github.com/yuantuo666/baiduwp-php" target="_blank">Github仓库</a></li>
									<li><a href="https://imwcr.cn/" target="_blank">Made by Yuan_Tuo</a></li>
								</ol>
						</section>
						<script>
							$(".anchor").attr("target", "_self").prepend(`<svg viewBox="0 0 16 16" version="1.1" width="16" height="16"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5
							3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"/></svg>`);
						</script>
					</div>
				</p>
			</div>
		</div>
	</div>'
	],
];

define('BrowserLanguage', $_SERVER["HTTP_ACCEPT_LANGUAGE"]);

function setLanguage() {
	global $lang;
	$languages = [];
	$qs = [];

	define('BrowserLanguages', explode(",", BrowserLanguage));
	foreach (BrowserLanguages as &$value) {
		if (preg_match('#([A-Za-z0-9\-]{1,8});q=(\d(.\d{1,3})?)#', $value, $matches)) {
			$qs[$matches[2]] = $matches[1];
		} else {
			array_push($languages, $value);
		}
	}
	krsort($qs);
	foreach (array_values($qs) as &$value) {
		array_push($languages, $value);
	}
	unset($qs);

	foreach ($languages as &$value) {
		if (array_key_exists($value, $lang)) {
			define('Lang', $value);
			break;
		}
	}
}

if (isset($_COOKIE['Language'])) {
	if (array_key_exists($_COOKIE['Language'], $lang)) {
		define('Lang', $_COOKIE['Language']);
		setcookie('Language', $_COOKIE['Language'], time() + 31536000);
	} else {
		setcookie('Language', '', time() - 31536000);
		setLanguage();
		echo "<div>There was a problem with your language configuration and it has been reset for you. <a href=\"usersettings.php\" target=\"_blank\">Click here to select language.</div>";
	}
} else {
	setLanguage();
}


if (!defined('Lang')) {
	define('Lang', $value);
	echo "<div>This project is not available in your language, the following is the English version. <a href=\"usersettings.php\" target=\"_blank\">Click here to select language.</div>";
}

define("Language", $lang[Lang]);
header('Content-Language: ' . Lang);
