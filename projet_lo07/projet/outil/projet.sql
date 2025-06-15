<!DOCTYPE html>

<html  dir="ltr" lang="fr" xml:lang="fr">
<head>
    <title>LO07_FR_TRO: projet.sql pour construire la base | moodle</title>
    <link rel="shortcut icon" href="https://moodle.utt.fr/theme/image.php/purity/theme/1745311970/favicon" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;600;700&display=swap" rel="stylesheet"> 

    <!-- Start Matomo Code -->

<script>
    var _paq = _paq || [];
    
    _paq.push(['setUserId', '938']);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    _paq.push(['enableHeartBeatTimer', 30]);

    function embedTrackingCode() {
        var u='//matomo.utt.fr/';
        var p='//matomo.utt.fr/';

        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 1]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=p+'piwik.js'; s.parentNode.insertBefore(g,s);
    }

    if (window.addEventListener) {
        window.addEventListener("load", embedTrackingCode, false);
    } else if (window.attachEvent) {
        window.attachEvent("onload", embedTrackingCode);
    } else {
        embedTrackingCode();
    }
</script>
<!-- End Matomo Code --><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, LO07_FR_TRO: projet.sql pour construire la base | moodle" />
<link rel="stylesheet" type="text/css" href="https://moodle.utt.fr/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://moodle.utt.fr/theme/styles.php/purity/1745311970_1/all" />
<link rel="stylesheet" type="text/css" href="https://moodle.utt.fr/filter/syntaxhighlighter/styles/atom-one-light.min.css" />
<link rel="stylesheet" type="text/css" href="https://moodle.utt.fr/course/format/onetopic/styles.php" />
<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/moodle.utt.fr","homeurl":{},"sesskey":"6ThMDqNel0","sessiontimeout":"28800","sessiontimeoutwarning":"1200","themerev":"1745311970","slasharguments":1,"theme":"purity","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1745311970","admin":"admin","svgicons":true,"usertimezone":"Europe\/Paris","language":"fr","courseId":704,"courseContextId":107020,"contextid":107129,"contextInstanceId":34532,"langrev":1748225463,"templaterev":"1745311970"};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/moodle.utt.fr\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/moodle.utt.fr\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/moodle.utt.fr\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/moodle.utt.fr\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/moodle.utt.fr\/theme\/yui_combo.php?m\/1745311970\/","combine":true,"comboBase":"https:\/\/moodle.utt.fr\/theme\/yui_combo.php?","ext":false,"root":"m\/1745311970\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_attendance-groupfilter":{"requires":["base","node"]},"moodle-mod_checklist-linkselect":{"requires":["node","event-valuechange"]},"moodle-mod_offlinequiz-modform":{"requires":["base","node","event"]},"moodle-mod_offlinequiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_offlinequiz-offlinequizbase":{"requires":["base","node"]},"moodle-mod_offlinequiz-offlinequizquestionbank":{"requires":["base","event","node","io","io-form","yui-later","moodle-question-qbankmanager","moodle-qbank_editquestion-chooser","moodle-question-searchform","moodle-core-notification"]},"moodle-mod_offlinequiz-util":{"requires":["node"],"use":["moodle-mod_offlinequiz-util-base"],"submodules":{"moodle-mod_offlinequiz-util-base":{},"moodle-mod_offlinequiz-util-slot":{"requires":["node","moodle-mod_offlinequiz-util-base"]},"moodle-mod_offlinequiz-util-page":{"requires":["node","moodle-mod_offlinequiz-util-base"]}}},"moodle-mod_offlinequiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_offlinequiz-randomquestion":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_offlinequiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_offlinequiz-util","querystring-parse"]},"moodle-mod_offlinequiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_offlinequiz-offlinequizbase","moodle-mod_offlinequiz-util-base","moodle-mod_offlinequiz-util-page","moodle-mod_offlinequiz-util-slot","moodle-course-util"]},"moodle-mod_offlinequiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_offlinequiz-offlinequizbase","moodle-mod_offlinequiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_scheduler-delselected":{"requires":["base","node","event"]},"moodle-mod_scheduler-saveseen":{"requires":["base","node","event"]},"moodle-mod_scheduler-studentlist":{"requires":["base","node","event","io"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-block_xp-filters":{"requires":["base","node","moodle-core-dragdrop","moodle-core-notification-confirm","moodle-block_xp-rulepicker"]},"moodle-block_xp-rulepicker":{"requires":["base","node","handlebars","moodle-core-notification-dialogue"]},"moodle-block_xp-notification":{"requires":["base","node","handlebars","button-plugin","moodle-core-notification-dialogue"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-qbank_editquestion-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_fullscreen-button":{"requires":["event-resize","moodle-editor_atto-plugin"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-beautify":{},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_justify-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/moodle.utt.fr\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/moodle.utt.fr\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1745311970\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/moodle.utt.fr\/lib\/javascript.php\/1745311970\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/moodle.utt.fr\/lib\/javascript.php\/1745311970\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdn.jsdelivr.net\/npm\/mathjax@2.7.8\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<meta name="robots" content="noindex" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-mod-resource-view" class="format-tiles is-enrolled real-loggedin moodle-v4 layout-modern course-index-enabled swatch-flat  path-mod path-mod-resource chrome dir-ltr lang-fr yui-skin-sam yui3-skin-sam moodle-utt-fr pagelayout-incourse course-704 context-107129 cmid-34532 cm-type-resource category-2 uses-drawers header-style1">

<div class="toast-wrapper mx-auto py-0 fixed-top" role="status" aria-live="polite"></div>

    <div id="page-wrapper" class=" d-print-block">

        <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Passer au contenu principal</a>
</div><script src="https://moodle.utt.fr/lib/javascript.php/1745311970/lib/polyfills/polyfill.js"></script>
<script src="https://moodle.utt.fr/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script src="https://moodle.utt.fr/theme/jquery.php/core/jquery-3.6.1.min.js"></script>
<script src="https://moodle.utt.fr/lib/javascript.php/1745311970/lib/javascript-static.js"></script>
<script src="https://moodle.utt.fr/theme/javascript.php/purity/1745311970/head"></script>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



        
        <div class="header-wrapper style1">
            <nav class="top-navigation navbar navbar-top navbar-expand border-bottom navbar-dark bg-default" aria-label="Navigation du site">

        <button class="navbar-toggler aabtn d-block px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_boost-drawers-primary">
            <span class="navbar-toggler-icon"></span>
            <span class="sr-only">Panneau latéral</span>
        </button>


        <a href="https://moodle.utt.fr" class="navbar-brand aabtn has-logo
                ">
                <span class="logo">
                    <img src="//moodle.utt.fr/pluginfile.php/1/theme_purity/headerlogo/1745311970/logo-horizontal-%5Bblanc-et-jaune%5D-%5BConverti%5D.png" alt="moodle">
                </span>

        </a>

            <div class="primary-navigation">
                <nav class="moremenu navigation">
                    <ul id="moremenu-68349c80444ac-navbar-nav" role="menubar" class="nav more-nav navbar-nav">
                                <li data-key="home" class="nav-item" role="none" data-forceintomoremenu="false">
                                            <a role="menuitem" class="nav-link  "
                                                href="https://moodle.utt.fr/?redirect=0"
                                                
                                                
                                                tabindex="-1"
                                            >
                                                Accueil
                                            </a>
                                </li>
                                <li data-key="myhome" class="nav-item" role="none" data-forceintomoremenu="false">
                                            <a role="menuitem" class="nav-link  "
                                                href="https://moodle.utt.fr/my/"
                                                
                                                
                                                tabindex="-1"
                                            >
                                                Tableau de bord
                                            </a>
                                </li>
                                <li data-key="mycourses" class="nav-item" role="none" data-forceintomoremenu="false">
                                            <a role="menuitem" class="nav-link  "
                                                href="https://moodle.utt.fr/my/courses.php"
                                                
                                                
                                                tabindex="-1"
                                            >
                                                Mes cours
                                            </a>
                                </li>
                                <li data-key="" class="nav-item" role="none" data-forceintomoremenu="false">
                                            <a role="menuitem" class="nav-link  "
                                                href="https://moodle.utt.fr/course/index.php?categoryid=29"
                                                
                                                
                                                tabindex="-1"
                                            >
                                                <span style="color:#ffdd00;"><i class="fa fa-search"> </i> Catalogue UE</span>
                                            </a>
                                </li>
                                <li class="dropdown nav-item" role="none" data-forceintomoremenu="false">
                                    <a class="dropdown-toggle nav-link  " id="drop-down-68349c8044374" role="menuitem" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-68349c8044374"
                                        
                                        
                                        tabindex="-1"
                                    >
                                        Espaces d'information
                                    </a>
                                    <div class="dropdown-menu" role="menu" id="drop-down-menu-68349c8044374" aria-labelledby="drop-down-68349c8044374">
                                                    <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/course/index.php?categoryid=17"  tabindex="-1"
                                                        
                                                    >
                                                         Les formations
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/course/index.php?categoryid=15"  tabindex="-1"
                                                        
                                                    >
                                                         Les services
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/course/index.php?categoryid=16"  tabindex="-1"
                                                        
                                                    >
                                                         La démarche DDRS
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/course/index.php?categoryid=19"  tabindex="-1"
                                                        
                                                    >
                                                         Autres espaces
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/course/index.php?categoryid=6"  tabindex="-1"
                                                        
                                                    >
                                                         Tous les espaces
                                                    </a>
                                    </div>
                                </li>
                        <li role="none" class="nav-item dropdown dropdownmoremenu d-none" data-region="morebutton">
                            <a class="dropdown-toggle nav-link " href="#" id="moremenu-dropdown-68349c80444ac" role="menuitem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                Plus
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" data-region="moredropdown" aria-labelledby="moremenu-dropdown-68349c80444ac" role="menu">
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>


        <ul class="nav navbar-nav plugin-menu d-flex ml-auto">
            <li class="nav-item item-separator">
                <div class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-68349c804585268349c803e87112" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" title="Langue" aria-controls="drop-down-menu-68349c804585268349c803e87112">
        Français ‎(fr)‎
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-68349c804585268349c803e87112" aria-labelledby="drop-down-68349c804585268349c803e87112">
                <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/mod/resource/view.php?id=34532&amp;lang=de" title="Langue">Deutsch ‎(de)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/mod/resource/view.php?id=34532&amp;lang=en" title="Langue">English ‎(en)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/mod/resource/view.php?id=34532&amp;lang=es" title="Langue">Español - Internacional ‎(es)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/mod/resource/view.php?id=34532&amp;lang=fr" title="Langue">Français ‎(fr)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/mod/resource/view.php?id=34532&amp;lang=it" title="Langue">Italiano ‎(it)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/mod/resource/view.php?id=34532&amp;lang=pt" title="Langue">Português - Portugal ‎(pt)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/mod/resource/view.php?id=34532&amp;lang=ko" title="Langue">한국어 ‎(ko)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://moodle.utt.fr/mod/resource/view.php?id=34532&amp;lang=zh_cn" title="Langue">简体中文 ‎(zh_cn)‎</a>
    </div>
</div>
            </li>
            <li class="nav-item">
                
            </li>
            <!-- navbar_plugin_output -->
            <li class="nav-item item-separator">
                <div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="938"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link icon-no-margin"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-68349c8046d1568349c803e87113"
        aria-haspopup="true"
        aria-label=" Afficher la fenêtre des notifications sans nouvelle notification   "
        tabindex="0">
                <i class="icon fa fa-bell-o fa-fw "  title="Ouvrir/fermer le menu notifications" role="img" aria-label="Ouvrir/fermer le menu notifications"></i>
        <div
            class="count-container hidden"
            data-region="count-container"
            aria-hidden=true
        >
            0
        </div>

    </div>
    <div 
        id="popover-region-container-68349c8046d1568349c803e87113"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Fenêtre de notification"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Tout marquer comme lu"
           data-action="mark-all-read"
           role="button"
           aria-label="Tout marquer comme lu">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true"  ></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" role="img" aria-label="Chargement"></i></span>
        </a>
            <a href="https://moodle.utt.fr/message/notificationpreferences.php"
               title="Préférences de notification"
               aria-label="Préférences de notification">
                <i class="icon fa fa-cog fa-fw " aria-hidden="true"  ></i></a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">Vous n’avez pas de notification</div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" role="img" aria-label="Chargement"></i></span>
        </div>
                <a class="see-all-link"
                    href="https://moodle.utt.fr/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">Tout afficher</div>
                    </div>
                </a>
    </div>
</div>
            </li>
            <!-- user_menu -->
            <li class="nav-item d-flex align-items-center">
                <div class="usermenu"><div class="action-menu moodle-actionmenu nowrap-items" id="action-menu-0" data-enhance="moodle-core-actionmenu">

        <div class="menubar d-flex " id="action-menu-0-menubar">

            


                <div class="action-menu-trigger">
                    <div class="dropdown">
                        <a
                            href="#"
                            tabindex="0"
                            class=" dropdown-toggle icon-no-margin"
                            id="action-menu-toggle-0"
                            aria-label="Menu utilisateur"
                            data-toggle="dropdown"
                            role="button"
                            aria-haspopup="true"
                            aria-expanded="false"
                            aria-controls="action-menu-0-menu"
                        >
                            
                            <span class="userbutton"><span class="usertext mr-1">CRAVE Sixtine</span><span class="avatars"><span class="avatar current"><img src="https://moodle.utt.fr/pluginfile.php/1123/user/icon/purity/f2?rev=601705" class="userpicture" width="35" height="35" alt="" /></span></span></span>
                                
                            <b class="caret"></b>
                        </a>
                            <div class="dropdown-menu menu dropdown-menu-right" id="action-menu-0-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-0" role="menu">
                                                                <a href="https://moodle.utt.fr/user/profile.php" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" tabindex="-1" aria-labelledby="actionmenuaction-1">
                                <span class="menu-action-text" id="actionmenuaction-1">Profil</span>
                        </a>
                    <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                                                <a href="https://moodle.utt.fr/grade/report/overview/index.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" tabindex="-1" aria-labelledby="actionmenuaction-2">
                                <span class="menu-action-text" id="actionmenuaction-2">Notes</span>
                        </a>
                                                                <a href="https://moodle.utt.fr/calendar/view.php?view=month" class="dropdown-item menu-action" role="menuitem" data-title="calendar,core_calendar" tabindex="-1" aria-labelledby="actionmenuaction-3">
                                <span class="menu-action-text" id="actionmenuaction-3">Calendrier</span>
                        </a>
                                                                <a href="https://moodle.utt.fr/user/files.php" class="dropdown-item menu-action" role="menuitem" data-title="privatefiles,moodle" tabindex="-1" aria-labelledby="actionmenuaction-4">
                                <span class="menu-action-text" id="actionmenuaction-4">Fichiers personnels</span>
                        </a>
                                                                <a href="https://moodle.utt.fr/reportbuilder/index.php" class="dropdown-item menu-action" role="menuitem" data-title="reports,core_reportbuilder" tabindex="-1" aria-labelledby="actionmenuaction-5">
                                <span class="menu-action-text" id="actionmenuaction-5">Rapports</span>
                        </a>
                                                                <a href="https://moodle.utt.fr/report/coursemanager/view.php" class="dropdown-item menu-action" role="menuitem" data-title="Course-manager" tabindex="-1" aria-labelledby="actionmenuaction-6">
                                <span class="menu-action-text" id="actionmenuaction-6">Course manager</span>
                        </a>
                    <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                                                <a href="https://moodle.utt.fr/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" tabindex="-1" aria-labelledby="actionmenuaction-7">
                                <span class="menu-action-text" id="actionmenuaction-7">Préférences</span>
                        </a>
                    <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                                                <a href="https://moodle.utt.fr/login/logout.php?sesskey=6ThMDqNel0" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" tabindex="-1" aria-labelledby="actionmenuaction-8">
                                <span class="menu-action-text" id="actionmenuaction-8">Déconnexion</span>
                        </a>
                            </div>
                    </div>
                </div>

        </div>

</div></div>
            </li>
        </ul>
</nav>


            
            
        
        </div>
        

<div  class="drawer drawer-left drawer-primary d-print-none not-initialized" data-region="fixed-drawer" id="theme_boost-drawers-primary" data-preference="" data-state="show-drawer-primary" data-forceopen="0" data-close-on-resize="1">
    <div class="drawerheader">
        <button style="display: none;" data-toggler="drawers" data-action="closedrawer"></button>
        <button
            class="btn btn-secondary btn-sm drawertoggle icon-no-margin"
            data-toggler="drawers"
            data-action="closedrawer"
            data-target="theme_boost-drawers-primary"
            data-toggle="tooltip"
            data-placement="right"
            title="Fermer le tiroir"
        >
            <i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i>
        </button>
    </div>
    <div class="drawercontent drag-container" data-usertour="scroller">
        
                <div class="list-group">
                <a href="https://moodle.utt.fr/?redirect=0" class="list-group-item list-group-item-action  " >
                    Accueil
                </a>
                <a href="https://moodle.utt.fr/my/" class="list-group-item list-group-item-action  " >
                    Tableau de bord
                </a>
                <a href="https://moodle.utt.fr/my/courses.php" class="list-group-item list-group-item-action  " >
                    Mes cours
                </a>
                <a href="https://moodle.utt.fr/course/index.php?categoryid=29" class="list-group-item list-group-item-action  " >
                    <span style="color:#ffdd00;"><i class="fa fa-search"> </i> Catalogue UE</span>
                </a>
                <a id="drop-down-3" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex" data-toggle="collapse" data-target="#drop-down-menu-3" aria-expanded="false" aria-controls="drop-down-menu-3">
                    Espaces d'information
                    <span class="ml-auto expanded-icon icon-no-margin mx-2">
                        <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">
                            Replier
                        </span>
                    </span>
                    <span class="ml-auto collapsed-icon icon-no-margin mx-2">
                        <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">
                            Déplier
                        </span>
                    </span>
                </a>
                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-3" aria-labelledby="drop-down-3">
                             <a href="https://moodle.utt.fr/course/index.php?categoryid=17" class="pl-5 bg-light list-group-item list-group-item-action"> Les formations</a>
                             <a href="https://moodle.utt.fr/course/index.php?categoryid=15" class="pl-5 bg-light list-group-item list-group-item-action"> Les services</a>
                             <a href="https://moodle.utt.fr/course/index.php?categoryid=16" class="pl-5 bg-light list-group-item list-group-item-action"> La démarche DDRS</a>
                             <a href="https://moodle.utt.fr/course/index.php?categoryid=19" class="pl-5 bg-light list-group-item list-group-item-action"> Autres espaces</a>
                             <a href="https://moodle.utt.fr/course/index.php?categoryid=6" class="pl-5 bg-light list-group-item list-group-item-action"> Tous les espaces</a>
                </div>
        </div>

    </div>
</div>

            <div  class="drawer drawer-left  d-print-none not-initialized" data-region="fixed-drawer" id="theme_boost-drawers-courseindex" data-preference="drawer-open-index" data-state="show-drawer-left" data-forceopen="0" data-close-on-resize="0">
    <div class="drawerheader">
        <button style="display: none;" data-toggler="drawers" data-action="closedrawer"></button>
        <button
            class="btn btn-secondary btn-sm drawertoggle icon-no-margin"
            data-toggler="drawers"
            data-action="closedrawer"
            data-target="theme_boost-drawers-courseindex"
            data-toggle="tooltip"
            data-placement="right"
            title="Fermer l’index du cours"
        >
            <i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i>
        </button>
    </div>
    <div class="drawercontent drag-container" data-usertour="scroller">
        
                            <nav id="courseindex" class="courseindex">
    <div id="courseindex-content">
        <div data-region="loading-placeholder-content" aria-hidden="true" id="course-index-placeholder">
            <ul class="media-list">
                <li class="media">
                    <div class="media-body col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle mr-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li class="media">
                    <div class="media-body col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle mr-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li class="media">
                    <div class="media-body col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle mr-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li class="media">
                    <div class="media-body col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle mr-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

    </div>
</div>

        <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers   drag-container">
            <div id="topofscroll" class="main-inner">
                <div class="drawer-toggles d-flex">
                        <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
                            <button
                                class="btn icon-no-margin"
                                data-toggler="drawers"
                                data-action="toggle"
                                data-target="theme_boost-drawers-courseindex"
                                data-toggle="tooltip"
                                data-placement="right"
                                title="Ouvrir l’index du cours"
                            >
                                <span class="sr-only">Ouvrir l’index du cours</span>
                                <i class="icon fa fa-list fa-fw " aria-hidden="true"  ></i>
                            </button>
                        </div>
                </div>

                <div class="page-top">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xl-7 col-lg-12">
                        <nav aria-label="Barre de navigation">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="https://moodle.utt.fr">
                <i class="fa fa-home"></i>
            </a>
        </li>
                <li class="breadcrumb-item"><a href="https://moodle.utt.fr/my/"  >Tableau de bord</a>
                </li>
        
                <li class="breadcrumb-item"><a href="https://moodle.utt.fr/my/courses.php"  >Mes cours</a>
                </li>
        
                <li class="breadcrumb-item"><a href="https://moodle.utt.fr/course/view.php?id=704"  title="Technologies du web">LO07_FR_TRO</a>
                </li>
        
                <li class="breadcrumb-item"><a href="https://moodle.utt.fr/course/view.php?id=704&amp;section=13"  >Projet</a>
                </li>
        
                <li class="breadcrumb-item"><a href="https://moodle.utt.fr/mod/resource/view.php?id=34532" aria-current="page" title="Fichier">projet.sql pour construire la base</a>
                </li>
            
    </ol>
</nav>
                      </div>
                      <div class="col-xl-5 col-lg-12">
                        <div class="page-top-buttons-wrapper">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div id="page-content" class="d-print-block">

                    <div class="page-content-inner">

                        <header id="page-header" class="row">
    <div class="col-12">
        <div class="card border-0 bg-transparent">
            <div class="card-body p-2">
                <div class="d-sm-flex align-items-center">

                    <div class="header-actions-container flex-shrink-0" data-region="header-actions-container">
                    </div>
                </div>

                <!--
                <div class="d-flex flex-wrap">
                    <div id="page-navbar">
                        <nav aria-label="Barre de navigation">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="https://moodle.utt.fr">
                <i class="fa fa-home"></i>
            </a>
        </li>
                <li class="breadcrumb-item"><a href="https://moodle.utt.fr/my/"  >Tableau de bord</a>
                </li>
        
                <li class="breadcrumb-item"><a href="https://moodle.utt.fr/my/courses.php"  >Mes cours</a>
                </li>
        
                <li class="breadcrumb-item"><a href="https://moodle.utt.fr/course/view.php?id=704"  title="Technologies du web">LO07_FR_TRO</a>
                </li>
        
                <li class="breadcrumb-item"><a href="https://moodle.utt.fr/course/view.php?id=704&amp;section=13"  >Projet</a>
                </li>
        
                <li class="breadcrumb-item"><a href="https://moodle.utt.fr/mod/resource/view.php?id=34532" aria-current="page" title="Fichier">projet.sql pour construire la base</a>
                </li>
            
    </ol>
</nav>
                    </div>
                    <div class="ml-auto d-flex">
                        
                    </div>
                    <div id="course-header">
                        
                    </div>
                </div>
                !-->

            </div>
        </div>
    </div>
</header>
                    

                        <div id="region-main-box">

                            
                            <section id="region-main" aria-label="Contenu">


                                <div class="card ">
                                    <div class="card-body">



                            <div class="search-secondary-navigation-wrapper">
                              <div class="simplesearchform d-flex justify-content-end">
                                <form autocomplete="off" action="" method="get" accept-charset="utf-8" class="mform form-inline simplesearchform">
                                  <div class="input-group">
                                    <label for="searchinput-68349c8047d1868349c803e87123">
                                      <span class="sr-only">Rechercher</span>
                                    </label>
                                    <input type="text"
                                           id="searchinput-68349c8047d1868349c803e87123"
                                           class="form-control"
                                           placeholder="Rechercher"
                                           aria-label="Rechercher"
                                           name="query"
                                           data-region="input"
                                           autocomplete="off"
                                           
                                    >
                                    <div class="input-group-append">
                                      <button type="submit" class="btn btn-primary search-icon">
                                        <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                                        <span class="sr-only">Rechercher</span>
                                      </button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <hr>
                            </div>

                                    <span class="notifications" id="user-notifications"></span>

                                        <span id="maincontent"></span>
                                            <h2>projet.sql pour construire la base</h2>
                                        <div class="activity-header" data-for="page-activity-header">                                                <div class="activity-description" id="intro">
                                                    <div class="no-overflow"><p>+</p></div>
                                                </div>
                                            </div>


                                    <div role="main"><div class="resourceworkaround">Cliquer le lien <a href="https://moodle.utt.fr/pluginfile.php/107129/mod_resource/content/20/projet2025b.sql" onclick="window.open('https://moodle.utt.fr/pluginfile.php/107129/mod_resource/content/20/projet2025b.sql', '', 'width=620,height=450,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false;">projet2025b.sql</a> pour afficher le fichier.</div><div id="format-tiles-js-config"  data-modalAllowedModNames="[&quot;pdf&quot;,&quot;url&quot;,&quot;html&quot;]" data-modalAllowedCmids="[]" data-defaultcourseicon="pie-chart"></div></div>
                                    <div class="mt-5 mb-1 activity-navigation container-fluid">
<div class="row">
    <div class="col-md-4">        <div class="float-left">
                <a href="https://moodle.utt.fr/mod/resource/view.php?id=34531&forceview=1" id="prev-activity-link" class="btn btn-link" >&#x25C4; Sujet du projet</a>

        </div>
</div>
    <div class="col-md-4">        <div class="mdl-align">
            <div class="urlselect">
    <form method="post" action="https://moodle.utt.fr/course/jumpto.php" class="form-inline" id="url_select_f68349c803e87124">
        <input type="hidden" name="sesskey" value="6ThMDqNel0">
            <label for="jump-to-activity" class="sr-only">
                Aller à…
            </label>
        <select  id="jump-to-activity" class="custom-select urlselect" name="jump"
                 >
                    <option value="" selected>Aller à…</option>
                    <option value="/mod/forum/view.php?id=34429&amp;forceview=1" >Annonces</option>
                    <option value="/mod/resource/view.php?id=34431&amp;forceview=1" >Présentation du module</option>
                    <option value="/mod/resource/view.php?id=34441&amp;forceview=1" >Cours d'introduction au langage HTML</option>
                    <option value="/mod/url/view.php?id=34443&amp;forceview=1" >Télécharger Netbeans</option>
                    <option value="/mod/url/view.php?id=34444&amp;forceview=1" >Nom des couleurs pour HTML</option>
                    <option value="/mod/url/view.php?id=34445&amp;forceview=1" >Documentation html (w3schools)</option>
                    <option value="/mod/url/view.php?id=34446&amp;forceview=1" >Tutoriel sur CSS (w3schools)</option>
                    <option value="/mod/resource/view.php?id=34450&amp;forceview=1" >Sujet du TD01 (HTML et CSS)</option>
                    <option value="/mod/resource/view.php?id=34452&amp;forceview=1" >Cours feuilles de style CSS et Bootstrap</option>
                    <option value="/mod/url/view.php?id=34454&amp;forceview=1" >Documentation sur Bootstrap version 5</option>
                    <option value="/mod/resource/view.php?id=34458&amp;forceview=1" >Sujet du TD02 (Bootstrap)</option>
                    <option value="/mod/resource/view.php?id=34459&amp;forceview=1" >td02_2024_squelette.html</option>
                    <option value="/mod/resource/view.php?id=34462&amp;forceview=1" >Introduction à PHP</option>
                    <option value="/mod/url/view.php?id=34464&amp;forceview=1" >Manuel de PHP</option>
                    <option value="/mod/resource/view.php?id=34468&amp;forceview=1" >Sujet du TD03 (bases de PHP)</option>
                    <option value="/mod/resource/view.php?id=34469&amp;forceview=1" >td03_squelette.php</option>
                    <option value="/mod/resource/view.php?id=34471&amp;forceview=1" >Cours  sur le traitement des formulaires Web en PHP</option>
                    <option value="/mod/url/view.php?id=34473&amp;forceview=1" >Récupérer et manipuler les données des formulaires HTML en PHP</option>
                    <option value="/mod/url/view.php?id=34474&amp;forceview=1" >Transmettez des données avec les formulaires</option>
                    <option value="/mod/url/view.php?id=34475&amp;forceview=1" >Les formulaires HTML avec bootstrap 5 en 20 min</option>
                    <option value="/mod/resource/view.php?id=34479&amp;forceview=1" >Sujet du TD04 (PHP et les formulaires simples)</option>
                    <option value="/mod/resource/view.php?id=34480&amp;forceview=1" >Sujet du TD05 (PHP et les formulaires Web dynamiques)</option>
                    <option value="/mod/resource/view.php?id=34481&amp;forceview=1" >td05_planning_form.php</option>
                    <option value="/mod/resource/view.php?id=34482&amp;forceview=1" >lo07_biblio_formulaire.php</option>
                    <option value="/mod/resource/view.php?id=34484&amp;forceview=1" >Cours sur la gestion du contexte</option>
                    <option value="/mod/resource/view.php?id=34486&amp;forceview=1" >Sujet du TD06 (gestion du contexte)</option>
                    <option value="/mod/resource/view.php?id=34487&amp;forceview=1" >Cadeau : mon lo07_analyse_formulaire1.php</option>
                    <option value="/mod/resource/view.php?id=34489&amp;forceview=1" >Cours sur PHP objet</option>
                    <option value="/mod/resource/view.php?id=34491&amp;forceview=1" >Configurons Netbeans pour le serveur dev-isi</option>
                    <option value="/mod/url/view.php?id=34492&amp;forceview=1" >Site officiel de fileZilla</option>
                    <option value="/mod/resource/view.php?id=34493&amp;forceview=1" >Installation VPN étudiant</option>
                    <option value="/mod/resource/view.php?id=34497&amp;forceview=1" >Sujet du TD07 (PHP objet)</option>
                    <option value="/mod/resource/view.php?id=34498&amp;forceview=1" >Interface WebBean</option>
                    <option value="/mod/resource/view.php?id=34499&amp;forceview=1" >Classe Charte</option>
                    <option value="/mod/resource/view.php?id=34501&amp;forceview=1" >Cours sur le modèle de base de données relationnelles</option>
                    <option value="/mod/quiz/view.php?id=34503&amp;forceview=1" >QCM du TD08 sur le modele relationnel</option>
                    <option value="/mod/resource/view.php?id=34505&amp;forceview=1" >Persistance des données vers MySQL avec PHP</option>
                    <option value="/mod/resource/view.php?id=34507&amp;forceview=1" >Sujet du TD09 (langage SQL)</option>
                    <option value="/mod/resource/view.php?id=34508&amp;forceview=1" >vin_create.sql</option>
                    <option value="/mod/resource/view.php?id=34509&amp;forceview=1" >vin_insert.sql</option>
                    <option value="/mod/resource/view.php?id=34510&amp;forceview=1" >Sujet du TD10 (PHP - MySql)</option>
                    <option value="/mod/resource/view.php?id=34512&amp;forceview=1" >Le patron de conception MVC</option>
                    <option value="/mod/url/view.php?id=34513&amp;forceview=1" >Video 2021 sur le cours MVC (partie 1)</option>
                    <option value="/mod/url/view.php?id=34514&amp;forceview=1" >Video 2021 sur le cours MVC (partie 2)</option>
                    <option value="/mod/resource/view.php?id=34515&amp;forceview=1" >MVC source du cours pour dev-isi</option>
                    <option value="/mod/resource/view.php?id=34517&amp;forceview=1" >Sujet du TD11 (MVC partie 1)</option>
                    <option value="/mod/resource/view.php?id=34518&amp;forceview=1" >Sujet du TD12 (MVC partie 2)</option>
                    <option value="/mod/resource/view.php?id=34531&amp;forceview=1" >Sujet du projet</option>
                    <option value="/mod/assign/view.php?id=34534&amp;forceview=1" >Dépôt</option>
                    <option value="/mod/scheduler/view.php?id=34536&amp;forceview=1" >Rendez-vous de soutenance</option>
                    <option value="/mod/url/view.php?id=34539&amp;forceview=1" >Git &amp; GitHub : Le Cours Pour Les Débutants</option>
                    <option value="/mod/url/view.php?id=34540&amp;forceview=1" >netbeans github part 1: créer un projet versionné et le poster sur github</option>
                    <option value="/mod/url/view.php?id=34541&amp;forceview=1" >netbeans github part 2: travailler en collaboratif sur un projet</option>
                    <option value="/mod/url/view.php?id=34542&amp;forceview=1" >netbeans github part 3: gérer les éditions concurrentes conflictuelles</option>
        </select>
            <noscript>
                <input type="submit" class="btn btn-secondary ml-1" value="Valider">
            </noscript>
    </form>
</div>

        </div>
</div>
    <div class="col-md-4">        <div class="float-right">
                <a href="https://moodle.utt.fr/mod/assign/view.php?id=34534&forceview=1" id="next-activity-link" class="btn btn-link" >Dépôt &#x25BA;</a>

        </div>
</div>
</div>
</div>
                                    

                                    </div>
                                </div>


                            </section>

                        </div>


                    </div>

                </div>
            </div>
            <div id="goto-top-link">
            
                <a class="to-top" role="button" href="#topofscroll" uk-scroll uk-totop></a>
            </div>
            <footer id="footer-wrapper" class="page-footer bg-default">
            
                <div class="footer-top">
                    <div class="container-fluid">
                        <div class="row">
    <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
        <h4 class="footer-title">Contacts</h4>
        <ul class="contacts">
            <li>
               Demander de l’aide pour son mot de passe<br />
                  <a href="mailto:dnum-support@utt.fr"><i class="fa fa-envelope"></i> dnum-support@utt.fr</a>
            <br /></li>
            

            <li>
               Contacter les administrateurs de la plateforme<br />
                  <a href="mailto:admincip@utt.fr"><i class="fa fa-envelope"></i> admincip@utt.fr</a>
            <br /></li>
            
            <li>
               Contacter le DPO (protection des données)<br />
                  <a href="mailto:dpo@utt.fr"><i class="fa fa-envelope"></i>dpo@utt.fr</a>
            <br /></li>
            
            <li>
                Signaler un problème de sécurité informatique<br />
                  <a href="mailto:rssi@utt.fr"><i class="fa fa-envelope"></i>rssi@utt.fr</a>
            </li>


        </ul>
    </div>
    <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
        <h4 class="footer-title">Liens utiles</h4>
        <ul>
<li>
<a href="https://glpi.utt.fr/" target="_blank" style="color:#ffd200;" rel="noreferrer noopener"><i class="fa fa-wrench"></i>  Demande d'intervention<span style="font-size:small;">  (<i class="fa fa-lock"></i>)</span></a>
</li>
            <li>
               <a href="https://evaluations.utt.fr/" target="_blank" rel="noreferrer noopener"> <i class="fa fa-university"></i>  Dépôt rapports de stages &amp; EEE/ADE  (<i class="fa fa-lock"></i>)</a>
            </li>
            <li>
               <a href="http://ent.utt.fr/" target="_blank" rel="noreferrer noopener"> <i class="fa fa-university"></i>  Accès à l'ENT de l'UTT  (<i class="fa fa-lock"></i>)</a>
            </li>
            <li>
                <a href="https://infos.utt.fr/reglements" target="_blank" rel="noreferrer noopener"><i class="fa fa-university"></i>  Règlement des études</a>
            </li>

            <li>
                <a href="https://download.moodle.org/mobile?version=2022112806.06&amp;lang=fr&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile" target="_blank" rel="noreferrer noopener"> <i class="fa fa-mobile"></i>   Obtenir l'app mobile</a>
            </li>
        
        </ul>
    </div>
    <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
        <h4 class="footer-title">Besoin d'aide</h4>
        <ul>
            <li>
                <b>Etudiants</b><br />
               <a href="/course/view.php?id=6"><i class="fa fa-question"></i>  FAQ étudiants<span style="font-size:small;">  (<i class="fa fa-lock"></i>)</span></a><br />
              <a href="/course/view.php?id=4"> <i class="fa fa-folder-open"></i>  Espace d'aide à la réussite<span style="font-size:small;">  (<i class="fa fa-lock"></i>)</span></a>
            <br /></li>
            
            <li>
                <b>Enseignants</b><br />
               <a href="/course/view.php?id=7"><i class="fa fa-question"></i>    FAQ enseignants<span style="font-size:small;">  (<i class="fa fa-lock"></i>)</span></a><br />
                <a href="/course/view.php?id=5" target="_blank" rel="noreferrer noopener"><i class="fa fa-folder-open"></i>  Guides et tutoriels<span style="font-size:small;">  (<i class="fa fa-lock"></i>)</span></a>
            </li>
        </ul>
     
    </div>
    <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
        <h4 class="footer-title">Informations légales</h4>
        <ul>
            <li>
                <a href="/theme/purity/spec_cip/cgu.html" target="_blank" rel="noreferrer noopener">Conditions générales d'utilisation</a>
            </li>
            <li>
                <a href="/theme/purity/spec_cip/protection_donnees.html" target="_blank" rel="noreferrer noopener">Politique de protection des données</a>
            </li>
            
            <li>
                <a href="/theme/purity/spec_cip/cookies.html" target="_blank" rel="noreferrer noopener">Avis relatif aux cookies</a>
            </li>
<li>
                <a href="/theme/purity/spec_cip/accessibilite.html" target="_blank" rel="noreferrer noopener">Accessibilité</a>
            </li>
        </ul>
      
    </div>
</div>
                        
                    </div>
                </div>
            
                <div class="footer-bottom">
                    <div class="container-fluid">
                        <div class="row">
            
                            <div class="left-box col-12 col-sm-6">
                                <font style="color:#C3C9DA;font-size:small;">Copyright © La Coopérative pédagogique<br /><a href="https://moodle.org/" target="_blank" style="color:#C3C9DA;font-size:small;" rel="noreferrer noopener">Moodle 4</a> | Propulsé par le thème <a href="https://purity-moodle-theme.com/" target="_blank" style="color:#C3C9DA;font-size:small;" rel="noreferrer noopener">Purity</a></font>
                            </div>
            
                            <div class="right-box col-12 col-sm-6">
                                <div class="social-icons">
    <a target="_blank" href="https://twitter.com/Coop_UTT" title="X / Twitter" rel="noreferrer noopener">
        <i class="fa fa-twitter"></i>
    </a>
    <a target="_blank" href="https://tice.utt.fr/" title="Site web Tice UTT" rel="noreferrer noopener">
        <i class="fa fa-globe"></i>
    </a>
</div>
                            </div>
            
                        </div>
                    </div>
                </div>
            
                <script>
//<![CDATA[
var require = {
    baseUrl : 'https://moodle.utt.fr/lib/requirejs.php/1745311970/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://moodle.utt.fr/lib/javascript.php/1745311970/lib/jquery/jquery-3.6.1.min',
        jqueryui: 'https://moodle.utt.fr/lib/javascript.php/1745311970/lib/jquery/ui-1.13.2/jquery-ui.min',
        jqueryprivate: 'https://moodle.utt.fr/lib/javascript.php/1745311970/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script src="https://moodle.utt.fr/lib/javascript.php/1745311970/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");
require(['core/first'], function() {
require(['core/prefetch'])
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp('fr');
});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('core_courseformat/courseeditor'); require(['core_courseformat/courseeditor'], function(amd) {amd.setViewFormat("704", {"editing":false,"supportscomponents":true,"statekey":"1747839354_1748276356"}); M.util.js_complete('core_courseformat/courseeditor');});;

require(['core_courseformat/local/courseindex/placeholder'], function(component) {
    component.init('course-index-placeholder');
});
;

require(['core_courseformat/local/courseindex/drawer'], function(component) {
    component.init('courseindex');
});
;

require(['jquery', 'core/custom_interaction_events'], function($, CustomEvents) {
    CustomEvents.define('#single_select68349c803e8712', [CustomEvents.events.accessibleChange]);
    $('#single_select68349c803e8712').on(CustomEvents.events.accessibleChange, function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f68349c803e8711').submit();
        }
    });
});
;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
M.util.js_pending('filter_syntaxhighlighter/hljs'); require(['filter_syntaxhighlighter/hljs'], function(amd) {amd.initHighlighting(); M.util.js_complete('filter_syntaxhighlighter/hljs');});;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://moodle.utt.fr/mod/resource/view.php?id=34531&redirect=1', '', 'width=620,height=450,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://moodle.utt.fr/mod/resource/view.php?id=34532&redirect=1', '', 'width=620,height=450,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };
function legacy_activity_onclick_handler_3(e) { e.halt(); window.open('https://moodle.utt.fr/mod/url/view.php?id=34539&redirect=1'); return false; };
function legacy_activity_onclick_handler_4(e) { e.halt(); window.open('https://moodle.utt.fr/mod/url/view.php?id=34540&redirect=1'); return false; };
function legacy_activity_onclick_handler_5(e) { e.halt(); window.open('https://moodle.utt.fr/mod/url/view.php?id=34541&redirect=1'); return false; };
function legacy_activity_onclick_handler_6(e) { e.halt(); window.open('https://moodle.utt.fr/mod/url/view.php?id=34542&redirect=1'); return false; };
M.util.js_pending('core_courseformat/local/content/activity_header'); require(['core_courseformat/local/content/activity_header'], function(amd) {amd.init(); M.util.js_complete('core_courseformat/local/content/activity_header');});;

    require(['core/moremenu'], function(moremenu) {
        moremenu(document.querySelector('#moremenu-68349c80444ac-navbar-nav'));
    });
;

require(['jquery', 'core/custom_interaction_events'], function($, CustomEvents) {
    CustomEvents.define('#single_select68349c803e87111', [CustomEvents.events.accessibleChange]);
    $('#single_select68349c803e87111').on(CustomEvents.events.accessibleChange, function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f68349c803e87110').submit();
        }
    });
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, Controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new Controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(['theme_boost/drawers']);
;

require(['theme_boost/drawers']);
;

        require(['jquery', 'core/custom_interaction_events'], function($, CustomEvents) {
            CustomEvents.define('#jump-to-activity', [CustomEvents.events.accessibleChange]);
            $('#jump-to-activity').on(CustomEvents.events.accessibleChange, function() {
                if ($(this).val()) {
                    $('#url_select_f68349c803e87124').submit();
                }
            });
        });
    ;

M.util.js_pending('theme_boost/loader');
require(['theme_boost/loader', 'theme_boost/drawer'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete('theme_boost/loader');
});
;
M.util.js_pending('format_tiles/course_mod_modal'); require(['format_tiles/course_mod_modal'], function(amd) {amd.init("704", false, "mod-resource-view", null, true); M.util.js_complete('format_tiles/course_mod_modal');});;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(107129, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});;
M.util.js_pending('core/utility'); require(['core/utility'], function(amd) {M.util.js_complete('core/utility');});;
M.util.js_pending('core/storage_validation'); require(['core/storage_validation'], function(amd) {amd.init(1748276356); M.util.js_complete('core/storage_validation');});
    M.util.js_complete("core/first");
});
//]]>
</script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Modifi\u00e9 le","name":"Nom","error":"Erreur","info":"Information","yes":"Oui","no":"Non","ok":"OK","cancel":"Annuler","confirm":"Confirmer","areyousure":"Voulez-vous vraiment continuer\u00a0?","closebuttontitle":"Fermer","unknownerror":"Erreur inconnue","file":"Fichier","url":"URL","collapseall":"Tout replier","expandall":"Tout d\u00e9plier"},"repository":{"type":"Type","size":"Taille","invalidjson":"Cha\u00eene JSON non valide","nofilesattached":"Aucun fichier joint","filepicker":"S\u00e9lecteur de fichiers","logout":"D\u00e9connexion","nofilesavailable":"Aucun fichier disponible","norepositoriesavailable":"D\u00e9sol\u00e9, aucun de vos d\u00e9p\u00f4ts actuels ne peut retourner de fichiers dans le format requis.","fileexistsdialogheader":"Le fichier existe","fileexistsdialog_editor":"Un fichier de ce nom a d\u00e9j\u00e0 \u00e9t\u00e9 joint au texte que vous modifiez.","fileexistsdialog_filemanager":"Un fichier de ce nom a d\u00e9j\u00e0 \u00e9t\u00e9 joint","renameto":"Renommer \u00e0 \u00ab\u00a0{$a}\u00a0\u00bb","referencesexist":"Il y a {$a} liens qui pointent vers ce fichier","select":"S\u00e9lectionnez"},"admin":{"confirmdeletecomments":"Voulez-vous vraiment supprimer des commentaires\u00a0?","confirmation":"Confirmation"},"debug":{"debuginfo":"Info de d\u00e9bogage","line":"Ligne","stacktrace":"Trace de la pile"},"langconfig":{"labelsep":"&nbsp;"}};
//]]>
</script>
<script>
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"MathJax.Hub.Config({\r\n    config: [\"Accessible.js\", \"Safe.js\"],\r\n    errorSettings: { message: [\"!\"] },\r\n    skipStartupTypeset: true,\r\n    messageStyle: \"none\"\r\n});\r\n","lang":"fr"});
});
Y.use("moodle-filter_glossary-autolinker",function() {M.filter_glossary.init_filter_autolinking({"courseid":0});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random68349c803e87125'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random68349c803e87125'); });
})();
//]]>
</script>

            </footer>
        </div>
        
    </div>

</body>
</html>