<!DOCTYPE html>
<html>
    <head>
        <?php include_once 'head1.php'; ?>
    </head>
    <body>
        <?php include_once 'menu.php'; ?>
        <?php include_once 'menu_back.php'; ?>
        <?php include_once 'kavuri_content.php'; ?>
        <?php include_once 'footer1.php'; ?>
    </body>
    <script type="text/javascript">(function(d, t, e, m){
        // Async Rating-Widget initialization.
        window.RW_Async_Init = function(){
            RW.init({
                huid: "172834",
                uid: "2e9c08d8e8f4206ba9b1f82bb813e9b6",
                source: "website",
                options: {
                    "urid": "3",
                    "size": "medium",
                    "style": "oxygen1"
                } 
            });
            RW.render();
        };
        
        // Append Rating-Widget JavaScript library.
        var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
            "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = (-1 < l.search.indexOf("DBG=") ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
        if (d.getElementById(id)) return;              
        rw = d.createElement(e);
        rw.id = id; rw.async = true; rw.type = "text/javascript";
        rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
        s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>
</html>