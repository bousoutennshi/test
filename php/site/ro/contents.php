<html>
    <head>
        <title>contents</title>
        <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
    </head>
    <body>
        <h6 style="text-align:right;">
            更新履歴<br><br>
            2012/02/15 サイトリリース<br>
            2012/01/25 BBSオープン<br>
            2012/01/22 サイトオープン
        </h6>
        <div align="right">
        <script>
        new TWTR.Widget({
            version: 2,
            type: 'search',
            search: '#ro ses',
            interval: 10000,
            title: 'Ragnarok Online',
            subject: 'Ses Server TL',
            width: 250,
            height: 300,
            theme: {
                shell: {
                    background: '#8ec1da',
                    color: '#ffffff'
                },
                tweets: {
                    background: '#ffffff',
                    color: '#444444',
                    links: '#1985b5'
                }
            },
            features: {
                scrollbar: false,
                loop: true,
                live: true,
                behavior: 'default'
            }
        }).render().start();
        </script>
        </div>
    </body>
</html>
