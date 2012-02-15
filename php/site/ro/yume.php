<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-type" content="text/html" charset="UTF-8">
        <base href="http://www38143u.sakura.ne.jp/">
        <title>プチ物語♪</title>
        <!-- 独自設定 -->
        <link rel="stylesheet" href="http://www38143u.sakura.ne.jp/ro/css/yume.css" />
        <meta name="author" content="myokota">
        <meta name="keywords" content="RO,Ses,ラグナロクオンライン,ギルド,プチ物語">
        <meta name="description" content="ラグナロクオンライン Sesサーバ プチ物語のサイト">
        <meta name="robots" content="all">
        <meta name="copyright" content="Copyright Masashi Yokota">
        <meta http-equiv="content-language" content="ja"> 
 
        <!-- jQueryの設定 -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc1/jquery.mobile-1.0rc1.min.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
 
        <!-- Modernizrの設定 -->
        <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.0.6-development-only.js"></script>
 
        <!-- IE向けの設定 -->
        <!--[if IE]> 
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

        <!-- メニューJS -->
        <script>
            (function($){
                $.fn.extend({
                    tagdrop: function(options) {
                        var defaults = {
                            tagPaddingTop: '90px',
                            tagDefaultPaddingTop: '30px',
                            bgColor: '#B1CCED',
                            bgMoverColor: '#7FB0F0',
                            textColor: '#e0e0e0',
                            textDefaultColor: '#fff'
                        };
                        var options = $.extend(defaults, options);

                        return this.each(function() {
                            var obj = $(this);
                            var li_items = $("li", obj);
                            $("li", obj).css('background-color', options.bgColor);

                            li_items.mouseover(function(){
                                $(this).animate({paddingTop: options.tagPaddingTop}, 300);
                                $(this).css('background-color', options.bgMoverColor);
                                $(this).css('color', options.textColor);
                            }).mouseout(function() {
                                $(this).animate({paddingTop: options.tagDefaultPaddingTop}, 500);
                                $("li",$(this).parent()).css('background-color', options.bgColor);
                                $("li",$(this).parent()).css('color', options.textDefaultColor);
                            });

                            li_items.click(function() {
                                var str = $("li").live("click", function() {
                                    var name = $(this).attr("name");
                                    $("#ifrm").attr("src",'http://www38143u.sakura.ne.jp/ro/' + name + '.php');
                                    /*
                                    if( name == "bbs" ){
                                        $("#ifrm").attr("src",'http://jbbs.livedoor.jp/netgame/10145/');
                                    }else{
                                        $("#ifrm").attr("src",'http://www38143u.sakura.ne.jp/ro/' + name + '.php');
                                    }
                                    */
                                    exit;
                                });
                            });
                        });
                    }
                });
            })(jQuery);
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.menu').tagdrop({
                    tagPaddingTop: '60px',bgColor: '#B1CCED',bgMoverColor: '#7FB0F0',textColor: '#e0e0e0'
                });
            });
        </script>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div id="header">
            プチ物語♪
            <hr align="right">
        </div>
        <div id="menu">
            <ul class="menu">
                <li name="contents">TOP</li>
                <li name="about">ABOUT</li>
                <li name="guild">GUILD</li>
                <li name="bbs">BBS</li>
                <li name="link">LINK</li>
            </ul><br>
            <a href="https://twitter.com/share" class="twitter-share-button" data-via="_mezzoForte_" data-lang="ja">ツイート</a>
            <script>
                !function(d,s,id){
                    var js,fjs=d.getElementsByTagName(s)[0];
                    if(!d.getElementById(id)){
                        js=d.createElement(s);
                        js.id=id;js.src="//platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js,fjs);
                    }
                }(document,"script","twitter-wjs");
            </script>
        </div>
        <div id="contents">
            <iframe id="ifrm" src="http://www38143u.sakura.ne.jp/ro/contents.php" allowtransparency="true"></iframe>
        </div>
        <div id="footer">
            <h6>Copyright © 2012 Masashi Yokota All Rights Reserved.</h6>
        </div>
    </body>
</html>
